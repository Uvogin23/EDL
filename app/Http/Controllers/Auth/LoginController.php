<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function redirectTo(){
        if(Auth::user()->isManager()){
            return '/Manager/Commandes';
        }

        if(Auth::user()->isServer()){
            return '/Waiter';
        }

        if(Auth::user()->isCashier()){
            return '/Cashier';
        }

        if(Auth::user()->isCook()){
            return '/Cook';
        }

        if(Auth::user()->isDelivery()){
            return '/Delivery';
        }
        if (Auth::user()==null) {
            return '/home';
        }
       
    }

    public function logout(Request $request) {
        Auth::logout();
         return redirect('/login');
     }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
