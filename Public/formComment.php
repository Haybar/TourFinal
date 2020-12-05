<?php
    $queryComentario = "SELECT * FROM Lugar WHERE idLugar='$idlugar';";
    $result = $mysqli->query($queryComentario);
    while ($row1 = mysqli_fetch_array($result)){
        $postid = $row1['idLugar'];
?>
        <div class="col-md-5">
            <form method="POST" action="comentario.php">
                <input type="hidden" name="idlugar" value="<?php echo $row1['idLugar']; ?>"></input>
                <textarea name="comentario" placeholder="Haz tus comentarios aquí"></textarea>
                <br>
                <hr>
                <button class="btn btn-success"><i class="icon-share"></i> Publicar </button>
            </form>
        </div>
<?php
    }
?>