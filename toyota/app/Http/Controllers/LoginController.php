<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Auth;
use App\User;
use Session;

class LoginController extends Controller
{
    public function getLogin()
    {
        $value = Session::get('UserLogin');
        if($value == null){
            return view('cp.login');
        }
        else {
            return redirect('cp');
        }
        
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, 
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email không được để trống',
                'email.email' => 'Email chưa đúng định dạng',
                'password.required' => 'Mật khẩu không được để trống',
            ]);
        $remember = $request->has('remember') ? true : false;

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password, 'role'=>0], $remember))
        {
            $request->Session()->put('UserLogin',$request->email);
            return redirect('cp');
        }
        else
        {
            return redirect()->back()->with('notification','Đăng nhập không thành công');
        }
    }

    
}
