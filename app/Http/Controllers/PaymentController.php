<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;
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
        $payments = 'no';
        return view('user.billing');
    }
}
