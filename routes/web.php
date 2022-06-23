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

//view kurang navigasi halaman

Route::get('/', [GameController::class, 'dashboard']); //view done

Route::get('/register', [UserController::class, 'register'] ); //view done
Route::post('/register-process', [UserController::class, 'registerProcess']);
Route::get('/login', [UserController::class, 'login'] );  //view done
Route::post('/login-process', [UserController::class, 'loginProcess']);

Route::get('/search', [GameController::class, 'search']);  //view done

Route::prefix('game')->group(function() {
    Route::get('/add', [GameController::class, 'addGame']); //View Done kecuali buat slider min 3
    Route::post('/add-process', [GameController::class, 'addProcess']);
    Route::get('/details/{id}', [GameController::class, 'detail']);  //view done kecuali slider
    Route::get('/manage', [GameController::class, 'manageGame']); //View Done
    Route::get('/update/{id}', [GameController::class,'updateGame']);
    Route::post('/update-process/{id}', [GameController::class,'updateProcess']);
    Route::post('/remove/{id}', [GameController::class,'removeGame']);
});

Route::prefix('/category')->group(function() {
    Route::get('/add', [CategoryController::class, 'addCategory']); //view done
    Route::get('/manage', [CategoryController::class, 'manageCategory']); //view done
    Route::post('/add-process', [CategoryController::class, 'addProcess']);
    Route::get('/update/{id}', [CategoryController::class,'updateCategory']);
    Route::post('/update-process/{id}', [CategoryController::class,'updateProcess']);
});


//add cart
Route::post('add-cart', [CartController::class, 'addCart']);

Route::get('/cart', [CartController::class, 'cart']); //view done
Route::post('/cart/{id}/remove', [CartController::class, 'removeCart']); //id cart detailnya

Route::post('/check-out/{id}', [TransactionController::class, 'checkOut']);

Route::post('/add-review', [ReviewController::class, 'addReview']);

//Route::get('/dashboard', [MovieController::class, 'index']);