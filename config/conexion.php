<?php
function conectarse(){
	if (!($link=mysqli_connect("localhost", "root", "roottoor"))){
		echo "Error al conectarse a la base de datos";
		exit();	
	}
	if(!mysqli_select_db($link,"agenda"))
	{
		echo"Error seleccionado la base de datos";
	}
	return $link;
}
?>


