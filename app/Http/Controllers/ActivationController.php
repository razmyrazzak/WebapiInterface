<?php

namespace App\Http\Controllers;

use App\Services\ActivationService;
use Illuminate\Http\Request;

class ActivationController extends Controller
{

    public function doActivation( $activation_hash ){
        if( $activation_hash ){
            $response = ActivationService::activateUser( $activation_hash );
            if($response){
                if(  env('APP_ENV') != 'local' ){
                    return view('activation.index')->with('msg','Your account has been activated');
                }
                else{
                    return view('activation.index')->with('msg','Your account has been activated');
                }
            }
            else{
                return view('activation.index')->with('error','Activation hash Invalid');
            }
        }
        return redirect('loginShow');

    }

    public function showRestForm(){
        return view('activation.resetPassword');
    }

    public function doReset( Request $request ){
        $this->validate($request,[
            'email' => 'email|required'
        ]);
        $response = ActivationService::restUser( $request );
        if($response){
            return view('activation.index')->with('msg','Password reset link has been sent');
        }
        else{
            return view('activation.index')->withErrors('email not found');
        }
    }
    public function confirmationMsg(){
        return view('activation.index');
    }
}
