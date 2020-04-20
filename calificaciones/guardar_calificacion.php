<?php
$calificacion = $_GET["calificacion"];
$materia = $_GET["materia"];
$parcial  = $_GET["parcial"];
//$usuario = $_GET["usuario"];

include("../php/conexion.php");
$link = conectarse();
mysqli_query($link, "INSERT INTO `calificaciones`(`id_materia`, `calificacion`, `id_usuario`, `id_parcial`) 
VALUES ($materia, $calificacion, 1, $parcial)");

//INSERT INTO `eventos`(`id_materia`, `titulo`, `descripcion`, `fecha`, `color_importancia`, `id_usuario`, `estado`) 
//VALUES (2,'Examen','estudiar el pdf','2020-04-09','#9ae6ae',1,0)

?> 