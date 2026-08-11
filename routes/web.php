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
use Psy\Command\EditCommand;

Route::get('/', function () {
    return view('welcome');
});


//Management Data Guru (Action Controller)
Route::name('teachers.')->prefix('teachers')->group(function () {

    //Halaman Daftar Siswa
    Route::get('/', [TeacherController::class, 'index'])->name('index');

    // Halaman Detail Siswa
    Route::get('/{id}', [TeacherController::class, 'show'])->name('show');

    // Halaman Tambah Guru
    Route::get('/create', [TeacherController::class, 'create'])->name('create');

    // Halaman Edit Guru
    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');

    // Logika Tambah Guru
    Route::post('/', [TeacherController::class, 'store'])->name('store');

    // Logika Edit Guru
    Route::put('/{id}', [TeacherController::class, 'update'])->name('update');

    // Logika Hapus Guru
    Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');
});

// Manajemen Data Siswa (Action Controller)
Route::name('students.')->prefix('students')->group(function () {

    // Halaman Daftar Siswa
    Route::get('/', [StudentController::class, 'index'])->name('index');

    // Halaman Detail Siswa
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');

    // Halaman Tambah Siswa
    Route::get('/create', [StudentController::class, 'create'])->name('create');

    // Halaman Edit Siswa
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');

    // Logika Tambah Siswa
    Route::post('/', [StudentController::class, 'store'])->name('store');

    // Logika Edit Siswa
    Route::put('/{id}', [StudentController::class, 'update'])->name('update');

    // Logika Hapus Siswa
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
});

Route::name('classes.')->prefix('classes')->group(function () {

    // Halaman Daftar Siswa
    Route::get('/', IndexController::class)->name('index');

    // Halaman Detail Siswa
    Route::get('/{id}', ShowController::class)->name('show');

    // Halaman Tambah Siswa
    Route::get('/create', CreateController::class)->name('create');

    // Halaman Edit Siswa
    Route::get('/{id}/edit', EditController::class)->name('edit');

    // Logika Tambah Siswa
    Route::post('/', StoreController::class)->name('store');

    // Logika Edit Siswa
    Route::put('/{id}', UpdateController::class)->name('update');

    // Logika Hapus Siswa
    Route::delete('/{id}', DestroyController::class)->name('destroy');
});

Route::resource('majors', MajorController::class);



