<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index_index(){ return view('admin.pages.index');}
    public function index_index2(){ return view('admin.pages.index2');}
    public function index_index3(){ return view('admin.pages.index3');}
    public function index_widgets(){ return view('admin.pages.widgets');}
    public function index_calendar(){ return view('admin.pages.calendar');}
    public function index_gallery(){ return view('admin.pages.gallery');}
    public function index_kanban(){ return view('admin.pages.kanban');}
    public function index_invoice(){ return view('admin.pages.invoice');}
    public function index_invoice_print(){ return view('admin.pages.invoice-print');}
    public function index_lockscreen(){ return view('admin.pages.lockscreen');}
    // Layout
    public function index_top_nav(){ return view('admin.pages.layout.top-nav');}
    public function index_top_nav_sidebar(){ return view('admin.pages.layout.top-nav-sidebar');}
    public function index_boxed(){ return view('admin.pages.layout.boxed');}
    public function index_fixed_sidebar(){ return view('admin.pages.layout.fixed-sidebar');}
    public function index_fixed_sidebar_custom(){ return view('admin.pages.layout.fixed-sidebar-custom');}
    public function index_fixed_topnav(){ return view('admin.pages.layout.fixed-topnav');}
    public function index_fixed_footer(){ return view('admin.pages.layout.fixed-footer');}
    public function index_collapsed_sidebar(){ return view('admin.pages.layout.collapsed-sidebar');}
    // Charts
    public function index_chartjs(){ return view('admin.pages.charts.chartjs');}
    public function index_flot(){ return view('admin.pages.charts.flot');}
    public function index_inline(){ return view('admin.pages.charts.inline');}
    public function index_uplot(){ return view('admin.pages.charts.uplot');}
    // UI
    public function index_general(){ return view('admin.pages.UI.general');}
    public function index_icons(){ return view('admin.pages.UI.icons');}
    public function index_buttons(){ return view('admin.pages.UI.buttons');}
    public function index_sliders(){ return view('admin.pages.UI.sliders');}
    public function index_modals(){ return view('admin.pages.UI.modals');}
    public function index_navbar(){ return view('admin.pages.UI.navbar');}
    public function index_timeline(){ return view('admin.pages.UI.timeline');}
    public function index_ribbons(){ return view('admin.pages.UI.ribbons');}
    // Forms
    public function index_general_forms(){ return view('admin.pages.forms.general');}
    public function index_advanced_forms(){ return view('admin.pages.forms.advanced');}
    public function index_editors_forms(){ return view('admin.pages.forms.editors');}
    public function index_validation_forms(){ return view('admin.pages.forms.validation');}
    // Tables
    public function index_simple_tables(){ return view('admin.pages.tables.simple');}
    public function index_data_tables(){ return view('admin.pages.tables.data');}
    public function index_jsgrid_tables(){ return view('admin.pages.tables.jsgrid');}
    // Mailbox
    public function index_mailbox_mailbox(){ return view('admin.pages.mailbox.mailbox');}
    public function index_compose_mailbox(){ return view('admin.pages.mailbox.compose');}
    public function index_read_mailbox(){ return view('admin.pages.mailbox.read-mail');}
    // Pages
    public function index_profile_examples(){ return view('admin.pages.examples.profile');}
    public function index_ecommerce_examples(){ return view('admin.pages.examples.e-commerce');}
    public function index_projects_examples(){ return view('admin.pages.examples.projects');}
    public function index_project_add_examples(){ return view('admin.pages.examples.project-add');}
    public function index_project_edit_examples(){ return view('admin.pages.examples.project-edit');}
    public function index_project_detail_examples(){ return view('admin.pages.examples.project-detail');}
    public function index_contacts_examples(){ return view('admin.pages.examples.contacts');}
    public function index_faq_examples(){ return view('admin.pages.examples.faq');}
    public function index_contact_us_examples(){ return view('admin.pages.examples.contact-us');}
    // Search
    public function index_simple_search(){ return view('admin.pages.search.simple');}
    public function index_simple_search_results(){ return view('admin.pages.search.simple-results');}
    public function index_enhanced_search(){ return view('admin.pages.search.enhanced');}
    public function index_enhanced_search_results(){ return view('admin.pages.search.enhanced-results');}
    // Login & Register v1
    public function index_loginv1(){ return view('admin.pages.Login-Register-v1.login');}
    public function index_registerv1(){ return view('admin.pages.Login-Register-v1.register');}
    public function index_forgot_passwordv1(){ return view('admin.pages.Login-Register-v1.forgot-password');}
    public function index_recover_passwordv1(){ return view('admin.pages.Login-Register-v1.recover-password');}
    // Login & Register v2
    public function index_loginv2(){ return view('admin.pages.Login-Register-v2.login');}
    public function index_registerv2(){ return view('admin.pages.Login-Register-v2.register');}
    public function index_forgot_passwordv2(){ return view('admin.pages.Login-Register-v2.forgot-password');}
    public function index_recover_passwordv2(){ return view('admin.pages.Login-Register-v2.recover-password');}
    // Extra
    public function index_legacy_user_menu(){ return view('admin.pages.examples.legacy-user-menu');}
    public function index_language_menu(){ return view('admin.pages.examples.language-menu');}
    public function index_pace(){ return view('admin.pages.examples.pace');}
    public function index_blank(){ return view('admin.pages.examples.blank');}
    public function index_starter(){ return view('admin.pages.starter');}
    // Errors
    public function index_error_404(){ return view('admin.pages.examples.404');}
    public function index_error_500(){ return view('admin.pages.examples.500');}


}
