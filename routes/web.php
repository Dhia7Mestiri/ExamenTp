<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelCrudController;

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
Route::get('crud',[LaravelCrudController::class,'index']);
Route::post('add',[LaravelCrudController::class, 'add']);
Route::get('edit/{id}',[LaravelCrudController::class, 'edit']);
Route::get('delete/{id}',[LaravelCrudController::class, 'delete']);
Route::post('update', [LaravelCrudController::class, 'update'])->name('update');
