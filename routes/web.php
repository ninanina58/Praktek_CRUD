<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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
    return view('beranda');
});

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/tambah_menu',[MenuController::class,'create']);
Route::post('/tambah_menu',[MenuController::class,'store']);
Route::get('/edit_menu/{id}',[MenuController::class,'edit']);
Route::post('/edit_menu/{id}',[MenuController::class,'update']);
Route::get('/delete_menu/{id}',[MenuController::class,'destroy']);

