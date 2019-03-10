<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li>
            <br />
            <img class="img-responsive" src="{{ asset('images/capital-allowance.png') }}" width="40%" />
            <br />
        </li>
        <li>
            <a href="#"><i class="fa fa-dashboard sidebar-style"></i> &nbsp; Dashboard</a>
        </li>
        <li>
            <a href="{{ route('list-assets-group') }}"><i class="fa fa-object-group sidebar-style"></i> &nbsp; Asset Groups</a>
        </li>
        <li>
            <a href="{{ route('list-assets') }}"><i class="fa fa-object-ungroup sidebar-style"></i> &nbsp; Assets </a>
        </li>
        <li>
            <a href="{{ route('show-dep-report-index') }}"><i class="fa fa-money sidebar-style"></i> &nbsp; Depreciation report </a>
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
            <a href="#"><span class="fa fa-user sidebar-style" ></span> &nbsp; My Account</a>
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
