<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" align-content="center"> 
                <div class="blog-post">
                    <div class="card">
                                <!--/stories-->
                        <div class="card-body" style="border-color: blue; max-height: 100%">
                <?php
                $sql = "SELECT * FROM Comentario 
                INNER JOIN Usuario ON Usuario.idUsuario = Comentario.usuario_comentario 
                INNER JOIN Lugar ON Comentario.idlugarComentario=Lugar.idLugar
                ORDER BY idComentario DESC";
                $execonsulta=$mysqli->query($sql);
                while($row = mysqli_fetch_array($execonsulta)){
                $posted_by = $row['nombres']." ".$row['primerApellido']." ".$row['segundoApellido'];
                $posted_image = $row['fotoUsuario'];
                $id = $row['idComentario'];
                $idlugar=$row['idLugar'];
                ?>
                            <hr>
                            <div class="row">
                                <div class="col-md-2 col-sm-3">
                                    <img  src="../Private/Upload/<?php echo $posted_image; ?>" style="width:100px" class="img-circle"></a>
                                </div>
                                <div class="col-md-10 col-sm-6">
                                    <div class="alert"><h3 style="color: black"> <?php echo $row['contenido']; ?></h3></div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <h4><span class="label label-info" style="color: black"> <?php echo $row['fechaRegistro']; ?></span></h4><h4>
                                            <small style="font-family:courier,'new courier';" class="text-muted">Comentario de: <a href="#" class="text-muted"><?php echo $posted_by; ?></a></small>
                                            </h4>
                                        </div>
                                    </div>
                                <br>
                                </div>
                            </div>
                <?php } ?>     
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>