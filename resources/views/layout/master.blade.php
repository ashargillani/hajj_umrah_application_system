<!DOCTYPE html>
<html lang="en">
@include('layout.landing_page_partials.header')
<body>
    @include('layout.landing_page_partials.loader')
    @include('layout.landing_page_partials.upper_nav')
    @include('layout.landing_page_partials.nav')
    @yield('page-content')
    @include('layout.landing_page_partials.footer')
    @include('layout.landing_page_partials.copyrights')
    @include('layout.landing_page_partials.js_links')
</body>
</html>