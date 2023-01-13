<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php
			
			$num = 1;
			echo '-- Início do loop --<br/>';
			while($num < 10) {

				$num++;

				if($num == 2 || $num == 6) {
					continue;
				}

				echo "$num <br/>";

			}
 			echo '-- Fim do loop --';

		?>

	</body>
</html>