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

Route::get('/', [GameController::class, 'dashboard']); //view done

Route::get('/register', [UserController::class, 'register'] ); //view done
Route::post('/register-process', [UserController::class, 'registerProcess']);
Route::get('/login', [UserController::class, 'login'] );  //view done
Route::post('/login-process', [UserController::class, 'loginProcess']);

Route::get('/search', [GameController::class, 'search']);  //view done

Route::get('/add-game', [GameController::class, 'addGame']);
Route::post('/add-process', [GameController::class, 'addProcess']);
Route::get('/manage-game', [GameController::class, 'manageGame']);

Route::prefix('game')->group(function() {
    Route::get('/{id}', [GameController::class, 'detail']);  //view done
    Route::get('/{id}/update', [GameController::class,'updateGame']);
    Route::post('/{id}/update-process', [GameController::class,'updateProcess']);
    Route::post('/{id}/remove', [GameController::class,'removeGame']);
});

Route::prefix('/category')->group(function() {
    Route::get('/add', [CategoryController::class, 'addCategory']); 
    Route::get('/manage', [CategoryController::class, 'manageCategory']);
    Route::post('/add-process', [CategoryController::class, 'addProcess']);
    Route::get('/{id}/update', [CategoryController::class,'updateCategory']);
    Route::post('/{id}/update-process', [CategoryController::class,'updateProcess']);
});


//add cart
Route::post('add-cart', [CartController::class, 'addCart']);

Route::get('/cart', [CartController::class, 'cart']); //view done
Route::post('/cart/{id}/remove', [CartController::class, 'removeCart']); //id cart detailnya

Route::post('/check-out/{id}', [TransactionController::class, 'checkOut']);

Route::post('/add-review', [ReviewController::class, 'addReview']);

//Route::get('/dashboard', [MovieController::class, 'index']);