<?php
include('../config.php');
include('session.php');
$idLugar=$_REQUEST['idlugar'];
$userid=$_SESSION['id'];
$content = $_REQUEST['comentario'];
$sql1="INSERT INTO Comentario (contenido, usuario_comentario, idlugarComentario) VALUES ('$comentario', '$userid', '$idLugar')";
if($mysqli->query($sql1))
            {
              echo '<script>';
                echo 'alert("Cambios Guardados con exito!!");';
                echo 'window.location.href="infoParque.php";';
              echo '</script>';
            }
            else
              {
              echo '<script>';
                echo 'alert("No se pudo guardar los cambios!!");';
                echo 'window.location.href="infoParque.php";';
              echo '</script>';
            }
?>