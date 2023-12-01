<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function home()
    {
        $categories = Category::all();
        $products = Product::all();
        $newProducts = Product::orderBy('id', 'desc')->take(4)->get();

        return view('fe.home.home', compact('categories','products','newProducts'));
    }
    //
    public function product()
    {
        $categories = Category::all();
        $products = Product::all();
        $newProducts = Product::orderBy('id', 'desc')->take(4)->get();

        return view('fe.product.product', compact('categories','products','newProducts'));
    }
    //
    public function blog()
    {
        $categories = Category::all();
        $products = Product::all();
        $newProducts = Product::orderBy('id', 'desc')->take(4)->get();

        return view('fe.blog.blog', compact('categories','products','newProducts'));
    }
    //
    public function about()
    {
        $categories = Category::all();
        $products = Product::all();
        $newProducts = Product::orderBy('id', 'desc')->take(4)->get();

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
}
