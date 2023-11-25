<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});

// Route::get('/home', function () {
//     return view('home');
// });
// Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// for test
Route::get('/product', function () {
    return view('product');
});
Route::get('/pv', function () {
    return view('userPage.viewProducts');
});

Route::get('/search', function () {
    return view('userPage.search');
});
Route::view('/test', 'test');
