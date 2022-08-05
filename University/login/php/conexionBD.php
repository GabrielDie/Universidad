<?php

$localhost = "localhost";
$usuario = "root";
$password = "";
$namedb = "macquarie_university";

$conexion = mysqli_connect($localhost, $usuario, $password, $namedb);

mysqli_select_db($conexion, $namedb);

echo "Base de Datos Conectada";

?>