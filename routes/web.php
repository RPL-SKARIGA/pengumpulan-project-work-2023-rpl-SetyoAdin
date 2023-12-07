<?php

use App\Http\Controllers\GunungController;
use App\Http\Controllers\JalurController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendakiController;
use App\Http\Controllers\StatusPendakianController;

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

Route::get(
    '/',
    function () {
        return view('/welcome');
    }
);
//User Tampilan
Route::get('/', [PendakiController::class, 'welcome'])->name('welcome');
Route::get('/admin', [PendakiController::class, 'admin'])->name('admin')->middleware('auth');
Route::get('/datapendaki', [PendakiController::class, 'datapendaki'])->name('datapendaki')->middleware('auth');
Route::get('/pendataan', [PendakiController::class, 'pendataan'])->name('pendataan')->middleware('auth');
Route::get('/naik', [PendakiController::class, 'index1'])->name('naik')->middleware('auth');
Route::get('/turun', [PendakiController::class, 'index2'])->name('turun')->middleware('auth');
Route::get('/user', [PendakiController::class, 'user'])->name('user');
Route::get('/home', [PendakiController::class, 'home'])->name('home');
Route::get('/tutorial', [PendakiController::class, 'tutorial'])->name('tutorial');


//Insert Data
Route::get('/insert', [PendakiController::class, 'insert'])->name('insert');
Route::post('/insertdata', [PendakiController::class, 'insertdata'])->name('insertdata');
Route::post('/tampil_detail{id}', [PendakiController::class, 'tampil_detail'])->name('tampil_detail');
Route::get('/delete/{id_gunung}', [GunungController::class, 'delete'])->name('delete');
Route::get('/deletedt/{id}', [PendakiController::class, 'deletedt'])->name('deletedt');
Route::get('/deletedat/{id}', [PendakiController::class, 'deletedat'])->name('deletedat');
Route::put('/edit-tanggal/{id}', [PendakiController::class, 'editTanggal'])->name('edit-tanggal');

//Insert Gunung
Route::get('/gunung', [GunungController::class, 'gunung'])->name('gunung')->middleware('auth');
Route::get('/tambah', [GunungController::class, 'tambah_gn'])->name('tambah_gn');
Route::post('/tambahgn', [GunungController::class, 'tambahgn'])->name('tambahgn');
Route::get('/tampilkandata/{id_gunung}', [GunungController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id_gunung}', [GunungController::class, 'updatedata'])->name('updatedata');
Route::get('/tampil/{id_pendaki}', [PendakiController::class, 'tampil'])->name('tampil');
Route::post('/fiksturun/{id_pendaki}', [PendakiController::class, 'fiksturun'])->name('fiksturun');

//Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginadmin', [LoginController::class, 'loginadmin'])->name('loginadmin');
//Register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeradmin', [LoginController::class, 'registeradmin'])->name('registeradmin');
//Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
