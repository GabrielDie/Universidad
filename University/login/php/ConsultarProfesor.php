<?php
require "conexionBD.php";
$consultarprof = "SELECT * FROM profesores";
$result = $conexion->query($consultarprof);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>ConsultarProfesores</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="content-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <img src="./../IMG/Macquarie-University-logo.png" width="300" height="150">

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="./../HTML/Index.html">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../HTML/Acercade.html">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../HTML/OfertaEductiva.html">Oferta Educativa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../HTML/Servicios.html">Servicios</a>
          </li>
        </ul>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Options
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
            <a class="dropdown-item" href="./perfil.html">Perfil<span class="material-symbols-outlined">
              person
              </span></a></a></a></a>
            <a class="dropdown-item" href="./../login/HTML/Index.html">Iniciar Sesion<span class="material-symbols-outlined">
              search_off
              </span></a></a></a>
            <hr>
            <a class="dropdown-item" href="./../HTML/alumnos.html">Alumnos<span class="material-symbols-outlined">
              attribution
              </span></a></a></a>
            <a class="dropdown-item" href="./../HTML/administrativos.html">Administrativos<span class="material-symbols-outlined">
              contact_emergency
              </span></a></a></a>
            <a class="dropdown-item" href="./../HTML/profesores.html">Profesores<span class="material-symbols-outlined">
              co_present
              </span></a></a></a>
            <hr>
            <a class="dropdown-item" href="./../login/HTML/Index.html">Cerrar Sesion<span class="material-symbols-outlined">
              do_not_disturb_off
              </span></a></a></a>
          </div>
        </div>
      </div>
    </nav>
    <div class="row">
        <div class="col-12">
            <table class="table mt-5">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id_prof</th>
                        <th scope="col">Nombre_prof</th>
                        <th scope="col">Apellido_prof</th>
                        <th scope="col">Carrera_prof</th>
                        <th scope="col">Correo_Alumno</th>
                    </tr>
                </thead>
             <tbody>
                <?php
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id_profesor']; ?> </td>
                    <td><?php echo $row['nom_prof']; ?> </td>
                    <td><?php echo $row['ape_prof']; ?> </td>
                    <td><?php echo $row['materia']; ?> </td>
                    <td><?php echo $row['correo']; ?> </td>
                    <td><a class="btn btn-info" href="modificarprofesor.php?id_prof=<?php echo $row['id_profesor'];?>">Edit</a>&nbsp;
                    <a class="btn btn-danger" href="eliminarprofesor.php?id_prof=<?php echo $row['id_profesor'];?>">Delete</a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>
         </div>
    </div>
 </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>