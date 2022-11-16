<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.min.css" />
    <link rel="shortcut icon" href="img/favicon.png" />
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <title>Formulario de pedidos</title>
    @vite([ 'resources/css/materialize.css', 'resources/js/materialize.js',])
</head>
<body>
    <h1>Crear Pedido</h1>
    <a href="/evento">Ver Pedidos</a>
    <form action="/evento" method="POST">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        @error('nombre')
            <i>{{$message}}</i>
        @enderror
        <br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo">
        @error('correo')
            <i>{{$message}}</i>
        @enderror
        <br>

        <label for="telefono">telefono:</label>
        <input type="text" name="telefono" id="telefono">
        @error('telefono')
            <i>{{$message}}</i>
        @enderror
        <br>

        <label for="pedidos">Pedido:</label><br>
        <textarea name="pedidos" id="pedidos" cols="40" rows="10"></textarea>
        @error('pedidos')
            <i>{{$message}}</i>
        @enderror
        <br>
        <input type="submit" value="Guardar">
    </form>
    
</body>
</html>