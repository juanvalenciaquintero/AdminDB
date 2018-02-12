	window.onload = function() {
	    				var boton = document.querySelectorAll('a');

						var botonPulsado;
						var arrayResultados;
						var texto;

						mostrarTablas();

						devolver();

						var contenidoDiv = document.querySelector('#cuerpoSecundario');

						var contenidoTablas = document.querySelector('#contenidoTablas');


						function mostrarTablas() {

							function devolver() {
								$.post('http://juanvalencia.esy.es/AdminDB/devolverTablas.php', {dato:'u900374754_prueb'},function(data){
										arrayResultados=data;
											
										console.log(arrayResultados);
																																			
										contenidoTablas.innerHTML=arrayResultados;
																		
									})
							}

						}

						function devolver() {
							$.post('http://juanvalencia.esy.es/AdminDB/devolverColumnas.php', {dato:'usuarios'},function(data){
											arrayResultados=data;
											
												console.log(arrayResultados);
																																			
												contenidoDiv.innerHTML=arrayResultados;
											
											
									})
						}

						for (i=0;i<boton.length;i++) {	

								boton[i].onclick = function() {


									contenidoDiv = document.querySelector('#cuerpoSecundario');

									botonPulsado = this.innerHTML;

									$.post('http://juanvalencia.esy.es/AdminDB/devolverColumnas.php', {dato:'usuarios'},function(data){
											arrayResultados=data;
											
												console.log(arrayResultados);
																																			
												contenidoDiv.innerHTML=arrayResultados;
											
											
									})

									
									
									/*$.ajax({
										type:'POST',
										url:'devolverColumnas.php',
										data:{tabla:'clientes'},
										success:function(data){
											arrayResultados=data;
										}

									});*/
									

									


									/*"\<\?\php $sql = 'SHOW COLUMNS FROM \'usuarios\'; \?\>"; */
								  /*+ botonPulsado + "\'; $resultado=mysqli_query($conexion,$sql); while($fila = mysqli_fetch_array($resultado)) { echo '<span>' . $fila['Field']  . ' - ' . $fila['Type'] . '</span>';}  ?>";*/

									
									

									/*var campoPrimero = document.querySelector('#cuerpoPrincipal>span:first-child');
									alert(campoPrimero.innerHTML);*/

								} // fin de la funcion anonima
						} //fin del for
	

	    			}
	    	


