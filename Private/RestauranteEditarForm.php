<?php include'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Lugares</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCP3eTt6XMGq757Iu0ZBK-eEeEAEQZRGJ4&callback=initMap&libraries=&v=weekly">  
    </script>
    <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 350px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
      }
    </style>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="home.html"><img src="images/logoBC.png"></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="../login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Control de Usuario</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="data-table-Usuario.php"><i class="icon fa fa-users"></i></i> Usuarios </a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-list"></i></i><span class="app-menu__label">Atractivo Turistico</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="data-table-Balneario.php"><i class="icon fa fa-shower"></i> Balnearios </a></li>
            <li><a class="treeview-item" href="data-table-CentroCultural.php" rel="noopener"><i class="icon fa fa-home"></i> Centros Culturales </a></li>
            <li><a class="treeview-item" href="data-table-Cine.php"><i class="icon fa fa-film"></i> Cines </a></li>
            <li><a class="treeview-item" href="data-table-Plaza.php"  rel="noopener"><i class="icon fa fa-circle-o"></i> Plazas </a></li>
            <li><a class="treeview-item" href="data-table-Parques.php"><i class="icon fa fa-tree"></i> Parques </a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Sitio Turistico</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="data-table-Iglesia.php"><i class="icon fas fa-church"></i> Iglesias </a></li>
            <li><a class="treeview-item" href="data-table-Museo.php"  rel="noopener"><i class="icon fa fa-building-o"></i> Museos </a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="data-table-Restaurante.php"><i class="app-menu__icon fa fa-cutlery"></i><span class="app-menu__label">Restaurantes</span></a></li>
        <li><a class="app-menu__item" href="data-table-Universidad.php"><i class="app-menu__icon fa fa-university"></i><span class="app-menu__label">Universidades</span></a></li>
        <li><a class="app-menu__item" href="data-table-Institucion.php"><i class="app-menu__icon fa fa-briefcase"></i><span class="app-menu__label">Instituciones</span></a></li>
        <li><a class="app-menu__item" href="Eventos.php"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Eventos</span></a></li>
    </aside>
    <main class="app-content">

      <div class="row">
        <div class="col-md-8">
          <div class="tile">
            <div class="tile-body">
              <?php
                include("config.php");
                $idlugar=$_POST['idlugar'];

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
              <form class="for-balneario" action="modificarRestaurantebd.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="idlugar" class="form-control" value="<?php echo $idlugar; ?>"></input>
                <div class="form-group">
                  <label class="control-label">Nombre del Lugar</label>
                  <input class="form-control" name="nombreLugar" type="text" placeholder="Ingrese el nombre del Lugar" value="<?php echo $nombreLugar;?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Descripción</label>
                  <input class="form-control" name="descripcion" type="text" placeholder="Ingrese una corta Descripción" value="<?php echo $descripcion;?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Dirección</label>
                  <input class="form-control" name="direccion" type="text" placeholder="Ingrese La Dirección" value="<?php echo $direccion;?>">
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Horario</label>
                      <input class="form-control" name="horarioAtencion" type="text" placeholder="Ingrese el Horario" value="<?php echo $horarioAtencion;?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Precio Entrada</label>
                      <input class="form-control" name="entrada" type="text" placeholder="Ingrese el Horario"
                      value="<?php echo $entrada;?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Foto</label>
                  <input class="form-control" name="foto" type="file" value="<?php echo $foto;?>">
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleSelect1">Categoria</label>
                      <select class="form-control" id="exampleSelect1" name="categoria" value="<?php echo $categoria;?>">
                        <?php
                          $query = $mysqli -> query ("SELECT * FROM Categoria WHERE idCategoria='7'");
                          while ($valores = mysqli_fetch_array($query)) {
                          echo '<option value="'.$valores[idCategoria].'">'.$valores[nombreCategoria].'</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label">Mapa</label>
                  <br>
                  <div id="map">

                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <label class="control-label">Latitud</label>
                      <input class="form-control" name="latitud" type="text" placeholder="Ingrese la Latitud" id="txtLat" value="<?php echo $latitud; ?>">
                    </div>
                    <div class="col-md-6">
                      <label class="control-label">Logitud</label>
                      <input class="form-control" name="longitud" type="text" placeholder="Ingrese la Logitud" id="txtLng" value="<?php echo $longitud; ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea">Reseña Historica</label>
                  <textarea class="form-control" id="exampleTextarea" rows="5" name="reseña"><?php echo $reseña;?></textarea>
                </div>
                <div class="form-group">
                </div>
                <div class="tile-footer" align=center>
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="data-table-Restaurante.php"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="clearix"></div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
    <script type="text/javascript" src=https://maps.googleapis.com/maps/api/js?key=AIzaSyCP3eTt6XMGq757Iu0ZBK-eEeEAEQZRGJ4&callback=initMap&libraries=&v=weekly></script>
    <script>
        var vMarker
        var map
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: new google.maps.LatLng(-17.39722040005723, -66.1459570801025),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            vMarker = new google.maps.Marker({
                position: new google.maps.LatLng(-17.39722040005723, -66.1459570801025),
                draggable: true
            });
            google.maps.event.addListener(vMarker, 'dragend', function (evt) {
                $("#txtLat").val(evt.latLng.lat().toFixed(6));
                $("#txtLng").val(evt.latLng.lng().toFixed(6));

                map.panTo(evt.latLng);
            });
            map.setCenter(vMarker.position);
            vMarker.setMap(map);

            $("#txtCiudad, #txtEstado, #txtDireccion").change(function () {
                movePin();
            });

            function movePin() {
            var geocoder = new google.maps.Geocoder();
            var textSelectM = $("#txtCiudad").text();
            var textSelectE = $("#txtEstado").val();
            var inputAddress = $("#txtDireccion").val() + ' ' + textSelectM + ' ' + textSelectE;
            geocoder.geocode({
                "address": inputAddress
            }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    vMarker.setPosition(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
                    map.panTo(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
                    $("#txtLat").val(results[0].geometry.location.lat());
                    $("#txtLng").val(results[0].geometry.location.lng());
                }

            });
        }
        </script>
  </body>
</html>
