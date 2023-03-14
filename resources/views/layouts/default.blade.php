<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ("/css/app.css") }}">
    <title>@yield('title', "Meu Layout")</title>
</head>

<body>
    <h1>Meu Layout</h1>

    @section('sidebar', 'sidebar')
    
    @section('sidebar')

    <div>
        <nav>
            sidebar
        </nav>
    </div>

    @show

    @yield('content')
    <script src="{{ asset ("/js/app.js") }}"></script>

</body>
</html>

