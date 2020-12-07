<?php 
    session_start();
    $id_user = isset($_SESSION['id_user']);
    if($id_user==""){ //si la variable de sesión está vacia entonces se redirige al login
        header("location: ../index.php");
    }
?>