<nav id="navbar" class="navbar navbar-expand-lg navbar-light sticky-top p-0">
    <!-- <div class="overlay"></div> -->
    <div class="container">
        <a class="navbar-brand" href="{{route('welcome')}}" style="width: 50px"><img src="{{asset('/clientSideAssets/images/logo-trans.png')}}" width="100%" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @if(Auth::guard('web')->check())
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('designers') ? 'active' : '' }} mx-0" aria-current="page" href="{{route('designers')}}">Search Talent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('user/dashboard') ? 'active' : '' }} mx-0" aria-current="page" href="{{route('user.dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-0" aria-current="page" href="{{route('user.dashboard')}}" onclick="event.preventDefault(); document.getElementById('user-logout-form').submit();">Logout</a>
                </li>
                <form action="{{route('user.logout')}}" method="post" id="user-logout-form">
                    @csrf
                </form>
                @elseif(Auth::guard('designer')->check())
                <li class="nav-item">
                    <a class="nav-link mx-0" aria-current="page" href="{{route('designer.dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-0" aria-current="page" href="{{route('designer.projects')}}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-0" aria-current="page" href="{{route('designer.projects')}}" onclick="event.preventDefault(); document.getElementById('designer-logout-form').submit();">Logout</a>
                </li>
                <form action="{{route('designer.logout')}}" method="post" id="designer-logout-form">
                    @csrf
                </form>
                @else
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('designers') ? 'active' : '' }} mx-0" aria-current="page" href="{{route('designers')}}">Search Talent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('user/login') ? 'active' : '' }} mx-0" aria-current="page" href="{{route('user.login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-0  {{ Request::is('designer/login') ? 'active' : '' }}" aria-current="page" href="{{route('designer.dashboard')}}">Create a Portfolio</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@push('scripts')
<script>
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        var navbar = document.getElementById("navbar");

        if (
            document.body.scrollTop > 60 ||
            document.documentElement.scrollTop > 60
        ) {
            navbar.classList.add("navbar-scrolled");
        } else {
            navbar.classList.remove("navbar-scrolled");
        }
    }
</script>
@endpush