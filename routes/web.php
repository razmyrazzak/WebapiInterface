<?php

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



//
Route::get('/', 'HomeController@index');
Route::get('loginShow', 'HomeController@loginShow');
Route::post('doLogin', 'HomeController@doLogin');

Route::group(['middleware' => ['checkToken']], function() {
    Route::get('pensionPage', 'HomeController@pensionPage');
    Route::get('logout', 'HomeController@logout');

    //user CRUD
    Route::get('showEdit', 'UserController@showEdit');
    Route::get('editUser', 'UserController@editUser');

    //user payment
    Route::get('createPayment', 'PaymentController@createPayment');
    Route::get('failPayment', 'PaymentController@failPayment');
    Route::get('showBilling', 'PaymentController@showBilling');

    //Subscription
    Route::get('showSubscription', 'SubscriptionController@showSubscription');
});