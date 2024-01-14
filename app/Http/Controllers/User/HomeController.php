<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Orders;
use App\Models\Product;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function home()
    {
        $hotBlogs = Blog::all()->take(4);
        $categories = Category::all();
        $products = Product::all();
        $newProducts = Product::orderBy('id', 'desc')->take(4)->get();

        return view('fe.home.home', compact('categories','products','newProducts', 'hotBlogs'));
    }
    //
    public function product()
    {
        $categories = Category::all();
        $products = Product::all();
        $newProducts = Product::all();

        return view('fe.product.product', compact('categories','products','newProducts'));
    }
    //
    public function detail($id)
    {
        $categories = Category::all();
        $products = Product::find($id);
        $newProducts = Product::orderBy('id', 'desc')->take(4)->get();

        return view('fe.product.detail', compact('categories','products','newProducts'));
    }
    //
    public function order()
    {
        $categories = Category::all();
        $products = Product::all();
        $newProducts = Product::orderBy('id', 'desc')->take(4)->get();
        return view('fe.order', compact('categories','products','newProducts'));
    }
    //
    public function blog()
    {
        $blogs = Blog::all();
        return view('fe.blog.blog', compact('blogs'));
    }
     //
     public function posts($id)
     {
         $blogs = Blog::find($id);
         return view('fe.blog.posts', compact('blogs'));
     }
    //
    public function about()
    {
        $categories = Category::all();
        $products = Product::all();
        $newProducts = Product::orderBy('id', 'desc')->take(8)->get();
        return view('fe.about.about', compact('categories','products','newProducts'));
    }
    //
    public function contact()
    {
        $categories = Category::all();
        $products = Product::all();
        $newProducts = Product::orderBy('id', 'desc')->take(4)->get();

        return view('fe.contact.contact', compact('categories','products','newProducts'));
    }
    // 
    public function signin()
    {
        return view('fe.signin');
    }
    public function profile()
    {
        $user = auth()->user();
        return view('fe.profile', compact('user'));
    }
    public function myorder()
{
    $user = auth()->user();
    $myorder = Orders::where('user_id', $user->id)->get();
    // Remove the following line if you have confirmed that $myorder contains the expected data
    // dd($myorder);

    return view('fe.myorder', compact('myorder'));
}
    // 
    public function signup()
    {
        return view('fe.signup');
    }
}
