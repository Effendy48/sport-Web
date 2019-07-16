<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;
use Session;
use DB;
use App\adminModel;

class LoginController extends Controller
{
    use AuthenticatesUsers;
   
    public function __construct()
    {
        $this->middleware('guest:administrator')->except('logout');
    }

    protected $redirectTo = '/dashboard';

    function showLoginForm()
    {
        return view('auth.login');
    }
    function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|string|max:30',
            'password' => 'required'
        ]);
        if($administrator = adminModel::where(['email' => $request->email, 'password' => $request->password])->first())
        {
            Auth::guard('administrator')->login($administrator);
            return redirect()->intended(route('dashboard'));
        }
        else 
        {
            return "<script>alert('Gagal')</script>";
        }
    }
    function logout()
    {
        Auth::guard('administrator')->logout();
        return redirect()->route('login');
    }
}
