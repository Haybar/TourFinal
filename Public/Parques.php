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
    <style type="text/css">
      #mapa {
            height: 600px;
            width: 100%;
      }
    </style> 


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body> 
<main>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section -->
    <header class="header-section">
        <a href="home.php" class="site-logo">
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
                <li><a href="../logout.php">Salir</a></li>
            </ul>
        </nav>
    </header>
    <!-- Header Section end -->

    <!-- Page top Section end -->
    <section class="page-top-section set-bg" data-setbg="img/page-top-bg/ciudad.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Parques</h2>
                    <nav class="site-breadcrumb">
                        <a class="sb-item" href="index.html">Inicio</a>
                        <span class="sb-item active">Parques</span>
                    </nav>
                </div>
                <div class="col-lg-4">
                    <div class="container-buscar">
                        <form method="POST" action="buscar.php">
                            <div class="form-group">
                                <label for="exampleSelect1" style="color: white"><h3>Categoria</h3></label>
                                <br>
                                <select class="form-control" id="exampleSelect1" name="categoria">                        
                                <?php
                                $query = $mysqli -> query ("SELECT * FROM Categoria");
                                while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="'.$valores[idCategoria].'">'.$valores[nombreCategoria].'</option>';
                                }
                                ?>
                                 </select>
                                <br>
                                <button type="submit" class="btn btn-primary" name="buscar" style="width: 100%">Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>                        
        </div>
    </section>
    <!-- Page top Section end -->
    
    <!-- Galery Container -->

    <section>
    <div class="rooms">
        <div class="container">
            
        <div class="row">
            <div class="col-lg-6">
                <div class="room-bottom">
                    <h3>Lista de Lugares</h3>
                    <?php 
                    $sql = "SELECT idLugar,foto,nombreLugar,descripcion,direccion,horarioAtencion FROM `Lugar` WHERE Categoria_idCategoria='5' AND estado='1';";
                    $execonsulta=$mysqli->query($sql);
                    while( $row=mysqli_fetch_array($execonsulta) ) {
                    ?>
                    <div class="rom-btm">
                        <div class="row">
                            <div class="col-md-4 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                                <img class="card-img-top" src="../Private/Upload/<?php echo $row['foto']; ?>" alt="Card image cap" style="width: 100%; height: 150px">
                            </div>
                            <div class="col-md-8 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                                <h4><?php echo $row[2]; ?></h4>
                                <p><?php echo $row[3]; ?></p>
                                <form action="InfoParque.php" method="POST">
                                    <input type="hidden" name="idlugar" value="<?php echo $row['idLugar']; ?>"></input>
                                    <button type="submit" class="btn btn-success btn btn-sm" id="Ver">Ver más</button>
                                </form>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <?php }?>
                </div>
            </div>
            <br>
            <br>
            <div class="col-lg-6">
                <div class="mapa position-sticky" id="mapa"></div>
            </div>
        </div>
        </div>
    </div>
        <br>
    </section>
    
    <!-- Galery Container end -->

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
</main>
    <!-- Footer Section end -->
    
    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script async defer type="text/javascript" src=https://maps.googleapis.com/maps/api/js?key=AIzaSyCP3eTt6XMGq757Iu0ZBK-eEeEAEQZRGJ4&callback=initMap&libraries=&v=weekly></script>
    <script >
        
    </script>
    <script>
        $(function () {
        initMap();
        });
      function initMap() {
          var map;
          var bounds = new google.maps.LatLngBounds();
          var mapOptions = {
              mapTypeId: 'roadmap'
          };

          map = new google.maps.Map(document.getElementById('mapa'), {
              mapOptions
          });

          map.setTilt(50);

          // Crear múltiples marcadores desde la Base de Datos 
          var marcadores = [
              <?php include('marcadores.php'); ?>
          ];

          // Creamos la ventana de información para cada Marcador
          var ventanaInfo = [
              <?php include('info_marcadores.php'); ?>
          ];

          // Creamos la ventana de información con los marcadores 
          var mostrarMarcadores = new google.maps.InfoWindow(),
              marcadores, i;

          // Colocamos los marcadores en el Mapa de Google 
          for (i = 0; i < marcadores.length; i++) {
              var position = new google.maps.LatLng(marcadores[i][1], marcadores[i][2]);
              bounds.extend(position);
              marker = new google.maps.Marker({
                  position: position,
                  map: map,
                  title: marcadores[i][0]
              });

              // Colocamos la ventana de información a cada Marcador del Mapa de Google 
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                  return function() {
                      mostrarMarcadores.setContent(ventanaInfo[i][0]);
                      mostrarMarcadores.open(map, marker);
                  }
              })(marker, i));

              // Centramos el Mapa de Google para que todos los marcadores se puedan ver 
              map.fitBounds(bounds);
          }

          // Aplicamos el evento 'bounds_changed' que detecta cambios en la ventana del Mapa de Google, también le configramos un zoom de 14 
          var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
              this.setZoom(13);
              google.maps.event.removeListener(boundsListener);
          });

      }

      // Lanzamos la función 'initMap' para que muestre el Mapa con Los Marcadores y toda la configuración realizada 
      google.maps.event.addDomListener(window, 'load', initMap);
    </script>

    </body>
</html>
