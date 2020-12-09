<?php
include('../config.php');
include('session.php');
$idLugar=$_REQUEST['idlugar'];
$userid=$_SESSION['id'];
$content = $_REQUEST['comentario'];
$sql1="INSERT INTO Comentario (contenido, usuario_comentario, idlugarComentario) VALUES ('$content', '$userid', '$idLugar')";
if($mysqli->query($sql1))
            {
              header('location:infoParque.php');
            }
            else
              {
              header('location:infoParque.php');
            }
?>