<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/change-pass', [AuthController::class, 'changePassWord']);
});


Route::group([
    'middleware' => 'api',
    'prefix'=>'admin'
], function(){
    Route::get('/category',[CategoryController::class, 'getCategory']);
});

Route::get('getCart',[CartController::class, 'getCart']);
Route::get('add-cart',[CartController::class, 'addCart']);
//Route::get('updateCart',[CartController::class, 'addCart']);
//Route::get('removeCart',[CartController::class, 'addCart']);
