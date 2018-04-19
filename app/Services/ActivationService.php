<?php
/**
 * Created by PhpStorm.
 * User: mafa
 * Date: 17/04/2018
 * Time: 08:57
 */

namespace App\Services;


class ActivationService
{
    /**
     * send request to generate and send email with reste form url from the api
     * @param $request
     * @return bool|mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public static function restUser( $request ){
        $form_params = [
            'email' => $request->email,
            'url' => url('showPasswordForm')
        ];
        $response = GuzzleHttpService::processCall( '/api/sendResetLink', 'POST' , $form_params, null );
        switch ($response->getStatusCode()) {
            case 404:
                return ['error' => $response->getBody() ];
                break;
            case 500:
                return ['error' => $response->getReasonPhrase() ];
                break;
            case 422:
                return ['error' => $response->getReasonPhrase() ];
                break;
            case 200:
                return  json_decode((string)$response->getBody());
                break;
            default :
                return ['error' => 'something went wrong' ];
        }
        $response = json_decode((string)$response->getBody());
        return $response;
    }

    /**
     * activate the user with valid activation hash
     * @param $activation_hash
     * @return bool|mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public static function activateUser( $activation_hash ){
        $form_params = [
            'activation_hash' => $activation_hash,
        ];
        $response = GuzzleHttpService::processCall( '/api/activateUser?'.http_build_query( $form_params ), 'GET' , null, null );

        if( $response->getStatusCode() == 404){
            return false;
        }
        $response = json_decode((string)$response->getBody());

        return $response;
    }

    /**
     * post the new password to rreset password
     * @param $request
     * @return bool|mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public static function doResetPassword( $request )
    {
        $form_params = [
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
            'token' => $request->token
        ];
        $response = GuzzleHttpService::processCall('/api/password/reset', 'POST', $form_params, null);
        switch ($response->getStatusCode()) {
            case 404:
                return $response->getReasonPhrase();
                break;
            case 500:
                return $response->getReasonPhrase();
                break;
            case 422:
                return $response->getReasonPhrase();
                break;
            case 200:
                return json_decode((string)$response->getBody());
                break;

            default :
                return null;
        }
    }


}