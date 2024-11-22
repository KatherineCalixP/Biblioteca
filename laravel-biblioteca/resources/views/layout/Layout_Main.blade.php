<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Biblioteca Virtual Infop @yield('TITULO_PAGINA', '')</title>

  <link rel="stylesheet" href="{{ asset('asset/app.css') }}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <!--body en boostrap-->
    <div class="wrapper">
        <!-- pantalla de carga -->
        <!-- pantalla de carga -->
        <!-- pantalla de carga -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="{{asset('asset/imagenes/Infop_logo2.png')}}" alt="AdminLTELogo" height="260" width="260">
            </div>
        <!-- /.pantalla de carga -->
        <!-- /.pantalla de carga -->
        <!-- /.pantalla de carga -->


        <!-- Barra de navegacion horizontal arriba -->
        <!-- Barra de navegacion horizontal arriba -->
        <!-- Barra de navegacion horizontal arriba -->
        <nav class="main-header navbar navbar-expand BarraHorizontal_color">
            <!-- NAVBAR derecho -->
            <ul class="navbar-nav">

                <!-- BOTON abrir la barra de navegacion vertical izquierda -->
                <li class="nav-item">
                    <a class="nav-link nav_link_bar" data-widget="pushmenu" href="#" role="button" onclick="toggleBrandLink()"><i class="fas fa-bars"></i></a>
                </li>
                <!-- /.BOTON abrir la barra de navegacion vertical izquierda -->

                <!-- botones de enlace -->
                <!-- botones de enlace -->
                <!-- botones de enlace -->
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link nav_link_bar">Home</a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link nav_link_bar">Soporte</a>
                </li>
                <!-- /.botones de enlace -->
                <!-- /.botones de enlace -->
                <!-- /.botones de enlace -->
            </ul>
            <!-- /.NAVBAR derecho -->
            <!-- /.NAVBAR derecho -->
            <!-- /.NAVBAR derecho -->

            <!-- NAVBAR izquierdo -->
            <!-- NAVBAR izquierdo -->
            <!-- NAVBAR izquierdo -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <h3>Biblioteca Virtual Infop</h3>
                </li>
            </ul>
            <!-- /.NAVBAR izquierdo -->
            <!-- /.NAVBAR izquierdo -->
            <!-- /.NAVBAR izquierdo -->
        </nav>
        <!-- /.Barra de navegacion horizontal arriba -->
        <!-- /.Barra de navegacion horizontal arriba -->
        <!-- /.Barra de navegacion horizontal arriba -->

        <!-- BARRA LATERAL CONTENIDO -->
        <!-- BARRA LATERAL CONTENIDO -->
        <!-- BARRA LATERAL CONTENIDO -->
        <aside class="main-sidebar BarraLateral_color elevation-4">
            <!-- navbar-LOGO -->
            <!-- navbar-LOGO -->
                <a href="{{url('index')}}" class="brand-link" id="brandLink">
                    <img src="{{asset('asset/imagenes/Infop_logo.png')}}"  height="90" width="213">
                </a>
            <!-- navbar-LOGO -->
            <!-- navbar-LOGO -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- USUARIO PERFIL -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-rounded elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                    <a href="#" class="d-block nav_link_bar">Alexander Pierce</a>
                    </div>
                </div>
                <!-- /.USUARIO PERFIL -->
                <!-- BUSCADOR -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                    </div>
                </div>
                <!-- /.BUSCADOR -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    @include('layout.Layout_MenuBar')

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- /.BARRA LATERAL CONTENIDO -->
        <!-- /.BARRA LATERAL CONTENIDO -->
        <!-- /.BARRA LATERAL CONTENIDO -->


        <!-- Content Wrapper. Contains page content -->
        <!-- Content Wrapper. Contains page content -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- CONTENIDO CABECERA -->
            <div class="content-header elevation-2" style="background-color: rgb(199, 230, 241); border-top: 3px solid #DC4539;">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <!-- TITULO DE LA PAGINA-->
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('TITULO_PAGINA', 'DEFAULT')</h1>
                        </div>
                        <!-- TITULO DE LA PAGINA-->
                        <!-- HISTORIAL O RAMA DE LA PAGINA-->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">@yield('PAG_GRUPO', '')</li>
                            <li class="breadcrumb-item active">@yield('TITULO_PAGINA', 'INDEX')</li>
                            </ol>
                        </div>
                        <!-- HISTORIAL O RAMA DE LA PAGINA-->
                    </div>
                </div>
            </div>
            <!-- /.CONTENIDO CABECERA -->
            <!-- CONTENIDO PRINCIPAL -->
            <section class="content">
                <br><br>
                @yield('content')

            </section>
            <!-- /.CONTENIDO PRINCIPAL -->
        </div>
        <!-- /.Content Wrapper. Contains page content -->
        <!-- /.Content Wrapper. Contains page content -->
        <!-- /.Content Wrapper. Contains page content -->

        <!-- PIE DE PAGINA-->
        <!-- PIE DE PAGINA-->
        <!-- PIE DE PAGINA-->
        <footer class="main-footer">
            <strong> Copyright &copy; 2024 INFOP Virtual.  Todos los derechos reservados.</strong>
            <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 0.1.0
            </div>
        </footer>
        <!-- /.PIE DE PAGINA-->
        <!-- /.PIE DE PAGINA-->
        <!-- /.PIE DE PAGINA-->

        <!-- CONTORLADOR DE LA BARRA LATERAL = BORRAR DESPUES -->
            <aside class="control-sidebar control-sidebar-dark"></aside>
        <!-- /.CONTORLADOR DE LA BARRA LATERAL = BORRAR DESPUES -->

    </div>
    <!--./body en boostrap-->
    <!-- SCRIPTS -->
    <div>
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>

        <style>
            .hidden {
                display: none;
            }
        </style>

        <script>
            function toggleBrandLink() {
                const brandLink = document.getElementById('brandLink');
                brandLink.classList.toggle('hidden'); // Alterna la clase 'hidden'
            }
        </script>
    </div>
    <!-- ./SCRIPTS -->
</body>
</html>
