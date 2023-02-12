<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php
			
			$nome = 'Rafael';
			$idade = 15;
			$peso = 60.2;

			if($idade >= 16 && $idade <= 69 && $peso >= 50) {
				echo "$nome, Atende aos requisitos";
			} else {
				echo "$nome, Não atende aos requisitos";
			}
		?>

	</body>
</html>