<?php
$materia = $_GET["materia"];
$maestro = $_GET["maestro"];
$color = $_GET["color"];
//$usuario = $_GET["usuario"];
//echo $color . "---";

include("../php/conexion.php");
$link = conectarse();
mysqli_query($link, "INSERT INTO `asignaturas`(`id_maestro`, `nombre`,`color`,`id_usuario`)
VALUES ($maestro, '$materia','$color',1)");

//INSERT INTO `eventos`(`id_materia`, `titulo`, `descripcion`, `fecha`, `color_importancia`, `id_usuario`, `estado`) 
//VALUES (2,'Examen','estudiar el pdf','2020-04-09','#9ae6ae',1,0)

?> 
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
                                                                        $result = mysqli_query($link, "SELECT asignaturas.nombre as nombre_materia, maestros.nombre as nombre_maestro FROM asignaturas, maestros WHERE asignaturas.id_maestro = maestros.id_maestro");
                                                                        $total = mysqli_num_rows($result);
                                                                        
                                                                        while($row=mysqli_fetch_array($result)){
                                                                            echo '
                                                                            <tr>
                                                                                <td>'.$row["nombre_materia"].'</td>
                                                                                <td>'.$row["nombre_maestro"].'</td> 
                                                                                <td>
                                                                                    <span>  
                                                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                                            <i class="fa fa-pencil color-muted m-r-5"></i>
                                                                                        </a>
                                                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Close">
                                                                                            <i class="fa fa-close color-danger"></i>
                                                                                        </a>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                                ';
                                                                        }
                                                                ?> 
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                        </div>