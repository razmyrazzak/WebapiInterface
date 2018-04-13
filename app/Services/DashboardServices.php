<?php
/**
 * Created by PhpStorm.
 * User: mafa
 * Date: 05/04/2018
 * Time: 17:14
 */

namespace App\Services;


class DashboardServices
{
    public static function getDashboardData(){
        $response = GuzzleHttpService::processCall('/api/getDashboardData', 'GET', null, session('access_token') );

        $dashBoardData = json_decode((string)$response->getBody());

        return $dashBoardData;
    }

}