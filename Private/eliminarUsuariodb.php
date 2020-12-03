          <?php 
          include("config.php");
          $idusuario=$_POST['idusuario'];
          //$estado=$_POST['estado'];

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