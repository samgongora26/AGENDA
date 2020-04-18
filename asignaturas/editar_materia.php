<?php
$materia = $_GET["materia"];
$maestro = $_GET["maestro"];
$color = $_GET["color"];
$id = $_GET["id"];
//$usuario = $_GET["usuario"];


include("../php/conexion.php");
$link = conectarse();
mysqli_query($link, "UPDATE `asignaturas` SET `id_maestro` = $maestro, `nombre` = '$materia',`color` = '$color' WHERE `id_materia` = $id");

?> 

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