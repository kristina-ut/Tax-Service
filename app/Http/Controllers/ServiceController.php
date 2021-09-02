<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Servicequote;
use Barryvdh\DomPDF\Facade as PDF;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_services = Servicequote:: all();
        $service_content = [];



        foreach($all_services as $service)
        {
            $service_data = Service::where('service_id', '=', $service->id)->get();
            // print_r($service_data);exit(1);
            $service_content[$service->id] = $service_data;
        }
        return view('pages.services.index',compact('all_services', 'service_content'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    //  */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $service = Servicequote::find($request->id);

        $new_service = new Service;

        $new_service->service_id = $request->id;

        $new_service->price = $service->price;

        $new_service->save();

        $data = Service::where('services.id', $new_service->id)->leftJoin('servicequotes','servicequotes.id','=','services.service_id')->first();
        $service_count = Service::where('service_id', $request->id)->count();

        $res = array(
            'status' => 'success',
            'data' => $data,
            'new_service'=>$new_service,
            'service_count'=>$service_count,
        );

        return response()->json($res);
    }

  /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        request()->validate([
            'service_name' => 'required',
            'status' => 'required',
        ]);

        Service::find($id)->update($request->all());

        $notification = new NotificationController;

        $message = 'Setting has been changed by Admin';

        $user_id = $notification->create_notification(2, $message);

        return redirect()->route('services.index')
                        ->with('success','Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $service_data = Service:: all();

        Service::find($service_data->id)->delete();

        return redirect()->route('services.index')
                        ->with('success','Service deleted successfully');
    }

    public function export_pdf($id)
  {
    $path= public_path('uploadfiles').'/'.date('Y').'/'.'PDF';

    $data = Service::where('services.id', $id)->leftJoin('servicequotes','servicequotes.id','=','services.service_id')->first();
    // Send data to the view using loadView function of PDF facade
    // var_dump($data);die();

    $pdf = PDF::loadView('pages.pdfview', ['data' =>$data]);

    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save($path.'TaxService'.$id.'.'.'pdf');
    // Finally, you can download the file using download function
    return $pdf->download('TaxService'.$id.'.'.'pdf');

  }
   public function payment()
   {
     return view('pages.paywithpaypal');
   }

}
