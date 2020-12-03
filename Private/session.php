<?php
session_start();
if (!isset($_SESSION['id'])){
header('location:home.php');
}
else
{
	if (isset($_SESSION['id'])) {
		$idUsuario = $_SESSION['id'];
		$sql="SELECT * FROM Usuario WHERE idUsuario = '$idUsuario';";
		$execonsulta=$mysqli->query($sql);
		$row=mysqli_fetch_array($execonsulta);
		$_SESSION['nombres']=$row['nombres'];
		$_SESSION['tipo']=$row['tipo'];
	}
}
//$username = $row['apellidoPaterno']." ".$row['apellidoMaterno']." ".$row['nombres'];
//$session_query = $conn->query("SELECT * FROM usuarios WHERE idUsuario = '$session_id'");
//$user_row = $session_query->fetch();
//$username = $user_row['firstname']." ".$user_row['lastname'];
//$image = $user_row['image'];
?>