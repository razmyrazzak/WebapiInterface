<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;
use App\Services\UserService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function createPayment( Request $request ){
        $result = PaymentService::createPayment( $request );
        return redirect( 'pensionPage' )->with('status', 'Thank you for the Payment');
    }

    public function failPayment ( Request $request ){
        return redirect( 'userPage' )->withErrors(array('payment' => 'Failed Payment.'));
    }

    public function showBilling(){
        $payment = UserService::getUserPayment();
        if( $payment ){
            return view('user.billing')->with('payment' , $payment);
        }
        return view('user.billing')->with('error' , 'No Last Payment Found');
    }
}
