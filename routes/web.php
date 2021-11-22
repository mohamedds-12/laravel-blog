<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

// Routes to the home page
Route::get('/', [PagesController::class, 'index']);


// Routes to the products page
Route::get('/products', [ProductsController::class, 'index']);


// Routes to the products page with a parameter #1
// Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where(
// [
//     'name' => '[a-zA-Z]+',
//     'id' => '[0-9]+'
    
// ]);


// Routes to the about page
Route::get('/about', [PagesController::class, 'about'])->name('about');

// Routes to posts
route::get('/posts', [PostsController::class, 'index']);
