<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nome del Sito')</title>
     <!-- Styles -->
     @vite('resources/js/app.js')
</head>
<body>
    <!-- header -->
    @include('partials.header')

    <!-- Contenuto della pagina -->
    <div class="container">
        @yield('content')
    </div>

    <!-- footer -->
    @include('partials.footer')

</body>
</html>