          <?php 
          include("config.php");
          $idlugar=$_REQUEST['idlugar'];
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

          $sql="UPDATE Lugar SET nombreLugar='$nombreLugar', descripcion='$descripcion', direccion='$direccion', horarioAtencion='$horarioAtencion', entrada='$entrada', foto='$nombreFoto', Categoria_idCategoria='$categoria', latitud='$latitud', longitud='$longitud', reseña='$reseña' WHERE idLugar='$idlugar';";


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