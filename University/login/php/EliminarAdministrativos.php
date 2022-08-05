<?php
require "conexionBD.php";
$id_admin = $_GET['id_admin'];

$eliminaradministrativo = "DELETE FROM administrativo WHERE id_admin = '$id_admin'";

$resultado = $conexion -> query($eliminaradministrativo);

if($resultado == true){
    header("location:./../login/php/ConsultaAdministrativo.php");
} else{
    echo "error" .$eliminaradministrativo. "<br>". $conexion->error;
}
?>