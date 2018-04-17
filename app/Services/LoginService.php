<?php


namespace App\Services;

class LoginService
{

    public static function doLogin( $request )
    {
        $form_params = [
            'client_id' => env('CLIENT_ID'),
            'client_secret' => env('CLIENT_SEC'),
            'grant_type' => env('GRANT_TYPE'),
            'username' => $request->email,
            'password' => $request->password,
            'scope'=> '*',
        ];
        $response = GuzzleHttpService::processCall( '/oauth/token', 'POST', $form_params );
        if( $response ->getStatusCode() == 500 || $response ->getStatusCode() == 401 ){
            return json_decode((string)$response->getBody());
        }
        $auth = json_decode((string)$response->getBody());
        session(['access_token' => $auth->access_token]);
        return true;

    }

    public static function logout(){
        session()->forget('access_token');
        return true;
    }
}