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
        if( is_null($service)){
            return redirect('loginShow')->withErrors( 'something went wrong' );
        }
        elseif($service){
            return redirect('pensionPage');
        }
    }

    public function pensionPage()
    {
        $user = UserService::getUserDetails();
        $services = SubscribeServices::getAllSubs();
        if( isset($user->message) ){
            session()->flush();
            return redirect('loginShow');
        }
        return view( 'user.index' )->with('user',$user)->with('service', $services);
    }

    public function logout()
    {
        session()->flush();
        return redirect('loginShow');
    }


}
