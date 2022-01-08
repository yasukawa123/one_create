<?php

use App\Models\Follower;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/designerpage', [App\Http\Controllers\Mypage\DesignerController::class, 'index']);

// ログイン状態
Route::group(['middleware' => 'auth'], function() {

    // ユーザ関連
    Route::resource('users', 'App\Http\Controllers\UsersController', ['only' => ['index', 'show', 'edit', 'update']]);

    // フォロー/フォロー解除を追加
    Route::post('users/{user}/follow', [App\Http\Controllers\UsersController::class, 'follow'])
        ->name('follow');
    Route::delete('users/{user}/unfollow', [App\Http\Controllers\UsersController::class,'unfollow'])
        ->name('unfollow');
     // 異常あったら下にしてみる
    // Route::delete('users/{user}/unfollow', 'App\Http\Controllers\UsersController@unfollow', 'unfollow')
    //     ->name('unfollow');

    // ツイート機能
    Route::resource('tweets', 'App\Http\Controllers\TweetsController', ['only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']]);
    // コメント関連
    Route::resource('comments', 'App\Http\Controllers\CommentsController', ['only' => ['store']]);
});


// 管理者以上
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
//ここにルートを記述
});

// クライアント
Route::group(['middleware' => ['auth', 'can:client-user']], function () {
    //ここにルートを記述
  });

// デザイナー
Route::group(['middleware' => ['auth', 'can:designer-user']], function () {
    //ここにルートを記述
  });