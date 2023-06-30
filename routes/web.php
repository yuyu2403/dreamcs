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


//////////////////////////////商品追加///////////////////////////
Route::get(
    '/add',
    [AddController::class, 'add']
);

Route::post(
    '/addconfirm',
    [AddController::class, 'addconfirm']
);

Route::post(
    '/addcomplete',
    [AddController::class, 'send_or_back']
);

//////一覧/////////////////////////////////////////
Route::get(
    '/list',
    [ListController::class, 'list']
)->name('list');

/////カートに追加///////////////////////////////
Route::post(
    '/add_cart',
    [ListController::class, 'add_cart']
);

///////////////////////////////カート////////////////////////////////////////////
Route::get('/cart', [CartController::class, 'cart']);
Route::post('/cart/{id}', [CartController::class, 'cart']);
Route::post('/cart/delete/{id}', [CartController::class, 'delete']);


/////////////購入確認画面///////////////////////////////////////////////////////
Route::post(
    '/confirm',
    [FinishController::class, 'confirm']
);

///////////購入完了画面///////////////////////////////////////
Route::get('/finish', function () {
    return view('beer/finish');
});










/* 画像アップロードフォームを表示するルーティング */
// Route::get('upload_form', function () {
//     return view('upload_form');
// });

/* POST 送信された画像を受け取って保存するルーティング */
// Route::post('upload_form', [UploadImageController::class, 'upload']);

/* アップロードされた画像の一覧を表示するルーティング */
// Route::get('upload_images', [UploadImageController::class, 'index']);
