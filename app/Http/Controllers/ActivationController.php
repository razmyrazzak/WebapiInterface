<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivationController extends Controller
{

    public function doActivation( Request $request ){
        $this->validate($request,[
            'activation' => 'required'
        ]);
    }

    public function showRestForm(){
        return view('activation.resetPassword');
    }
    public function doReset( Request $request ){
        $this->validate($request,[
            'email' => 'email|required'
        ]);

    }
    public function confirmationMsg(){
        return view('activation.index');
    }
}
