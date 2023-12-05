<?php

use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

   Route::get('/', [HomeController::class, 'home'])->name('users.home');
   Route::get('/product', [HomeController::class, 'product'])->name('users.product');
   Route::get('/blog', [HomeController::class, 'blog'])->name('users.blog');
   Route::get('/about', [HomeController::class, 'about'])->name('users.about');
   Route::get('/contact', [HomeController::class, 'contact'])->name('users.contact');
   Route::get('/detail/{id}',[HomeController::class, 'detail'])->name('users.detail');
   Route::get('/posts/{id}',[HomeController::class, 'posts'])->name('users.posts');

   




?>