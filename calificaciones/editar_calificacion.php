<?php
$calificacion = $_GET["calificacion"];
$materia = $_GET["materia"];
$parcial = $_GET["parcial"];
$id = $_GET["id"];
//$usuario = $_GET["usuario"];

include("../php/conexion.php");
$link = conectarse();
mysqli_query($link, "UPDATE `calificaciones` SET `id_materia`=$materia,`calificacion`=$calificacion,
`id_usuario`=1,`id_parcial`=$parcial WHERE `id_calificacion` = $id");

?> 