<?php
require "conexionBD.php";
$student_id = $_GET['matricula'];

$eliminaralumno = "DELETE FROM alumnos WHERE matricula = '$student_id´'";

$resultado = $conexion -> query($eliminaralumno);

if($resultado == true){
    header("location:./../login/php/ConsultaAlumnos.php");
} else{
    echo "error" .$eliminaralumno. "<br>". $conexion->error;
}
?>