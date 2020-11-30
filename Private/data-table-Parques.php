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
    <title>Data Table - Vali Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
      <div class="app-title">
        <div class="col-lg-12">
            <div class="bs-component">
              <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link"  href="home.html">Pagina Principal</a></li>
                <li class="nav-item"><a class="nav-link active"  href="data-table-Parques.php">Tabla</a></li>
                <li class="nav-item"><a class="nav-link"  href="Parque.php">Registro</a></li>
              </ul>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Foto</th>
                      <th>Parque</th>
                      <th>Descripción</th>
                      <th>Dirección</th>
                      <th>Horario</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include ("config.php");
                      $sql="SELECT idLugar,foto,nombreLugar,descripcion,direccion,horarioAtencion FROM `Lugar` WHERE Categoria_idCategoria='5' AND estado='1';";
                      $execonsulta=$mysqli->query($sql);

                      if(mysqli_num_rows($execonsulta)>0)
                      {
                        $indice=1;
                        while ($row=mysqli_fetch_array($execonsulta))
                        {
                    ?>
                          <tr>
                            <td><?php echo $indice; ?></td>
                            <td><?php echo $row['foto']; ?></td>
                            <td><?php echo $row['nombreLugar']; ?></td>
                            <td><?php echo $row['descripcion']; ?></td>
                            <td><?php echo $row['direccion']; ?></td>
                            <td><?php echo $row['horarioAtencion']; ?></td>
                            <td>
                              <div class="row">
                                <div class="col-md-3">
                                  <form action="ParqueEditarForm.php" method="POST">
                                  <input type="hidden" name="idlugar" value="<?php echo $row['idLugar']; ?>"></input>
                                  <button type="submit" class="btn btn-success btn btn-sm" id="Modificar"><i class="fa fa-pencil-square-o"></i></button>
                                  </form>
                                </div>
                                <hr>
                                <div class="col-md-7">
                                  <form action="eliminarLugardb.php" method="POST">
                                    <input type="hidden" name="idlugar" value="<?php echo $row['idLugar']; ?>"></input>
                                    <button type="submit" class="btn btn-danger btn btn-sm" id="Eliminar"><i class="fa fa-trash"></i></button>
                                  </form>
                                </div>
                              </div>

                            </td>

                          </tr>
                    <?php
                          $indice++;
                        }
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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
  </body>
</html>
