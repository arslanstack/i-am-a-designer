<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I am a designer</title>
    <link rel="icon" type="image/x-icon" href="{{asset('clientSideAssets/images/favicon.ico')}}">

    @include('clientviews.components.headers')
</head>

<body>
    @include('clientviews.components.navbar')

    @yield('content')

    @include('clientviews.components.footer')
</body>
@include('clientviews.components.scripts')

</html>