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
    public static function restUser( $request ){
        $form_params = [
            'email' => $request->email,
        ];
        $response = GuzzleHttpService::processCall( '/api/sendResetLink', 'POST' , $form_params, null );
        $response = json_decode((string)$response->getBody());
        return $response;
    }

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

}