<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    // post->idが1の閲覧ページにリダイレクト
    return redirect()->route('post.show', ['post' => 1]);
});

// イメージが貼り付けられた際の処理
Route::post('/upload', [PostController::class, 'upload']);

// PostControllerをリソースコントローラーとして読み込み
Route::resource('post', PostController::class)->only('show', 'edit', 'update');