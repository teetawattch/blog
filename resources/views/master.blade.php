<!DOCTYPE html>
<html lang="en">
<head>

    @yield('meta')
</head>
<body>
    @yield('navbar')

    <div class="container-fluid">
        @yield('content')
    </div>
    @yield('footer')
</body>
</html>