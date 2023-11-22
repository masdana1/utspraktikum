<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\LoginController;

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

Route::get('/databunga' ,[ EcommerceController::class, 'index'])->name('databunga');

Route::get('/tambahdata' ,[ EcommerceController::class, 'bunga'])->name('tambahdata');
Route::post('/insertdata' ,[ EcommerceController::class, 'insertdata'])->name('insertdata');

Route::get('/tampildata/{id}' ,[ EcommerceController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}' ,[ EcommerceController::class, 'updatedata'])->name('updatedata');


Route::get('/delete/{id}' ,[ EcommerceController::class, 'delete'])->name('delete');
Route::get('/register' ,[ LoginController::class, 'register'])->name('register');
Route::post('/registeruser' ,[ LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/login' ,[ LoginController::class, 'login'])->name('login');



