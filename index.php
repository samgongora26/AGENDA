<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Agenda escolar</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="./plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="./plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="./plugins/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="./plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="./plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">


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
        <div class="">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <a href="#" onclick='mostrar_item(1)'>
                            <div class="card-body">
                                <h3 class="card-title text-white">Hoy</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">Resumen</h2>

                                    <?php
                                        include("php/conexion.php");
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
                                        <h2 class="text-white">Parcial: 1</h2>
                                        <p class="text-white mb-0">Promedio : 90.9</p>
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
                        <div class="row" >
                                <?php
                                $result = mysqli_query($link, "select * from maestros");
                                $total = mysqli_num_rows($result);
                                
                                    while($row=mysqli_fetch_array($result)){
                                        echo'
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <img src="./images/users/8.jpg" class="rounded-circle" alt="">
                                                            <h5 class="mt-3 mb-1">'.$row["nombre"].'</h5>
                                                            <p class="m-0">'.$row["apellido"].'</p>
                                                            <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                                                        </div>
                                                     <br>
                                                        <div class="text-center">
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal'.$row["id_maestro"].'editar" class="fa fa-pencil color-muted m-r-5" data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <i class="fa fa-pencil color-muted m-r-5"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal'.$row["id_maestro"].'eliminar" class="fa fa-pencil color-muted m-r-5" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="fa fa-close color-danger"></i>
                                                        </button>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>';
                                    }
                                ?>
                        
                           
                                    
                                    
                                    <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Agregar maestro(a)</h4>
                                                        <div class="basic-form">
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Nombre(s)</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" placeholder="Nombre(s)">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Apellido(s)</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" placeholder="Apellido(s)">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Asignatura</label>
                                                                        <div class="col-sm-10">
                                                                        <select id="inputState" class="form-control">
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
                                                                        <label class="col-sm-2 col-form-label">Foto</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="file" class="form-control-file">
                                                                        </div>
                                                                    </div>
                                                                
                                                                <div class="form-group row">
                                                                    <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-dark">Agregar</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                            </div>
                </div>
                
                
                    <!--------------------CALIFICACIONES----------------->

                <div style="display: none;" id="calificaciones">
                        <div class="row">
                                
                            <div class="col-lg-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Materia</h4>
                                                <h6>Primer parcial</h2>
                                                <div class="text-center"><span class="donut" data-peity='{ "fill": ["#99D683", "#f2f2f2"]}'>1,4</span>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Materia</h4>
                                                <h6>Primer parcial</h2>
                                                <div class="text-center"><span class="donut" data-peity='{ "fill": ["#FFCA4A", "#f2f2f2"]}'>1,4</span>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Materia</h4>
                                                <h6>Primer parcial</h2>
                                                <div class="text-center"><span class="donut" data-peity='{ "fill": ["#FFCA4A", "#f2f2f2"]}'>4,10</span>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Materia 70%</h4>
                                                <h6>Primer parcial</h2>
                                                <div class="text-center"><span class="donut" data-peity='{ "fill": ["#FFCA4A", "#f2f2f2"]}'>226,134</span>
                                                </div>
                                            </div>
                                        </div>
                               </div>
                                <div class="col-lg-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Materia 85%</h4>
                                                <h6>Primer parcial</h2>
                                                <div class="text-center"><span class="donut" data-peity='{ "fill": ["#6164C1", "#f2f2f2"]}'>85/100</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Materia 85%</h4>
                                                    <h6>Primer parcial</h2>
                                                    <div class="text-center"><span class="donut" data-peity='{ "fill": ["#6164C1", "#f2f2f2"]}'>85/100</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-lg-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Materia 85%</h4>
                                                        <h6>Primer parcial</h2>
                                                        <div class="text-center"><span class="donut" data-peity='{ "fill": ["#6164C1", "#f2f2f2"]}'>85/100</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        
        
                                
                        </div>
                </div>    

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
                                                                    <th scope="col">Maestro</th>
                                                                    
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
                                                                                            <form name="f_editar_materia" method = "GET">
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
                                                                                                    <input type="text" name="nuevo_color" id="nuevo_color'.$row["id_materia"].'" class="colorpicker form-control" value="rgb(65, 184, 237)" >
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
                    <div class="row">
                            <div class="col-lg-4 col-xl-3">
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
                    </div>


            </div>
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
                <p>Copyright &copy; Designed by Quixlab & Deloped by Saúl Góngora 2020</p>
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

    <script src="js/nav.js"></script>
    <script src="js/fc.js"></script> 
    <script src="js/tareas.js"></script> 
    <script src="js/asignaturas.js"></script>                                        
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>

    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/peity/jquery.peity.min.js"></script>
    <script src="./js/plugins-init/peitychart.init.js"></script>


    <script src="./plugins/moment/moment.js"></script>
    <script src="./plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="./plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="./plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="./plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="./plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="./plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="./plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="./js/plugins-init/form-pickers-init.js"></script>


    
    <script src="./plugins/moment/moment.js"></script>
    <script src="./plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="./plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="./plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="./plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="./plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="./plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="./plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="./js/plugins-init/form-pickers-init.js"></script>



    

</body>

</html>