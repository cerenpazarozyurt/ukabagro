<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/hakkimizda', function () {
    return view('site.pages.hakkimizda');
});

Route::get('/insankaynaklari', function () {
    return view('site.pages.insankaynaklari');
});

Route::get('/urunler', function () {
    return view('site.pages.urunler');
});

Route::get('/vizyon', function () {
    return view('site.pages.vizyon');
});

Route::get('/tahilurunleri', function () {
    return view('site.pages.tahilurunleri');
});

Route::get('/bakliyaturunleri', function () {
    return view('site.pages.bakliyaturunleri');
});

Route::get('/kuruyemisurunleri', function () {
    return view('site.pages.kuruyemisurunleri');
});

Route::get('/e-katalog', function () {
    return view('site.pages.e-katalog');
});

Route::get('/blog', function () {
    return view('site.pages.blog');
});

Route::get('/blogdetay', function () {
    return view('site.pages.blogdetay');
});

Route::get('/iletisim', function () {
    return view('site.pages.iletisim');
});
