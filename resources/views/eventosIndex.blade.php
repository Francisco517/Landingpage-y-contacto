<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pedidos</title>
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
</head>
<body>
    
    <h1>Lista de los pedidos</h1>
    <a href="/evento/create">Crear Nuevo Pedido</a>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Pedidos</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach($eventos as $evento)
            <tr>
                <td>
                    <a href="/evento/{{ $evento ->id }}">
                        {{ $evento->nombre}}
                    </a>
                </td>
                <td>{{ $evento->correo}}</td>
                <td>{{ $evento->telefono}}</td>
                <td>{{ $evento->pedidos}}</td>
                <td>
                    <a href="/evento/{{$evento->id}}/edit">Editar</a>
                </td>
                <td>
                    <form action="/evento/{{$evento->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>