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
// do login
Route::post('doLogin', 'HomeController@doLogin');
//user registration
Route::post('registerUser', 'UserController@registerUser');
//activation
Route::get('confirmationMsg', 'ActivationController@confirmationMsg');
Route::get('doActivation/{activation_hash}', 'ActivationController@doActivation');
Route::get('showRestForm', 'ActivationController@showRestForm');
Route::post('doReset', 'ActivationController@doReset');
Route::get('showPasswordForm/{token}', 'ActivationController@showPasswordForm');
Route::post('doUpdatePassword/', 'ActivationController@doUpdatePassword');

Route::group(['middleware' => ['checkToken']], function() {
    Route::get('pensionPage', 'HomeController@pensionPage');
    Route::get('logout', 'HomeController@logout');

    //user CRUD
    Route::get('showEdit', 'UserController@showEdit');
    Route::post('editUser', 'UserController@editUser');
    Route::get('passwordForm', 'UserController@passwordForm');
    Route::post('updatePassword', 'UserController@updatePassword');


    //user payment
    Route::get('createPayment', 'PaymentController@createPayment');
    Route::get('failPayment', 'PaymentController@failPayment');
    Route::get('showBilling', 'PaymentController@showBilling');


    //Subscription
//    Route::get('showSubscription', 'SubscriptionController@showSubscription');
    Route::get('generatePension', 'SubscriptionController@generatePension');
});