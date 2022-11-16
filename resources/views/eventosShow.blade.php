<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar pedido</title>
    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
</head>
<body>
    <h1>Destalles del pedido</h1>
    <a href="/evento">Ver Pedidos</a>
    <h2>Nombre: {{$evento->nombre}}</h2>
    <P>Correo: {{$evento->correo}}</P>
    <P>Telefono: {{$evento->telefono}}</P>
    <P>Pedido: <br>{{$evento->pedidos}}</P>
</body>
</html>