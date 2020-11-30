          <?php 
          include("config.php");
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
                    
          //$sql= "INSERT INTO lugar SET nombreLugar='$nombreLugar',direccion='$direccion', horarioAtencion='$horarioAtencion', foto='$foto';";
          $sql = "INSERT INTO Lugar (nombreLugar, descripcion, direccion, horarioAtencion, entrada, foto, Categoria_idCategoria, latitud, longitud, reseña) VALUES ('$nombreLugar', '$descripcion', '$direccion', '$horarioAtencion', '$entrada', '$foto', '$categoria', '$latitud', '$longitud', '$reseña');";

          
          if($mysqli->query($sql))
            {
              //echo "Registrado";
              echo '<script>';
                echo 'alert("Registrado con exito!!");';
                echo 'window.location.href="data-table-Plaza.php";';
              echo '</script>';
            }
            else
              {
              echo '<script>';
                echo 'alert("NO Registrado!!");';
                echo 'window.location.href="data-table-Plaza.php";';
              echo '</script>';
            }
          ?>