<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php

			$x = 1;
			
			//Passa pelo menos uma vez o conteudo dentro do bloco
			/*
			do {
				echo "X = $x <br />";

				$x++;

			} while($x < 9);
			*/

			for ($x = 1; $x  <= 10 ; $x++) { 
				echo "$x <br/>";
			}

		?>

	</body>
</html>