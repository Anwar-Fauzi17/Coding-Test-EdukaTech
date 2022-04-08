<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\AdminController;
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
Route::get('/register',[DatauserController::class, 'index']);
Route::post('/simpandaftar',[DatauserController::class, 'simpan']);
Route::get('/login-admin',[AdminController::class, 'index']);
Route::post('/simpandaftaradmin',[AdminController::class, 'simpan']);
Route::post('/simpanpelatihan',[AdminController::class, 'simpantraining']);
Route::post('/masuk',[AdminController::class, 'login']);
Route::get('/dashboard',[AdminController::class, 'indexadmin']);
Route::get('/pelatihan',[AdminController::class, 'indexadminpel']);
Route::get('/user',[AdminController::class, 'indexadminuser']);
Route::get('/logout',[AdminController::class, 'logout']);
Route::get('/profil',[AdminController::class, 'indexadminprofil']);
Route::get('data',[AdminController::class,'dataTablepelatihan'])->name('pelatihan.data');
Route::get('datauser',[AdminController::class,'dataTableuser'])->name('user.data');
Route::get('/tambahpelatihan',[AdminController::class, 'indextambahpelatihan']);