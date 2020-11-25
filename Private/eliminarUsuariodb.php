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
  <h1>Bootstrap</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"></h4>

          <?php 
          include("config.php");
          $idusuario=$_POST['idusuario'];
          $estado=$_POST['estado'];

          $sql="UPDATE Usuario SET estado='0' WHERE idUsuario='$idusuario'";

          if($mysqli->query($sql))
            {
              echo '<script>';
                echo 'alert("Usuario eliminado con éxito!!");';
                echo 'window.location.href="data-table-Usuario.php";';
              echo '</script>';
            }
            else
              {
              echo '<script>';
                echo 'alert("Error: Usuario No eliminado!!");';
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