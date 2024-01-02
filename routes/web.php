<?php

use App\Http\Controllers\SiteCardinalController;
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
Route::get('blog',[SiteCardinalController::class,'blog'])->name('blog');
Route::get('about',[SiteCardinalController::class,'about'])->name('about');
Route::get('contact',[SiteCardinalController::class,'contact'])->name('contact');
route::get('gallery',[SiteCardinalController::class,'gallery'])->name('gallery');
route::get('room',[SiteCardinalController::class,'room'])->name('room');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
