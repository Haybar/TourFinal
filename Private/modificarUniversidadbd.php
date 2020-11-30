          <?php 
          include("config.php");
          $idlugar=$_POST['idlugar'];
          $nombreLugar=$_POST['nombreLugar'];
          $descripcion=$_POST['descripcion'];
          $direccion=$_POST['direccion'];
          $horarioAtencion=$_POST['horarioAtencion'];
          $entrada=$_POST['entrada'];
          $subirFoto=$_FILES['foto'];
          if ($subirFoto) {
            $nombreFoto=$subirFoto['name'];
            move_uploaded_file($subirFoto['tmp_name'], 'Upload/'.$nombreFoto);
          }
          $categoria=$_POST['categoria'];
          $latitud=$_POST['latitud'];
          $longitud=$_POST['longitud'];
          $reseña=$_POST['reseña'];

          $sql="UPDATE Lugar SET nombreLugar='$nombreLugar', descripcion='$descripcion', direccion='$direccion', horarioAtencion='$horarioAtencion', entrada='$entrada', foto='$nombreFoto', Categoria_idCategoria='$categoria', latitud='$latitud', longitud='$longitud', reseña='$reseña' WHERE idLugar='$idlugar';";


          if($mysqli->query($sql))
            {
              echo '<script>';
                echo 'alert("Cambios Guardados con exito!!");';
                echo 'window.location.href="data-table-Universidad.php";';
              echo '</script>';
            }
            else
              {
              echo '<script>';
                echo 'alert("No se pudo guardar los cambios!!");';
                echo 'window.location.href="data-table-Universidad.php";';
              echo '</script>';
            }
          ?>