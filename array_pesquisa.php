<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php
			
			//in_array() -> true ou false para a existencia do que esta sendo procurado no array
			//array_search() -> retorna o indice do valor pesquisado, caso ele exista

			$lista_frutas = ['Banana', 'Maçã', 'Pera', 'Abacate'];

			/*
			echo '<pre>';
			print_r($lista_frutas);
			echo '</pre>';

			//$existe = in_array('Uva', $lista_frutas);
			$existe = array_search('Abacate', $lista_frutas);

			if($existe != null) {
				echo 'Sim, o valor pesquisado existe no array';
			} else {
				echo 'Não, o valor pesquisado não existe no array';
			}
			*/

			$lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['Helena', 'Leticia']];

			echo '<pre>';
			print_r($lista_coisas);
			echo '</pre>';
 
			echo in_array('Banana', $lista_coisas['frutas']);

		?>

	</body>
</html>