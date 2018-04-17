<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(){

    }

    public function showEdit(){
        $user = UserService::getUserDetails();
        return view('user.edit')->with( 'user', $user );
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
            return redirect('editUser');
        }
        return redirect('editUser')->withErrors(array('user' => 'Something went wrong.'));
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


}
