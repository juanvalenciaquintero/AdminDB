<?php

$conexion = mysqli_connect('mysql.hostinger.es','u900374754_juan','42180200','u900374754_prueb') 
	or die("Error en la conexion" . mysqli_connect_error() );
	
header('Access-Control-Allow-Origin:*');

if(isset($_REQUEST['dato'])) {

	$tablas = $_POST['dato'];

	$cadenaNombres='';

	echo devuelveTablas($tablas);

}


function devuelveTablas($valor) {

	var $cadenaResultado='';

	$sql = 'SHOW FULL TABLES FROM ' . $valor;
	$resultado=mysqli_query($conexion,$sql);
	while($fila = mysqli_fetch_array($resultado)) {
		$cadenaResultado = $cadenaResultado . '<a href="#">' . $fila["Tables_in_u900374754_prueb"]  .   '</a><br>';

	}	

	return $cadenaResultado;


}	
