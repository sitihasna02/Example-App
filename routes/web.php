<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PegawaiController;
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

Route::get('/salome',[RegisterController::class,'index']);
Route::get('/register',[RegisterController::class,'register']);

Route::get('/pegawai',[PegawaiController::class,'index'])->name('pegawai.index');
Route::get('/create',[PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/createpegawai', [PegawaiController::class, 'store'])->name('pegawai.store');

Route::get('/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');

Route::post('/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');

Route::get('/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');

Auth::routes();
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin', function () {
        return 'admin page';
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
