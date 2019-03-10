<!DOCTYPE html>
<html>
@include('layout.main_partials.header')
<body>
@include('layout.main_partials.nav')
<div id="wrapper">
{{--Sidebar wrapper--}}
@include('layout.main_partials.sidebar')
<!-- Page Content Wrapper-->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            @yield('page-content')
        </div>
    </div>
    <!-- End Page Content Wrapper-->
</div>
</body>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $("#menu-toggle").click(function(e) {
                e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    });
</script>
@yield('additional-scripts')
</html>