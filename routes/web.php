<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PostController; // ✅ Tambahkan ini
use App\Http\Controllers\Admin\PostController as AdminPostController;

// Halaman utama
Route::get('/', [HomeController::class, 'index']);

// Halaman Tentang
Route::get('/tentang', [HomeController::class, 'about'])->name('about');

// Halaman Blog
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');       // ✅ Tambahkan ini
Route::get('/blog/{post}', [PostController::class, 'show'])->name('blog.show');  // ✅ Tambahkan ini

// Form kontak
Route::post('/kontak', [ContactController::class, 'store'])->name('kontak.store');

// Dashboard default
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grup route khusus yang butuh login
Route::middleware(['auth'])->group(function () {
    // Admin: lihat dan hapus pesan kontak
    Route::get('/admin/kontak', [ContactController::class, 'index'])->name('kontak.index');
    Route::delete('/admin/kontak/{id}', [ContactController::class, 'destroy'])->name('kontak.destroy');

    // Admin: CRUD Project
    Route::resource('/admin/projects', ProjectController::class)->names('projects');
    Route::resource('/admin/blog', AdminPostController::class)->names('admin.blog');

    // Profile user
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/skill', function () {
    return view('skill');
})->name('skill');

require __DIR__ . '/auth.php';
