<?php
include "conexionBD.php";

$id_profe = $_POST['id_profesor'];
$nombre = $_POST['nom_prof'];
$apellido = $_POST['ape_prof'];
$materia = $_POST['materia'];
$email = $_POST['correo'];


$modificar_Prof = "UPDATE profesores SET id_profesor = $id_profe', nom_prof = '$nombre', apellido = ['$ape_prof'], materia = 'materia', correo = '$email";

$resultadoupdate = $conexion->query($modificar_Prof);

if($resultadoupdate == TRUE){
    echo "Actualizacion Exitosa";
} else{
    echo "Error"  . $modificar_Prof . "<br>" . $conexion->error;
}

$id_profe = $_GET['id_profesor'];

$sql = "SELECT * FROM profesores WHERE id_profesor = '$id_profe";

$resultadoselect = $conexion->query($sql);

if($resultadoselect->num_rows > 0){
    while($row = $resultadoselect->fetch_assoc()){
        $id_profe = $row['id_profesor'];
        $nombre = $row['nom_prof'];
        $apellido = $row['ape_prof'];
        $materia = $row['materia'];
        $email = $row['correo'];
    }
}
?>
<form action="./../login/php/insertarprofesor.php" method="post" class="form-group">
      <div class="row">
        <div class="col6">
      <h1 style="text-align: center; color: white;">CREAR USUARIO</h1>
      <br><br>
      <label for="text" id="nom">ID</label>
      <br>
      <input type="text" name="ID" placeholder="Ingresa ID" required id="nm">
      <br><br>
      <label for="text" id="nom">Nombre</label>
      <br>
      <input type="text" name="Nombre" placeholder="Ingresa Nombre" required id="nm">
      <br><br>
      <label for="text" id="nom">Apellido</label>
      <br>
      <input type="text" name="Apellido" placeholder="Ingresa tu Apellido" required id="nm">
      <br><br>
      <label for="text" id="nom">Carrera</label>
      <br>
      <input type="text" name="Carrera" placeholder="Ingresa tu carerra" required id="nm">
      <br><br>
      <label for="text" id="email">Email</label>
      <br>
      <input type="text" name="email" id="em" placeholder="Ingresa tu Email" required>
      <br>
      <button>Submit</button>
        </div>
      </div>
      <div class="row">
        <div class="col6">
          <img src="./../IMG/ins.jpg" height="150px" width="150px" style="text-align: right;" class="ing">
        </div>
      </div>
    </form>
    <?php
    header ("Location:./../login/php/ConsultarProfesor.php");
?>