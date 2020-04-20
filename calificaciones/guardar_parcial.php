<?php
$nombre = $_GET["nombre"];
//$usuario = $_GET["usuario"];

include("../php/conexion.php");
$link = conectarse();
mysqli_query($link, "INSERT INTO `parciales`(`nombre`,`id_usuario`)
VALUES ('$nombre',1)");

//INSERT INTO `eventos`(`id_materia`, `titulo`, `descripcion`, `fecha`, `color_importancia`, `id_usuario`, `estado`) 
//VALUES (2,'Examen','estudiar el pdf','2020-04-09','#9ae6ae',1,0)

?> 