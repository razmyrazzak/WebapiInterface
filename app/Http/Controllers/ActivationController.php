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
        if (isset($response['error'])){
                return view('activation.index')->with('error', $response['error']);
        }
        if( $response ){
            if(  env('APP_ENV') == 'local' ){
                return view('activation.index')->with('msg','Password reset link has been sent')->with('local',$response );
            }
        }

    }
    public function showPasswordForm( $token ){
        return view('activation.resetPasswordForm')->with('token' , $token);
    }
    public function doUpdatePassword( Request $request ){
        $this->validate($request,[
            'email' => 'email|required',
            'token' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8'
        ]);
        $response = ActivationService::doResetPassword( $request );
        if( $response ){
            return view('activation.index')->with('msg','Your password has been changed');
        }
        else{
            return view('activation.index')->with('error','Something went wrong please try again');
        }
    }


    public function confirmationMsg(){
        return view('activation.index');
    }
}
