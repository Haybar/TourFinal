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
          $idlugar=$_POST['idlugar'];
          $nombreLugar=$_POST['nombreLugar'];
          $descripcion=$_POST['descripcion'];
          $direccion=$_POST['direccion'];
          $horarioAtencion=$_POST['horarioAtencion'];
          $entrada=$_POST['entrada'];
          $foto=$_POST['foto'];
          $categoria=$_POST['categoria'];
          $latitud=$_POST['latitud'];
          $longitud=$_POST['longitud'];
          $reseña=$_POST['reseña'];

          $sql="UPDATE Lugar SET nombreLugar='$nombreLugar', descripcion='$descripcion', direccion='$direccion', horarioAtencion='$horarioAtencion', entrada='$entrada', foto='$foto', Categoria_idCategoria='$categoria', latitud='$latitud', longitud='$longitud', reseña='$reseña' WHERE idLugar='$idlugar';";


          if($mysqli->query($sql))
            {
              echo '<script>';
                echo 'alert("Cambios Guardados con exito!!");';
                echo 'window.location.href="data-table-Parques.php";';
              echo '</script>';
            }
            else
              {
              echo '<script>';
                echo 'alert("No se pudo guardar los cambios!!");';
                echo 'window.location.href="data-table-Parques.php";';
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