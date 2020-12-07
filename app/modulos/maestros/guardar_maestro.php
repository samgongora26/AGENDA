<?php
$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];


include("../../../config/conexion.php");
include("../plantillas/sesion.php");
$link = conectarse();
mysqli_query($link, "INSERT INTO `maestros`(`nombre`, `apellido`, `id_usuario`) VALUES ('$nombre','$apellido',$id_user)");

//INSERT INTO `eventos`(`id_materia`, `titulo`, `descripcion`, `fecha`, `color_importancia`, `id_usuario`, `estado`) 
//VALUES (2,'Examen','estudiar el pdf','2020-04-09','#9ae6ae',1,0)

?>

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
                                                            <form name="f_editar_materia" method = "GET">
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