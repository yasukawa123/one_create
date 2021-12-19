<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('home');
});

// 新規登録
Route::get('/register', [App\Http\Controllers\Admin\RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [App\Http\Controllers\Admin\RegisterController::class, 'store'])
->middleware('guest');

// ログイン
Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'index'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [App\Http\Controllers\Admin\LoginController::class, 'authenticate'])
->middleware('guest');

//ログアウト
Route::get('/logout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


// クライアントページへアクセス
Route::get('/mypage_client', [App\Http\Controllers\Mypage\ClientController::class, 'index']);
// Route::post('/my_page', 'My_pageController@my_page_update');

// デザイナーページへアクセス
Route::get('/mypage_designer', [App\Http\Controllers\Mypage\DesignerController::class, 'index']);

// // ポストページ
// Route::get('bbs', 'PostsController@index');
