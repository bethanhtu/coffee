<?php
   use Illuminate\Support\Facades\Route;
   use App\Http\Controllers\Admin\AdminController;
   Route::prefix('/admin')->group(function(){
        Route::prefix('/user')->group(function(){
            Route::get('/', [AdminController::class, 'index'])->name('admin.user.index');

            // Components
            Route::get('/buttons', [AdminController::class, 'index'])->name('admin.user.index');
            Route::get('/cards', [AdminController::class, 'index'])->name('admin.user.index');

            // Pages
            Route::get('/login', [AdminController::class, 'login'])->name('admin.user.login');
            Route::get('/register', [AdminController::class, 'register'])->name('admin.user.register');
            Route::get('/forgot-password', [AdminController::class, 'forgot'])->name('admin.user.forgot');
            Route::get('/blank', [AdminController::class, 'blank'])->name('admin.user.blank');

            //Charts
            Route::get('/charts', [AdminController::class, 'charts'])->name('admin.user.charts');
            Route::get('/tables', [AdminController::class, 'tables'])->name('admin.user.tables');
        
        });
   });
