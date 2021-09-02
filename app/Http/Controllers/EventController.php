<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Validator;
use App\Event;
use Calendar;

class EventController extends Controller
{
    public function index(){
        if(session('role') == '0') {
            $events = Event::leftJoin('users','events.email','=','users.email')->get();
        } else {
            $events = Event::where('email', session('email'))->get();
        }

    	$event_list = [];
    	foreach ($events as $key => $event) {
            $event_client = $event->client_name;
            $event_company = $event->company_name;
            $event_color = (session('role') == '0') ? $event->event_color : session('event_color');
            $event_list[] = Calendar::event(
                $event->event_name,
                false,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date.' +1 day'),
                null,
                [
                    'client_name' => $event_client,
                    'company_name' => $event_company,
                    'color' => $event_color,
                    'url' => '#',
                ]
            );
    	}
    	$calendar_details = Calendar::addEvents($event_list);

        return view('pages.events', compact('calendar_details') );
    }

    public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'client_name' => 'required',
            'company_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            ]);

        if ($validator->fails()) {
        	\Session::flash('warnning','Please enter the valid details');
            return Redirect::to('/events')->withInput()->withErrors($validator);
        }

        $event = new Event;
        $event->event_name = $request['event_name'];
        $event->client_name = $request['client_name'];
        $event->company_name = $request['company_name'];
        $event->start_date = $request['start_date'];
        $event->end_date = $request['end_date'];
        $event->email = session('email');
        $event->save();

        \Session::flash('success','Event added successfully.');
        return Redirect::to('/events');
    }


}
