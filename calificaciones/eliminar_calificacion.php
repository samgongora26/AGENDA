<?php
$id = $_GET["id"];
//$usuario = $_GET["usuario"];

include("../php/conexion.php");
$link = conectarse();
mysqli_query($link, "DELETE FROM `calificaciones` WHERE `id_calificacion` = $id");

?> 