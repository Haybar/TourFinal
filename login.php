<?php
include'config.php';
session_start();
if (isset($_POST["ingresar"])) {
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
        
        $sql="SELECT * FROM Usuario WHERE email='$Email' AND password='$Password'";
        $execonsulta=$mysqli->query($sql) or die ("Error al comprobar usuario: ".mysqli_error($mysqli));
        $row=mysqli_fetch_array($execonsulta);
        
        if(mysqli_num_rows($execonsulta) > 0)
        {   
            $_SESSION['idUsuario']=$row['id'];
            if ($row['tipo'] == 'turista') {
                echo '<script>';
                    echo 'alert("Bienvenido!!");';
                    echo 'window.location.href="Public/home.php";';
                echo '</script>';
            }
            else 
            {
                if ($row['tipo'] == 'admin')
                {
                    echo '<script>';
                        echo 'alert("Bienvenido!!");';
                        echo 'window.location.href="Private/home.html";';
                    echo '</script>';
                } 
            }                         
        }
        else
        {
            echo '<script>';
                echo 'alert("Usuario y/o Contraseña invalidos");';
                echo 'window.location.href="login.html";';
            echo '</script>';
        }
} 
        
       

?>



