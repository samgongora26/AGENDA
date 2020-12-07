
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <a href="#" onclick='mostrar_item(1)'>
                            <div class="card-body">
                                <h3 class="card-title text-white">Hoy</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">Resumen</h2>

                                    <?php
                                        $result = mysqli_query($link, "select * from `eventos` WHERE `eventos`.`id_usuario` = $id_user");
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
                                        $promedio = 0;
                                        $parciales = mysqli_query($link, "SELECT * from parciales WHERE `parciales`.`id_usuario` = $id_user");
                                        $total_parciales = mysqli_num_rows($parciales); //numero de parciales
                                        while($row_parciales = mysqli_fetch_array($parciales)){
                                            //se asigna la propiedad display none para que no aparezca hasta que sea precionado
                                            //el bboton correspondiente. este se hace con el id parcial y su respectivo id
                                            $num_parcial = $row_parciales["id_parcial"];
                                            $res_p = mysqli_query($link, "SELECT AVG(calificacion) as promedio FROM calificaciones WHERE id_parcial = $num_parcial and `calificaciones`.`id_usuario` = $id_user");
                                            $promediot = mysqli_num_rows($parciales);
                                            $promedio = intval(mysqli_fetch_array($res_p)[0]);
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
                                        
                                            $result = mysqli_query($link, "select * from asignaturas where id_usuario = $id_user");
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
                                        
                                            $result = mysqli_query($link, "select * from maestros where id_usuario = $id_user");
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