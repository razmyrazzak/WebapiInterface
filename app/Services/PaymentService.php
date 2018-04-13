<?php
/**
 * Created by PhpStorm.
 * User: mafa
 * Date: 09/04/2018
 * Time: 21:53
 */

namespace App\Services;


class PaymentService
{
    public static function createPayment( $request ){
        $access_token = session('access_token');
        $merchant_id = strcmp( $request->merchant_order_id , 'null') == 0? $request->external_reference : $request->merchant_order_id;
        $form_params = [
            'service_id' => $request->service_id,
            'collection_id' => $request->collection_id,
            'status' => $request->collection_status,
            'preference_id' => $request->preference_id,
            'external_reference' => $request->external_reference,
            'payment_type' => $request->payment_type,
            'merchant_order_id' => $merchant_id,
        ];
        $response = GuzzleHttpService::processCall( '/api/createPayment', 'POST' , $form_params, $access_token );
        $user = json_decode((string)$response->getBody());
        return $user;
    }

}