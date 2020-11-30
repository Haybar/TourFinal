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
          $nombreLugar=$_REQUEST['nombreLugar'];
          $descripcion=$_REQUEST['descripcion'];
          $direccion=$_REQUEST['direccion'];
          $horarioAtencion=$_REQUEST['horarioAtencion'];
          $entrada=$_REQUEST['entrada'];
          $foto=$_REQUEST['foto'];
          $categoria=$_REQUEST['categoria'];
          $latitud=$_REQUEST['latitud'];
          $longitud=$_REQUEST['longitud'];
          $reseña=$_REQUEST['reseña'];
                    
          //$sql= "INSERT INTO lugar SET nombreLugar='$nombreLugar',direccion='$direccion', horarioAtencion='$horarioAtencion', foto='$foto';";
          $sql = "INSERT INTO Lugar (nombreLugar, descripcion, direccion, horarioAtencion, entrada, foto, Categoria_idCategoria, latitud, longitud, reseña) VALUES ('$nombreLugar', '$descripcion', '$direccion', '$horarioAtencion', '$entrada', '$foto', '$categoria', '$latitud', '$longitud', '$reseña');";

          
          if($mysqli->query($sql))
            {
              //echo "Registrado";
              echo '<script>';
                echo 'alert("Registrado con exito!!");';
                echo 'window.location.href="data-table-Parques.php";';
              echo '</script>';
            }
            else
              {
              echo '<script>';
                echo 'alert("NO Registrado!!");';
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