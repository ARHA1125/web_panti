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
use App\Models\AnakAsuh;


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

// Route::get('/dashboard', function () {
//     return view('admin.dashboard.index');
// });
Route::resource("blog", BlogController::class)->middleware('auth');
Route::get('/kepengurusan', function () {
    return view('front.kepengurusan');
})->name('kepengurusan');
Route::get('/anak-asuh', [AnakAsuhController::class, 'showFrontend'])->name('anak-asuh');
Route::get('/rekening-donasi', function () {
    return view('front.rekening_donasi');
})->name('front.donasi.form');
Route::get('/validasi_donasi', function () {
    return view('front.validasi_donasi');
})->name('validasi_donasi');
Route::get('/laporan_donasi', function () {
    return view('front.laporan_donasi');
})->name('laporan_donasi');


// ✅ Route publik (tidak perlu login)
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/galeri', [GalleryController::class, 'showPublic'])->name('galeri');
Route::get('show-blog', [ShowBlogController::class, 'index'])->name('show-blog');
Route::get('read-blog/{slug}', [ShowBlogController::class, 'read'])->name('read-blog');
Route::get('/kepengurusan', [ManagementController::class, 'showPublic'])->name('kepengurusan');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login-validate', [LoginController::class, 'login'])->name('login-validate');
Route::get('/laporan-anak-asuh', [AnakAsuhController::class, 'showFrontend'])->name('laporan.anak_asuh');


// ✅ Route logout (perlu login)
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// ✅ Route yang butuh login
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource("blog", BlogController::class);
    Route::resource('anak_asuh', AnakAsuhController::class);
    Route::get('/anak-asuh/{id}/edit', [AnakAsuhController::class, 'edit'])->name('anak_asuh.edit');
    Route::put('/anak-asuh/{id}', [AnakAsuhController::class, 'update'])->name('anak_asuh.update');
    
    Route::resource('/gallery', GalleryController::class);
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');

    Route::resource('managements', ManagementController::class);
    Route::get('/donasi/list', [DonasiController::class, 'index'])->name('donasi.index');
});
    
// ✅ Route donasi publik
Route::get('/donasi', [DonasiController::class, 'create'])->name('donasi.form');
Route::post('/rekening-donasi', [DonasiController::class, 'store'])->name('front.donasi.store');


