<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revenue;
use Illuminate\Support\Facades\File;


class RevenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $revenues= Revenue::latest()->paginate(5);


        return view('pages.revenues.index',compact('revenues'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.revenues.create');
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
            'profile_files' => 'required|mimes:pdf,png,jpeg,bmp|max:10000',
        ]);

       if ($files = $request->file('profile_files')) {
       // Define upload paths
           $destinationPath = public_path('uploadfiles'); // upload path
           $host = $request->getSchemeAndHttpHost();
           $folderId =date('Y') .'/'.'IRS';
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
           $filemodel= new Revenue();
           $filemodel->f_path= $host.  "/public/uploadfiles/" . $folderId . '/'.  $profileFile;
           $filemodel->f_name=$profileFile;
           $filemodel->save();

        }
        return redirect()->route('revenues.index')->with('success', 'IRS letters uploaded successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $revenue = Revenue::find($id);
        return view('pages.revenues.show', compact('revenue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $revenue = Revenue::find($id);
        return view('pages.revenues.edit',compact('revenue'));
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
            'f_name' => 'required',

        ]);

        Revenue::find($id)->update($request->all());

        $notification = new NotificationController;

        $message = 'Setting has been changed by Admin';

        $user_id = $notification->create_notification(2, $message);

        return redirect()->route('revenues.index')
                        ->with('success','IRS letters updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Revenue::find($id)->delete();

        return redirect()->route('revenues.index')
                        ->with('success','IRS letters deleted successfully');
    }
}
