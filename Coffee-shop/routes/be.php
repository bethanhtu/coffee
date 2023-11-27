<?php
   use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\LoginController;

     Route::prefix('/admin')->middleware('admin')->group(function (){

        Route::prefix('/user')->group(function(){
            Route::get('/', [UserController::class, 'list'])->name('admin.user.list');
            Route::post('/add',[UserController::class,'add'])->name('admin.user.add');
            Route::post('/edit',[UserController::class,'edit'])->name('admin.user.edit');
            Route::get('/delete/{id}',[UserController::class,'delete'])->name('admin.user.delete');
        });

        Route::prefix('/category')->group(function(){
            Route::get('/', [CategoryController::class, 'list'])->name('admin.category.list');
            Route::post('/add',[CategoryController::class,'add'])->name('admin.category.add');
            Route::post('/edit',[CategoryController::class,'edit'])->name('admin.category.edit');
            Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('admin.category.delete');
        });

        Route::prefix('/product')->group(function(){
            Route::get('/', [ProductController::class, 'list'])->name('admin.product.list');
            Route::get('/add', [ProductController::class, 'doAdd'])->name('admin.product.doAdd');
            Route::post('/add',[ProductController::class,'add'])->name('admin.product.add');
            Route::get('/edit/{id}',[ProductController::class, 'doEdit'])->name('admin.product.doEdit');
            Route::post('/edit',[ProductController::class, 'edit'])->name('admin.product.edit');
            Route::get('/delete/{id}',[ProductController::class,'delete'])->name('admin.product.delete');
        });
        // CkEditer Images
        Route::post('image-upload', [ProductController::class, 'storeImage'])->name('image.upload');
   });
// Login
Route::get('/login', [LoginController::class, 'viewLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('admin.');


        