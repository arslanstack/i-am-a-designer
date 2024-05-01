<!doctype html>
<html lang="en" data-layout="semibox" data-topbar="light" data-sidebar="light" data-sidebar-size="lg">

<head>

    <meta charset="utf-8" />
    <title>User Dashboard | I am a designer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="I am a designer" name="description" />
    <meta content="Iamadesigner" name="author" />
    @include('clientviews.components.panel.headers')
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('clientviews.components.panel.topbar')
        @include('clientviews.components.panel.menu')
        <div class="vertical-overlay"></div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('clientviews.components.panel.footer')
    </div>

    @include('clientviews.components.panel.scripts')
</body>

</html>