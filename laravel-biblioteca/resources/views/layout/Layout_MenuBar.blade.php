<!--
    para el <li> en class, deberia de ir:
        "nav-item"  //para saber que es de la barra lateral
        "menu-open" //para hacer que se abra, sin el no se abrira

    para el <ul> es para abrir un arbol.
-->
<!-- CABECERA-->
<li class="nav-header">MODULOS</li>


<!--########################################################################################################################################-->
<!--########################################################################################################################################-->


<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="fa fa-user nav-icon"></i>
        <p>
            Usuarios
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">

        <li class="nav-header"><i class="bi bi-circle-fill"></i> <span>Usuarios </span></li>

        <li class="nav-item">
            <a href="{{url('index')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Tabla</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('index')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Pendientes</p>
            </a>
        </li>



        <li class="nav-header"><i class="bi bi-circle-fill"></i> <span>Seguridad </span></li>

        <li class="nav-item">
            <a href="{{url('index')}}" class="nav-link nav_link_tree">
             <i class="far fa-circle nav-icon"></i> <p>Roles</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('index')}}" class="nav-link nav_link_tree">
             <i class="far fa-circle nav-icon"></i> <p>Bitacora</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('index')}}" class="nav-link nav_link_tree">
             <i class="far fa-circle nav-icon"></i> <p>Permisos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('index')}}" class="nav-link nav_link_tree">
             <i class="far fa-circle nav-icon"></i> <p>Parametros</p>
            </a>
        </li>


    </ul>
    <!-- /.dentro del button -->
</li>


<!--########################################################################################################################################-->
<!--########################################################################################################################################-->

<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="fa fa-book nav-icon"></i>
        <p>
            Inventario
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{url('index')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Dashboard v1</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('index')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Dashboard v2</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('index')}}" class="nav-link nav_link_tree">
             <i class="far fa-circle nav-icon"></i> <p>Dashboard v3</p>
            </a>
        </li>
    </ul>
    <!-- /.dentro del button -->
</li>




<!--########################################################################################################################################-->
<!--########################################################################################################################################-->



<!-- BODY-->
<li class="nav-item">
    <!-- BUTTON principal -->
    <a href="#" class="nav-link nav_link_bar">
        <i class="fa fa-list-alt nav-icon"></i>
        <p>
            Procesos Y Gestiones
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <!-- /.BUTTON principal -->

    <!-- dentro del button -->
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{url('index')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Dashboard v1</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('index')}}" class="nav-link nav_link_tree">
                <i class="far fa-circle nav-icon"></i> <p>Dashboard v2</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('index')}}" class="nav-link nav_link_tree">
             <i class="far fa-circle nav-icon"></i> <p>Dashboard v3</p>
            </a>
        </li>
    </ul>
    <!-- /.dentro del button -->
</li>
