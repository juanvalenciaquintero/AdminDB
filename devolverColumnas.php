<?php

header('Access-Control-Allow-Origin:*');

if(isset($_REQUEST['dato'])) {

	$tabla = $_POST['dato'];

	$cadenaNombres='';

	echo devuelveTabla($tabla);

}



function devuelveTabla($valor) {


	
	$conexion = mysqli_connect('mysql.hostinger.es','u900374754_juan','42180200','u900374754_prueb') 
	or die("Error en la conexion" . mysqli_connect_error() );


	$sql = 'SHOW COLUMNS FROM '. $valor ;

	$resultado=mysqli_query($conexion,$sql);

	$cadenaNombres = $cadenaNombres . '<div class="cabecera">';

	while($fila = mysqli_fetch_array($resultado)) {
	
			$cadenaNombres =$cadenaNombres . '<span class="nombreCampo">' . $fila[0] . '</span>';			

	}

	$cadenaNombres =$cadenaNombres . '</div>';
	

	/*$cadenaResultado = $cadenaResultado . '<div class="resultado">';

	for ($i=0;$i<count($fila)-1;$i++) {

				$cadenaResultado =$cadenaResultado . $fila[$i] . ' - ';
			}

	 $cadenaResultado =$cadenaResultado . $fila[count($fila)-1];

			$cadenaResultado = $cadenaResultado . '</div>';*/

	$sql = 'SELECT * FROM ' . $valor . ''; 

    $resultado=mysqli_query($conexion,$sql);

    /*$fila = mysqli_fetch_array($resultado);*/

   /* $camposTabla = mysqli_fetch_fields($resultado);*/



   /* $cadenaResultado = $camposTabla.name;*/

   $cadenaResultado = $cadenaNombres . '<div class="resultado">';

		while ($fila = mysqli_fetch_array($resultado,MYSQLI_NUM)) {

			$cadenaResultado = $cadenaResultado . '<div>';

			for ($i=0;$i<count($fila)-1;$i++) {

				$cadenaResultado = $cadenaResultado . '<span>'. $fila[$i] . '</span>';
			}

			$cadenaResultado =$cadenaResultado . '<span>'.$fila[count($fila)-1] . '</span>';

			$cadenaResultado = $cadenaResultado . '</div>';

	}

	$cadenaResultado = $cadenaResultado . '</div>';

   
    return $cadenaResultado;

    /*<?php 
			    		$sql = 'SHOW COLUMNS FROM usuarios';

						$resultado=mysqli_query($conexion,$sql);

						while($fila = mysqli_fetch_array($resultado)) {

							echo $fila[0] . ' - ' . $fila[1] . ' - ' . $fila[2]; 

						};


				?> */

}

?>

 