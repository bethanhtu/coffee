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
    public function register(Request $request)
    {
        try {
            $data = $request->all();
            if (User::where('email', $data['email'])->first()) {
                return redirect()->back()->with('error', 'Email đã tồn tại trong hệ thống');
            }
            $data['password'] = Hash::make($data['password']);
            $data['level'] = 2;
            User::create($data);
        } catch (Exception $exception) {
            return redirect()->back()->with('error', 'Đăng ký thất bại');
        }
        return redirect()->back()->with('success', 'Đăng ký thành công');
    }

    public function loginUser(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
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


    public function logoutUser()
    {
        Auth::logout();
        return redirect()->route('users.home');
    }


    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:5',
            'confirm_password' => 'required|same:new_password',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Mật khẩu hiện tại không đúng !!');
        }

        $user->update(['password' => Hash::make($request->new_password)]);

        return redirect()->back()->with('success', 'Thay đổi mật khẩu thành công.');

    }
}
