<?php

namespace App\Http\Controllers\Football;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Session;

class footballController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    function dashboard()
    {
       
        return view('football.dashboard',compact('nama'));
    }
    function logout()
    {
        Auth::guard('administrator')->logout();
        return redirect()->route('login');
    }
}
