<?php
include "conexionBD.php";

$nombre_alumno = $_POST['nombre'];
$apellido_alumno = $_POST['Apellidos'];
$matricula_alumno = $_POST['matricula'];
$carrera_alumno = $_POST['Carrera'];
$email_alumno = $_POST['Correo'];

$modificar_Al = "UPDATE alumnos SET nombre = $nombre_alumno', Apellidos = '$apellido_alumno', matricula = ['$matricula_alumno'], Carrera = '$carrera_alumno', Correo = '$email_alumno'";

$resultadoupdate = $conexion->query($modificar_Al);

if($resultadoupdate == TRUE){
    echo "Actualizacion Exitosa";
} else{
    echo "Error"  . $modificar_Al . "<br>" . $conexion->error;
}

$Matricula = $_GET['matricula'];

$sql = "SELECT * FROM alumnos WHERE matricula = '$matricula_alumno";

$resultadoselect = $conexion->query($sql);

if($resultadoselect->num_rows > 0){
    while($row = $resultadoselect->fetch_assoc()){
        $matricula_alumno = $row['matricula'];
        $nombre_alumno = $row['nombre'];
        $apellido_alumno = $row['Apellidos'];
        $carrera_alumno = $row['Carrera'];
        $email_alumno = $row['Correo'];
    }
}
?>
<form action="text">
      <div class="row">
        <div class="col6">
      <h1 style="text-align: center; color: white;">CREAR USUARIO</h1>
      <br><br>
      <label for="text" id="nom" style="text-align: right;">Nombre</label>
      <br>
      <input type="text" name="Nombre" placeholder="Ingresa Nombre" required id="nm" value="<?php echo $nombrealumno;?>">
      <br><br>
      <label for="text" id="nom">Apellido</label>
      <br>
      <input type="text" name="Apellido" placeholder="Ingresa Apellido" required id="nm" value="<?php echo $apellidos;?>">
      <br><br>
      <label for="text" id="nom">Matricula</label>
      <br>
      <input type="text" name="Matricula" placeholder="Ingresa tu matricula" required id="nm" value="<?php echo $matricula_al;?>">
      <br><br>
      <label for="text" id="nom">Carrera</label>
      <br>
      <input type="text" name="Carrera" placeholder="Ingresa tu carerra" required id="nm" value="<?php echo $matricula_al;?>">
      <br><br>
      <label for="text" id="email">Email</label>
      <br>
      <input type="text" name="email" id="em" placeholder="Ingresa tu Email" required value="<?php echo $correo_al;?>">
      <br>
      <button type="submit" class="btn btn-light btn-block">Register</button>
        </div>
      </div>
      <div class="row">
        <div class="col6">
          <img src="./../IMG/ins.jpg" height="150px" width="150px" style="text-align: right;">
        </div>
      </div>
      <button type="submit" class="btn btn-light btn-block"><a href="../login/php/ConsultaAlumnos.php">Consultar Alumno</a></button>
    
    </form>
<?php
    header ("Location:./../login/php/ConsultaAlumnos.php");
?>