<?php
include "conexionBD.php";

$id_admin = $_POST['id_admin'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nom_puest = $_POST['nom_puesto'];

$modificar_Admin = "UPDATE administrativos SET id_admin = $id_admin', nombre = '$apellido', nom_puesto = ['$nom_puest']";

$resultadoupdate = $conexion->query($modificar_Admin);

if($resultadoupdate == TRUE){
    echo "Actualizacion Exitosa";
} else{
    echo "Error"  . $modificar_Admin . "<br>" . $conexion->error;
}

$id_admin = $_GET['id_admin'];

$sql = "SELECT * FROM administrativos WHERE id_admin = '$id_admin";

$resultadoselect = $conexion->query($sql);

if($resultadoselect->num_rows > 0){
    while($row = $resultadoselect->fetch_assoc()){
        $id_admin = $row['id_admin'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $nom_puest = $row['nom_puesto'];
    }
}
?>
<form  action="./../login/php/insertarAdministrativos.php" method="post" class="form-group">
        <div class="row">
          <div class="col6">
        <h1 style="text-align: center; color: white;">CREAR USUARIO</h1>
        <br><br>
        <label for="text" id="nom">id_Admin</label>
        <br>
        <input type="text" name="id_admin" placeholder="Ingresa id" required id="nm"value="<?php echo $id_admin;?>" >
        <br><br>
        <label for="text" id="nom">Nombre</label>
        <br>
        <input type="text" name="Nombre" placeholder="Ingresa Nombre" required id="nm" value="<?php echo $nombre;?>">
        <br><br>
        <label for="text" id="nom">Apellido</label>
        <br>
        <input type="text" name="Apellido" placeholder="Ingresa Apellido" required id="nm" value="<?php echo $apellido;?>">
        <br><br>
        <label for="text" id="nom">Nombre del Puesto</label>
        <br>
        <input type="text" name="Nombre del Puesto" placeholder="Ingresa el Puesto" required id="nm" value="<?php echo $nom_puest;?>">
        <br>
        <button>Submit</button>
          </div>
        </div>
        <div class="row">
          <div class="col6">
            <img src="./../IMG/ins.jpg" height="150px" width="150px" style="text-align: right;" class="ing">
          </div>
        </div>
        <button type="submit" class="btn btn-light btn-block"><a href="./../login/php/ConsultaAdministrativos.php">Consultar Administrativo</a></button>
    
</form>
<?php
    header ("Location:./../login/php/ConsultaAdministrativos.php");
?>
