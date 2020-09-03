<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <script src="{{ asset("js/app.js") }}"></script>

    <title>Módulo admin</title>
</head>
<body>
    @include('dashboard.partials.messages_flash')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>