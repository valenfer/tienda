<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" shrink-to-fit=no>
    <!-- Usamos etiqueta yield de blade para modificar el título de la vista en la que nos encontramos-->
    <title>Mi tienda - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('static/css/connect.css') }}">
    <script src="https://kit.fontawesome.com/8ddfb2fdec.js" crossorigin="anonymous"></script>
</head>
<body>
    @section('content')
    @show
</body>
</html>