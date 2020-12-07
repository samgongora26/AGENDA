<?php
$id = $_GET["id"];
//$usuario = $_GET["usuario"];

include("../../../config/conexion.php");
$link = conectarse();
mysqli_query($link, "DELETE FROM `parciales` WHERE `id_parcial` = $id");

?> 

<div class="row" id="recarga_calificaciones">
                                    <!-- Nav tabs -->
                                        <?php
                                        //se obtiene cada uno de los parciales y calificaciones por cada uno de ellos
                                        $parciales = mysqli_query($link, "SELECT * from parciales");
                                        $total_parciales = mysqli_num_rows($parciales); //numero de parciales
                                        
                                        while($row_parciales = mysqli_fetch_array($parciales)){
                                            //se asigna la propiedad display none para que no aparezca hasta que sea precionado
                                            //el bboton correspondiente. este se hace con el id parcial y su respectivo id
                                            
                                            echo '
                                            <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                            <div class="card-body">
                                            <h4 class="card-title">Calificaciones parcial: <i> '.$row_parciales["nombre"].'</i></h4>
                                            
                                            <div class="progress" style="height: 9px;">
                                            <div class="progress-bar bg-danger" style="width: 90%;" role="progressbar"><span class="sr-only">60% Complete</span>
                                            </div>
                                            </div>
                                            <p> Promedio: </p>
                                            <div class="row" style="" id="parcial'.$row_parciales["id_parcial"].'>   
                                            ';

                                          
                                            //-------------------------MODAL DE EDITAR parcial
                                                                            
                                            //En cada iteracion del primer while se obtiene un id del parcial el cual hace que cada parcial obtenga
                                            //sus respectivas calificaciones
                                            $num_parcial = $row_parciales["id_parcial"];
                                            echo $num_parcial;
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
                                                                <form name= "form_guardar_calificacion"  method="GET">
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
                                                                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
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