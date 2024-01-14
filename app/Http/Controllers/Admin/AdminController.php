<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Orders;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    // List
    public function dashboard()
    {
        $totalMonth = Orders::whereMonth('created_at', now()->month)
            ->sum('total_price');
        $totalRevenue = Orders::sum('total_price');
        $totalOrders = Orders::count();

        // Lấy tháng hiện tại (có thể thay đổi theo tháng bạn muốn)
        $currentMonth = now()->format('m');

        // Lấy số đơn hàng trong tháng
        $ordersInMonth = Orders::whereMonth('created_at', $currentMonth)->count();
        return view('be.dashboard', compact('totalRevenue', 'totalMonth', 'totalOrders', 'ordersInMonth'));
    }
    public function charts()
    {
        return view('be.charts');
    }


    // List
    public function list()
    {
        $list = Admin::all();
        return view('be.user.list', compact('list'));
    }

    // Add user
    public function add(Request $request)
    {
        try {
            $data = $request->all();
            unset($data['_token']);
            $data['password'] = Hash::make($data['password']);
            // dd($data);   
            Admin::create($data);
        } catch (Exception $exception) {
            return redirect()->back()->with('error', 'Lỗi: ' . $exception->getMessage());
        }
        return redirect()->back()->with('success', 'Thêm thành công');
    }

    // Edit
    public function edit(Request $request)
    {
        try {
            $data = $request->all();
            $user = Admin::find($data['id']);
            $data['password'] = Hash::make($data['password']);
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = $data['password'];
            $user->phone = $data['phone'];
            $user->save();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Lỗi: ' . $e->getMessage());
        }
        return redirect()->back()->with('success', 'Sửa thành công');
    }

    //Delete
    public function delete($id)
    {
        try {
            Admin::where('id', $id)->delete();
        } catch (Exception $exception) {
            return redirect()->back()->with('error', 'Lỗi: ') . $exception->getMessage();
        }
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
