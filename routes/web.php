<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;

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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aboutus',function (){return view('aboutus');});
Route::post('/blog/favorite/{slug}/{user_id}', [App\Http\Controllers\PostsController::class, 'favorite']);
Route::post('/favorite/{slug}/{user_id}', [App\Http\Controllers\PostsController::class, 'unfavorite']);
Route::get('/favorites', [App\Http\Controllers\PostsController::class, 'favorites']);
Route::post('/blog/{slug}/comments',[CommentsController::class,'store']);
Route::delete('/comments/{comment}',[CommentsController::class,'destroy']);
