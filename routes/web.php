<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;




Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{kategori}', [KategoriController::class, 'show'])->name('kategori.show');
Route::get('/kategori/{kategori}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

Route::get('/penyewa', [PenyewaController::class, 'index'])->name('penyewa.index');
Route::get('/penyewa/create', [PenyewaController::class, 'create'])->name('penyewa.create');
Route::post('/penyewa', [PenyewaController::class, 'store'])->name('penyewa.store');
Route::get('/penyewa/{penyewa}', [PenyewaController::class, 'show'])->name('penyewa.show');
Route::get('/penyewa/{penyewa}/edit', [PenyewaController::class, 'edit'])->name('penyewa.edit');
Route::put('/penyewa/{penyewa}', [PenyewaController::class, 'update'])->name('penyewa.update');
Route::delete('/penyewa/{penyewa}', [PenyewaController::class, 'destroy'])->name('penyewa.destroy');

Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create');
Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');
Route::get('/testimoni/{testimoni}', [TestimoniController::class, 'show'])->name('testimoni.show');
Route::get('/testimoni/{testimoni}/edit', [TestimoniController::class, 'edit'])->name('testimoni.edit');
Route::put('/testimoni/{testimoni}', [TestimoniController::class, 'update'])->name('testimoni.update');
Route::delete('/testimoni/{testimoni}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');

Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi/{transaksi}', [TransaksiController::class, 'show'])->name('transaksi.show');
Route::get('/transaksi/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
Route::put('/transaksi/{transaksi}', [TransaksiController::class, 'update'])->name('transaksi.update');
Route::delete('/transaksi/{transaksi}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{buku}', [BukuController::class, 'show'])->name('buku.show');
Route::get('/buku/{buku}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{buku}', [BukuController::class, 'update'])->name('buku.update');
Route::delete('/buku/{buku}', [BukuController::class, 'destroy'])->name('buku.destroy');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
Auth::routes();

});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'storeUser']);

Route::get('/front', [FrontController::class, 'index'])->name('front.index');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


