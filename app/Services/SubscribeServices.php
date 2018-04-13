<?php
/**
 * Created by PhpStorm.
 * User: mafa
 * Date: 05/04/2018
 * Time: 14:52
 */

namespace App\Services;


class SubscribeServices
{
    public static function getPreferenceData(){
        $form_params = [
            'success' => url('createPayment'),
            'failure' => url('failPayment'),
        ];
        $response = GuzzleHttpService::processCall( '/api/getPreferenceData?'.http_build_query( $form_params ), 'GET', null, session('access_token') );
        $services = json_decode((string)$response->getBody());
        return $services;
    }

    public static function getSubscriptionByServiceId( $id ){
        $form_params = [
            'service_id' => $id,
            'success' => url('createPayment'),
            'failure' => url('failPayment'),
        ];
        $response = GuzzleHttpService::processCall( '/api/getPreferenceDataByService?'.http_build_query( $form_params ), 'GET', null, session('access_token') );
        $result = json_decode((string)$response->getBody());
        return $result;

    }

    public static function getAllSubs(){
        $response = GuzzleHttpService::processCall( '/api/getServices', 'GET', null, session('access_token') );
        $result = json_decode((string)$response->getBody());
        return $result;
    }

}