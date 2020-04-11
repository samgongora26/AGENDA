<?php
$id = $_GET["id"];
echo $id;

include("../php/conexion.php");
$link = conectarse();
mysqli_query($link, "DELETE FROM `eventos` WHERE id_evento = $id");


?> 
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
                                                        if($row["estado"] == 1){ //si el evento ha sido marcado entonces se marca y se pone gris
                                                            echo '
                                                        <div class="card-header" style="background: rgb(84,84,84)" >
                                                            <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne'.$cont.'" aria-expanded="true" aria-controls="collapseOne4"><i class="fa" aria-hidden="true"></i><del> '.$row["titulo"].'  ---     fecha: '.$row["fecha"].' ¡HECHO!</del></h5>
                                                        </div> ';
                                                        }
                                                        if($row["estado"] == 0){
                                                            echo'
                                                            <div class="card-header" style="background: '.$row["color_importancia"].'" >
                                                            <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne'.$cont.'" aria-expanded="true" aria-controls="collapseOne4"><i class="fa" aria-hidden="true"></i> '.$row["titulo"].'  ---     fecha: '.$row["fecha"].'</h5>
                                                            </div> ';
                                                        }
                                                        echo'
                                                        <div id="collapseOne'.$cont.'" class="collapse show" data-parent="#accordion-three">
                                                            <div class="card-body">'.$row["descripcion"].'</div>
                                                            <button type="button" onClick=marcar_evento('.$row["id_evento"].') class="btn mb-1 btn-success btn-sm">Seccess <span class="btn-icon-right"><i class="fa fa-check"></i></span>
                                                            </button>
                                                            <button type="button" onClick=eliminar_evento('.$row["id_evento"].') class="btn mb-1 btn-danger btn-sm">Remove <span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                                            </button>
                                                        </div>
                                                            
                                                    </div>
                                                ';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>



                           