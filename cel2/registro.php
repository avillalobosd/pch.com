<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Gracias por Registrarse</title></head>



<div class="col-12 col-md-8 offset-md-2">
<img style="width:100%; height:auto;" src="pontechucho.jpg">
</div>


<?php




echo ('<h1 style="text-align:center">Gracias por registrarse</h1> 
<a href="http://pontechucho.com">
<button id="boton" class="btn btn-dark"> Regresar</button>
</a>');







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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
