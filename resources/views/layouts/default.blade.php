<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ("/css/app.css") }}">
    <link rel="stylesheet" href="{{ asset ("/css/user.css") }}">
    <title>@yield('title', "Meu Layout")</title>
</head>

<body>
    <h1>Meu Layout</h1>

    @section('sidebar')
    <div>
        <nav>
            Sidebar
        </nav>
    </div>
    @show

    <div>
        @yield('content')
    </div>

    <script src="{{ asset ("/js/app.js") }}"></script>
    @stack('scripts')


    

</body>
</html>

