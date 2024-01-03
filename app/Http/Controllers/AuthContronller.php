<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthContronller extends Controller
{
    //
    public function register(Request $request){
        try {
            $data = $request->all();
            if (User::where('email', $data['email'])->first()) {
                return redirect()->back()->with('error','Email đã tồn tại trong hệ thống');
            }
            $data['password'] = Hash::make($data['password']);
            $data['level'] = 2;
            User::create($data);
        } catch (Exception $exception){
            return redirect()->back()->with('error','Đăng ký thất bại');
        }
        return redirect()->back()->with('success','Đăng ký thành công');
    }

    public function loginUser(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'level' => 2])) {
            // Kiểm tra quyền của người dùng
            $user = Auth::user();
            
            if ($user->level == 1) {
                // Nếu có quyền admin, chuyển hướng đến route admin
                return redirect()->route('admin.dashboard');
            } else {
                // Ngược lại, chuyển hướng đến route user
                return redirect()->route('users.home');
            }
        }
    
        // Đăng nhập không thành công, chuyển hướng về trang trước đó
        return back();
    }
    

    public function logoutUser(){
        Auth::logout();
        return redirect()->route('users.home');
    }
}
