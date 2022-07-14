<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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
    return view('welcome');
});

Route::get('/about', [WebController::class, 'aboutUs']); //about la link dan sau url

//routing form
Route::get('/category-create', [WebController::class, 'categoryCreate']);
Route::get('/category-edit', [WebController::class, 'categoryEdit']);
Route::get('/product-create', [WebController::class, 'productCreate']);
Route::get('/product-edit', [WebController::class, 'productEdit']);

//routing tables
Route::get('/category-list', [WebController::class, 'listCategory']);
Route::get('/products-list', [WebController::class, 'listProducts']);
