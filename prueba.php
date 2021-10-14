<?php
require_once  'conexion.php'; //conexion a la BD
$query2       = sprintf("SELECT * FROM contactos");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{
	echo '<div> <a style="font-size: 18px" href="';
	echo $rowAccount2['nombre'];
	echo '.php?rand_fol=';
	echo $rowAccount2['email'];
	echo '&hp0=';
	echo $rowAccount2['apellido'];
	echo '&ret=1">'.$rowAccount2['nombre']."-".$rowAccount2['email'].'</a></div><br>';
}

?>