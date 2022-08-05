<?php
require "conexionBD.php";
session_start();

$id_prof = $_POST['id_profesor'];
$nombre = $_POST['nom_prof'];
$apellido = $_POST['ape_prof'];
$materia = $_POST['materia'];
$correo = $_POST['correo'];



if(empty($_POST['id_profesor']) && empty ($_POST['nom_prof']) && empty($_POST['ape_prof'])
&& empty($_POST['materia']) &&empty($_POST['correo'])){
    echo "Hay campos sin rellenar, completalos para continuar";
} else{
    $insertar = mysqli_query($conexion, "INSERT INTO profesores (id_profesor, nom_prof, ape_prof, materia, correo)VALUES ('$id_prof,$nomre,$apellido,$materia,$correo')");
}

$resultado = $conexion->query($insertar);

if($resultado == TRUE){
    header ("locaion: ./../HTML/profesores.html");
}else{
    echo "Error" . $insertar . "<br>" . $conexion->error;
}

//if(empty($_POST))
?>