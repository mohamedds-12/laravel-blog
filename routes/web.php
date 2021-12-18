<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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

// Pages
Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/about', [PagesController::class, 'about'])->name('about');


// Posts


Route::get('/posts/trash', [PostsController::class, 'showTrash'])->name('posts.trash');
Route::get('/posts/restore/{post}', [PostsController::class, 'restoreTrash'])->name('posts.restore');

Route::delete('/posts/trash/{post}', [PostsController::class, 'softDelete'])->name('posts.delete');

Route::resource('/posts', PostsController::class);








// Routes to the register page
Route::get('/admin/register', [UsersController::class, 'register'])->name('admin.register');
Route::post('/admin', [UsersController::class, 'store'])->name('admin.store');

// Route::post('/admin/register', [UsersController::class, 'store'])->name('admin.store');


// Routes to the products page with a parameter #1
// Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where(
// [
//     'name' => '[a-zA-Z]+',
//     'id' => '[0-9]+'
    
// ]);




