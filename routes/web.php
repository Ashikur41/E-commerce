<?php

use App\Http\Controllers\CategoryController;
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
    return view('welcome');
});

Route::get('/deshboard',[\App\Http\Controllers\adminController::class,'index']);
Route::get('/view_category',[\App\Http\Controllers\adminController::class,'view_category']);
Route::post('/add_category',[\App\Http\Controllers\adminController::class,'add_category']);

Route::get('/delete_category/{id}',[\App\Http\Controllers\adminController::class,'delete_category']);


Route::get('/create_product',[\App\Http\Controllers\adminController::class,'create_product']);
Route::post('/add_product',[\App\Http\Controllers\adminController::class,'add_product']);
Route::get('/index_product',[\App\Http\Controllers\adminController::class,'index_product']);
Route::get('/show_product/{id}',[\App\Http\Controllers\adminController::class,'show_product']);
Route::get('/delete_product/{id}',[\App\Http\Controllers\adminController::class,'delete_product']);
Route::get('/edit_product/{id}',[\App\Http\Controllers\adminController::class,'edit_product']);
Route::get('/update_product/{id}',[\App\Http\Controllers\adminController::class,'update_product']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('admin_login',[\App\Http\Controllers\adminController::class,'adminlogin']);

//Home
Route::get('/',[\App\Http\Controllers\HomeController::class,'home']);
Route::get('/product_details/{id}',[\App\Http\Controllers\HomeController::class,'product_details']);


Route::get('/redirect',[\App\Http\Controllers\HomeController::class,'redirect']);
