<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', [GameController::class, 'dashboard']);

Route::get('/register', [UserController::class, 'register'] );
Route::post('/register-process', [UserController::class, 'registerProcess']);
Route::get('/login', [UserController::class, 'login'] );
Route::post('/login-process', [UserController::class, 'loginProcess']);

Route::get('/search', [GameController::class, 'search']);
Route::get('/game/{id}', [GameController::class, 'detail']);
Route::get('/game/manage', [GameController::class, 'manageGame']);
Route::get('/game/add', [GameController::class, 'addGame']);
Route::post('/game/add-process', [GameController::class, 'addProcess']);
Route::get('/game/{id}/update', [GameController::class,'updateGame']);
Route::post('/game/{id}/update-process', [GameController::class,'updateProcess']);
Route::post('/game/{id}/remove', [GameController::class,'removeGame']);

Route::get('/category/add', [CategoryController::class, 'addCategory']);
Route::get('/category/manage', [CategoryController::class, 'manageCategory']);
Route::post('/category/add-process', [CategoryController::class, 'addProcess']);
Route::get('/category/{id}/update', [CategoryController::class,'updateCategory']);
Route::post('/category/{id}/update-process', [CategoryController::class,'updateProcess']);

//add cart
Route::post('add-cart', [CartController::class, 'addCart']);
Route::get('/cart', [CartController::class, 'cart']);
Route::post('/cart/{id}/remove', [CartController::class, 'removeCart']); //id cart detailnya

Route::post('/check-out/{id}', [TransactionController::class, 'checkOut']);

Route::post('/add-review', [ReviewController::class, 'addReview']);

//Route::get('/dashboard', [MovieController::class, 'index']);