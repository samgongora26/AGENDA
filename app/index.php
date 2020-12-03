<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Agenda escolar</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="recursos/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="recursos/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="recursos/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="recursos/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="recursos/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="recursos/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="recursos/plugins/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="recursos/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="recursos/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="recursos/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="recursos/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="recursos/images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="recursos/images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="recursos/images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down   d-md-none">
							<form action="#">
								<input type="text" class="form-control" placeholder="Search">
							</form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge gradient-1 badge-pill badge-primary">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>  
                                    
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Adam Smith</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Barak Obama</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Hilari Clinton</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hello</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2 badge-primary">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>  
                                    
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html"><i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill badge-primary">3</div></a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./index.html">Home 1</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Layouts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./layout-blank.html">Blank</a></li>
                            <li><a href="./layout-one-column.html">One Column</a></li>
                            <li><a href="./layout-two-column.html">Two column</a></li>
                            <li><a href="./layout-compact-nav.html">Compact Nav</a></li>
                            <li><a href="./layout-vertical.html">Vertical</a></li>
                            <li><a href="./layout-horizontal.html">Horizontal</a></li>
                            <li><a href="./layout-boxed.html">Boxed</a></li>
                            <li><a href="./layout-wide.html">Wide</a></li>
                            
                            
                            <li><a href="./layout-fixed-header.html">Fixed Header</a></li>
                            <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Apps</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./email-inbox.html">Inbox</a></li>
                            <li><a href="./email-read.html">Read</a></li>
                            <li><a href="./email-compose.html">Compose</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Apps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html">Profile</a></li>
                            <li><a href="./app-calender.html">Calender</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./chart-flot.html">Flot</a></li>
                            <li><a href="./chart-morris.html">Morris</a></li>
                            <li><a href="./chart-chartjs.html">Chartjs</a></li>
                            <li><a href="./chart-chartist.html">Chartist</a></li>
                            <li><a href="./chart-sparkline.html">Sparkline</a></li>
                            <li><a href="./chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">UI Components</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">UI Components</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.html">Accordion</a></li>
                            <li><a href="./ui-alert.html">Alert</a></li>
                            <li><a href="./ui-badge.html">Badge</a></li>
                            <li><a href="./ui-button.html">Button</a></li>
                            <li><a href="./ui-button-group.html">Button Group</a></li>
                            <li><a href="./ui-cards.html">Cards</a></li>
                            <li><a href="./ui-carousel.html">Carousel</a></li>
                            <li><a href="./ui-dropdown.html">Dropdown</a></li>
                            <li><a href="./ui-list-group.html">List Group</a></li>
                            <li><a href="./ui-media-object.html">Media Object</a></li>
                            <li><a href="./ui-modal.html">Modal</a></li>
                            <li><a href="./ui-pagination.html">Pagination</a></li>
                            <li><a href="./ui-popover.html">Popover</a></li>
                            <li><a href="./ui-progressbar.html">Progressbar</a></li>
                            <li><a href="./ui-tab.html">Tab</a></li>
                            <li><a href="./ui-typography.html">Typography</a></li>
                        <!-- </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                        </a>
                        <ul aria-expanded="false"> -->
                            <li><a href="./uc-nestedable.html">Nestedable</a></li>
                            <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="./uc-toastr.html">Toastr</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                        </a>
                    </li>
                    <li class="nav-label">Forms</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./form-basic.html">Basic Form</a></li>
                            <li><a href="./form-validation.html">Form Validation</a></li>
                            <li><a href="./form-step.html">Step Form</a></li>
                            <li><a href="./form-editor.html">Editor</a></li>
                            <li><a href="./form-picker.html">Picker</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./table-basic.html" aria-expanded="false">Basic Table</a></li>
                            <li><a href="./table-datatable.html" aria-expanded="false">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Pages</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href="./page-lock.html">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid mt-3">
                <!---------BARRA DE INFORMACIÓN GENERAL--->
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <a href="#" onclick='mostrar_item(1)'>
                            <div class="card-body">
                                <h3 class="card-title text-white">Hoy</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">Resumen</h2>

                                    <?php
                                        include("../config/conexion.php");
                                        $link = conectarse(); /*conexion a la bd*/
                                        $result = mysqli_query($link, "select * from eventos");
                                        $total = mysqli_num_rows($result);
                                        echo '<p class="text-white mb-0"> Eventos : '.$total.'</p>';
                                        //echo '<h1>Hola '.$total.' <h1>';
							        ?>
                                    
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-book"></i></span>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <a href="#" onclick="mostrar_item(2)">
                                <div class="card-body">
                                    <h3 class="card-title text-white">Caificaciones</h3>
                                    <div class="d-inline-block">

                                        <?php

                                        $parciales = mysqli_query($link, "SELECT * from parciales");
                                        $total_parciales = mysqli_num_rows($parciales); //numero de parciales
                                        while($row_parciales = mysqli_fetch_array($parciales)){
                                            //se asigna la propiedad display none para que no aparezca hasta que sea precionado
                                            //el bboton correspondiente. este se hace con el id parcial y su respectivo id
                                            $num_parcial = $row_parciales["id_parcial"];
                                            $res_p = mysqli_query($link, "SELECT AVG(calificacion) as promedio FROM calificaciones WHERE id_parcial = $num_parcial");
                                            $promediot = mysqli_num_rows($parciales);
                                            $promedio = mysqli_fetch_array($res_p)[0];
                                        }
                                        
                                        echo'
                                        <h2 class="text-white">Parcial: '.$total_parciales.' </h2>
                                        <p class="text-white mb-0">Promedio : '.$promedio.'</p>
                                        ';
                                        ?>
                                    </div>
                                    <span class="float-right display-5 opacity-5"><i class="fa fa-mortar-board"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <a href="#" onclick="mostrar_item(3)">
                                <div class="card-body">
                                    <h3 class="card-title text-white">Agregar, editar, eliminar...</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white">Asignaturas</h2>

                                        <?php
                                        
                                            $result = mysqli_query($link, "select * from asignaturas");
                                            $total = mysqli_num_rows($result);
                                            echo '<p class="text-white mb-0"> Asignaturas : '.$total.'</p>';
                                            
							            ?>
                                        
                                    </div>
                                    <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <a href="#" onclick="mostrar_item(4)">
                                <div class="card-body">
                                    <h3 class="card-title text-white">Agregar, editar, eliminar...</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white">Maestros</h2>
                                        <?php
                                        
                                            $result = mysqli_query($link, "select * from maestros");
                                            $total = mysqli_num_rows($result);
                                            echo '<p class="text-white mb-0"> Maestros : '.$total.'</p>';
                                            
							            ?>
                                    
                                    </div>
                                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                                </div>
                            </a>    
                        </div>
                    </div>
                </div>


                <!--+++++++++++++++RRESUMEN+++++++++++++++++++++++++++-->

                    <div class="row" style="display: flex;" id="resumen">
                    <div class="col-lg-3 col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                            <h5>Agregar evento</h5>
                                        <div class="basic-form">
                                            
                                            <form name="form_evento" action="#" method="GET">
                                                    <div class="form-group">
                                                        <input type="text" name="titulo" class="form-control input-rounded"  placeholder="agregar titulo" >
                                                        <label>Descripción</label>
                                                        <textarea name="descripcion" class="form-control h-150px"   rows="3" id="comment"></textarea>
                                                        <label class="m-t-20">Fecha</label>
                                                        <input type="text" class="form-control" name="fecha"  placeholder="2000-26-04" id="mdate">
                                                            <label class="">Asignatura</label>
                                                            <div class="col-sm-10" id="carga_nav">
                                                                <select id="inputState"   name="materia" class="form-control">
                                                                    
                                                                    <?php
                                                                        $result = mysqli_query($link, "select * from asignaturas");
                                                                        $total = mysqli_num_rows($result);
                                                                        
                                                                        while($row=mysqli_fetch_array($result)){
                                                                            echo '<option value="'.$row["id_materia"].'">'.$row["nombre"].'
                                                                                </option>';
                                                                        }
                                                                    ?>   
                                                                </select>
                                                            </div>
                                                            <div class="">
                                                                <div class="example">
                                                                    <p class="text-muted m-b-20">Color</p>
                                                                    <input type="text" name="color" class="colorpicker form-control" value="rgb(65, 184, 237)" >
                                                                </div>
                                                            </div>
                                                    </div>
                                                        
                                                        <button type="button" class="btn mb-1 btn-success btn-sm"  onClick=crear_evento()>Guardar <span class="btn-icon-right"><i class="fa fa-check"></i></span>
                                                        </button>
                                                        
                                                        
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        

                        
                        <div class="col-lg-6" id="recarga">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Eventos </h4>
                                    <p class="text-muted"><code></code>
                                    </p>
                                    <div id="accordion-three" class="accordion">
                                                                        
                                    <?php
                                            $result = mysqli_query($link, "select * from eventos");
                                            $total = mysqli_num_rows($result);
                                            $cont = 0;
                                            while($row=mysqli_fetch_array($result)){
                                                $cont = $cont + 1; //Este contador permite que los eventos se desplieguen y se reduzcan
                                                echo '
                                                    <div class="card">';
                                                        if($row["estado"] == 1){ //si el evento ha sido marcado entonces se marca con una raya y se pone gris
                                                            echo '
                                                        <div class="card-header" style="background: rgb(84,84,84)" >
                                                            <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne'.$cont.'" aria-expanded="false" aria-controls="collapseOne4"><i class="fa" aria-hidden="true"></i><del> '.$row["titulo"].'  ---     fecha: '.$row["fecha"].' ¡HECHO!</del></h5>
                                                        </div> ';
                                                        }
                                                        if($row["estado"] == 0){
                                                            echo'
                                                            <div class="card-header" style="background: '.$row["color_importancia"].'" >
                                                            <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne'.$cont.'" aria-expanded="false" aria-controls="collapseOne4"><i class="fa" aria-hidden="true"></i> '.$row["titulo"].'  ---     fecha: '.$row["fecha"].'</h5>
                                                            </div> ';
                                                        }
                                                        echo'
                                                        <div id="collapseOne'.$cont.'" class="collapse show" data-parent="#accordion-three">
                                                            <div class="card-body">'.$row["descripcion"].'</div>
                                                            <button type="button" onClick=marcar_evento('.$row["id_evento"].') class="btn mb-1 btn-success btn-sm">Marcar <span class="btn-icon-right"><i class="fa fa-check"></i></span>
                                                            </button>
                                                            <button type="button" onClick=eliminar_evento('.$row["id_evento"].') class="btn mb-1 btn-danger btn-sm">Eliminar <span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                                            </button>
                                                        </div>
                                                            
                                                    </div>
                                                ';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                                                                        
                       

                        <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-0">
                                        <h4 class="card-title px-4 mb-3">Por hacer</h4>
                                        <h5 class="card-subtitle px-4 mb-6">para marcar dar clic sobre la tarea</h5>
                                        <div class="todo-list">
                                            <div class="tdl-holder">
                                                <div class="" id="todo_list">
                                                    <ul >
                                                        <?php
                                                            $result = mysqli_query($link, "select * from to_do");
                                                            $total = mysqli_num_rows($result);
                                                            
                                                            while($row=mysqli_fetch_array($result)){
                                                            
                                                                if($row["estado"]  == 0){
                                                                echo '
                                                                    <li>
                                                                        <label>
                                                                            <span onclick="marcar_tarea('.$row["id_tarea"].')">'.$row["tarea"].'</span>
                                                                            <a class="fa fa-trash" onclick="eliminar_tarea('.$row["id_tarea"].')"></a>
                                                                        </label>
                                                                    </li>
                                                                ';
                                                                }
                                                                if($row["estado"]  == 1){
                                                                    echo '
                                                                        <li>
                                                                            <label style="background: rgb(171,171,171)">
                                                                                <span style="color: #fff" onclick="marcar_tarea('.$row["id_tarea"].')"><del>'.$row["tarea"].'</del></span>
                                                                                <a class="fa fa-trash" onclick="eliminar_tarea('.$row["id_tarea"].')"></a>
                                                                            </label>
                                                                        </li>
                                                                    ';
                                                                    }

                                                            }
                                                        ?>
                                                    </ul>
                                                </div>
                                                <div class="px-4">
                                                    
                                                        <input type="text" id="tarea" class="form-control input-rounded" placeholder="agregar tarea">
                                                        <br>
                                                        <button type="button" onClick="guardar_tarea()" class="btn mb-1 btn-success btn-sm">Guardar</button>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                    </div>


                    <!-----------------------MAESTROS------------------>
                <div style="display: none;" id="maestros">
                    <div class="row" id="recarga_maestros" >
                        <div class="col-lg-6">
                            <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Agregar maestro(a)</h4>
                                                        <div class="basic-form">
                                                            <form name="form_maestros" method="GET" novalidate enctype="multipart/form-data">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Nombre(s)</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="nombre_maestro" class="form-control" placeholder="Nombre(s)">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Apellido(s)</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="apellido_maestro" class="form-control" placeholder="Apellido(s)">
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group row">
                                                                    <div class="col-sm-10">
                                                                        <button type="button" onclick=guardar_maestro() class="btn btn-success">Agregar</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                            </div>
                        </div>
                                <?php
                                $result = mysqli_query($link, "select * from maestros");
                                $total = mysqli_num_rows($result);
                                
                                    while($row=mysqli_fetch_array($result)){
                                        echo'
                                            <div class="col-lg-2 col-sm-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <!--img src="./images/users/8.jpg" class="rounded-circle" alt=""-->
                                                            <h5 class="mt-3 mb-1">'.$row["nombre"].'</h5>
                                                            <p class="m-0">'.$row["apellido"].'</p>
                                                            <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                                                        </div>
                                                     <br>
                                                        <div class="text-center">
                                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal'.$row["id_maestro"].'editar_maestro" class="fa fa-pencil color-muted m-r-5" data-toggle="tooltip" data-placement="top" title="Editar">
                                                                <i class="fa fa-pencil color-muted m-r-5"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal'.$row["id_maestro"].'eliminar_maestro" class="fa fa-pencil color-muted m-r-5" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                                <i class="fa fa-close color-danger"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>';
                                            //-----------------MODAL DE EDTIAR MAESTRO
                                            echo   '
                                            <div class="modal fade" id="exampleModal'.$row["id_maestro"].'editar_maestro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Editar maestro: '.$row["nombre"].'</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form name="form_editar_maestros" method = "GET">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">Nombre(s):</label>
                                                                    <input type="text" name="nuevo_nombre" value="'.$row["nombre"].'" class="form-control" id="nuevo_nombre'.$row["id_maestro"].'" placeholder="'.$row["nombre"].'">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">Apellido(s):</label>
                                                                    <input type="text" name="nuevo_apellido" value="'.$row["apellido"].'" class="form-control" id="nuevo_apellido'.$row["id_maestro"].'" placeholder="'.$row["nombre"].'">
                                                                </div>
                                                                
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"  class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                            <button type="button" onClick=editar_maestro('.$row["id_maestro"].') data-dismiss="modal" class="btn btn-success">Enviar</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>';
                                            //----------------------------MODAL DE ELIMINAR
                                            echo   '
                                            <div class="modal fade" id="exampleModal'.$row["id_maestro"].'eliminar_maestro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar maestra(o): '.$row["nombre"].' '.$row["apellido"].'</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar a '.$row["nombre"].' '.$row["apellido"].'?</label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                                                            <button type="button" onClick=eliminar_maestro('.$row["id_maestro"].') data-dismiss="modal"  class="btn btn-danger">Sí</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                    }
                                ?>        
                    </div>
                </div>
                
                
                    <!--------------------CALIFICACIONES----------------->

                <div style="display: none;" id="calificaciones">
                    <div class="row" id="recarga_calificaciones">
                                    <!-- Nav tabs -->
                                        <?php
                                        //se obtiene cada uno de los parciales y calificaciones por cada uno de ellos
                                        $parciales = mysqli_query($link, "SELECT * from parciales");
                                        $total_parciales = mysqli_num_rows($parciales); //numero de parciales
                                        
                                        while($row_parciales = mysqli_fetch_array($parciales)){
                                            //se asigna la propiedad display none para que no aparezca hasta que sea precionado
                                            //el bboton correspondiente. este se hace con el id parcial y su respectivo id
                                            $num_parcial = $row_parciales["id_parcial"];
                                            $res_p = mysqli_query($link, "SELECT AVG(calificacion) as promedio FROM calificaciones WHERE id_parcial = $num_parcial");
                                            $promediot = mysqli_num_rows($parciales);
                                            $promedio = mysqli_fetch_array($res_p)[0];
                                            
                                            echo '
                                            <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                            <div class="card-body">
                                            <h4 class="card-title">Calificaciones parcial: <i> '.$row_parciales["nombre"].'</i></h4>
                                            
                                            <div class="progress" style="height: 9px;">
                                            <div class="progress-bar bg-danger" style="width: '.$promedio.'%;" role="progressbar"><span class="sr-only">'.$promedio.'% Complete</span>
                                            </div>
                                            </div>
                                            <p> Promedio: '.$promedio.' </p>
                                            <div class="row" style="" id="parcial'.$row_parciales["id_parcial"].'>   
                                            ';

                                          
                                                                            
                                            //En cada iteracion del primer while se obtiene un id del parcial el cual hace que cada parcial obtenga
                                            //sus respectivas calificaciones
                                            
                                            
                                            $result = mysqli_query($link, "SELECT calificaciones.id_calificacion, parciales.id_parcial, asignaturas.nombre as materia, asignaturas.color, calificaciones.calificacion, 
                                            parciales.nombre as parcial FROM asignaturas, calificaciones, parciales 
                                            WHERE asignaturas.id_materia = calificaciones.id_materia and 
                                            calificaciones.id_parcial = parciales.id_parcial and parciales.id_parcial = $num_parcial");
                                            $total = mysqli_num_rows($result);
                                            $cont = 0;
                                            //con este while se obtienen las calificaciones del id del parcial del primer while
                                            echo'<div class="col" id="calificacion'.$row["id_parcial"].'">
                                            ';
                                            while($row=mysqli_fetch_array($result)){
                                                //----diagrama de cada calificacion
                                                echo'
                                                    <div class="card">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Materia '.$row["materia"].' </h4>
                                                                <h6>Calificación: '.$row["calificacion"].'</h6>
                                                                <div class="text-center"><span class="donut" data-peity=\'{ "fill": ["'.$row["color"].'", "#edeeff"]}\'>'.$row["calificacion"].'/100</span></div>
                                                                <div class="text-center">
                                                                <br>
                                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editar_calificacion'.$row["id_calificacion"].'" class="fa fa-pencil color-muted m-r-5" data-toggle="tooltip" data-placement="top" title="Editar">
                                                                    <i class="fa fa-pencil color-muted m-r-5"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminar_calificacion'.$row["id_calificacion"].'" class="fa fa-pencil color-muted m-r-5" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                                    <i class="fa fa-close color-danger"></i>
                                                                </button>    
                                                                </div>
                                                            </div>
                                                    </div>
                                                ';
                                                echo '
                                                <div class="modal fade" id="editar_calificacion'.$row["id_calificacion"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Editar '.$row["materia"].' calificación: '.$row["calificacion"].'</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form name= ""  method="GET">
                                                                    <div class="form-group row">
                                                                        <label class="col-lg-4 col-form-label" for="val-digits">Calificación</label>
                                                                        <div class="col-lg-6">
                                                                            <input type="text" class="form-control" value="'.$row["id_calificacion"].'" id="nueva_calificacion'.$row["id_calificacion"].'" name="calificacion" placeholder="'.$row["calificacion"].'">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Materia</label>
                                                                        <div class="col-sm-10">
                                                                            <select id="nueva_materia'.$row["id_calificacion"].'" name="materia" class="form-control">
                                                                                
                                                                                ';
                                                                                    $r = mysqli_query($link, "select * from asignaturas");
                                                                                    $t = mysqli_num_rows($r);
                                                                                    
                                                                                    while($ro=mysqli_fetch_array($r)){
                                                                                        echo '<option value="'.$ro["id_materia"].'">'.$ro["nombre"].'
                                                                                            </option>';
                                                                                    }
                                                                                echo '  
                                                                            </select>
                                                                        </div>   
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Parcial</label>
                                                                        <div class="col-sm-10">
                                                                            <select id="nuevo_parcial'.$row["id_calificacion"].'" name="parcial" class="form-control">
                                                                                ';
                                                                                    $res = mysqli_query($link, "select * from parciales");
                                                                                    $total1 = mysqli_num_rows($res);
                                                                                    
                                                                                    while($row1=mysqli_fetch_array($res)){
                                                                                        echo '<option value="'.$row1["id_parcial"].'">'.$row1["nombre"].'
                                                                                            </option>';
                                                                                    }
                                                                                echo'   
                                                                            </select>
                                                                        </div>   
                                                                    </div>
            
                                                                </form>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                                    <button type="button" onClick=editar_calificacion('.$row["id_calificacion"].') data-dismiss="modal"  class="btn btn-success">Sí</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                     </div> 
                                                </div>
                                                
                                                <div class="modal fade" id="eliminar_calificacion'.$row["id_calificacion"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Eliminar '.$row["materia"].' calificacion '.$row["calificacion"].'</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar '.$row["materia"].' calificacion '.$row["calificacion"].'?</label>
                                                                        
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                                                <button type="button" onClick="el_calificacion('.$row["id_calificacion"].')" data-dismiss="modal"  class="btn btn-danger">Sí</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>';

                                            }
                                            echo '</div>
                                            </div>
                                            </div>
                                            </div>
                                            ';

                                            
                                        }
                                       
                                        ?> 
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Agregar calificación</h4>
                                                <div class="basic-form">
                                                <form name= "form_guardar_calificacion"  method="GET">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-digits">Calificación</label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="val-digits" name="calificacion" placeholder="90">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Materia</label>
                                                            <div class="col-sm-10">
                                                                <select id="inputState" name="materia" class="form-control">
                                                                    
                                                                    <?php
                                                                        $result = mysqli_query($link, "select * from asignaturas");
                                                                        $total = mysqli_num_rows($result);
                                                                        
                                                                        while($row=mysqli_fetch_array($result)){
                                                                            echo '<option value="'.$row["id_materia"].'">'.$row["nombre"].'
                                                                                </option>';
                                                                        }
                                                                    ?>   
                                                                </select>
                                                            </div>   
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Parcial</label>
                                                            <div class="col-sm-10">
                                                                <select id="inputState" name="parcial" class="form-control">
                                                                    
                                                                    <?php
                                                                        $result = mysqli_query($link, "select * from parciales");
                                                                        $total = mysqli_num_rows($result);
                                                                        
                                                                        while($row=mysqli_fetch_array($result)){
                                                                            echo '<option value="'.$row["id_parcial"].'">'.$row["nombre"].'
                                                                                </option>';
                                                                        }
                                                                    ?>   
                                                                </select>
                                                            </div>   
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-10">
                                                                <button type="button" onClick=guardar_calificacion() class="btn btn-success">Agregar</button>
                                                            </div>
                                                        </div>
                                                        
                                                    </form>
                                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Agregar parcial</h4>
                                                <div class="basic-form">
                                                    <form name= "form_parciales"  method="GET">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nombre del parcial</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="nombre_parcial_original" class="form-control" placeholder="Nombre">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-10">
                                                                <button type="button" onClick=guardar_parcial() class="btn btn-success">Agregar</button>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive"> 
                                                        <table class="table table-bordered table-striped verticle-middle">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Nombre</th>
                                                                    <th scope="col">Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                        $result = mysqli_query($link, "SELECT * FROM parciales");
                                                                        $total = mysqli_num_rows($result);
                                                                        
                                                                        while($row=mysqli_fetch_array($result)){
                                                                            echo '
                                                                            <tr>
                                                                                <td>'.$row["nombre"].'</td>
                                                                                
                                                                                <td>
                                                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editar_parcial'.$row["id_parcial"].'" class="fa fa-pencil color-muted m-r-5" data-toggle="tooltip" data-placement="top" title="Editar">
                                                                                            <i class="fa fa-pencil color-muted m-r-5"></i>
                                                                                        </button>
                                                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminar_parcial'.$row["id_parcial"].'" class="fa fa-pencil color-muted m-r-5" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                                                            <i class="fa fa-close color-danger"></i>
                                                                                        </button>
                                                                                </td>
                                                                            </tr>';
                                                                            //-------------------------MODAL DE EDITAR
                                                                            echo   '
                                                                            <div class="modal fade" id="editar_parcial'.$row["id_parcial"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLabel">Editar parcial: '.$row["nombre"].'</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form name="" method = "GET">
                                                                                            <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Nombre del parcial</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input type="text" name="nombre" class="form-control" id="nuevo_nombre_parcial'.$row["id_parcial"].'" placeholder="Nombre">
                                                                                            </div>
                                                                                        </div>
                                                                                            
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"  class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                                                            <button type="button" onClick=editar_parcial('.$row["id_parcial"].') data-dismiss="modal" class="btn btn-success">Enviar</button>
                                                                                        </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                                            //----------------------------MODAL DE ELIMINAR
                                                                            echo   '
                                                                            <div class="modal fade" id="eliminar_parcial'.$row["id_parcial"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar parcial: '.$row["nombre"].'</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form>
                                                                                                <div class="form-group">
                                                                                                    <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar?</label>
                                                                                                    
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                                                                            <button type="button" onClick=el_parcial('.$row["id_parcial"].') data-dismiss="modal"  class="btn btn-danger">Sí</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                                        }
                                                                ?> 
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </div>    
                
                <!-----------------------------ASIGNATURAS------------->
                <div style="display: none;" class="row" id= "materia">
                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Agregar materia</h4>
                                                <div class="basic-form">
                                                    <form name= "form_materia"  method="GET">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nombre materia</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="materia" class="form-control" placeholder="Nombre(s)">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Maestro</label>
                                                            <div class="col-sm-10">
                                                                <select id="inputState" name="maestro" class="form-control">
                                                                    
                                                                    <?php
                                                                        $result = mysqli_query($link, "select * from maestros");
                                                                        $total = mysqli_num_rows($result);
                                                                        
                                                                        while($row=mysqli_fetch_array($result)){
                                                                            echo '<option value="'.$row["id_maestro"].'">'.$row["nombre"].' '.$row["apellido"].'
                                                                                </option>';
                                                                        }
                                                                    ?>   
                                                                </select>
                                                            </div>   
                                                        </div>
                                                        <div class="form-group row">
                                                                
                                                                <label class="col-sm-2 col-form-label">Color</label>
                                                                    <input type="text" name="color" class="colorpicker form-control" value="rgb(65, 184, 237)" >
                                                                
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-10">
                                                                <button type="button" onClick=guardar_materia() class="btn btn-success">Agregar</button>
                                                            </div>
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="col-lg-6" id="carga_materia">
                                            <div class="card" >
                                                <div class="card-body">
                                                    <h4 class="card-title">MATERIAS</h4>
                                                    <div class="table-responsive"> 
                                                        <table class="table table-bordered table-striped verticle-middle">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Materia</th>
                                                                    <th scope="col">Docente</th>
                                                                    
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                        $result = mysqli_query($link, "SELECT asignaturas.id_materia, asignaturas.color, asignaturas.nombre as nombre_materia, maestros.nombre as nombre_maestro FROM asignaturas, maestros WHERE asignaturas.id_maestro = maestros.id_maestro");
                                                                        $total = mysqli_num_rows($result);
                                                                        
                                                                        while($row=mysqli_fetch_array($result)){
                                                                            echo '
                                                                            <tr style="background: '.$row["color"].'; color: white;" >
                                                                                <td>'.$row["nombre_materia"].'</td>
                                                                                <td>'.$row["nombre_maestro"].'</td> 
                                                                                <td>
                                                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal'.$row["id_materia"].'editar" class="fa fa-pencil color-muted m-r-5" data-toggle="tooltip" data-placement="top" title="Editar">
                                                                                            <i class="fa fa-pencil color-muted m-r-5"></i>
                                                                                        </button>
                                                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal'.$row["id_materia"].'eliminar" class="fa fa-pencil color-muted m-r-5" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                                                            <i class="fa fa-close color-danger"></i>
                                                                                        </button>
                                                                                </td>
                                                                            </tr>';
                                                                            //-------------------------MODAL DE EDITAR
                                                                            echo   '
                                                                            <div class="modal fade" id="exampleModal'.$row["id_materia"].'editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLabel">Editar materia: '.$row["nombre_materia"].'</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form name="" method = "GET">
                                                                                                <div class="form-group">
                                                                                                    <label for="recipient-name" class="col-form-label">Nombre de la materia:</label>
                                                                                                    <input type="text" name="nuevo_nombre" value="'.$row["nombre_materia"].'" class="form-control" id="nueva_materia'.$row["id_materia"].'" placeholder="'.$row["nombre_materia"].'">
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label for="recipient-name" class="col-form-label">Maestro:</label>
                                                                                                    <select id="nuevo_maestro'.$row["id_materia"].'" name="nuevo_maestro" class="form-control">
                                                                                                    ';
                                                                                                        $result_m = mysqli_query($link, "select * from maestros");
                                                                                                        $total_m = mysqli_num_rows($result_m);
                                                                                                        
                                                                                                        while($row_m=mysqli_fetch_array($result_m)){
                                                                                                            echo '<option value="'.$row_m["id_maestro"].'">'.$row_m["nombre"].' '.$row_m["apellido"].'
                                                                                                                </option>';
                                                                                                        }
                                                                                                    echo'  
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label class="col-sm-2 col-form-label">Color</label>
                                                                                                    <input type="text" name="nuevo_color" id="nuevo_color'.$row["id_materia"].'" class="colorpicker form-control" value="'.$row["color"].'" >
                                                                                                </div>
                                                                                            
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"  class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                                                            <button type="button" onClick=editar_materia('.$row["id_materia"].') data-dismiss="modal" class="btn btn-success">Enviar</button>
                                                                                        </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                                            //----------------------------MODAL DE ELIMINAR
                                                                            echo   '
                                                                            <div class="modal fade" id="exampleModal'.$row["id_materia"].'eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLabel">Editar materias: '.$row["nombre_materia"].'</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form>
                                                                                                <div class="form-group">
                                                                                                    <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar la materia?</label>
                                                                                                    
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                                                                            <button type="button" onClick=eliminar_materia('.$row["id_materia"].') data-dismiss="modal"  class="btn btn-danger">Sí</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                                        }
                                                                ?> 
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                    </div>      
                </div>
                    <!--+++++++++++++++++++ PERFIL++++++++++++++++++++++++++-->
                    
            <!--div class="col-lg-4 col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media align-items-center mb-4">
                                                <img class="mr-3" src="images/avatar/11.png" width="80" height="80" alt="">
                                                <div class="media-body">
                                                    <h3 class="mb-0">Nombre y apellido</h3>
                                                    <p class="text-muted mb-0">Nombre de usuario</p>
                                                </div>
                                            </div>
                                            
                                           
                                                <div class="col-12 text-center">
                                                    <button class="btn btn-danger px-5">Configuración</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>      
                   


            </div-->
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

    <script src="recursos/plugins/common/common.min.js"></script>
    <script src="recursos/js/custom.min.js"></script>
    <script src="recursos/js/settings.js"></script>
    <script src="recursos/js/styleSwitcher.js"></script>

    <script src="recursos/plugins/highlightjs/highlight.pack.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <script>
        (function($) {
        "use strict"

            new quixSettings({
                version: "light", //2 options "light" and "dark"
                layout: "horizontal", //2 options, "vertical" and "horizontal"
                navheaderBg: "color_1", //have 10 options, "color_1" to "color_10"
                headerBg: "color_1", //have 10 options, "color_1" to "color_10"
                sidebarStyle: "vertical", //defines how sidebar should look like, options are: "full", "compact", "mini" and "overlay". If layout is "horizontal", sidebarStyle won't take "overlay" argument anymore, this will turn into "full" automatically!
                sidebarBg: "color_1", //have 10 options, "color_1" to "color_10"
                sidebarPosition: "static", //have two options, "static" and "fixed"
                headerPosition: "static", //have two options, "static" and "fixed"
                containerLayout: "wide",  //"boxed" and  "wide". If layout "vertical" and containerLayout "boxed", sidebarStyle will automatically turn into "overlay".
                direction: "ltr" //"ltr" = Left to Right; "rtl" = Right to Left
            });


        })(jQuery);
    </script>


    <script src="recursos/js/nav.js"></script>
    <script src="recursos/js/fc.js"></script> 
    <script src="recursos/js/tareas.js"></script> 
    <script src="recursos/js/asignaturas.js"></script>
    <script src="recursos/js/maestros.js"></script>    
    <script src="recursos/js/calificaciones.js"></script>                                        


    <!-- Chartjs -->
    <script src="recursos//plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="recursos/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="recursos/plugins/d3v3/index.js"></script>
    <script src="recursos/plugins/topojson/topojson.min.js"></script>
    <script src="recursos/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="recursos/plugins/raphael/raphael.min.js"></script>
    <script src="recursos/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="recursos/plugins/moment/moment.min.js"></script>
    <script src="recursos/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="recursos/plugins/chartist/js/chartist.min.js"></script>
    <script src="recursos/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>




<script src="recursos/plugins/peity/jquery.peity.min.js"></script>
<script src="recursos/js/plugins-init/peitychart.init.js"></script>


    <script src="recursos/plugins/moment/moment.js"></script>
    <script src="recursos/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="recursos/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="recursos/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="recursos/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="recursos/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="recursos/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="recursos/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="recursos/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="recursos/js/plugins-init/form-pickers-init.js"></script>

    <script src="recursos/plugins/moment/moment.js"></script>
    <script src="recursos/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="recursos/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="recursos/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="recursos/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="recursos/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="recursos/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="recursos/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="recursos/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="recursos/js/plugins-init/form-pickers-init.js"></script>

</body>

</html>