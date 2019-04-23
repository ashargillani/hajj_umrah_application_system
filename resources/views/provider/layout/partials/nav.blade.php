<nav class="navbar navbar-default navbar-fixed-top navbar-toggleable-lg my-custom-navbar">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button id="menu-toggle" class="hamburger btn-link no-animation is-active">
                <span class="hamburger-inner fa fa-code"></span>
            </button>
            <ul class="breadcrumb">
                @yield('page-breadcrumb')
            </ul>
        </div>
        <ul class="nav navbar-nav  navbar-right ">
            <li class="dropdown profile">
                <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-expanded="false"><img src="http://127.0.0.1:8000/storage/users/March2019/8nrjqBqC9Wpe0mqWyKNO.png" class="profile-img"></a>
                <ul class="dropdown-menu dropdown-menu-animated">
                    <li class="profile-img">
                        <img src="http://127.0.0.1:8000/storage/users/March2019/8nrjqBqC9Wpe0mqWyKNO.png" class="profile-img">
                        <div class="profile-body">
                            <h5>Ashar Gillani</h5>
                            <h6>ashargillani@yahoo.com</h6>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="class-full-of-rum">
                        <a href="http://127.0.0.1:8000/admin/profile">
                            <i class="fa fa-user"></i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="/" target="_blank">
                            <i class="fa fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('user.logout') }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-block">
                                <i class="fa fa-power-off"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div><!-- /.container-fluid -->
</nav>