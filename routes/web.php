<?php

use App\Http\Controllers\Backend\Bladecontroller;
use App\Http\Controllers\Backend\LogincController;
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
Route::post('/dologin',[LogincController::class,'dologin'])->name('do.login');
Route::get('/blade',[Bladecontroller::class,'blade'])->name('home.blade');
//user registration/login
Route::post('/do-registration',[Bladecontroller::class,'registration'])->name('do.registration');
Route::post('/do-login',[Bladecontroller::class,'login'])->name('do.login');
