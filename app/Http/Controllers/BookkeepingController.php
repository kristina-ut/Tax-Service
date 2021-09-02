<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookkeeping;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\File;



class BookkeepingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $bookkeepings= Bookkeeping::latest()->paginate(5);


        return view('pages.bookkeepings.index',compact('bookkeepings'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.bookkeepings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            'profile_files' => 'required|mimes:pdf|max:10000',
        ]);

       if ($files = $request->file('profile_files')) {
       // Define upload paths
        $destinationPath = public_path('uploadfiles'); // upload path
        $host = $request->getSchemeAndHttpHost();
        $folderId =date('Y') .'/'.date('m');
        $path = $destinationPath . '/'. $folderId;
        // Upload Orginal file
        $profileFile = explode(".", $files->getClientOriginalName())[0] . "_" . date('m_d_Y_H_i') . "." . $files->getClientOriginalExtension();

        if (! File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
            $files->move($path, $profileFile);
        }
        else {
            $files->move($path, $profileFile);
        }



        // Save In Database
           $filemodel= new Bookkeeping();
           $filemodel->file_path= $host.  "/public/uploadfiles/" . $folderId . '/'.  $profileFile;
           $filemodel->file_name=$profileFile;
           $filemodel->save();

        }
        return redirect()->route('bookkeepings.index')->with('success', 'File Upload successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookkeeping = Bookkeeping::find($id);
        return view('pages.bookkeepings.show', compact('bookkeeping'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookkeeping = Bookkeeping::find($id);
        $notification = new NotificationController;

        $message = 'Setting has been changed by Admin';

        $user_id = $notification->create_notification(2, $message);
        return view('pages.bookkeepings.edit',compact('bookkeeping'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'file_name' => 'required',

        ]);

        Bookkeeping::find($id)->update($request->all());

        $notification = new NotificationController;

        $message = 'Setting has been changed by Admin';

        $user_id = $notification->create_notification(2, $message);

        return redirect()->route('bookkeepings.index')
                        ->with('success','Bookkeeping updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bookkeeping::find($id)->delete();

        return redirect()->route('bookkeepings.index')
                        ->with('success','bookkeeping deleted successfully');
    }
}
