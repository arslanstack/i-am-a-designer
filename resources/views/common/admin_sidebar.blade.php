<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" style="width: 50px;" src="{{ asset('admin_assets/img/profile_small.jpg') }}" />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Welcome {{ ucwords(Auth::guard('admin')->user()->username) }}</span>
                        <span class="text-muted text-xs block">
                            {{ get_section_content('project', 'site_title') }}
                        </span>
                    </a>
                </div>
                <div class="logo-element">
                    {{ ucwords(Auth::guard('admin')->user()->username) }}
                    <span class="text-muted text-xs block">
                        {{ get_section_content('project', 'short_site_title') }}
                    </span>
                </div>
            </li>
            <li class="{{ Request::is('admin/') ? 'active' : '' }} {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ url('admin') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="{{ Request::is('admin/users') ? 'active' : '' }} {{ Request::is('admin/users/detail*') ? 'active' : '' }}">
                <a href="{{ url('admin/users') }}"><i class="fa fa-users"></i> <span class="nav-label">Client Management</span></a>
            </li>
            <li class="{{ Request::is('admin/categories') ? 'active' : '' }} {{ Request::is('admin/categories/detail*') ? 'active' : '' }}">
                <a href="{{ url('admin/categories') }}"><i class="fa fa-tags"></i> <span class="nav-label">Designer Categories</span></a>
            </li>
            <li class="{{ Request::is('admin/designers') ? 'active' : '' }} {{ Request::is('admin/designers/detail*') ? 'active' : '' }}">
                <a href="{{ url('admin/designers') }}"><i class="fa fa-user"></i> <span class="nav-label">Designers Management</span></a>
            </li>
            <li class="{{ Request::is('admin/projects') ? 'active' : '' }} {{ Request::is('admin/projects/detail*') ? 'active' : '' }}">
                <a href="{{ url('admin/projects') }}"><i class="fa fa-archive"></i> <span class="nav-label">Portfolio Management</span></a>
            </li>
            <li class="{{ Request::is('admin/featured_projects') ? 'active' : '' }} {{ Request::is('admin/featured_projects/detail*') ? 'active' : '' }}">
                <a href="{{ url('admin/featured_projects') }}"><i class="fa fa-thumb-tack"></i> <span class="nav-label">Featured Portfolios</span></a>
            </li>
        </ul>
    </div>
</nav>