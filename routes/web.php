<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailCourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Kegitancroller;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\PeluangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TopikController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
Route::get('/', [WelcomeController::class, 'index'])->name('/');
// });

// Route::get('/dashboard', function () {
//     return view('admin.index', ['title' => 'Dashboard']);
// })->middleware(['auth'])->name('dashboard');

// Route::middleware('auth')->group(function () {
// });

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/learningalltopik/{topikId?}', [LearningController::class, 'index'])->name('learningalltopik');
    Route::get('/learningvideo/{id}', [DetailCourseController::class, 'video'])->name('learningvideo');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/detailcourse/{id}', [DetailCourseController::class, 'index'])->name('detailcourse');
    Route::resource('/contact', ContactController::class);
});

Route::middleware(['auth', 'authorization'])->group(function () {
    // Route::prefix('dashboard')->group(function () {
    //     Route::get('/', function () {
    //         return view('admin.index', ['title' => 'Dashboard']);
    //     });
    // });
    Route::get('/dashboard', function () {
        return view('admin.index', ['title' => 'Dashboard']);
    })->middleware(['auth'])->name('dashboard');
    Route::resource('/dashboard/kegiatan', Kegitancroller::class);
    Route::resource('/dashboard/topik', TopikController::class);
    Route::resource('/dashboard/peluang', PeluangController::class);
});

require __DIR__ . '/auth.php';
