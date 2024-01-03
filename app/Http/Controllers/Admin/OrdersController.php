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
        // dd($list[3]->user->name);
        return view('be.orders.list', compact('list'));
    }
    public function ordersDetail($id)
    {
        $ordersdetail = OderDetails::find($id);
        $order = Orders::find($id);
        // Lấy danh sách sản phẩm từ product_id trong chi tiết đơn hàng
        $productId = $ordersdetail->product_id;
        $product = Product::find($productId);
        return view('be.orders.detail', compact('ordersdetail', 'order', 'product'));
    }
}
