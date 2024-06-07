<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolando &rightarrow; @yield('title')</title>

    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')

    <main class="container py-5">
        <h3>Questo è il main</h3>
    </main>

    @include('partials.footer')
</body>
</html>