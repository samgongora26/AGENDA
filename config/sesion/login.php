<?php
session_start();
include("../conexion.php");
$link = conectarse();

$user = $_POST["user"];
$pass = $_POST["pass"];

$result = mysqli_query($link, "SELECT * FROM `usuarios` WHERE `usuario` = '$user' and `contrasenia` = '$pass' ");
$total = mysqli_num_rows($result);                                      
$row=mysqli_fetch_array($result);
//$promedio = mysqli_fetch_array($res_p)[0];

if($row["id_usuario"] != 0){
    $_SESSION["id_user"] = $row["id_usuario"];
    header("location: ../../app/index.php");
    echo 'id '.$_SESSION["id_user"];
    echo 'nombre '.$row["nombre"];
}
else{
    //header("location: ../../index.php");
    echo "datos incorrectos";
}


?>