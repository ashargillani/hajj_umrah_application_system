<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <div class="side-menu-panel">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://127.0.0.1:8000/admin">
                    <div class="logo-icon-container">
                        <i class="fa fa-cubes fa-2x"></i>
                    </div>
                    <div class="title">Voyager</div>
                </a>
            </div>
            <div class="panel widget center bgimage" style="background-image:url(http://127.0.0.1:8000/admin/assets/images/bg.jpg); background-size: cover; background-position: 0px;">
                <div class="dimmer"></div>
                <div class="panel-content">
                    <img src="http://127.0.0.1:8000/storage/users/March2019/8nrjqBqC9Wpe0mqWyKNO.png" class="avatar" alt="Ashar Gillani avatar">
                    <h4>Ashar Gillani</h4>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
        <div></div>
        <li>
            <a href="#"><i class="fa fa-dashboard sidebar-style"></i> &nbsp; Dashboard</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-object-group sidebar-style"></i> &nbsp; Asset Groups</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-object-ungroup sidebar-style"></i> &nbsp; Assets </a>
        </li>
        <li>
            <a href="#"<i class="fa fa-money sidebar-style"></i> &nbsp; Depreciation report </a>
        </li>
        <li>
            <a href="#"><i class="fa fa-sitemap sidebar-style"></i>  &nbsp; Allowance report </a>
        </li>
        <li>
            <a href="#"><i class="fa fa-cubes sidebar-style"></i> &nbsp; Company tax report</a>
        </li>
        <li>
            <a href="#"><i class="fa  fa-money sidebar-style"></i>  &nbsp; Minimum tax report</a>
        </li>
        <li>
            <a href="#"><i class="fa  fa-money sidebar-style"></i>  &nbsp; Maximum tax report</a>
        </li>
        <li>
            <a href="#"><i class="fa  fa-list sidebar-style"></i>  &nbsp; All reports</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-user sidebar-style" ></i> &nbsp; My Account</a>
        </li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <i class="fa  fa-power-off sidebar-style" style="color:red;"></i> &nbsp; Log Out
            </a>
        </li>
    </ul>
</div>