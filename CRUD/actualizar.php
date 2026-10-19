<?php
include('conexion.php');
$con = conectar();

/* Recibir los datos del formulario */
$id = $_POST['id'];
$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$edad = $_POST['edad'];

/* Actualizar los datos del alumno */
$sql = "UPDATE alumnos SET
        matricula='$matricula',
        nombre='$nombre',
        apellido_p='$apellido_p',
        apellido_m='$apellido_m',
        edad='$edad'
        WHERE id='$id'";

$query = mysqli_query($con, $sql);

/* Regresar a la tabla */
if ($query) {
    header("Location: alumnos.php");
    exit();
} else {
    echo "Error al actualizar el alumno";
}
?>