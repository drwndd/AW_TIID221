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
           <?php
                while($row = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['matricula'] ?></td>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['apellido_p'] ?></td>
                    <td><?php echo $row['apellido_m'] ?></td>
                    <td><?php echo $row['edad'] ?></td>
                    <td>
                        <a href="delete.php?id=<?php echo $row['id'] ?>">Eliminar</a>
                        <br>
                        Editar
                    </td>
                    
                </tr>
            <?php
                }
            ?>
        </tbody>
     </table>
     <h1>FORMULARIO</h1>
     <form action="insertar.php" method="POST">
     <input type="text" class="form-control" name="matricula" placeholder="Matricula"> 
     <input type="text" class="form-control" name="nombre" placeholder="Nombre"> 
     <input type="text" class="form-control" name="apellido_p" placeholder="Apellido Paterno"> 
     <input type="text" class="form-control" name="apellido_m" placeholder="Apellido Materno"> 
     <input type="text" class="form-control" name="edad" placeholder="Edad"> 
     <button type="submit">Guardar</button>
</form>
</html>   