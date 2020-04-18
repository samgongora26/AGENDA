<?php
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $id = $_GET["id"];
    //$usuario = $_GET["usuario"];
    include("../php/conexion.php");
    $link = conectarse();
    mysqli_query($link, "UPDATE `maestros` SET `nombre` = $nombre, `apellido` = '$apellido' WHERE `id_maestro` = $id");
?> 