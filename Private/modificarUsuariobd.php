<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Bootstrap</title>
    <meta charset="utf-8">
    <meta name="desc
    ription" content="bootstrap">
    <meta name="keywords" content="bootstrap, CSS, HTML5, Javascript">
    <meta name="author" content="DESARROLLADOR">

<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"></h4>

          <?php 
          include("config.php");
          $idusuario=$_REQUEST['idusuario'];
          $nombres=$_REQUEST['nombres'];
          $primerApellido=$_REQUEST['primerApellido'];
          $segundoApellido=$_REQUEST['segundoApellido'];
          $email=$_REQUEST['email'];
          $tipo=$_REQUEST['tipo'];
          $subirFoto=$_FILES['foto'];
          if ($subirFoto) {
            $nombreFoto=$subirFoto['name'];
            move_uploaded_file($subirFoto['tmp_name'], 'Upload/'.$nombreFoto);
          }

          $sql="UPDATE Usuario SET nombres='$nombres', primerApellido='$primerApellido', segundoApellido='$segundoApellido', email='$email', tipo='$tipo', foto='$nombreFoto' WHERE idUsuario='$idusuario';";


          if($mysqli->query($sql))
            {
              echo '<script>';
                echo 'alert("Cambios Guardados con exito!!");';
                echo 'window.location.href="data-table-Usuario.php";';
              echo '</script>';
            }
            else
              {
              echo '<script>';
                echo 'alert("No se pudo guardar los cambios!!");';
                echo 'window.location.href="data-table-Usuario.php";';
              echo '</script>';
            }
          ?>
 


          
        </div>
      </div>
    </div>
  </div>
</div>

  </body>
</html>
</html>