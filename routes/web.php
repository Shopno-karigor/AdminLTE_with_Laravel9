<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
//     return view('admin.pages.index');
// });

Route::get('/',[IndexController::class, 'index_index'])->name('/');
Route::get('index',[IndexController::class, 'index_index2'])->name('index2');
Route::get('index-3',[IndexController::class, 'index_index3'])->name('index3');
