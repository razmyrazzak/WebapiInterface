<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function showEdit(){
        $response = UserService::getUserDetails();
        if($response->getStatusCode()== 200){
            $user = json_decode((string)$response->getBody());
            return view( 'user.edit' )->with('user',$user);
        }
        elseif ( $response->getReasonPhrase() ){
            if($response->getStatusCode()== 401){
                session()->flush();
            }
            return redirect('loginShow')->withErrors( $response->getReasonPhrase() );
        }
    }

    public function editUser( Request $request ){
        $validator  = $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'dni' => 'required',
            'cuil' => 'required',
            'email' => 'email|required',
            'profession' => 'required',
        ]);
        $result = UserService::updateUser( $request );
        if( $result ){
            return redirect('showEdit');
        }
        return redirect('showEdit')->withErrors(array('user' => 'Something went wrong.'));
    }

    public function registerUser( Request $request ){
        $validator  = $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'dni' => 'required',
            'cuil' => 'required',
            'email' => 'email|required',
            'profession' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8'
        ]);
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'dni' => $request->input('last_name'),
            'cuil' => $request->input('cuil'),
            'profession' => $request->input('profession'),
            'password' => $request->input('password'),
        ];
        $response = UserService::registerUser( $data );
        if( isset($response->error) ){
            return view('activation.index')->with('error','Something went wrong Please try Again');
        }
        if(  env('APP_ENV') == 'local' ){
            return view('activation.index')->with('msg','User created please Activate your account')->with('local', $response->token);
        }
        return view('activation.index')->with('msg','User created please Activate your account');
    }

    public function passwordForm(){
        return view('user.passwordForm');
    }

    public function updatePassword( Request $request ){
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8'
        ]);
        $response = UserService::updatePassword( $request );
        if( $response->getStatusCode() == 200 ){
            return redirect('passwordForm')->with('status', 'password changed');
        }
        elseif ( $response->getStatusCode() == 500 || 401 || 422 ){
            return redirect('passwordForm')->with('error', json_decode((string)$response->getBody()) );
        }
    }


}
