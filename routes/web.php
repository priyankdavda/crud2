<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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
    return view('insert');
});

Route::post('/store',[MemberController::class, 'store']);
Route::get('/show',[MemberController::class, 'show']);
Route::get('/delete/{id}',[MemberController::class, 'destroy']);
Route::get('/edit/{id}',[MemberController::class, 'edit']);
Route::post('/update/{id}',[MemberController::class, 'update']);
