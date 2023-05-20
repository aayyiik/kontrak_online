<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BagianController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisPekerjaanController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\RekananController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::post('/postlogin',[AuthController::class,'postlogin'])->name('postlogin');

//Dashboard
Route::get('/Dashboard_admin',[DashboardController::class, 'dashboard_admin']);

//User
Route::get('/user', [UserController::class, 'index']);
Route::post('/user/store', [UserController::class, 'store']);

//UnitKerja
Route::get('/unitkerja',[UnitKerjaController::class, 'index']);
Route::get('/unit/{id_unit}/edit', [UnitKerjaController::class, 'edit']);
Route::post('/unit/{id_unit}/update', [UnitKerjaController::class, 'update']);
Route::post('/unit/store', [UnitKerjaController::class, 'store']);

//Role
Route::get('/role', [RoleController::class, 'index']);
Route::post('/role/store', [RoleController::class, 'store']);

//Bagian
Route::get('/bagian', [BagianController::class, 'index']);
Route::get('/bagian/create', [BagianController::class, 'create']);
Route::post('/bagian/store', [BagianController::class, 'store']);
Route::get('/bagian/{id_bagian}/edit', [BagianController::class, 'edit']);
Route::post('/bagian/{id_bagian}/update', [BagianController::class, 'update']);
Route::get('/bagian/delete', [BagianController::class, 'delete']);

//Status
Route::get('/status', [StatusController::class, 'index']);
Route::post('/status/store', [StatusController::class, 'store']);
Route::get('/status/{id_status}/edit', [StatusController::class, 'edit']);
Route::post('/status/{id_status}/update', [StatusController::class, 'update']);

//Jenis Pekerjaan
Route::get('/jenispekerjaan',[JenisPekerjaanController::class, 'index']);
Route::post('/jenispekerjaan/store', [JenisPekerjaanController::class, 'store']);
Route::get('/jenispekerjaan/{id_jepe}/edit', [JenisPekerjaanController::class, 'edit']);
Route::post('/jenispekerjaan/{id_jepe}/update', [JenisPekerjaanController::class, 'update']);

//Kota
Route::get('/kota', [KotaController::class, 'index']);
Route::post('/kota/store', [KotaController::class, 'store']);
Route::get('/kota/{id_kota}/edit', [KotaController::class, 'edit']);
Route::post('/kota/{id_kota}/update', [KotaController::class, 'update']);

//Negara
Route::get('/negara', [NegaraController::class, 'index']);
Route::post('/negara/store', [NegaraController::class, 'store']);
Route::get('/negara/{id_negara}/edit', [NegaraController::class, 'edit']);
Route::post('/negara/{id_negara}/update', [NegaraController::class, 'update']);

//Rekanan
Route::get('/rekanan', [RekananController::class, 'index']);
Route::post('/rekanan/store', [RekananController::class, 'store']);