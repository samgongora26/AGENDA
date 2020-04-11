<?php
    $tarea = $_GET["tarea"];
    //echo $tarea;
    include("../php/conexion.php");
    $link = conectarse();
    mysqli_query($link, "INSERT INTO `to_do`(`tarea`, `id_usuario`, `estado`) VALUES  ('$tarea', 1, 0)");
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