          <?php 
          include("config.php");
          $nombreLugar=$_POST['nombreLugar'];
          $descripcion=$_POST['descripcion'];
          $direccion=$_POST['direccion'];
          $horarioAtencion=$_POST['horarioAtencion'];
          $entrada=$_POST['entrada'];
          if ($subirFoto) {
            $nombreFoto=$subirFoto['name'];
            move_uploaded_file($subirFoto['tmp_name'], 'Upload/'.$nombreFoto);
          }
          $categoria=$_POST['categoria'];
          $latitud=$_POST['latitud'];
          $longitud=$_POST['longitud'];
          $reseña=$_POST['reseña'];
                    
          //$sql= "INSERT INTO lugar SET nombreLugar='$nombreLugar',direccion='$direccion', horarioAtencion='$horarioAtencion', foto='$foto';";
          $sql = "INSERT INTO Lugar (nombreLugar, descripcion, direccion, horarioAtencion, entrada, foto, Categoria_idCategoria, latitud, longitud, reseña) VALUES ('$nombreLugar', '$descripcion', '$direccion', '$horarioAtencion', '$entrada', '$nombreFoto', '$categoria', '$latitud', '$longitud', '$reseña');";

          
          if($mysqli->query($sql))
            {
              //echo "Registrado";
              echo '<script>';
                echo 'alert("Registrado con exito!!");';
                echo 'window.location.href="home.html";';
              echo '</script>';
            }
            else
              {
              echo '<script>';
                echo 'alert("NO Registrado!!");';
              echo '</script>';
            }
          ?>