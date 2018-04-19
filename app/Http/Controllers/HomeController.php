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
        $services = SubscribeServices::getAllSubs();
        return view('site.index')->with('services', $services);
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
        if( isset($service['code'])){
            return redirect('loginShow')->withErrors( $service['msg'] );
        }
        elseif($service){
            return redirect('pensionPage');
        }
    }

    public function pensionPage()
    {
        $user = UserService::getUserDetails();
        $services = SubscribeServices::getAllSubs();
        $subs = SubscribeServices::getAllSubs();
        if( isset($user->message) ){
            session()->flush();
            return redirect('loginShow');
        }
        return view( 'user.index' )->with('user',$user)->with('service', $services)->with('subs', $subs);
    }

    public function logout()
    {
        session()->flush();
        return redirect('loginShow');
    }


}
