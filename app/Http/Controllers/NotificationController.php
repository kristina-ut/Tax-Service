<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    //
    public function create_notification($type, $message)
    {
        $id = DB::table('notifications')->insertGetId([
            'type' => $type,
            'message' => $message,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return $id;
    }

    public function getNotification(){

        $all_data = DB::table('notifications')->where('is_new', 0)->get();

        $data = DB::table('notifications')->where('is_new', 0)->orderBy('created_at','DSEC')->limit(5)->get();

        if(count($data)>0)
        {
            $res =  array(
                'status' => 'success',
                'content' => $data,
                'count' => count($all_data),
            );
        } else {
            $res =  array(
                'status' => 'no data',
            );
        }

        return response()->json($res);

    }
    public function gainNotification(){
        $all_datas = DB::table('notifications')->where('is_new', 0)->get();

       return view('pages.notification',compact('all_datas'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }
}
