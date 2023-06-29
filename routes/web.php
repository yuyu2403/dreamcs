<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadImageController;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FinishController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\CartController;
/* 画像アップロード用のコントローラを読み込み */
use App¥Http¥Controllers¥UploadImageController;
/* POST 送信された画像を受け取って保存するルーティング */

Route::post('upload_form', [UploadImageController::class, 'upload']);

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


Route::get('/cart', [CartController::class, 'cart']);
Route::post('/cart/{id}', [CartController::class, 'cart']);
Route::post('/cart/delete/{id}', [CartController::class, 'cart']);
Route::post('/cart/edit/{id}', [CartController::class, 'cart']);

// Route::get('/confirm', function () {
//     return view('beer/confirm');
// });

Route::get('/finish', function () {
    return view('beer/finish');
});

Route::get(
    '/add',
    [AddController::class, 'add']
);
Route::post(
    '/confirm',
    [FinishController::class, 'confirm']
);
Route::post(
    '/addconfirm',
    [AddController::class, 'addconfirm']
);

Route::post(
    '/addcomplete',
    [AddController::class, 'send_or_back']
);


Route::get(
    '/list',
    [ListController::class, 'list']
);


Route::get('upload_form', function () {
    return view('upload_form');
});



/* 画像アップロードフォームを表示するルーティング */
Route::get('upload_form', function () {
    return view('upload_form');
});

/* POST 送信された画像を受け取って保存するルーティング */
Route::post('upload_form', [UploadImageController::class, 'upload']);

/* アップロードされた画像の一覧を表示するルーティング */
Route::get('upload_images', [UploadImageController::class, 'index']);
