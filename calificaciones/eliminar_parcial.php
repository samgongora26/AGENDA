<?php
$id = $_GET["id"];
//$usuario = $_GET["usuario"];

include("../php/conexion.php");
$link = conectarse();
mysqli_query($link, "DELETE FROM `parciales` WHERE `id_parcial` = $id");

?> 