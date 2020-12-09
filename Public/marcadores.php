<?php

  // Archivo de Conexión a la Base de Datos 
  include('../config.php');

  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  $sql="SELECT * FROM Lugar WHERE Categoria_idCategoria='5'";
  $execonsulta=$mysqli->query($sql);

  // Seleccionamos los datos para crear los marcadores en el Mapa de Google serian direccion, lat y lng 
  while ($row = mysqli_fetch_array($execonsulta)) {
      echo '["' . $row['nombreLugar'] . '", ' . $row['latitud'] . ', ' . $row['longitud'] . '],';
  }
?>