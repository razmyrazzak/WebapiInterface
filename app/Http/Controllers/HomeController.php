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
        if( $service ){
            return redirect('pensionPage');

        }
        elseif(isset($service['code'])){
            return redirect('loginShow')->withErrors( $service['msg'] );
        }
    }

    public function pensionPage()
    {
        $response = UserService::getUserDetails();
        if($response->getStatusCode()== 200){
            $user = json_decode((string)$response->getBody());
            session(['user_name' => $user->first_name]);
            $subs = SubscribeServices::getAllSubs();
            return view( 'user.index' )->with('user',$user)->with('subs', $subs);
        }
        elseif ( $response->getReasonPhrase() ){
            if($response->getStatusCode()== 401){
                session()->flush();
            }
            return redirect('loginShow')->withErrors( $response->getReasonPhrase() );
        }
    }


    public function logout()
    {
        session()->flush();
        return redirect('loginShow');
    }


}
