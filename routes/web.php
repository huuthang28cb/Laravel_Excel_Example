<?php

use App\Http\Controllers\ExcelController;
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

Route::get('/excel', [ExcelController::class, 'index']);
Route::post('/create', [ExcelController::class, 'create'])->name('excel.create');
Route::get('/edit/{id}', [ExcelController::class, 'edit'])->name('excel.edit');
Route::post('/update/{id}', [ExcelController::class, 'update'])->name('excel.update');
Route::get('/delete/{id}', [ExcelController::class, 'delete'])->name('excel.delete');

Route::resource('products','ProductController');
