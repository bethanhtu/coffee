<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // List Category
    public function list()
    {
        $list = Category::all();
        return view('be.category.list',compact('list'));
    }
    
    // Add
    public function add(Request $request)
    {
        try {
            $data = $request->all();
            unset($data['_token']);
            Category::create($data);
        } catch (Exception $exception){
            return redirect()->back()->with('error','Thêm thất bại'. $exception->getMessage());
        }
        return redirect()->back()->with('success','Thêm thành công');
    }

    // Edit
    public function edit( Request $request)
    {
        try {
            $data = $request->all();
            $category = Category::find($data['id']);
            $category->name = $data['name'];
            $category->save();
        }catch (Exception $exception){
            return redirect()->back()->with('error','Sửa thất bại'. $exception->getMessage());
        }
        return redirect()->back()->with('success','Sửa thành công');
    }

    //Delete
    public function delete($id)
    {

        try {
            Category::where('id', $id)->delete();
        }catch(Exception $exception) {
            return redirect()->back()->with('error','Xóa thất bại');
        }
        return redirect()->back()->with('success','Xóa thành công');
    }
}
