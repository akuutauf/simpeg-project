<?php

use App\Http\Controllers\DashboardAdmin;
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

    // jurusan
    Route::get('/index/jurusan', [ManajemenJurusan::class, 'index'])->name('admin.jurusan');
    Route::get('/create/jurusan', [ManajemenJurusan::class, 'create'])->name('admin.create.jurusan');
    Route::post('/store/jurusan', [ManajemenJurusan::class, 'store'])->name('admin.store.jurusan');
    Route::get('/edit/{id}/jurusan', [ManajemenJurusan::class, 'edit'])->name('admin.edit.jurusan');
    Route::post('/update/{id}/jurusan', [ManajemenJurusan::class, 'update'])->name('admin.update.jurusan');
    Route::get('/destroy/{id}/jurusan', [ManajemenJurusan::class, 'destroy'])->name('admin.delete.jurusan');

    // prodi
    Route::get('/index/prodi', [ManajemenProdi::class, 'index'])->name('admin.prodi');
    Route::get('/create/prodi', [ManajemenProdi::class, 'create'])->name('admin.create.prodi');
    Route::post('/store/prodi', [ManajemenProdi::class, 'store'])->name('admin.store.prodi');
    Route::get('/edit/{id}/prodi', [ManajemenProdi::class, 'edit'])->name('admin.edit.prodi');
    Route::post('/update/{id}/prodi', [ManajemenProdi::class, 'update'])->name('admin.update.prodi');
    Route::get('/destroy/{id}/prodi', [ManajemenProdi::class, 'destroy'])->name('admin.delete.prodi');

    // mahasiswa
    Route::get('/index/mahasiswa', [ManajemenMahasiswa::class, 'index'])->name('admin.mahasiswa');
    Route::get('/create/mahasiswa', [ManajemenMahasiswa::class, 'create'])->name('admin.create.mahasiswa');
    Route::post('/store/mahasiswa', [ManajemenMahasiswa::class, 'store'])->name('admin.store.mahasiswa');
    Route::get('/edit/{id}/mahasiswa', [ManajemenMahasiswa::class, 'edit'])->name('admin.edit.mahasiswa');
    Route::post('/update/{id}/mahasiswa', [ManajemenMahasiswa::class, 'update'])->name('admin.update.mahasiswa');
    Route::get('/destroy/{id}/mahasiswa', [ManajemenMahasiswa::class, 'destroy'])->name('admin.delete.mahasiswa');

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
