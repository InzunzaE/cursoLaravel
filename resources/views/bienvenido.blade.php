<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <h1>Bienvenido al curso de laravel 10</h1>
    <hr>
    <h2>{{ $nombre }}</h2>
    <h2>Lista de asistencia 07/Oct/23</h2>
    <ul>
         @foreach ( $alumnos as $a)
             <li>{{ $a }}   </li>
         @endforeach
    </ul>
    <h2>Datos</h2>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Edad</td>
            <td>Turno</td>
        </tr>
        @foreach ( $datos as $d)
            <tr>
                
                <td>{{ $d["nombre"] }}</td>
                <td>{{ $d["edad"] }}</td>
                <td>{{ $d["turno"] }}</td>
            </tr>
        @endforeach
    </table>
   <p> Laravel utiliza una arquitectura MVC Modelo vista controlador </p>
   <p>Modelo: Es la base de datos,losmodelos son nuestras tablas, por cada tabla debemos tener un modelo.
        los modelosn están en la carpeta de app/Models
   </p>

   <p>
    Vista: las vistas son de HTML Y CSS que se muesteran en la pagina web. Están en la carpeta resourcces/views
   </p>

   <p>
    Controladores: Son archivos donde se plasma la lógica del negocio
    Están en app/http/Controllers
   </p>
   <p>
    Las rutas: son las urls que nos dirigen hacía una página especifica
    Están en routes/web.phps
   </p>
</body>
</html>