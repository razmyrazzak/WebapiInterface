<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;
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

    public function generatePension( Request $request ){
        $validator  = $this->validate($request, [
            'aftp' => 'required',
        ]);
        $pension = PaymentService::getPenstion( $request );
        return redirect('pensionPage')->with('pension', $pension);
    }
}
