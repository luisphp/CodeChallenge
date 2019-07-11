<?php
				$inicio = 1;
				$contador = 0;

				while($inicio <= 100){

					
					

					
					if($inicio % 3 == 0 && $inicio % 5 == 0){
						echo " Linianos (".$inicio.")"."<br>";
						
						//Función que verifique si el numero es divisible entre 3 y 5

					}else if($inicio % 5 == 0){
						echo "IT (".$inicio.")"."<br>";

						//Función que verifique si el numero es divisible entre 5
						
						
					}else if($inicio % 3 == 0){
						echo " Linio (".$inicio.")"."<br>";
						
						//Función que verifique si el numero es divisible entre 3
						
						
					}else {
						echo $inicio."<br>";
						//Solo imprimir el numero
					}
					
					
					$inicio = $inicio + 1;
				}

?>