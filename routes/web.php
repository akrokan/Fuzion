<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/',         [PageController::class, 'home'])->name('home');
Route::get('/blog',     [PageController::class, 'blog'])->name('blog');
Route::get('/contact',  [PageController::class, 'contact'])->name('contact');
Route::get('/mytube',   [PageController::class, 'mytube'])->name('myTube');

Route::get('/blog/{slug}',   [PostController::class, 'show']);

Route::get('/dashboard',    [PageController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/comments/list',      [CommentController::class, 'index']);

Route::get('/dashboard/posts/list',         [PostController::class, 'index']);
Route::get('/dashboard/post/create',        [PostController::class, 'create']);
Route::get('/dashboard/post/delete/{id}',   [PostController::class, 'destroy']);
Route::get('/dashboard/post/edit/{id}',     [PostController::class, 'edit']);
Route::get('/dashboard/post/switch/{id}',   [PostController::class, 'switchState']);

Route::post('/dashboard/post/create',       [PostController::class, 'store']);

Route::get('/dashboard/users/list',     [UserController::class, 'index']);


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::get('/md',   [PostController::class, 'mdown']);

require __DIR__.'/auth.php';
