<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DangNhap extends Controller
{
    public function dangNhap()
    {
        return view('admin.dangnhap',[
            'title'=>"Dang Nhap"
        ]);
    }

    public function kiemTraDangNhap(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ],[
            'email.required'=>'Vui lòng nhập Email!',
            'email.email'=>'Địa chỉ Email không đúng định dạng!',
            'password.required'=>'Vui lòng nhập mật khẩu!'
        ]);
        if(Auth::attempt([
            'email'=>request('email'),
            'password'=>request('password')
        ])){
            return redirect()->route('trangChuAdmin');
        }
        else{
            return redirect()->back()->withErrors([
                'login'=>'Thông tin đăng nhập không chính xác'
            ])->withInput();
        }
    }


}
