<?php

use App\Http\Controllers\AuthController;
use Faker\Guesser\Name;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\NewsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/login');

Route::get('/login', [AuthController::class, 'showLogin'])
    ->middleware('guest')
    ->name('login');   // ← WAJIB

Route::post('/login', [AuthController::class, 'login'])
    ->middleware('guest');

Route::get('/register', [AuthController::class, 'showRegister'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('/products', ProductController::class)
        ->names('admin.products');

    Route::resource('categories', CategoryController::class)
        ->names('admin.categories');

    Route::resource('news', NewsController::class)
        ->names('admin.news');
});

Route::middleware(['auth', 'role:user'])->group(function () {

    // Route::get('/user/index', function () {
    //     return view('user.index');
    // })->name('user.index');

    Route::get('/user/index', [HomeController::class, 'index'])
        ->name('user.index');
    Route::get('/user/about', function () {
        return view('user.about');
    })->name('user.about');
    Route::get('/user/cart', [HomeController::class, 'cart'])->name('user.cart');
    Route::get('/user/checkout', [HomeController::class, 'checkout'])->name('user.checkout');
    Route::get('/user/contact', function () {
        return view('user.contact');
    })->name('user.contact');
    Route::get('/user/news', [HomeController::class, 'news'])
        ->name('user.news');
    Route::get('/user/shop', [HomeController::class, 'shop'])
        ->name('user.shop');
    // Route::get('/user/singlenews', function () {
    //     return view('user.singlenews');
    // })->name('user.singlenews');
    Route::get('/user/product/{id}', [HomeController::class, 'show'])
        ->name('user.product.show');
    Route::get('/user/404', function () {
        return view('user.404');
    })->name('user.404');
    Route::get('/user/news/{id}', [HomeController::class, 'showNews'])
        ->name('user.news.show');
    // Route::prefix('admin')->group(function () {
    //     Route::resource('news', NewsController::class);
    // });
});
