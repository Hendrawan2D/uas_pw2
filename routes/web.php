<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\NormalisasiController;
use App\Http\Controllers\LandingPagesController;

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

// Route::get('/', function () {
//     return view('homepage');
// });

// Route::get('/berita', function () {
//     return view('berita');
// });

// Route::get('/Jajanan', function () {
//     return view('Jajanan');
// });

// Route::get('/Pakaian', function () {
//     return view('pakaian');
// });

// Route::get('/blog', function () {
//     return view('blog');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/testing', function () {
    return view('dashboard.kriteria.index');
});

Route::get('/testingadd', function () {
    return view('dashboard.kriteria.add');
});


// Landing Pages
Route::get('/', [LandingPagesController::class,'index'])->name('home');

Route::get('/Berita', [LandingPagesController::class,'berita'])->name('berita');
Route::get('/Jajanan', [LandingPagesController::class,'jajanan'])->name('jajanan');
Route::get('/Pakaian', [LandingPagesController::class,'pakaian'])->name('pakaian');
Route::get('/Blog', [LandingPagesController::class,'blog'])->name('blog');
Route::get('/Contact', [LandingPagesController::class,'contact'])->name('contact');


// Login & Register
Route::middleware('guest')->group(function () {
  Route::get('/login', [AuthController::class, 'index'])->name('login');
  Route::post('/login', [AuthController::class, 'authenticate']);
  Route::get('/signup', [AuthController::class, 'signUp']);
  Route::post('/signup', [AuthController::class, 'store']);
});

Route::middleware('auth')->group(function () {
  Route::get('/signout', [AuthController::class, 'signOut']);
});

Route::get('/dashboard', [DashboardController::class, 'index']);


Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria');
Route::get('/kriteria/tambah', [KriteriaController::class, 'create'])->name('add_kriteria');
Route::post('/kriteria/store', [KriteriaController::class, 'store']);
Route::get('/kriteria/{id}/delete', [KriteriaController::class, 'delete'])->name('delete_kriteria');
Route::get('/kriteria/{id}/edit', [KriteriaController::class, 'edit'])->name('edit_kriteria');
Route::put('/kriteria/{id}', [KriteriaController::class, 'update'])->name('update_kriteria');


Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif');
Route::get('/alternatif/tambah', [AlternatifController::class, 'create'])->name('add_alternatif');
Route::post('/alternatif/store', [AlternatifController::class, 'store'])->name('simpan.data');
Route::get('/alternatif/{id}/delete', [AlternatifController::class, 'delete'])->name('delete_alternatif');
Route::get('/alternatif/{id}/edit', [AlternatifController::class, 'edit'])->name('edit_alternatif');
Route::put('/alternatif/{id}', [AlternatifController::class, 'update'])->name('update_alternatif');

Route::get('/hasil', [NormalisasiController::class, 'calculateSAW'])->name('hasil');

