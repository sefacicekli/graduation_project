<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class, 'login_form'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::post('signout', [LoginController::class, 'signout'])->name('sign-out');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('students', [AdminController::class, 'import'])->name('import');
    Route::post('students', [AdminController::class, 'importStore'])->name('import-store');
    Route::get('exam-document', [AdminController::class, 'examDocument'])->name('exam-document');
    Route::get('class-assignments', [AdminController::class, 'classAssignments'])->name('class-assignments');
    Route::post('class-assignments', [AdminController::class, 'class']);
});


