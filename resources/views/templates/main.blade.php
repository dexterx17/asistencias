<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Asistencias')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        @include('templates.partials.header')

        <div class="container">
            @yield('contenido')
        </div>
        
        @include('templates.partials.footer')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>