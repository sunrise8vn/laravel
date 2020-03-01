<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Image;
use Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;


class UserController extends Controller
{
    public function getList()
    {
        $user = User::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        return view('cp.user.list',['user'=>$user]);
    }

    public function getCreate()
    {
        return view('cp.user.create');
    }

    public function postCreate(Request $request)
    {
        $this->validate($request,
            [
                'fullname' => 'required|between:5,50',
                'password' => 'required|required_with:confirm_password|same:confirm_password',
                'confirm_password' => 'min:4'
            ],
            [
                'fullname.required'=>'Bạn chưa nhập họ tên',
                'fullname.between'=> 'Họ tên phải có độ dài từ 5 đến 50 ký tự',
                'password.required'=>'Mật khẩu không được bỏ trống',
                'confirm_password.min'=>'Mật khẩu có độ dài ít nhất 4 ký tự',
                'password.same'=>'Mật khẩu không trùng nhau',
            ]);

        $user = new User();
        $user->fullname = $request->fullname;
        $user->display_name = $request->display_name;
        $user->username = strtolower($request->username);
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->avatar = $request->avatar;
        $user->role = 0;
        $user->isDeleted = 0;
        $user->save();
        // $updated_by = Auth::user()->id;

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
            $destinationPath = public_path('/data/user/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $avatar);
            $user->avatar = $avatar;      
            $user->save();  
        }
        // $user->update();

        return Redirect::back()->with('success','Thêm thành viên quản trị viên thành công');
    }

    public function export(Request $request)
    {
        // $abc = "123";
        // return Excel::download(new UserExport($abc), 'BangTinh_TruyenThong_Thang.xlsx');
        // return view('export.users');
    }
}
