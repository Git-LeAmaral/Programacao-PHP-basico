<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php
			
			$parametro = 8;

			switch ($parametro) {
				case 1:
					echo 'Entrou no case 1';
					break;

				case 2:
					echo 'Entrou no case 2';
					break;

				case 8:
					echo 'Entrou no case 3 que tem 8';
					break;	
				
				default:
					echo 'Nenhum dos cases';
					break;
			}

		?>

	</body>
</html>