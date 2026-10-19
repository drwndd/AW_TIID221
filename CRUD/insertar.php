<?php

/* Incluir la informacion del archivo conexion.php */
include('conexion.php');

/*Mandamos a llamar la funcion conectar para ejecutarla */
$con = conectar();

/*Recibir la información del formulario*/
$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$edad = $_POST['edad'];

/* Crear nuestra consulta para insertar los datos */
$sql = "INSERT INTO alumnos
(matricula,nombre,apellido_p,apellido_m,edad)
VALUES
('$matricula','$nombre','$apellido_p','$apellido_m','$edad')";

/* Ejucutar la consulta */
$query = mysqli_query($con,$sql);

/*Comprobar y direccionar*/
if($query) {
    header("Location: alumnos.php");
}
else{
    echo "Error al insertar al alumno";
}
