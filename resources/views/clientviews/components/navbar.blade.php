<nav id="navbar" class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="overlay"></div>
    <div class="container">
        <a class="navbar-brand" href="{{route('welcome')}}" style="width: 100px"><img src="{{asset('/clientSideAssets/images/logo.png')}}" width="100%" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('deisgners') ? 'active' : '' }} mx-0" aria-current="page" href="{{route('designers')}}">Find Designers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('login') ? 'active' : '' }} mx-0" aria-current="page" href="{{route('login')}}">Publish Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('login') ? 'active' : '' }} mx-0" href="{{route('login')}}">Login</a>
                </li>
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