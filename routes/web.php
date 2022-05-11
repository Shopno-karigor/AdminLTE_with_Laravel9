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

Route::get('/',[IndexController::class, 'index_index'])->name('/');
Route::get('index',[IndexController::class, 'index_index2'])->name('index2');
Route::get('index-3',[IndexController::class, 'index_index3'])->name('index3');
Route::get('Widgets',[IndexController::class, 'index_widgets'])->name('widgets');
// Layout
Route::get('Top Nav',[IndexController::class, 'index_top_nav'])->name('top-nav');
Route::get('Top Nav Sidebar',[IndexController::class, 'index_top_nav_sidebar'])->name('top-nav-sidebar');
Route::get('Boxed',[IndexController::class, 'index_boxed'])->name('boxed');
Route::get('Fixed Sidebar',[IndexController::class, 'index_fixed_sidebar'])->name('fixed-sidebar');
Route::get('Fixed Sidebar Custom',[IndexController::class, 'index_fixed_sidebar_custom'])->name('fixed-sidebar-custom');
Route::get('Fixed Topnav',[IndexController::class, 'index_fixed_topnav'])->name('fixed-topnav');
Route::get('Fixed Footer',[IndexController::class, 'index_fixed_footer'])->name('fixed-footer');
Route::get('Collapsed Sidebar',[IndexController::class, 'index_collapsed_sidebar'])->name('collapsed-sidebar');
// Charts
Route::get('Chartjs',[IndexController::class, 'index_chartjs'])->name('chartjs');
Route::get('Flot',[IndexController::class, 'index_flot'])->name('flot');
Route::get('Inline',[IndexController::class, 'index_inline'])->name('inline');
Route::get('Uplot',[IndexController::class, 'index_uplot'])->name('uplot');