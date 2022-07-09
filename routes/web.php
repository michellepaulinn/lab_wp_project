<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TransactionController;
use App\Http\Middleware\RoleCheck;
use App\Http\Middleware\VerifyLogin;
use App\Http\Middleware\VerifyLogout;
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

Route::middleware([VerifyLogout::class])->group(function(){
    Route::get('/register', [UserController::class, 'register'] )->middleware('guest'); //view done
    Route::post('/register-process', [UserController::class, 'registerProcess']);
    Route::get('/login', [UserController::class, 'login'] )->middleware('guest');  //view done
    Route::post('/login-process', [UserController::class, 'loginProcess']);
});

Route::get('/', [PageController::class, 'dashboard'])->name('home'); //view done

Route::middleware([VerifyLogin::class])->group(function(){
    Route::post('/add-cart', [CartController::class, 'addCart']);
    Route::get('/cart', [CartController::class, 'cart']); //view done
    Route::post('/cart/remove', [CartController::class, 'remove']); //id cart detailnya
    Route::post('/check-out/{id}', [TransactionController::class, 'checkOut']);
    Route::post('/add-review/{id}', [ReviewController::class, 'addReview']);
    Route::post('logout', [UserController::class, 'logout']);
});


Route::get('/search', [GameController::class, 'search']);  //view done 
// Route::get('/successTrans', [TransactionController::class, 'getSuccessTransaction']);

Route::prefix('game')->group(function() {
    Route::middleware([RoleCheck::class])->group(function (){
        Route::get('/add', [GameController::class, 'addGame']); //View Done kecuali buat slider min 3
        Route::post('/add-process', [GameController::class, 'addProcess']);
        Route::get('/manage', [GameController::class, 'manageGame']); //View Done
        Route::get('/update/{id}', [GameController::class,'updateGame']);
        Route::post('/update-process/{id}', [GameController::class,'updateProcess']);
        Route::post('/remove/{id}', [GameController::class,'removeGame']);
    });
    Route::get('/details/{id}', [GameController::class, 'detail']);  //view done kecuali slider
});

Route::prefix('/category')->group(function() {
    Route::middleware([RoleCheck::class])->group(function (){
        Route::get('/add', [CategoryController::class, 'addCategory']); //view done
        Route::get('/manage', [CategoryController::class, 'manageCategory']); //view done
        Route::post('/add-process', [CategoryController::class, 'addProcess']);
        Route::get('/update/{id}', [CategoryController::class,'updateCategory']);
        Route::post('/update-process/{id}', [CategoryController::class,'updateProcess']);
        Route::post('/remove/{id}', [CategoryController::class, 'deleteCategory']);
    });
});


