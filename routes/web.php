<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShowBlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnakAsuhController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\RekapDonasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public Frontend Routes
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/kepengurusan', [ManagementController::class, 'showPublic'])->name('kepengurusan');
Route::get('/anak-asuh', [AnakAsuhController::class, 'showFrontend'])->name('anak-asuh');
Route::get('/laporan-anak-asuh', [AnakAsuhController::class, 'showFrontend'])->name('laporan.anak_asuh');

Route::get('/galeri', [GalleryController::class, 'showPublic'])->name('galeri');
Route::get('show-blog', [ShowBlogController::class, 'index'])->name('show-blog');
Route::get('read-blog/{slug}', [ShowBlogController::class, 'read'])->name('read-blog');

Route::get('/tentang-kami', function () {
    return view('front.tentang_kami');
});
Route::get('/contact', function () {
    return view('front.contact');
});

// Public Donation Routes
Route::get('/form-donasi', function () {
    return view('front.rekening_donasi');
})->name('front.donasi.form');

Route::get('/rekening_donasi', function () {
    return view('front.rekening-donasi');
})->name('rekening_donasi');

Route::get('/laporan_donasi', [DonasiController::class, 'laporan'])->name('laporan_donasi');
Route::get('/donasi-form', [DonasiController::class, 'create'])->name('donasi.form');
Route::post('/form-donasi', [DonasiController::class, 'store'])->name('front.donasi.store');
Route::get('/donasi/upload', [DonasiController::class, 'showUploadForm'])->name('donasi.upload');
Route::post('/donasi/save', [DonasiController::class, 'uploadFoto'])->name('donasi.save');

// Authentication Routes
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login-validate', [LoginController::class, 'login'])->name('login-validate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Protected Admin Routes (Requires Auth)
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Resources automatically create index, create, store, show, edit, update, destroy routes
    Route::resource('blog', BlogController::class);
    Route::resource('anak_asuh', AnakAsuhController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('managements', ManagementController::class);

    // Admin Donation Management
    Route::get('/donasi/list', [DonasiController::class, 'index'])->name('donasi.index');
    Route::post('/donasi/store', [DonasiController::class, 'store'])->name('donasi.store');
    Route::get('/laporan-donasi', [DonasiController::class, 'laporan'])->name('donasi.laporan');
    Route::delete('/donasi/{donasi}', [DonasiController::class, 'destroy'])->name('donasi.destroy');
    Route::get('/admin/rekap-donasi', [RekapDonasiController::class, 'index'])->name('rekap.index');
});
