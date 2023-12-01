<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    // public function home()
    // {
    //     $categories = Category::all();
    //     $products = Product::all();
    //     $newProducts = Product::orderBy('id', 'desc')->take(4)->get();

    //     return view('fe.home.home', compact('categories','products','newProducts'));
    // }
}
