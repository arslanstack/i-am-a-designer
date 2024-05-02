<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{route('welcome')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('clientSideAssets/images/logo-trans.png')}}" alt="" height="32">
            </span>
            <span class="logo-lg">
                <img src="{{asset('clientSideAssets/images/logo.png')}}" alt="" height="100">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a href="{{route('user.dashboard')}}" class="nav-link menu-link {{ Request::is('user/dashboard') ? 'active' : '' }} {{ Request::is('user') ? 'active' : '' }}"><i class="ri-dashboard-2-line"></i> <span>Dashboard</span> </a>
                </li>
                @if(isUserVerified())
                <li class="nav-item">
                    <a href="{{route('user.profile')}}" class="nav-link menu-link {{ Request::is('user/profile') ? 'active' : '' }}"><i class="ri-user-2-line"></i> <span>Profile Settings</span> </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.savedProjects')}}" class="nav-link menu-link {{ Request::is('user/saved-projects') ? 'active' : '' }}"><i class="ri-slideshow-line"></i> <span>Saved Projects</span> </a>
                </li>
                @else
                <li class="nav-item">
                    <a href="#" class="nav-link menu-link disabled"><i class="ri-user-2-line"></i> <span>Profile Settings</span> </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link menu-link disabled"><i class="ri-slideshow-line"></i> <span>Saved Projects</span> </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{route('user.security')}}" class="nav-link menu-link {{ Request::is('user/security') ? 'active' : '' }} {{ Request::is('user/security/*') ? 'active' : '' }}"><i class="ri-lock-line"></i> <span>Security Settings</span> </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sidebar-background"></div>
</div>