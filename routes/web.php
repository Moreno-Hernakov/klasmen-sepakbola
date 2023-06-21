<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
// use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\FrontendController;
// use App\Http\Controllers\ColorSchemeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\HistoryController;
// use App\Http\Controllers\PengadaanController;
// use App\Http\Controllers\ManajemenUserController;
// use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\UnitController;

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

// Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
// Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::resource('/users', UserController::class);
Route::get('/get', function () {
    return view('pages.backend.dashboard');
});

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/klasmen', 'klasmen')->name('klasmen');
    // Route::get('/about', 'about')->name('about');
    // Route::get('/services', 'services')->name('services');
    // Route::get('/contact', 'contact')->name('contact');
    // Route::get('/pengadaans', 'pengadaan')->name('pengadaans');
    // Route::get('/tentang-kami', 'tentangKami')->name('tentang-kami');
    // Route::get('/direksi', 'direksi')->name('direksi');
    // Route::get('/tata-kelola', 'tataKelola')->name('tata-kelola');
    // Route::get('/visi-misi', 'visiMisi')->name('visi-misi');
    // Route::get('/tata-nilai', 'tataNilai')->name('tata-nilai');
    // Route::get('/manajemen-resiko', 'manajemenResiko')->name('manajemen-resiko');
    // Route::get('/struktur-organisasi', 'strukturOrganisasi')->name('struktur-organisasi');
    // Route::get('/wilayah-kerja', 'wilayahKerja')->name('wilayah-kerja');
    // Route::get('/gallery', 'gallery')->name('gallery');
    // Route::get('/akhlak', 'akhlak')->name('akhlak');
});


// Route::get('dashboard2', function () {
//     return view('pages.dashboard');
// });

Route::middleware('auth')->group(function () {
    Route::resource('manajemen-user', ManajemenUserController::class);

    // Route::get('profile/{id}', [ProfileController::class, 'index'])->name('profile');
    // Route::post('profile-edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
    // Route::post('profile-password', [ProfileController::class, 'resetPassword'])->name('profile.password');
    // Route::resource('/unit', UnitController::class);
    Route::resource('/club', ClubController::class);
    Route::resource('/history', HistoryController::class);

    Route::controller(BackendController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('users', 'usersProfile')->name('users-profile');
    });
});