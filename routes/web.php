<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FinishController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\CartController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/rena', function () {
    return view('rena');
});



Route::get('/cart', function () {
    return view('beer/cart');
});

Route::get('/confirm', function () {
    return view('beer/confirm');
});

Route::get('/finish', function () {
    return view('beer/finish');
});

Route::get('/index', function () {
    return view('beer/index');
});

Route::get('/list', function () {
    return view('beer/list');
});

Route::get('/index', function () {
    return view('beer/index');
});
