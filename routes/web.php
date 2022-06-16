<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;
use App\Models\MemberModel;
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

Route::get('/', function () {
    //dashboard
    return view('welcome');
});

Route::get('/register', [MemberController::class, 'register'] );
Route::get('registerProcess', [MemberController::class, 'registerProcess']);
Route::get('/login', [MemberController::class, 'login'] );
Route::get('/search', [GameController::class, 'search']);
Route::get('/game/{id}', [GameController::class, 'detail']);
Route::post('/cart', [MemberController::class, 'cart']);
Route::get('/game/manage', [GameController::class, 'manageGame']);
Route::post('/game/add', [GameController::class, 'addGame']);
Route::get('/game/{id}/update', [GameController::class,'updateGame']);
Route::get('/category/manage', [GameController::class, 'manageCategory']);
Route::post('/category/add', [GameController::class, 'addCategory']);
Route::get('/category/{id}/update', [GameController::class,'updateCategory']);



//Route::get('/dashboard', [MovieController::class, 'index']);