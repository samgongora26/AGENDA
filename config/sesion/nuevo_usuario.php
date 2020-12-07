<?php
$nombre = $_POST['nombre'];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$usuario = $_POST["usuario"];
$contrasenia = $_POST["contrasenia"];

echo $nombre . ' ' . $apellido . ' ' . $edad . ' ' . $usuario .' '. $contrasenia;

include("../conexion.php");
$link = conectarse();
mysqli_query($link, "INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `edad`, `foto`, `usuario`, `contrasenia`) 
                    VALUES (NULL, '$nombre', '$apellido', '$edad', 'foto.jpg', '$usuario', '$contrasenia') ");

header("location: ../../index.php");
?>