<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <div class="side-menu-panel">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://127.0.0.1:8000/admin">
                    <div class="logo-icon-container">
                        <i class="fa fa-cubes fa-2x"></i>
                    </div>
                    <div class="title">
                        @if(Auth::user() && Auth::user()->hasRole('admin'))
                            Admin
                        @elseif(Auth::user() && Auth::user()->hasRole('provider'))
                            Package Provider
                        @else
                            User
                        @endif
                    </div>
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
            <a href="{{ route('provider.dashboard') }}"><i class="fa fa-dashboard sidebar-style"></i> &nbsp; Dashboard</a>
        </li>
        <li>
            <a href="{{ route('provider.index') }}"><i class="fa fa-object-group sidebar-style"></i> &nbsp; Package Providers</a>
        </li>
        <li>
            <a href="{{ route('packages.index') }}"><i class="fa fa-gift sidebar-style"></i> &nbsp; Packages</a>
        </li>
        <li>
            <a href="{{ route('hotels.index') }}"><i class="fa fa-bed sidebar-style"></i> &nbsp; Hotels</a>
        </li>
        <li>
            <a href="{{ route('flights.index') }}"><i class="fa fa-plane sidebar-style"></i> &nbsp; Flights</a>
        </li>
        <li>
            <a href="{{ route('journey.index') }}"><i class="fa fa-bus sidebar-style"></i> &nbsp; Journeys</a>
        </li>
        <li>
            <a href="{{ route('message.index') }}"><i class="fa fa-envelope sidebar-style"></i> &nbsp; Messenger</a>
        </li>
        <li>
            <a href="{{ route('provider.show-about-me') }}"><i class="fa fa-object-group sidebar-style"></i> &nbsp; About Me</a>
        </li>
        <li>
            <a href="{{ route('discount.index') }}"><i class="fa fa-dollar sidebar-style"></i> &nbsp; Discounts</a>
        </li>
        <li>
            <a href="{{ route('voyager.logout') }}"
               onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
                <form id="logout-form" action="{{ route('voyager.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <i class="fa  fa-power-off sidebar-style"></i> &nbsp; Log Out
            </a>
        </li>
    </ul>
</div>