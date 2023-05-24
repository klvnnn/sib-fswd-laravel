<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return ('Hallo Selamat datang Kelvin Aulia Wilson');
});

Route::redirect('/nama','/hello');

Route::fallback(function(){
    return ('Halaman tidak tersedia');
});

Route::get('/conflict/nokia', function(){
    return 'Nama Barang Saya yang sebenarnya adalah nokia';
});

Route::get('/items/{merk}', function($id){
    return 'Nama Barang: '.$id;
});

Route::get('/conflict/{nama}', function($namaItem){
    return 'Nama Barang :'. $namaItem;
});

Route::get('/product', [ItemController::class, 'item']);

//Route to Task 19
Route::get('/users', [UserController::class, 'users']);

//Route to Task 23
Route::get('/', [UserController::class, 'landing']);
Route::get('/dashboard', [UserController::class, 'dashboard']);



