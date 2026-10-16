<?php

include('conexion.php');

$con = conectar();

$sql = "SELECT * FROM alumnos";

$query = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alumnos</title>
</head>
<body>
    <h1>Tabla de Alumnos</h1>
    
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>125053509</td>
                <td>Damian</td>
                <td>Cuapio</td>
                <td>Serrano</td>
                <td>19</td>
                <td>Editar Eliminar</td>
            </tr>
        </tbody>
     </table>
</body>
</html>   