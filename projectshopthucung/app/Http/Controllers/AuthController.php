<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Khachhang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('pages.login');
    }
    public function register(){
        return view('pages.register');
    }
    public function registerPost(Request $request){
        $kh = new Khachhang();
        $kh->hoten = $request->name;
        $kh->email = $request->email;
        $kh->password = $request->password;
        $kh->diachi = $request->address;
        $kh->sdt = $request->phone;
        $kh->id_phanquyen = 2;
        $kh->save();
        return back()->with('thongbao', 'Đăng ký tài khoản thành công');
    }

    public function loginPost(Request $request){
        // Tìm user theo email
        $user = Khachhang::where('email', $request->email)->first();
        // Kiểm tra tồn tại + mật khẩu đúng (so sánh text thô)
        if ($user && $user->password === $request->password) {
            // Đăng nhập
            Auth::login($user);
            return redirect('/')->with('thongbao', 'Đăng nhập thành công');
        }
        // Sai email hoặc mật khẩu
        return back()->withErrors(['error' => 'Sai email hoặc mật khẩu']);
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
