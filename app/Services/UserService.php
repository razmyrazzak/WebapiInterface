<?php
/**
 * Created by PhpStorm.
 * User: mafa
 * Date: 04/04/2018
 * Time: 16:07
 */

namespace App\Services;


class UserService
{

    public static function getUserDetails(){
        $access_token = session('access_token');
        $response = GuzzleHttpService::processCall( '/api/getCurrentUser', 'GET' , null, $access_token );
        $user = json_decode((string)$response->getBody());
        if(isset($user->message)){
            return $user;
        }
        $userData =  session('user');
        session(['user_name' => $user->first_name]);
        return $user;
    }

    public static function updateUser( $request ){
        $access_token = session('access_token');
        if(empty($access_token)){
            session_destroy();
        }
        $form_params = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'dni' => $request->dni,
            'cuil' => $request->cuil,
            'profession' => $request->profession,
        ];
        $response = GuzzleHttpService::processCall( '/api/updateUser', 'POST' , $form_params, $access_token );
        $user = json_decode((string)$response->getBody());
        return $user ? true : false;
    }

    public static function registerUser( $request ){
        $access_token = session('access_token');
        $form_params = [
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'dni' => $request['dni'],
            'cuil' => $request['cuil'],
            'profession' => $request['profession'],
            'password' => $request['password'],
        ];
        $response = GuzzleHttpService::processCall( '/api/store', 'POST' , $form_params, $access_token );
        $user = json_decode((string)$response->getBody());
        if(isset($user->error)) {
            return $user;
        }
        return $user ;
    }

    public static function getUserPayment(){
        $access_token = session('access_token');
        $response = GuzzleHttpService::processCall( '/api/getLatestPayment', 'GET' , null, $access_token );
        $payment = json_decode((string)$response->getBody());
        if(isset($payment->message)){
            return $payment;
        }
        return $payment ;

    }

}