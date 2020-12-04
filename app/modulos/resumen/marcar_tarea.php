<?php
$id = $_GET["id"];

include("../../../config/conexion.php");
$link = conectarse();

$resulta = mysqli_query($link, "SELECT * FROM to_do WHERE id_tarea = $id");
$row=mysqli_fetch_array($resulta);

if( $row["estado"]== 0){ //cambia el estado a marcado
    mysqli_query($link, "UPDATE `to_do` SET `estado` = 1 WHERE id_tarea = $id");
}
if( $row["estado"]== 1) {       //quita el estado de marcado
    mysqli_query($link, "UPDATE `to_do` SET `estado` = 0 WHERE id_tarea = $id");
}

?>

<ul >
                                                        <?php
                                                            $result = mysqli_query($link, "select * from to_do");
                                                            $total = mysqli_num_rows($result);
                                                            
                                                            while($row=mysqli_fetch_array($result)){
                                                            
                                                                if($row["estado"]  == 0){
                                                                echo '
                                                                    <li>
                                                                        <label>
                                                                            <span onclick="marcar_tarea('.$row["id_tarea"].')">'.$row["tarea"].'</span>
                                                                            <a class="fa fa-trash" onclick="eliminar_tarea('.$row["id_tarea"].')"></a>
                                                                        </label>
                                                                    </li>
                                                                ';
                                                                }
                                                                if($row["estado"]  == 1){
                                                                    echo '
                                                                        <li>
                                                                            <label style="background: rgb(171,171,171)">
                                                                                <span style="color: #fff" onclick="marcar_tarea('.$row["id_tarea"].')"><del>'.$row["tarea"].'</del></span>
                                                                                <a class="fa fa-trash" onclick="eliminar_tarea('.$row["id_tarea"].')"></a>
                                                                            </label>
                                                                        </li>
                                                                    ';
                                                                    }

                                                            }
                                                        ?>
                                                    </ul>