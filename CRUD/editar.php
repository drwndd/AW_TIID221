<?php
include('conexion.php');
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM alumnos WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar alumno</title>
</head>
<body>
    <h1>Editar alumno</h1>

    <form action="actualizar.php" method="POST">

        <input type="hidden" name="id"
               value="<?php echo $row['id'] ?>">

        <label>Matricula:</label>
        <input type="text" name="matricula"
               value="<?php echo $row['matricula'] ?>">
        <br><br>

        <label>Nombre:</label>
        <input type="text" name="nombre"
               value="<?php echo $row['nombre'] ?>">
        <br><br>

        <label>Apellido paterno:</label>
        <input type="text" name="apellido_p"
               value="<?php echo $row['apellido_p'] ?>">
        <br><br>

        <label>Apellido materno:</label>
        <input type="text" name="apellido_m"
               value="<?php echo $row['apellido_m'] ?>">
        <br><br>

        <label>Edad:</label>
        <input type="text" name="edad"
               value="<?php echo $row['edad'] ?>">
        <br><br>

        <button type="submit">Guardar cambios</button>
        <a href="alumnos.php">Cancelar</a>
    </form>
</body>
</html>