<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php

			$numeros = [];

			while (count($numeros) <= 5) {
				
				$num = rand(1, 60);
					if(!in_array($num, $numeros)) {
						$numeros[] = $num;
					}
			}

			echo '<pre>';
			print_r($numeros);
			echo '</pre>';
			
		?>

	</body>
</html>