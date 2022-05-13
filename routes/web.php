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
Route::get('Calendar',[IndexController::class, 'index_calendar'])->name('calendar');
Route::get('Gallery',[IndexController::class, 'index_gallery'])->name('gallery');
Route::get('Kanban',[IndexController::class, 'index_kanban'])->name('kanban');
Route::get('Invoice',[IndexController::class, 'index_invoice'])->name('invoice');
Route::get('Invoice Print',[IndexController::class, 'index_invoice_print'])->name('invoice-print');
Route::get('Lockscreen',[IndexController::class, 'index_lockscreen'])->name('lockscreen');
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
// Mailbox
Route::get('Mailbox',[IndexController::class, 'index_mailbox_mailbox'])->name('mailbox');
Route::get('Compose',[IndexController::class, 'index_compose_mailbox'])->name('mailbox-compose');
Route::get('Read',[IndexController::class, 'index_read_mailbox'])->name('read-mail');
// Pages
Route::get('Profile',[IndexController::class, 'index_profile_examples'])->name('profile');
Route::get('E-commerce',[IndexController::class, 'index_ecommerce_examples'])->name('ecommerce');
Route::get('Projects',[IndexController::class, 'index_projects_examples'])->name('projects');
Route::get('Project Add',[IndexController::class, 'index_project_add_examples'])->name('project-add');
Route::get('Project Edit',[IndexController::class, 'index_project_edit_examples'])->name('project-edit');
Route::get('Project Detail',[IndexController::class, 'index_project_detail_examples'])->name('project-detail');
Route::get('Contacts',[IndexController::class, 'index_contacts_examples'])->name('contacts');
Route::get('FAQ',[IndexController::class, 'index_faq_examples'])->name('faq');
Route::get('Contact Us',[IndexController::class, 'index_contact_us_examples'])->name('contact-us');
// Search
Route::get('Search Simple',[IndexController::class, 'index_simple_search'])->name('simple-search');
Route::get('Search Simple Results',[IndexController::class, 'index_simple_search_results'])->name('simple-search-results');
Route::get('Search Enhanced',[IndexController::class, 'index_enhanced_search'])->name('enhanced-search');
Route::get('Search Enhanced Results',[IndexController::class, 'index_enhanced_search_results'])->name('enhanced-search-results');
// Login & Register v1
Route::get('Login v1',[IndexController::class, 'index_loginv1'])->name('loginv1');
Route::get('Register v1',[IndexController::class, 'index_registerv1'])->name('registerv1');
Route::get('Forgot Password v1',[IndexController::class, 'index_forgot_passwordv1'])->name('forgot-passwordv1');
Route::get('Recover Password v1',[IndexController::class, 'index_recover_passwordv1'])->name('recover-passwordv1');
// Login & Register v2
Route::get('Login v2',[IndexController::class, 'index_loginv2'])->name('loginv2');
Route::get('Register v2',[IndexController::class, 'index_registerv2'])->name('registerv2');
Route::get('Forgot Password v2',[IndexController::class, 'index_forgot_passwordv2'])->name('forgot-passwordv2');
Route::get('Recover Password v2',[IndexController::class, 'index_recover_passwordv2'])->name('recover-passwordv2');
// Extra
Route::get('Legacy User Menu',[IndexController::class, 'index_legacy_user_menu'])->name('legacy-user-menu');
Route::get('Language Menu',[IndexController::class, 'index_language_menu'])->name('language-menu');
Route::get('Pace',[IndexController::class, 'index_pace'])->name('pace');
Route::get('Blank',[IndexController::class, 'index_blank'])->name('blank');
Route::get('Starter',[IndexController::class, 'index_starter'])->name('starter');
Route::get('Iframe',[IndexController::class, 'index_iframe'])->name('iframe');
// Errors
Route::get('Error 404',[IndexController::class, 'index_error_404'])->name('error-404');
Route::get('Error 500',[IndexController::class, 'index_error_500'])->name('error-500');

