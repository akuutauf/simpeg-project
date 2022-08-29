<?php

use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\ManajemenAkademik;
use App\Http\Controllers\ManajemenEmployee;
use App\Http\Controllers\ManajemenEmployeeType;
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

    // admin
    Route::get('/dashboard', [DashboardAdmin::class, 'index'])->name('dashboard');

    // contoh route event
    Route::get('/index/event', [ManajemenEvent::class, 'index'])->name('admin.event');
    Route::get('/create/event', [ManajemenEvent::class, 'create'])->name('admin.create.event');
    Route::post('/store/event', [ManajemenEvent::class, 'store'])->name('admin.store.event');
    Route::get('/edit/{id}/event', [ManajemenEvent::class, 'edit'])->name('admin.edit.event');
    Route::post('/update/{id}/event', [ManajemenEvent::class, 'update'])->name('admin.update.event');
    Route::get('/destroy/{id}/event', [ManajemenEvent::class, 'destroy'])->name('admin.delete.event');

    // akademik
    Route::get('/index/akademik', [ManajemenAkademik::class, 'index'])->name('admin.akademik');
    Route::get('/create/akademik', [ManajemenAkademik::class, 'create'])->name('admin.create.akademik');
    Route::post('/store/akademik', [ManajemenAkademik::class, 'store'])->name('admin.store.akademik');

    // employee
    Route::get('/index/employee', [ManajemenEmployee::class, 'index'])->name('admin.employee');

    // employee type
    Route::get('/index/employee-type', [ManajemenEmployeeType::class, 'index'])->name('admin.employee-type');
});

require __DIR__ . '/auth.php';

// https://api-sister.herokuapp.com/api/v1/

// Route::get('/kepegawaian', [KepegawaianPage::class, 'index'])->name('kepegawaian');
