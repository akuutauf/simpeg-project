<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Simpeg\JabatanController;
use App\Http\Controllers\API\Simpeg\DosenController;
use App\Http\Controllers\API\Employee\EmployeeController;
use App\Http\Controllers\API\Employee\EmployeeTypeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {

    Route::get('jabatan', [JabatanController::class, 'getData']);


    Route::get('dosen', [DosenController::class, 'getData']);

    Route::get('employee', [EmployeeController::class, 'getData']);
    Route::get('employeetype', [EmployeeTypeController::class, 'getData']);

});
