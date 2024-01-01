<?php

use App\Http\Controllers\AuthContronller;
use App\Http\Controllers\OderController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

   Route::get('/', [HomeController::class, 'home'])->name('users.home');
   Route::get('/product', [HomeController::class, 'product'])->name('users.product');
   Route::get('/blog', [HomeController::class, 'blog'])->name('users.blog');
   Route::get('/about', [HomeController::class, 'about'])->name('users.about');
   Route::get('/contact', [HomeController::class, 'contact'])->name('users.contact');
   Route::get('/detail/{id}',[HomeController::class, 'detail'])->name('users.detail');
   Route::get('/posts/{id}',[HomeController::class, 'posts'])->name('users.posts');

   Route::get('/signin',[HomeController::class, 'signin'])->name('signin');
   Route::get('/signup',[HomeController::class, 'signup'])->name('signup');

   Route::middleware('user')->get('/profile',[HomeController::class, 'profile'])->name('profile');

   Route::middleware('user')->get('/myorder',[HomeController::class, 'myorder'])->name('myorder');

   Route::post('/signup',[AuthContronller::class,'register'])->name('register');
   Route::post('/loginu',[AuthContronller::class,'loginUser'])->name('login-user');
   Route::get('/logoutu',[AuthContronller::class,'logoutUser'])->name('logout-user');



   Route::middleware('user')->get('/check-out',[OderController::class,'ckeckOut'])->name('check-out');
   Route::post('/order',[OderController::class,'makeOrder'])->name('order');



   




?>