<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ObjectWisataController;
use App\Livewire\ObjekWisata;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ownerdashboard;

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

Route::view('/', 'index');
Route::view('/wisata', 'objek-wisata');
Route::view('/berita', 'berita');
Route::view('/membership', 'membership');
Route::get('/dashboard-owner', [ownerdashboard::class, 'main']);
Route::get('/dashboard-owner/user', [ownerdashboard::class, 'user']);
Route::get('/dashboard-owner/wisata', [ownerdashboard::class, 'wisata']);
Route::get('/dashboard-owner/berita', [ownerdashboard::class, 'berita']);



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('admin/dashboard', 'livewire.admin');
    // ->middleware(['auth', 'verified']);

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('admin/objectwisata', ObjectWisataController::class);
Route::resource('admin/berita', BeritaController::class);

require __DIR__ . '/auth.php';
