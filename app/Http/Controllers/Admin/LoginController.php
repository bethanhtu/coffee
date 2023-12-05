<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function viewLogin(){
        return view('be.login');
    }
    public function viewRegister(){
        return view('be.register');
    }
    public function register(Request $request)
    {
        try {
            $data = $request->all();
            unset($data['_token']);
            $data['password'] = Hash::make($data['password']);
            User::create($data);
        } catch (Exception $exception){
            return redirect()->back()->with('error','Lỗi: '. $exception->getMessage());
        }
        return redirect()->route('login')->with('success','Đăng ký thành công');
    }

    public function login(Request $request){
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password, 'level'=>1])){
            return redirect()->route('admin.user.list');
        }
        return back();
    }

    public function Logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}