<!DOCTYPE html>
<html lang="en">
    @include('provider.layout.partials.header')
    <body class="voyager">
        <div id="wrapper">
            @include('provider.layout.partials.sidebar')
            <div id="page-content-wrapper">
                @include('provider.layout.partials.nav')
                <div class="page-content">
                    <div class="container-fluid">
                        @yield('page-content')
                    </div>
                </div>
            </div>
        </div>
    </body>
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