<?php
require "conexionBD.php";
session_start();

$id_admin = $_POST['id_admin'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nom_puesto = $_POST['nom_puesto'];



if(empty($_POST['id_admin']) && empty ($_POST['nombre']) && empty($_POST['apellido'])
&& empty($_POST['nom_puesto'])){
    echo "Hay campos sin rellenar, completalos para continuar";
} else{
    $insertar = mysqli_query($conexion, "INSERT INTO administrativos (id_admin, nombre, apellido, nom_puesto)VALUES ('$id_puesto,$nombre,$apellido,$nom_puesto')");
}

$resultado = $conexion->query($insertar);

if($resultado == TRUE){
    header ("locaion: ./../HTML/administrativos.html");
}else{
    echo "Error" . $insertar . "<br>" . $conexion->error;
}

//if(empty($_POST))
?>
