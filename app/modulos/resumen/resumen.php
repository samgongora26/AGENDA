<div class="row" style="display: flex;" id="resumen">
                        <div class="col-lg-3 col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                            <h5>Agregar evento</h5>
                                        <div class="basic-form">
                                            
                                            <form name="form_evento" action="#" method="GET">
                                                    <div class="form-group">
                                                        <input type="text" name="titulo" class="form-control input-default"  placeholder="agregar titulo" >
                                                        <label>Descripción</label>
                                                        <textarea name="descripcion" class="form-control h-150px input-default"   rows="3" id="comment"></textarea>
                                                        <label class="m-t-20">Fecha</label>
                                                        <input type="text" class="form-control input-default" name="fecha"  placeholder="2000-26-04" id="mdate">
                                                            <label class="">Asignatura</label>
                                                            <div class="col-sm-10" id="carga_nav">
                                                                <select id="inputState"   name="materia" class="form-control-md">
                                                                    
                                                                    <?php
                                                                        $result = mysqli_query($link, "select * from asignaturas where id_usuario = $id_user");
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
                                                                    <input type="text" name="color" class="colorpicker form-control-md  " value="rgb(65, 184, 237)" >
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
                                            $result = mysqli_query($link, "select * from eventos where id_usuario = $id_user");
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
                                                            $result = mysqli_query($link, "select * from to_do where id_usuario = $id_user");
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