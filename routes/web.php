<?php

use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\ManajemenAkademik;
use App\Http\Controllers\ManajemenEmployee;
use App\Http\Controllers\ManajemenEmployeeType;
use App\Http\Controllers\ManajemenJurusan;
use App\Http\Controllers\ManajemenMahasiswa;
use App\Http\Controllers\ManajemenProdi;
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
    // Route::get('/index/event', [ManajemenEvent::class, 'index'])->name('admin.event');
    // Route::get('/create/event', [ManajemenEvent::class, 'create'])->name('admin.create.event');
    // Route::post('/store/event', [ManajemenEvent::class, 'store'])->name('admin.store.event');
    // Route::get('/edit/{id}/event', [ManajemenEvent::class, 'edit'])->name('admin.edit.event');
    // Route::post('/update/{id}/event', [ManajemenEvent::class, 'update'])->name('admin.update.event');
    // Route::get('/destroy/{id}/event', [ManajemenEvent::class, 'destroy'])->name('admin.delete.event');

    // akademik
    // Route::get('/index/akademik', [ManajemenAkademik::class, 'index'])->name('admin.akademik');

    // jurusan
    Route::get('/index/jurusan', [ManajemenJurusan::class, 'index'])->name('admin.jurusan');

    // prodi
    Route::get('/index/prodi', [ManajemenProdi::class, 'index'])->name('admin.prodi');

    // mahasiswa
    Route::get('/index/mahasiswa', [ManajemenMahasiswa::class, 'index'])->name('admin.mahasiswa');

    // employee
    Route::get('/index/employee', [ManajemenEmployee::class, 'index'])->name('admin.employee');
    Route::get('/create/employee', [ManajemenEmployee::class, 'create'])->name('admin.create.employee');
    Route::post('/store/employee', [ManajemenEmployee::class, 'store'])->name('admin.store.employee');
    Route::get('/edit/{id}/employee', [ManajemenEmployee::class, 'edit'])->name('admin.edit.employee');
    Route::post('/update/{id}/employee', [ManajemenEmployee::class, 'update'])->name('admin.update.employee');
    Route::get('/destroy/{id}/employee', [ManajemenEmployee::class, 'destroy'])->name('admin.delete.employee');

    // employee type
    Route::get('/index/employee-type', [ManajemenEmployeeType::class, 'index'])->name('admin.employee-type');
    Route::get('/create/employee-type', [ManajemenEmployeeType::class, 'create'])->name('admin.create.employee-type');
    Route::post('/store/employee-type', [ManajemenEmployeeType::class, 'store'])->name('admin.store.employee-type');
    Route::get('/edit/{id}/employee-type', [ManajemenEmployeeType::class, 'edit'])->name('admin.edit.employee-type');
    Route::post('/update/{id}/employee-type', [ManajemenEmployeeType::class, 'update'])->name('admin.update.employee-type');
    Route::get('/destroy/{id}/employee-type', [ManajemenEmployeeType::class, 'destroy'])->name('admin.delete.employee-type');
});

require __DIR__ . '/auth.php';

// https://api-sister.herokuapp.com/api/v1/

// Route::get('/kepegawaian', [KepegawaianPage::class, 'index'])->name('kepegawaian');
