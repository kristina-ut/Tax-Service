<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/logout',                                   'Auth\LoginController@logout');

// Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login',                                    'Auth\LoginController@Attemptlogin')->name('Attemptlogin');

Route::post('register',                                 'Auth\RegisterController@create')->name('register');

Route::post('getNotification',                          'NotificationController@getNotification')->name('getNotification');
Route::get('gainNotification',                          'NotificationController@gainNotification')->name('gainNotification');

Route::get('/home',                                     'DashboardController@index')->name('home');

Route::resource('bookkeepings',                         'BookkeepingController');

Route::resource('revenues',                             'RevenueController');

Route::get('generatepdf/{id}',                          'ServiceController@export_pdf')->name('generatepdf');
Route::get('services/payment',                          'ServiceController@payment')->name('services.payment');
Route::resource('services',                             'ServiceController');

Route::resource('servicequotes',                        'ServicequoteController');

Route::resource('employees',                            'EmployeeController');

Route::resource('checkins',                             'CheckinController');
Route::get('report/{id}',                               'CheckinController@export_pdf')->name('report');;
Route::post('generateReport',                           'CheckinController@generate_report');

Route::get('events',                                    'EventController@index')->name('events.index');
Route::post('events',                                   'EventController@addEvent')->name('events.add');

Route::get('/',                                         'PaymentController@index');
// route for processing payment
Route::post('paypal',                                   'PaymentController@payWithpaypal');
// route for check status of the payment
Route::get('status',                                    'PaymentController@getPaymentStatus')->name('status');


Route::get('/', function () {
        return view('auth.login');
    });


    // Route::group(['prefix' => 'collection'], function(){
    //     Route::get('material', function () { return view('pages.collection.material'); });

    // });



    // For Clear cache
    Route::get('/clear-cache', function() {
        Artisan::call('cache:clear');
        return "Cache is cleared";
    });

    // 404 for undefined routes
    // Route::any('/{page?}',function(){
    //     return View::make('pages.error-pages.error-404');
    // })->where('page','.*');




// Route::get('/home', 'HomeController@index')->name('home');
