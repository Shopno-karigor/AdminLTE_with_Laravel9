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
// UI
Route::get('UI General',[IndexController::class, 'index_general'])->name('general');
Route::get('UI Icons',[IndexController::class, 'index_icons'])->name('icons');
Route::get('UI Buttons',[IndexController::class, 'index_buttons'])->name('buttons');
Route::get('UI Sliders',[IndexController::class, 'index_sliders'])->name('sliders');
Route::get('UI Modals',[IndexController::class, 'index_modals'])->name('modals');
Route::get('UI Navbar',[IndexController::class, 'index_navbar'])->name('navbar');
Route::get('UI Timeline',[IndexController::class, 'index_timeline'])->name('timeline');
Route::get('UI Ribbons',[IndexController::class, 'index_ribbons'])->name('ribbons');
// Forms
Route::get('Forms General',[IndexController::class, 'index_general_forms'])->name('general-forms');
Route::get('Forms Advanced',[IndexController::class, 'index_advanced_forms'])->name('advanced-forms');
Route::get('Forms Editors',[IndexController::class, 'index_editors_forms'])->name('editors-forms');
Route::get('Forms Validation',[IndexController::class, 'index_validation_forms'])->name('validation-forms');
// Tables
Route::get('Tables Simple',[IndexController::class, 'index_simple_tables'])->name('simple-tables');
Route::get('Tables Data',[IndexController::class, 'index_data_tables'])->name('data-tables');
Route::get('Tables Jsgrid',[IndexController::class, 'index_jsgrid_tables'])->name('jsgrid-tables');
