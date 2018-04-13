<?php
/**
 * Created by PhpStorm.
 * User: mafa
 * Date: 04/04/2018
 * Time: 16:11
 */

namespace App\Services;


class GuzzleHttpService
{
    public static function processCall( $url, $method, $form_parms = null, $access_token = null ){
        switch ( $method ){
            case 'GET':
                return self::getClientService( $url , $form_parms ,$access_token );
                break;
            case 'POST':
                return self::postClientService($url, $form_parms, $access_token );
                break;
            default: return false;
        }
    }

    public static function postClientService( $url, $form_parms, $access_token =null ){
        $client = new \GuzzleHttp\Client();
        try{
            $response = $client->post(env('API_URL') . $url, [
                'headers' => [
                    'Authorization' => 'Bearer '.$access_token,
                    'Accept' =>'application/json',
                ],
                'form_params' => $form_parms
            ] );
            return $response;
        }
        catch (\GuzzleHttp\Exception\BadResponseException $e){
            return $e->getResponse();
        }
    }

    public static function getClientService( $url, $form_parms= null, $access_token = null ){
        $client = new \GuzzleHttp\Client();
        try{
            $response = $client->get( env('API_URL'). $url, [
                'headers' => [
                    'Authorization' => 'Bearer '.$access_token,
                    'Accept' =>'application/json',
                ],
                'form_params' => $form_parms
            ] );
            return $response;

        }
        catch (\GuzzleHttp\Exception\BadResponseException $e){
            return 'Something went wrong';
        }

    }

}