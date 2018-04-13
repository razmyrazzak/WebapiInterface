<?php

namespace App\Http\Controllers;

use App\Services\DashboardServices;
use App\Services\LoginService;
use App\Services\SubscribeServices;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function loginShow(Request $request)
    {
        if( session('access_token') ){
            return redirect('pensionPage');
        }
        return view('login.index');
    }

    public function doLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $service = LoginService::doLogin($request);
        if( isset($service->error) ){
            return redirect('loginShow')->withErrors( $service->message );
        }
        elseif($service){
            return redirect('pensionPage');
        }
    }

    public function pensionPage ()
    {
        $user = UserService::getUserDetails();
        return view( 'user.index' )->with('user',$user);
    }

    public function logout()
    {
        session()->flush();
        return redirect('loginShow');
    }


}
