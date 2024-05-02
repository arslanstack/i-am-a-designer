<!doctype html>
<html lang="en" data-layout="semibox" data-topbar="light" data-sidebar="light" data-sidebar-size="lg">

<head>

    <meta charset="utf-8" />
    <title>Designer Dashboard | I am a designer</title>
    <link rel="icon" type="image/x-icon" href="{{asset('clientSideAssets/images/favicon.ico')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="I am a designer" name="description" />
    <meta content="Iamadesigner" name="author" />
    @include('designer.components.headers')
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('designer.components.topbar')
        @include('designer.components.menu')
        <div class="vertical-overlay"></div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('designer.components.footer')
    </div>

    @include('designer.components.scripts')
</body>

</html>