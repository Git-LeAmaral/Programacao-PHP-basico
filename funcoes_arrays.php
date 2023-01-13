<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php

			/*
			$array = array('Celular', 'Notebook');
			$retorno = is_array($array);

			if($retorno) {
				echo 'Sim, é um array';
			} else {
				echo 'Não, não é um array';
			}
			*/

			/*
			$array = [1 => 'Leandro', 2 => 'Helena', 3 => 'Leticia', 4 => 'Michelle'];
			echo '<pre>';
				print_r($array);
			echo '</pre>';
			
			$chaves_arrays = array_keys($array);
			echo '<pre>';
				print_r($chaves_arrays);
			echo '</pre>';
			*/

			/*
			$array = array('Celular', 'Notebook', 'Cabo HDMI', 'Mouse', 'Teclado');
			echo '<pre>';
				print_r($array);
			echo '</pre>';

			sort($array);
			echo '<pre>';
				print_r($array);
			echo '</pre>';
			*/

			/*
			$array = array('Celular', 'Notebook', 'Cabo HDMI', 'Mouse', 'Teclado');
			echo '<pre>';
				print_r($array);
			echo '</pre>';

			asort($array);
			echo '<pre>';
				print_r($array);
			echo '</pre>';
			*/

			/*
			$array = array('Celular', 'Notebook', 'Cabo HDMI', 'Mouse', 'Teclado', 'Tv 60 polegadas 4k');
			echo '<pre>';
				print_r($array);
				echo count($array);
			echo '</pre>';
			*/

			/*
			$array1 = ['osx', 'windows'];
			$array2 = array('linux');
			$array3 = ['android'];

			$novo_array = array_merge($array1, $array2, $array3);
			echo '<pre>';
				print_r($novo_array);
			echo '</pre>';
			*/

			/*
			$string = '26/04/2018';
			$array_retorno = explode('/', $string);
			echo '<pre>';
				print_r($array_retorno);
				echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
			echo '</pre>';
			*/

			$array = ['r', 'a', 'f', 'a'];
			$string_retorno = implode('', $array);
			echo $string_retorno;

		?>

	</body>
</html>