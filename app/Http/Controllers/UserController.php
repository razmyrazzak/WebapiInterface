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


}
