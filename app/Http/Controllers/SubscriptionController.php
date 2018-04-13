<?php

namespace App\Http\Controllers;

use App\Services\SubscribeServices;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function showSubscription(){
        $subs = SubscribeServices::getAllSubs();
        return view('user.subscription')->with('subs', $subs);
    }

    public function getServices( $id ){
        $link = SubscribeServices::getSubscriptionByServiceId( $id );
        return $link;
    }
}
