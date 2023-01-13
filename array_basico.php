<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php
			
			//sequenciais (numéricos)
			//$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
			//$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

			//$lista_frutas[] = 'Abacaxi'; //Incluindo um novo indice a um array ja criado

			/*
			echo '<pre>'; //Formata o array em forma de lista
			var_dump($lista_frutas);
			echo '</pre>';
			echo '<hr />';
			echo '<pre>';
			print_r($lista_frutas);
			echo '</pre>';
			*/

			//echo $lista_frutas[3];

			//Array associativo define o valor da chave
			$lista_frutas = array(
				'a' => 'Banana', 
				'd' => 'Maçã', 
				'l' => 'Morango', 
				'4' => 'Uva');

			$lista_frutas['z'] = 'Abacate';

			echo '<pre>';
			var_dump($lista_frutas);
			echo '</pre>';

			echo $lista_frutas[4];

		?>

	</body>
</html>