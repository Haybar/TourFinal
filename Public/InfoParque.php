<?php include('../config.php'); ?>
<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>LLAJTA TOUR</title>
    <meta charset="UTF-8">
    <meta name="description" content="loans HTML Template">
    <meta name="keywords" content="loans, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap," rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/flaticon.css"/>
    <link rel="stylesheet" href="css/slicknav.min.css"/>
    <link href='css/fontawesome-stars.css' rel='stylesheet' type='text/css'>
    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css"/>


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section -->
    <header class="header-section">
        <a href="index.html" class="site-logo">
            <img src="img/logoBC.png" alt="">
        </a>
        <nav class="header-nav">
            <ul class="main-menu">
                <li><a href="home.php">Inicio</a></li>
                <li><a href="index.html">Acerca de nosotros</a></li>
                <li><a href="#"  class="active">Lugares</a> 
                    <ul class="sub-menu">
                        <li><a href="provincias.html">Balnearios</a></li>
                        <li><a href="index.html">Centros Culturales</a></li>
                        <li><a href="index.html">Cines/Teatros</a></li>
                        <li><a href="index.html">Plazas</a></li>
                        <li><a href="Parques.php">Parques</a></li>
                        <li><a href="provincias.html">Iglesias</a></li>
                        <li><a href="index.html">Museos</a></li>
                        <li><a href="experiencias.html">Restaurantes</a></li>
                        <li><a href="galeria.html">Universidades</a></li>
                        <li><a href="galeria.html">Instituciones</a></li>
                    </ul>
                </li>
                <li><a href="IUsuario.php">Ajustes<span></span></a></li>
                <li><a href="#">Bienvenido</a></li>
            </ul>
            <!-- 
            <div class="header-right">
                <a href="#" class="hr-btn"><i class="flaticon-029-telephone-1"></i>Emergencia</a>
                <div class="hr-btn hr-btn-2">+45 332 65767 42</div>
            </div>
            -->
        </nav>
    </header>
            <?php
                $idlugar=$_REQUEST['idlugar'];

                $sql="SELECT * FROM Lugar WHERE idLugar='$idlugar';";
                $execonsulta=$mysqli->query($sql);

                if(mysqli_num_rows($execonsulta)>0)
                {
                  while ($row=mysqli_fetch_array($execonsulta))
                  {
                    $nombreLugar=$row['nombreLugar'];
                    $descripcion=$row['descripcion'];
                    $direccion=$row['direccion'];
                    $horarioAtencion=$row['horarioAtencion'];
                    $entrada=$row['entrada'];
                    $foto=$row['foto'];
                    $categoria=$row['Categoria_idCategoria'];
                    $latitud=$row['latitud'];
                    $longitud=$row['longitud'];
                    $reseña=$row['reseña'];
                  }
                }
              ?>

    <section class="page-top-section set-bg" data-setbg="img/page-top-bg/ciudad.jpg">
        <div class="container">
            <h2><?php echo $nombreLugar; ?></h2>
            <nav class="site-breadcrumb">
                <a class="sb-item" href="home.php">Inicio</a>
                <a class="sb-item" href="Parques.php">Parques</a>
            </nav>
        </div>
    </section>

    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="../Private/Upload/<?php echo $foto; ?>" style="width: 100%">
                </div>
                <div class="col-lg-7">
                    <div class="about-text">
                        <input class="form-control" name="descripcion" type="text" readonly=»readonly» placeholder="Ingrese una corta Descripción" value="<?php echo $descripcion;?>">
                        <h5><?php echo $descripcion; ?></h5>
                        <h5><?php echo $direccion; ?></h5>
                        <h5><?php echo $horarioAtencion; ?></h5>
                        <h5><?php echo $entrada; ?></h5>
                        <h5><?php echo $latitud; ?></h5>
                        <h5><?php echo $longitud; ?></h5>
                        <h5><?php echo $reseña; ?></h5>
                    </div>
                    <div class="content">
                    <?php
                        $userid=$_SESSION['id'];
                        $query = "SELECT * FROM Lugar WHERE idLugar='$idlugar';";
                        $result = $mysqli->query($query);
                        while ($row1 = mysqli_fetch_array($result)){
                            $postid = $row1['idLugar'];
                    // User rating
                            $query = "SELECT * FROM Valoracion WHERE lugar_valoracion='$postid' AND usuario_valoracion='$userid';";
                            $userresult = $mysqli->query($query) or die(mysqli_error());
                            $fetchRating = mysqli_fetch_array($userresult);                            
                            if (isset($fetchRating['rating'])) {
                                $rating = $fetchRating['rating'];
                            }

                    // get average
                            $query = "SELECT ROUND(AVG(rating),1) as averageRating FROM Valoracion WHERE lugar_valoracion='$postid'";
                            $avgresult = $mysqli->query($query) or die(mysqli_error());
                            $fetchAverage = mysqli_fetch_array($avgresult);
                            $averageRating = $fetchAverage['averageRating'];

                            if($averageRating <= 0){
                                $averageRating = "Sin Calificación";
                            }
                    ?>
                        <div class="post">
                            <div class="post-action">
                            <!-- Rating -->
                                <select class='rating' id='rating_<?php echo $postid; ?>' data-id='rating_<?php echo $postid; ?>'>
                                    <option value="1" >1</option>
                                    <option value="2" >2</option>
                                    <option value="3" >3</option>
                                    <option value="4" >4</option>
                                    <option value="5" >5</option>
                                </select>
                            <div style='clear: both;'></div>
                            <span id='avgrating_<?php echo $postid; ?>'><?php echo $averageRating; ?></span>

                            <!-- Set rating -->
                            <script type='text/javascript'>
                            $(document).ready(function(){
                                $('#rating_<?php echo $postid; ?>').barrating('set',<?php print_r($rating) ; ?>);
                            });
                            
                            </script>
                        </div>
                    </div>
            <?php
                }
            ?>

        </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <a href="index.html" class="footer-logo">
                <img src="img/logoBC.png" alt="">
            </a>
            <h3> Bienvenido: <?php echo ($_SESSION['id']);?></h3>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            <br>
            <br>
            <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Llajta Tour <i class="fa fa-heart-o" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
        </div>
    </footer>
    <!-- Footer Section end -->
    
    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery-3.0.0.js" type="text/javascript"></script>
    <script src="js/jquery.barrating.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $('.rating').barrating({
                theme: 'fontawesome-stars',
                onSelect: function(value, text, event) {

                    // Get element id by data-id attribute
                    var el = this;
                    var el_id = el.$elem.data('id');

                    // rating was selected by a user
                    if (typeof(event) !== 'undefined') {
                        
                        var split_id = el_id.split("_");

                        var postid = split_id[1];  // postid

                        // AJAX Request
                        $.ajax({
                            url: 'rating_ajax.php',
                            type: 'POST',
                            data: {postid:postid,rating:value},
                            dataType: 'json',
                            success: function(data){
                                // Update average
                                var average = data['averageRating'];
                                $('#avgrating_'+postid).text(average);
                            }
                        });
                    }
                }
            });
        });
      
    </script>
    </body>
</html>
