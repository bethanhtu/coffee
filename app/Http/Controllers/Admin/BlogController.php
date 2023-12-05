<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // List
    public function list()
    {
        $list = Blog::all();
        return view('be.blog.list', compact('list'));
    }
    // Add
    public function doAdd(Request $request)
    {
        return view('be.blog.add');
    }
    // Add
    public function add(Request $request)
    {
        try {
            $data = $request->all();
            unset($data['_token']);
            $mainImage = $data['mainImage'];
            $mainImageName = time() . '1' . $mainImage->getClientOriginalName();
            $mainImage->storeAs('/products', $mainImageName, 'public');
            $data['main_image'] = 'storage/products/' . $mainImageName;
            Blog::create($data);
        } catch (Exception $exception) {
            return redirect()->back()->with('error', 'Lỗi: ' . $exception->getMessage());
        }
        return redirect(route('admin.blog.list'))->with('success', "Thêm sản phẩm thành công");
    }
    // Edit
    public function doEdit($id)
    {
        $blogs = Blog::find($id);
        return view('be.blog.edit', compact('blogs'));
    }
    // Edit
    public function edit(Request $request)
    {
        try {
            $data = $request->all();
            $blog = Blog::find($data['id']);
            unset($data['_token']);
            if (empty($data['mainImage'])) {
                $data['main_image'] = $blog['main_image'];
            } else {
                Storage::disk('public')->delete($blog['main_image']);
                $mainImage = $data['mainImage'];
                $mainImageName = time() . '1' . $mainImage->getClientOriginalName();
                $mainImage->storeAs('/blogs', $mainImageName, 'public');
                $data['main_image'] = 'storage/blogs/' . $mainImageName;
            }
            unset($data['insert']);
            unset($data['mainImage']);

            Blog::where('id', $data['id'])->update($data);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Lỗi: ' . $exception->getMessage());
        }

        return redirect(route('admin.blog.list'))->with('success', 'Sửa thành công');
    }

    // Delete
    public function delete($id)
    {
        try {
            Blog::where('id', $id)->delete();
        } catch (Exception $exception) {
            return redirect()->back()->with('error', 'Xóa thất bại');
        }
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
