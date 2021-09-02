<?php

namespace App\Http\Controllers;

use App\Checkin;
use App\Invoice;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class CheckinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $workers = Checkin::select('email','name')->distinct()->get();


        $results = Checkin::select('email', DB::raw('SUM(checkins.workingtime) as total_workingtime'))
            ->groupBy('checkins.email')->paginate(5);

        foreach($results as $list)
        {
            $user_data = DB::table('users')->where('email', $list->email)->first();

            $list->name = $user_data->name;
            $list->user_id = $user_data->id;
        }


        return view('pages.checkins.index',compact('results'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function export_pdf($id)
    {
        $path= public_path('uploadfiles').'/'.date('Y').'/'.'PDF';

        $results = Checkin::select('checkins.*')->leftJoin('users','users.email','=','checkins.email')->where('users.id', $id)->get();

        $pdf = PDF::loadView('pages.checkins.report', ['data' => $results]);


        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save($path.'Report.pdf');
        // Finally, you can download the file using download function
        return $pdf->download('Report.pdf');

    }

    public function generate_report(Request $request)
    {
        $path= public_path('uploadfiles').'/'.date('Y').'/'.'PDF';

        $results = Checkin::select('email', DB::raw('SUM(checkins.workingtime) as total_workingtime'))
            ->where('created_at', '>=', $request->start_date)
            ->where('created_at', '<=', $request->end_date)
            ->groupBy('checkins.email')->get();

        foreach($results as $list)
        {
            $user_data = DB::table('users')->where('email', $list->email)->first();

            $list->name = $user_data->name;
            $list->user_id = $user_data->id;
        }


        $pdf = PDF::loadView('pages.checkins.monthly_report', ['data' => $results]);


        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save($path.'Monthly_Report.pdf');
        // Finally, you can download the file using download function
        return $pdf->download('Monthly_Report.pdf');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
