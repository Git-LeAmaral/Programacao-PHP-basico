<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php

			$itens = ['sofá', 'mesa', 'fogão', 'geladeira', 'microondas'];

			echo '<pre>';	
			print_r($itens);
			echo '</pre>';

			foreach ($itens as $item) {
				echo "$item";

				if($item == 'mesa') {
					echo '(*Compre uma mesa e ganhe 25% de desconto em 4 cadeiras!)';
				}
				echo ' <hr/>';
			}

		?>

	</body>
</html>