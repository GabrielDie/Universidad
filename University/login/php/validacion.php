<?php
require("ConexionBD.php");
session_start();
$usuario = $_POST["txt_usuario"];
$password = $_POST["txt_password"];
$validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE nombre = '$usuario' and pass = '$password'");
//mostrar las columnas de la base de datos
if(mysqli_num_rows($validar_login) > 0 ){
//$_SESSION['usuario'] = $nombreusr;
header("Location:../../HTML/Index.html");  
exit();  
echo $validar_login;
}else{
echo "No existe el usuario";
exit();
}
?>