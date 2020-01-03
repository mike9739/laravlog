{{-- Esta template se encargara de ser la estructura basica de las futuras plantillas del dashboard --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modulo Admin</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">

</head>
<body>
{{-- NAVBAR --}}
    @include('dashboard.partials.navbar-main')

    <div class="container">
        {{-- notificacion en caso de exito  --}}
         {{-- @include('dashboard.partials.session-status') --}}
        {{-- //carga el contenido de la template --}}
          @yield('content')
    </div>
    <script src="https://kit.fontawesome.com/9e96d9cbbb.js" crossorigin="anonymous"></script>
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>
