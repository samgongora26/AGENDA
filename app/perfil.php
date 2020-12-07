<!DOCTYPE html>
<html lang="en">
<?php include("../app/modulos/plantillas/sesion.php"); ?>
<!--------------------HEAD---------------------->
<?php include("modulos/plantillas/head.php");?>
<!--------------------HEAD-------------------/--->
<body>

    <!--Preloader start-->
        <?php include("modulos/plantillas/preloader.php"); ?>
    <!--Preloader end-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!-------------NAV HEADER AND SIDEBAR ----------->
        <?php include("modulos/plantillas/nav_header_sidebar.php");?>
        <!-------------NAV HEADER AND SIDEBAR --------/--->

        <!--**********************************
            Content body start
        ***********************************-->
        <?php   //-------CONEXIÓN A LA BASE DE DATOS
                //ESTA ES UNICA Y YA NO ES NECESARIO REPETIRLA--->
            include("../config/conexion.php");
            $link = conectarse(); /*conexion a la bd*/
        ?>

        

        <div class="content-body">
            <div class="container-fluid mt-3">
            
                    <div class="row">
                        <div class="col-md-4 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                    <?php
                                        $result = mysqli_query($link, "select * from usuarios where usuarios.id_usuario = $id_user");
                                        $total = mysqli_num_rows($result);
                                        $user =mysqli_fetch_array($result)
                                        
                                    ?>   
                                        <img alt="" class="rounded-circle mt-4" src="recursos/images/users/5.jpg">
                                        <h4 class="card-widget__title text-dark mt-3"><?php echo $user["nombre"] . ' ' . $user["apellido"] ?></h4>
                                        <p class="text"><?php ?></p>
                                        <div class="">
                                            <p class="text-muted ">Usuario: <?php echo $user["usuario"]?></p>
                                        </div>
                                        
                                        <a class="btn gradient-4 btn-md border-0 btn-rounded px-5" href="javascript:void()" data-toggle="modal" data-target="#basicModal">Editar</a>
                                        <a class="btn gradient-2 btn-sm border-0 btn-rounded px-5 mx-auto" href="javascript:void()" data-toggle="modal" data-target="#editPass">Cambiar contraseña</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                                <div class="bootstrap-modal">
                                    <!-- Modal -->
                                    <div class="modal fade" id="basicModal">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-dark">Editar perfil</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">   
                                                    <form>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Usuario</label>
                                                                <input type="email" class="form-control" placeholder="Usuario">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Correo</label>
                                                                <input type="email" class="form-control" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nombres</label>
                                                            <input type="text" class="form-control" placeholder="Nombres ">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Apellidos</label>
                                                            <input type="text" class="form-control" placeholder="Apellidos">
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Edad</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </form>
                                                
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="btn btn-primary">Guardar cambios</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--CAMBIAR CONTRASEÑA-->
                                <div class="bootstrap-modal">
                                    <!-- Modal -->
                                    <div class="modal fade" id="editPass">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-dark">Cambiar contraseña</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">   
                                                    <form>
                                                        <div class="form-group">
                                                            <label>Antigua contraseña</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Nueva contraseña</label>
                                                                <input type="password" class="form-control" placeholder="">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Confirmar contraseña</label>
                                                                <input type="password" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </form>
                                                
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="btn btn-primary">Guardar cambios</button>
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
        <?php include("modulos/plantillas/footer.php");?>
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
    <?php include("modulos/plantillas/scripts.php");?>
</body>

</html>