<?php
require "conexionBD.php";
session_start();

$nombre_alumno = $_POST['matricula'];
$apellido_alumno = $_POST['nombre'];
$matricula_alumno = $_POST['Apellidos'];
$carrera_alumno = $_POST['Carrera'];
$email_alumno = $_POST['Correo'];



if(empty($_POST['matricula']) && empty ($_POST['nombre']) && empty($_POST['Apellidos'])
&& empty($_POST['Carrera']) && empty($_POST['Correo'])){
    echo "Hay campos sin rellenar, completalos para continuar";
} else{
    $insertar = mysqli_query($conexion, "INSERT INTO alumnos (matricula, nombre, Apellidos, Carrera, Correo)VALUES ('$nombre_alumno,$apellido_alumno,$carrera_alumno,$email_alumno')");
}

$resultado = $conexion->query($insertar);

if($resultado == TRUE){
    header ("locaion: ./../HTML/alumnos.html");
}else{
    echo "Error" . $insertar . "<br>" . $conexion->error;
}

//if(empty($_POST))
?>
