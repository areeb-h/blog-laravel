<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Blog')</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="container">
        @yield('content')
    </div>

    @vite('resources/js/app.js')
</body>

</html>
