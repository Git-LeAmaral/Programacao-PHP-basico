<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php
			
			//Array multidimensionais são arrays de arrays
			$lista_coisas = [];

			$lista_coisas['frutas'] = [1 => 'Banana', 2 => 'Maçã', 3 => 'Pera', 4 => 'Abacate'];
			$lista_coisas['pessoas'] = [1 => 'Leandro', 2 => 'Helena', 3 => 'Leticia'];

			echo '<pre>';
			print_r($lista_coisas);
			echo '</pre>';

			echo '<hr />';
			echo $lista_coisas['frutas'] [2];
			echo '<br />';
			echo $lista_coisas['pessoas'] [3];
			echo '<hr />';

			echo $lista_coisas['pessoas'] [2] . ' ' . 'comeu uma ' . ' ' . $lista_coisas['frutas'][1];
 
		?>

	</body>
</html>