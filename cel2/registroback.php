<?php




require_once  'conexionlocal.php'; //conexion a la BD
//	$reg_by = $_REQUEST['reg_by'];
//	$page_stat = $_REQUEST['page_stat'];	



	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email= $_POST['email'];

echo $nombre.'hola mundo';
	
	
	mysqli_select_db($link,"chuchos"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");
mysqli_query("SET NAMES 'utf8'");
	mysqli_set_charset($link, 'utf8');
//Inserccion de Datos del Formulario a la BD//

mysqli_query($link , "insert into `chuchos`.`contactos` (
nombre,
apellido,
email
) values (
'".$nombre."',
'".$apellido."',
'".$email."'
)") ;/*MUESTRA UN MENSAJE DE ERROR EN CASO DE QUE ALGO VALLA MAL*/ 

	
mysqli_close($link);

	

	
	
	?>
