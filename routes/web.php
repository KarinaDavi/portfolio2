<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/admin', function () {
    return view('admin');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function(){
	return view ('home');
})->middleware('auth') ;

/*Route::get('/dashboard/portfolio', function () {
    return view('admin.portfolio.index');
});*/

Route::get('/dashboard/portfolio', [App\Http\Controllers\Admin\ProjectsController::class, 'index'])->name('admin.portfolio.index');