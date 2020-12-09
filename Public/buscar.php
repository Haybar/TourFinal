<?php
include'../config.php';
if (isset($_REQUEST["buscar"])) {
    $categoria=$_REQUEST['categoria'];
          
            switch ($categoria) {
                case 1:
                    echo '<script>';
                        echo 'window.location.href="Balnearios.php";';
                    echo '</script>';
                    break;

                case 2:
                    echo '<script>';
                        echo 'window.location.href="Cines.php";';
                    echo '</script>';
                    break;

                case 3:
                    echo '<script>';
                        echo 'window.location.href="Plazas.php";';
                    echo '</script>';
                    break;

                case 4:
                    echo '<script>';
                        echo 'window.location.href="Iglesias.php";';
                    echo '</script>';
                    break;

                case 5:
                    echo '<script>';
                        echo 'window.location.href="Parques.php";';
                    echo '</script>';
                    break;

                case 6:
                    echo '<script>';
                        echo 'window.location.href="Museos.php";';
                    echo '</script>';
                    break;

                case 7:
                    echo '<script>';
                        echo 'window.location.href="CentrosCulturales.php";';
                    echo '</script>';
                    break;

                case 8:
                    echo '<script>';
                        echo 'window.location.href="Restaurantes.php";';
                    echo '</script>';
                    break;

                case 9:
                    echo '<script>';
                        echo 'window.location.href="Universidades.php";';
                    echo '</script>';
                    break;

                case 10:
                    echo '<script>';
                        echo 'window.location.href="Instituciones.php";';
                    echo '</script>';
                    break;
                default:
                    echo '<script>';
                        echo 'alert("no valido!!");';
                        echo 'window.location.href="home.php";';
                    echo '</script>';
                    break;
            }


} 
        
       

?>



