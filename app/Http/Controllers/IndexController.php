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
}
