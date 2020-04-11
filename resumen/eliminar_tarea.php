<?php
    $id = $_GET["id"];
    echo $id;

    include("../php/conexion.php");
    $link = conectarse();
    mysqli_query($link, "DELETE FROM `to_do` WHERE id_tarea = $id");
?> 
<ul >                                                        
    <?php
        $result = mysqli_query($link, "select * from to_do");
        $total = mysqli_num_rows($result);
        $cont = 0;
        while($row=mysqli_fetch_array($result)){
        $cont = $cont + 1;
            echo '
                    <li>
                        <label>
                            <input type="checkbox" onClick=eliminar_tarea('.$row["id_tarea"].')><i></i>
                            <span>'.$row["tarea"].'</span>
                            <a class="fa fa-trash" onClick=eliminar_tarea('.$row["id_tarea"].')></a>
                            </label>
                            </li>
                ';
        }
    ?>
</ul>