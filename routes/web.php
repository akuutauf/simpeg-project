<?php

use App\Http\Controllers\KepegawaianPage;
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
    return view('layouts.pages.beranda');
});

Route::get('/kepegawaian', function () {
    return view('layouts.pages.kepegawaian');
});

Route::get('/akademik', function () {
    return view('layouts.pages.akademik');
});

// middleware for admin page
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->middleware(['auth'])->name('dashboard');

    Route::get('/dashboard-admin', function () {
        return view('admin.index');
    })->middleware(['auth'])->name('dashboard');
});

require __DIR__ . '/auth.php';

// https://api-sister.herokuapp.com/api/v1/

// Route::get('/kepegawaian', [KepegawaianPage::class, 'index'])->name('kepegawaian');
