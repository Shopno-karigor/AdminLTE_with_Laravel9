<!DOCTYPE html>
    <html lang="en">
        @include('admin.pages.header')
        @yield('index')
        @yield('index2')
        @yield('index3')
        @yield('widgets')
        {{-- Layout --}}
        @yield('top-nav')
        @yield('top-nav-sidebar')
        @yield('boxed')
        @yield('fixed-sidebar')
        @yield('fixed-sidebar-custom')
        @yield('fixed-topnav')
        @yield('fixed-footer')
        @yield('collapsed-sidebar')

        @include('admin.pages.footer-script')
    </html>