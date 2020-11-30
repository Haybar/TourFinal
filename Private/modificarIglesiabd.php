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
                echo 'window.location.href="data-table-Iglesia.php";';
              echo '</script>';
            }
            else
              {
              echo '<script>';
                echo 'alert("No se pudo guardar los cambios!!");';
                echo 'window.location.href="data-table-Iglesia.php";';
              echo '</script>';
            }
          ?>