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
         @include('dashboard.partials.session-status')
        {{-- //carga el contenido de la template --}}
          @yield('content')
    </div>
    <script src="https://kit.fontawesome.com/9e96d9cbbb.js" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>
