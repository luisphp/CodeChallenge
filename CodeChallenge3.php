<?php
			
				//Inicio el contador del 1 al 100 con un ciclo for
	
					for ($i=1; $i <=100 ; $i++) { 

						operation($i);

					}

				//Función para evaluar que mensaje voy a mostrar en pantalla, tomando como parametro el indice "i" el ciclo for.
				function operation($n){

					$eva1 = (($n % 3)+($n % 5)); 	// Operacion Multiplo 3 y 5
					$eva2 = ($n % 5); 				// Operacion multiplo de 5
					$eva3 = ($n % 3); 				// Operacion multiplo de 3
					$eva4 = 0;
					
				//En caso de que la evaluación indique que el multiplo de 3 y 5 muestra "Linianos".
						switch ($eva1) {
							case '0': echo  "Linianos <br>";
								break;

						}

				//En caso de que la evaluación indique que el multiplo de 5 muestra "IT".
						switch ($eva2+(flag($eva1))) {
							case '0': echo  "IT <br>";							
								break;
							default:
								break;
						}

				//En caso de que la evaluación indique que el multiplo de 3 muestra "Linio".
						switch ($eva3+(flag($eva1))) {
							case '0': echo  "Linio <br>";
								break;
						}


				/*En caso de que la evaluación indique que nos es multiplo de ninguno solo se muestra el número.*/

						$eva4 = flag($eva1)+flag_2($eva2)+flag_3($eva3);

						switch ($eva4/3) {
							case '0':
								echo  $n."<br>";
								break;
							
						}

					}

				/*Función indicador evitar mostrar varias sentencias para el mismo numero, por ejemplo: si es multiplo de 3 y 5 solo 
				muestra Linianos y no Linianos seguido de Linio.  */


					function flag($eva1){

						switch ($eva1) {
							case '0':
								return 1;
								break;
							
							default:
								return 0;
								break;
						}

					}

					function flag_2($eva2){


						switch ($eva2) {
							case '0':
								return 1;
								break;
							
							default:
								return 0;
								break;
						}

					}

					function flag_3($eva3){

						switch ($eva3) {
							case '0':
								return 1;
								break;
							
							default:
								return 0;
								break;
						}

					}

?>
			