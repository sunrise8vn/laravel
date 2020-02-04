<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;


class CPController extends Controller
{
    public function index()
    {
    	$value = Session::get('UserLogin');
        if($value != null){
            return view('cp.index');
        }
        else {
            return redirect('cp/login');
        }
    }

    public function logout()
    {
        Session::forget('UserLogin');
        Auth::logout();        
    	return redirect('cp/login');
    }
}
