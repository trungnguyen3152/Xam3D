<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function handle(Request $request)
    {
        $action = $request->input('action');
        
        if ($action === 'login') {
            return $this->login($request);
        } elseif ($action === 'register') {
            return $this->register($request);
        } elseif ($action === 'logout') {
            return $this->logout($request);
        }
        
        return response()->json(['status' => 'error', 'message' => 'Hành động không hợp lệ']);
    }

    private function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if ($credentials['username'] === 'admin') {
                return response()->json(['status' => 'success', 'message' => 'Đăng nhập Admin thành công', 'redirect' => '/admin']);
            }
            return response()->json(['status' => 'success', 'message' => 'Đăng nhập thành công']);
        }
        
        return response()->json(['status' => 'error', 'message' => 'Tên đăng nhập hoặc mật khẩu không đúng']);
    }

    private function register(Request $request)
    {
        $request->validate([
            'username' => 'required|max:15|regex:/^[a-zA-Z0-9]+$/|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:15|regex:/^[a-zA-Z0-9]+$/',
            'confirm_password' => 'required|same:password',
        ], [
            'username.unique' => 'Tên đăng nhập này đã tồn tại, vui lòng chọn tên khác',
            'email.unique' => 'Email này đã được đăng ký',
            'password.regex' => 'Mật khẩu chỉ gồm chữ và số',
            'confirm_password.same' => 'Mật khẩu xác nhận không khớp',
        ]);
        
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'plain_password' => $request->password,
        ]);
        
        Auth::login($user);
        
        return response()->json(['status' => 'success', 'message' => 'Đăng ký thành công']);
    }

    private function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return response()->json(['status' => 'success']);
    }
}
