<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

/* ==========================================
   1. ROUTE UNTUK TUGAS PORTOFOLIO (Tugas 2)
   ========================================== */
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');


/* ==========================================
   2. ROUTE UNTUK PRAKTIKUM ROUTING (Bab 5)
   ========================================== */
Route::get('/routing', function() {
    return view('routing');
});

// 5.3 Basic routing
Route::get('/basic_routing', function() {
    return 'Hello World';
});

// 5.4 View route
Route::view('/view_route', 'view_route', ['name' => 'Zunnurain']);

// 5.5 Controller route
Route::get('/controller_route', [RouteController::class, 'index']);

// 5.7 Required parameter
Route::get('/user/{id}', function($id) {
    return "User Id: ".$id;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return "Post Id: ".$postId.", Comment Id: ".$commentId;
});

// 5.8 Optional parameter
Route::get('username/{name?}', function($name = null) {
    return 'Username: '.$name;
});

// 5.9 Regex constraint
Route::get('/title/{title}', function($title) {
    return "Title: ".$title;
})->where('title', '[A-Za-z]+');

// 5.10 Named route
Route::get('/profile/{profileId}', [RouteController::class, 'profile'])->name('profileRouteName');

// 5.11 Route priority (kondisi 1: ketiga route aktif)
Route::get('/route_priority/{rpId}', function($rpId) {
    return "This is Route One";
});

Route::get('/route_priority/user', function() {
    return "This is Route 1";
});

Route::get('/route_priority/user', function() {
    return "This is Route 2";
});

// 5.13 Route group
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', function() {
        return "This is admin dashboard";
    })->name('dashboard');

    Route::get('/users', function() {
        return "This is user data on admin page";
    })->name('users');

    Route::get('/items', function() {
        return "This is item data on admin page";
    })->name('items');
});

// 5.12 Fallback route (HARUS PALING BAWAH)
Route::fallback(function() {
    return 'This is Fallback Route';
});
