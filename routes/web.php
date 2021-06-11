<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\controllers\PostsController;

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

Route::get('/users', function () {
    return view('welcome');
});

Route::get('/products', [ProductsController::class, 'trial'])->name('produ');
// Route::get('/student', [StudentController::class, 'index']);
// show list of products based on id or customer
Route::get('/products/{id}', [ProductsController::class, 'show']);

//show list based on the products name
// Route::get('/products/{name}', [ProductsController::class, 'names']);

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

// posts endpoint
Route::get('/posts', [PostsController::class, 'index']);
//returning a particular content like body
Route::get('/posts/body', [PostsController::class, 'body']);
//returning a particular title like prof
Route::get('/posts/prof', [PostsController::class, 'prof']);
//returning a particular title like MR
Route::get('/posts/Mr', [PostsController::class, 'Mr']);
//returning a particular title like MRs 
Route::get('/posts/Mrs', [PostsController::class, 'Mrs']);
//returning posts on id
Route::get('/posts/show', [PostsController::class, 'show']);