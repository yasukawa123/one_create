<?php

use App\Http\Controllers\PostController;
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

// Route::resource('posts', 'PostController', ['only' => ['index','show', 'create', 'store']]);
// Route::get('posts/edit/{id}', 'PostController@edit');
// Route::post('posts/edit', 'PostController@update');
// Route::post('posts/delete/{id}', 'PostController@destroy');
// Route::resource('/post', [PostController::class, 'index']);
// Route::get('/', 'App\Http\Controllers\PostController@index');

//↓ROLEを使うときに解除します。
// // クライアント
// Route::group(['middleware' => ['auth', 'can:client-higher']], function () {
//     // ユーザ一覧
//     Route::get('/account', 'AccountController@index')->name('account.index');
//   });

// // デザイナー
// Route::group(['middleware' => ['auth', 'can:designer-higher']], function () {
//     // ユーザ一覧
//     Route::get('/account', 'AccountController@index')->name('account.index');
//   });
  
//  // 管理者以上
// Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
//     // ユーザ登録
//     Route::get('/account/regist', 'AccountController@regist')->name('account.regist');
//     Route::post('/account/regist', 'AccountController@createData')->name('account.regist');
  
//     // ユーザ編集
//     Route::get('/account/edit/{user_id}', 'AccountController@edit')->name('account.edit');
//     Route::post('/account/edit/{user_id}', 'AccountController@updateData')->name('account.edit');
  
//     // ユーザ削除
//     Route::post('/account/delete/{user_id}', 'AccountController@deleteData');
//   }); 
  
//   // システム管理者のみ
//   Route::group(['middleware' => ['auth', 'can:system-only']], function () {
//   });