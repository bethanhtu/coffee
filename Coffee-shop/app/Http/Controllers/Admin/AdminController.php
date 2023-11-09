<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('be.layout');
    }
    // Pages
    public function login()
    {
        return view('be.login');
    }
    public function register()
    {
        return view('be.register');
    }
    public function forgot()
    {
        return view('be.forgot-password');
    }
    public function blank()
    {
        return view('be.blank');
    }

    //Charts
    public function charts()
    {
        return view('be.charts');
    }
    // Tables
    public function tables()
    {
        return view('be.tables');
    }
}
