<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OderDetails;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
    // List
    public function list()
    {
        $list = Orders::all();
        return view('be.orders.list', compact('list'));
    }
    public function ordersDetail($id)
    {
        $ordersdetail = OderDetails::orderBy('id','DESC')->where('order_id',$id)->get();
        $order = Orders::find($id);
        // Lấy danh sách sản phẩm từ product_id trong chi tiết đơn hàng
        return view('be.orders.detail', compact('ordersdetail', 'order'));
    }
    public function edit(Request $request)
    {
        try {
            $id = $request->id;
            $data = $request->status;
            $order = Orders::find($id);
            $order->status = $data;
            $order->save();
        }catch (\Exception $exception){
            return redirect()->back()->with('error', 'Sửa thất bại');
        }
        return redirect()->back()->with('success','Sửa thành công');
    }
}
