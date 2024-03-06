<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggajianController;
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

Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/loginproses',[LoginController::class,'loginproses'])->name('loginproses');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/registerproses',[LoginController::class,'registerproses'])->name('registerproses');


Route::group(['prefix' => 'admin','middleware' => ['auth'],'as' => 'admin.'],function(){
 Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
 // Route buat User
 Route::get('/user',[HomeController::class,'index'])->name('index');
 Route::get('/tambahuser',[HomeController::class,'tambahuser'])->name('tambahuser');
 Route::post('/storeuser',[HomeController::class,'storeuser'])->name('storeuser');
 Route::get('/edituser/{id}',[HomeController::class,'edituser'])->name('edituser');
 Route::put('/updateuser/{id}',[HomeController::class,'updateuser'])->name('updateuser');
 Route::delete('/deleteuser/{id}',[HomeController::class,'deleteuser'])->name('deleteuser');

 // Route buat karyawan
 Route::get('/karyawan',[KaryawanController::class,'karyawan'])->name('karyawan');
 Route::get('/tambahkaryawan',[KaryawanController::class,'tambahkaryawan'])->name('tambahkaryawan');
 Route::post('/storekaryawan',[KaryawanController::class,'storekaryawan'])->name('storekaryawan');
 Route::get('/editkaryawan/{id}',[KaryawanController::class,'editkaryawan'])->name('editkaryawan');
 Route::put('/updatekaryawan/{id}',[KaryawanController::class,'updatekaryawan'])->name('updatekaryawan');
 Route::delete('/deletekaryawan/{id}',[KaryawanController::class,'deletekaryawan'])->name('deletekaryawan');

 // Route buat contact
 Route::get('/contact',[ContactController::class,'contact'])->name('contact');

 //Route buat golongan
 Route::get('/golongan',[GolonganController::class,'golongan'])->name('golongan');
 Route::get('/tambahgolongan',[GolonganController::class,'tambahgolongan'])->name('tambahgolongan');
 Route::post('/storegolongan',[GolonganController::class,'storegolongan'])->name('storegolongan');
 Route::get('/editgolongan/{id}',[GolonganController::class,'editgolongan'])->name('editgolongan');
 Route::put('/updategolongan/{id}',[GolonganController::class,'updategolongan'])->name('updategolongan');
 Route::delete('/deletegolongan/{id}',[GolonganController::class,'deletegolongan'])->name('deletegolongan');

 //Route buat Penggajian
 Route::get('/penggajian',[PenggajianController::class,'penggajian'])->name('penggajian');
 

});









