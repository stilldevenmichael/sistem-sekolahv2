<?php

use App\Http\Controllers\MajorController;
use App\Http\Controllers\SchooClass\CreateController;
use App\Http\Controllers\SchooClass\DestroyController;
use App\Http\Controllers\SchooClass\EditController;
use App\Http\Controllers\SchooClass\IndexController;
use App\Http\Controllers\SchooClass\ShowController;
use App\Http\Controllers\SchooClass\StoreController;
use App\Http\Controllers\SchooClass\UpdateController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Manajemen Data Guru
Route::name('teachers.')->prefix('teachers')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('index');
    Route::get('/create', [TeacherController::class, 'create'])->name('create'); 
    Route::get('/{id}', [TeacherController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');
    Route::post('/', [TeacherController::class, 'store'])->name('store');
    Route::put('/{id}', [TeacherController::class, 'update'])->name('update');
    Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');
});

// Manajemen Data Siswa
Route::name('students.')->prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create'); 
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');
    Route::post('/', [StudentController::class, 'store'])->name('store');
    Route::put('/{id}', [StudentController::class, 'update'])->name('update');
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
});

// Manajemen Data Kelas
Route::name('classes.')->prefix('classes')->group(function () {
    Route::get('/', IndexController::class)->name('index');
    Route::get('/create', CreateController::class)->name('create'); 
    Route::get('/{id}', ShowController::class)->name('show');
    Route::get('/{id}/edit', EditController::class)->name('edit');
    Route::post('/', StoreController::class)->name('store');
    Route::put('/{id}', UpdateController::class)->name('update');
    Route::delete('/{id}', DestroyController::class)->name('destroy');
});

Route::resource('majors', MajorController::class);