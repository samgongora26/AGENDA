<?php
$nombre = $_GET["nombre"];
$id = $_GET["id"];

//$usuario = $_GET["usuario"];

include("../php/conexion.php");
$link = conectarse();
mysqli_query($link, "UPDATE `parciales` SET `nombre`='$nombre',`id_usuario`= 1 WHERE `id_parcial` = $id");

?> 