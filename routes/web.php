<?php

use App\Http\Controllers\ImageController;
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

Route::get('/', [ImageController::class, 'home'])->name('home');
Route::get('/admin' , [ImageController::class, 'admin'])->name('admin');
Route::post('/store', [ImageController::class, 'store'])->name('store.image');
Route::get('/create', [ImageController::class, 'create'])->name('create');
Route::get('show/{id}', [ImageController::class, 'show']);
Route::delete('delete/{id}', [ImageController::class, 'delete']);
Route::get('edit/{id}', [ImageController::class, 'edit']);
Route::post('update/{id}', [ImageController::class, 'update']);
Route::get('download/{name}', [ImageController::class, 'download']);