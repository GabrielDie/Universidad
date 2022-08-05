<?php
require "conexionBD.php";
session_start();

$id_profe = $_POST['id_profesor'];
$nom_prof = $_POST['nom_prof'];
$apellido_prof = $_POST['ape_prof'];
$materia_prof = $_POST['materia'];
$email_prof = $_POST['correo'];

$insertar = mysqli_query($conexion, "INSERT INTO profesores (id_profesor, nombre, ape_prof, materia, correo)VALUES ('$id_prof,$nom_prof,$ape_prof,$materia,$correo')");

//if(empty($_POST))
?>
