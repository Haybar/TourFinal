<?php include('../config.php'); ?>
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
                <li><a href="index.html">Inicio</a></li>
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

    <!-- Header Section end -->

    <!-- Page top Section end -->
    <section class="page-top-section set-bg" data-setbg="img/page-top-bg/ciudad.jpg">
        <div class="container">
            <h2>Lugares</h2>
            <nav class="site-breadcrumb">
                <a class="sb-item" href="index.html">Inicio</a>
                <span class="sb-item active">Parques</span>
            </nav>
        </div>
    </section>
    <!-- Page top Section end -->

    <!-- Galery Container -->

    <div class="container mt-3">
        <br>
    <div class="galery">
            <div class="row">
                
                <?php
                $sql = "SELECT idLugar,foto,nombreLugar,descripcion,direccion,horarioAtencion FROM `Lugar` WHERE Categoria_idCategoria='5' AND estado='1';";
                $execonsulta=$mysqli->query($sql);
                while( $row=mysqli_fetch_array($execonsulta) ) {
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $row[1]; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#"><?php echo $row[2]; ?></a></h5>
                                <p class="card-text"><?php echo $row[3]; ?></p>
                                <form action="InfoParque.php" method="POST">
                                    <input type="hidden" name="idlugar" value="<?php echo $row['idLugar']; ?>"></input>
                                    <button type="submit" class="btn btn-success btn btn-sm" id="Ver">Saber más</button>
                                </form>
                        </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        </div>
        <br>
    <!-- Galery Container end -->

   

    <!-- Score Section end -->
    <section class="score-section text-white set-bg" data-setbg="img/score-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <h2>Obten nuestra App</h2>
                    <h4>Mira las novedades que tenemos en nuestra app</h4>
                    <a href="#" class="site-btn sb-big">Descargar</a>
                </div>
            </div>
            <img src="img/app1.png" alt="" class="hand-img">
        </div>
    </section>
    <!-- Score Section end -->

    <!-- Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <a href="index.html" class="footer-logo">
                <img src="img/logoBC.png" alt="">
            </a>
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

    </body>
</html>
