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
        $auth = json_decode((string)$response->getBody());
        if(isset($auth->error)) {
            return $auth;
        }
        session(['access_token' => $auth->access_token]);
        return true;

    }

    public static function logout(){
        session()->forget('access_token');
        return true;
    }
}