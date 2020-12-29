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

/*Route::get('/portfolio', function () {
    return view('portfolio');
});*/
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('portfolio');
Route::get('/portfolio', [App\Http\Controllers\FrontendController::class, 'index'])->name('portfolio');

/*Route::get('/admin', function () {
    return view('admin');
});*/

Auth::routes();

Route::get('/dashboard', function(){
	return view ('home');
})->middleware('auth') ;

Route::get('/dashboard/portfolio', [App\Http\Controllers\Admin\ProjectsController::class, 'index'])->name('admin.portfolio.index');

Route::post('/dashboard/portfolio/store', [App\Http\Controllers\Admin\ProjectsController::class, 'store'])->name('admin.portfolio.store');
Route::get('/dashboard/portfolio/{projectId}/edit', [App\Http\Controllers\Admin\ProjectsController::class, 'edit'])->name('admin.portfolio.edit');
Route::post('/dashboard/portfolio/{projectId}/update', [App\Http\Controllers\Admin\ProjectsController::class, 'update'])->name('admin.portfolio.update');
Route::delete('/dashboard/portfolio/{projectId}/delete', [App\Http\Controllers\Admin\ProjectsController::class, 'delete'])->name('admin.portfolio.delete');