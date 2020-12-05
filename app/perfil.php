<!DOCTYPE html>
<html lang="en">

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
                                        <img alt="" class="rounded-circle mt-4" src="recursos/images/users/5.jpg">
                                        <h4 class="card-widget__title text-dark mt-3">Nombre</h4>
                                        <p class="text-muted">Apellido</p>
                                        <a class="btn gradient-4 btn-lg border-0 btn-rounded px-5" href="javascript:void()">Folllow</a>
                                    </div>
                                </div>
                                <div class="card-footer border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-4 border-right-1 pt-3">
                                            <a class="text-center d-block text-muted" href="javascript:void()">
                                                <i class="fa fa-star gradient-1-text" aria-hidden="true"></i>
                                                <p class="">Star</p>
                                            </a>
                                        </div>
                                        <div class="col-4 border-right-1 pt-3"><a class="text-center d-block text-muted" href="javascript:void()">
                                            <i class="fa fa-heart gradient-3-text"></i>
                                                <p class="">Like</p>
                                            </a>
                                        </div>
                                        <div class="col-4 pt-3"><a class="text-center d-block text-muted" href="javascript:void()">
                                            <i class="fa fa-envelope gradient-4-text"></i>
                                                <p class="">Email</p>
                                            </a>
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