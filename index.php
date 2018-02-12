<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>AdminDB</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="estilosAdminDB.css">        
        <script type="text/javascript" src="jquery-3.2.1.js"></script>
        <script src="AdminDB.js"></script>

        
    </head>
    <body>
		<?php include ("conexion.php");	?>
		<div id="cabecera">
		</div>
		<div id="cuerpoPrincipal">
	    	<div id="tablas">
	    		<h3>Tablas de la base de datos</h3>
	    		<!-- <?php
					$sql = 'SHOW FULL TABLES FROM u900374754_prueb;';
					$resultado=mysqli_query($conexion,$sql);
					while($fila = mysqli_fetch_array($resultado)) {
						echo '<a href="#">' . $fila["Tables_in_u900374754_prueb"]  .   '</a><br>';
					}				
	    		?> -->
	    	</div>
	    	<div id="cuerpoSecundario" >
	    		
	    	</div>
    </div>

    </body>
</html>

