<?php

  // Agregamos el nombre y dirección a la ventana de información de cada marcador, puedes agregar la información que desees, nosotros agregaremos 'nombre' y 'direccion' 

  if($execonsulta){
    
    while($row=mysqli_fetch_array($execonsulta)){ ?>
    
    ['<div class="info_content">' + '<h3><?php echo $row['nombreLugar']; ?></h3>' + '<p><?php echo $row['descripcion']; ?></p>' + '</div>'], 

    <?php }
  }

?>