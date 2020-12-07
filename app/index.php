<!DOCTYPE html>
<html lang="en">
<?php 
    include("../app/modulos/plantillas/sesion.php");    
?>
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
                
                <!---------BARRA DE INFORMACIÓN GENERAL---------------------->
                <?php include("modulos/plantillas/barra_de_inf_general.php");?>

                <!----------------------MODULOS------------------------------------->
                
                <!--+++++++++++++++RRESUMEN+++++++++++++++++++++++++++-->
                <?php include("modulos/resumen/resumen.php"); ?>

                <!-----------------------MAESTROS------------------>
                <?php include("modulos/maestros/maestros.php"); ?>
                
                <!--------------------CALIFICACIONES----------------->
                <?php include("modulos/calificaciones/calificaciones.php");?>
                
                <!-----------------------------ASIGNATURAS------------->
                <?php include("modulos/asignaturas/asignaturas.php"); ?>
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