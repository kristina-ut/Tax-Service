<?php

namespace App\Http\Controllers;

use App\Servicequote;
use Illuminate\Http\Request;
use App\Http\Controllers\NotificationController;

use function GuzzleHttp\Promise\each;

class ServicequoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $servicequotes = Servicequote::latest()->paginate(5);

        return view('pages.servicequotes.index',compact('servicequotes'))->with('i', (request()->input('page', 1) - 1) * 5);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.servicequotes.create');
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
            'service_name' => 'required',
            'price' => 'required',
        ]);

        Servicequote::create($request->all());

        return redirect()->route('servicequotes.index')
                        ->with('success','Service created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicequote = Servicequote::find($id);
        return view('pages.servicequotes.show',compact('servicequote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $servicequote = Servicequote::find($id);
        return view('pages.servicequotes.edit',compact('servicequote'));
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
            'service_name' => 'required',
            'price' => 'required',
        ]);

        Servicequote::find($id)->update($request->all());

        $notification = new NotificationController;

        $message = 'Setting has been changed by Admin';

        $user_id = $notification->create_notification(2, $message);

        return redirect()->route('servicequotes.index')
                        ->with('success','Service updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servicequote::find($id)->delete();

        return redirect()->route('servicequotes.index')
                        ->with('success','Service deleted successfully');
    }
}
