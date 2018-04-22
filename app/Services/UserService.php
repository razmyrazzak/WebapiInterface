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
        return $response;
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
        $form_params = [
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'dni' => $request['dni'],
            'cuil' => $request['cuil'],
            'profession' => $request['profession'],
            'password' => $request['password'],
            'client_url'=> url('doActivation')
        ];
        $response = GuzzleHttpService::processCall( '/api/store', 'POST' , $form_params, null );
        $user = json_decode((string)$response->getBody());
        if(isset($user->error)) {
            return $user;
        }
        return $user ;
    }

    public static function getUserPayment(){
        $access_token = session('access_token');
        $response = GuzzleHttpService::processCall( '/api/getLatestPayment', 'GET' , null, $access_token );
        if( $response ->getStatusCode() == 500 ){
            return ['code' => $response ->getStatusCode(), 'msg' => 'Server Error please Contact admin' ];
        }
        elseif ($response ->getStatusCode() == 401 ){
            return ['code' => $response ->getStatusCode(), 'msg' => $response->getReasonPhrase() ];
        }
        if( $response ){
            $response = json_decode((string)$response->getBody());
            return $response ;
        }
        return $response;


    }

}