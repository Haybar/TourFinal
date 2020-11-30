          <?php 
          include("config.php");
          $nombreLugar=$_REQUEST['nombreLugar'];
          $descripcion=$_REQUEST['descripcion'];
          $direccion=$_REQUEST['direccion'];
          $horarioAtencion=$_REQUEST['horarioAtencion'];
          $entrada=$_REQUEST['entrada'];
          $subirFoto=$_FILES['foto'];
          if ($subirFoto) {
            $nombreFoto=$subirFoto['name'];
            move_uploaded_file($subirFoto['tmp_name'], 'Upload/'.$nombreFoto);
          }
          $categoria=$_REQUEST['categoria'];
          $latitud=$_REQUEST['latitud'];
          $longitud=$_REQUEST['longitud'];
          $reseña=$_REQUEST['reseña'];
                    
          //$sql= "INSERT INTO lugar SET nombreLugar='$nombreLugar',direccion='$direccion', horarioAtencion='$horarioAtencion', foto='$foto';";
          $sql = "INSERT INTO Lugar (nombreLugar, descripcion, direccion, horarioAtencion, entrada, foto, Categoria_idCategoria, latitud, longitud, reseña) VALUES ('$nombreLugar', '$descripcion', '$direccion', '$horarioAtencion', '$entrada', '$nombreFoto', '$categoria', '$latitud', '$longitud', '$reseña');";

          
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