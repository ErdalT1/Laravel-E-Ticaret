<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Controllers\Frontend\PageController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

route::get('/', [PageHomeController::class,'anasayfa'])->name('anasayfa');

route::get('/urun/detay', [PageController::class,'urundetay'])->name('urundetay');

route::get('/erkek-giyim', [PageController::class,'urunler'])->name('erkekurunler');

route::get('/kadin-giyim', [PageController::class,'urunler'])->name('kadinurunler');

route::get('/cocuk-giyim', [PageController::class,'urunler'])->name('cocukurunler');

route::get('/indirimdekiler', [PageController::class,'indirimdekiurunler'])->name('indirimdekiurunler');

route::get('/urunler', [PageController::class,'urunler'])->name('urunler');

route::get('/hakkimizda', [PageController::class,'hakkimizda'])->name('hakkimizda');

route::get('/iletisim', [PageController::class,'iletisim'])->name('iletisim');

route::get('/sepet', [PageController::class,'cart'])->name('sepet');
