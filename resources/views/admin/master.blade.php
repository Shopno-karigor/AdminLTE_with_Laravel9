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


        @include('admin.pages.footer-script')
    </html>