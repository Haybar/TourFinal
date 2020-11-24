<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Bootstrap</title>
    <meta charset="utf-8">
    <meta name="description" content="bootstrap">
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
          $nombres=$_POST['nombres'];
          $apellidoPaterno=$_POST['apellidoPaterno'];
          $apellidoMaterno=$_POST['apellidoMaterno'];
          $email=$_POST['email'];
          $password=$_POST['password'];
          
          //$sql= "INSERT INTO 'Usuario' SET nombres='$nombres', primerApellido='$apellidoPaterno', segundoApellido='$apellidoMaterno', email='$email', password='$password';";
          $sql = "INSERT INTO Usuario (nombres, primerApellido, segundoApellido, email, password) VALUES ('$nombres', '$apellidoPaterno', '$apellidoMaterno', '$email', '$password');";
          
          if($mysqli->query($sql))
            {
              echo '<script>';
                echo 'alert("Registrado con exito!!");';
                echo 'window.location.href="Public/index.html";';
              echo '</script>';
            }
            else
              {
              //echo "No Registrado";
              echo '<script>';
                echo 'alert("NO Registrado!!");';
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