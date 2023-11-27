<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // List
    public function list()
    {
        $list= Admin::all();
        return view('be.user.list',compact('list'));
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
        } catch (Exception $exception){
            return redirect()->back()->with('error','Thêm thất bại');
        }
        return redirect()->back()->with('success','Thêm thành công');
    }
    
    // Edit
    public function edit( Request $request)
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
        }catch (Exception $e){
            return redirect()->back()->with('error','Sửa thất bại');
        }
        return redirect()->back()->with('success','Sửa thành công');
    }

    //Delete
    public function delete($id)
    {
        try {
            Admin::where('id', $id)->delete();
        }catch(Exception $exception) {
            return redirect()->back()->with('error','Xóa thất bại');
        }
        return redirect()->back()->with('success','Xóa thành công');
    }
}
