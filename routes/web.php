<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

//form input ke template

Route::get('/form', [TemplateController::class, 'index']);
Route::get('/cetak',[TemplateController::class,'store']);

//ttd ckeditor
Route::get('/ttd',[SignatureController::class,'index']);
Route::get('/form_ttd',[SignatureController::class,'create']);

//login
Route::get('/login', [AuthController::class, 'login']);
