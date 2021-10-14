<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"crossorigin="anonymous">
</head>






<?php

echo ('Gracias por registrarse');



require_once  'conexion.php'; //conexion a la BD
//	$reg_by = $_REQUEST['reg_by'];
//	$page_stat = $_REQUEST['page_stat'];	



	$nombre = $_POST['nombre'];
	$email= $_POST['email'];
	$telefono= $_POST['telefono'];
	$dia= $_POST['dia'];
	$mes= $_POST['mes'];
	$anio= $_POST['anio'];

//echo $nombre.'hola mundo';
	
	
//	mysqli_select_db($link,"chuchos"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");
mysqli_query("SET NAMES 'utf8'");
	mysqli_set_charset($link, 'utf8');
//Inserccion de Datos del Formulario a la BD//

mysqli_query($link , "insert into contactos (
nombre,
email,
telefono,
dia,
mes,
anio
) values (
'".$nombre."',
'".$email."',
'".$telefono."',
'".$dia."',
'".$mes."',
'".$anio."'
)") ;/*MUESTRA UN MENSAJE DE ERROR EN CASO DE QUE ALGO VALLA MAL*/ 

	
mysqli_close($link);

	

	
	
	?>
