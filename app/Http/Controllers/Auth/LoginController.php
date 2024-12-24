<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate dữ liệu đầu vào
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:50',
            'password' => 'required|string|min:8|max:32',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Thực hiện đăng nhập
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công, chuyển hướng đến trang chủ hoặc trang mong muốn
            // dd(Auth::check());
            return redirect()->route('home');
        } else {
            // Đăng nhập thất bại, quay lại trang đăng nhập với thông báo lỗi
            return redirect()->back()->withErrors(['email' => 'Thông tin đăng nhập không chính xác'])->withInput();
        }
    }
}
