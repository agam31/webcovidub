<!doctype html>
<html lang="en">
<head>
    <title>Portal Covid 19 UB - @yield('title')</title>
    @yield('head', View::make('layouts.head'))
</head>
<body>
    @section('header')
    @show

    <div class="body-wrap">
        @yield('content')
    </div>

    @yield('footer', View::make('layouts.footer'))

</body>
</html>
