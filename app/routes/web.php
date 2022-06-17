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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [App\Http\Controllers\CookController::class, 'index'])->name('index');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin', [App\Http\Controllers\AdminController::class, 'index'])->middleware('auth');
Route::post('admin', [App\Http\Controllers\AdminController::class, 'delete'])->name('admin.delete');

Route::get('admin/add', [App\Http\Controllers\AdminController::class, 'add'])->middleware('auth')->name('add');
Route::post('admin/create', [App\Http\Controllers\AdminController::class, 'create']);
//Auth::routes();

Route::get('admin/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->middleware('auth')->name('edit');
Route::post('admin/update', [App\Http\Controllers\AdminController::class, 'update']);
Route::post('admin/delete_img', [App\Http\Controllers\AdminController::class, 'delete_img'])->name('admin.delete_img');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
