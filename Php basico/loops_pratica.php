<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php

			$registros = array(
				['titulo' => 'Título notícia 1', 'conteudo' => 'Conteudo noticia 1'],
				['titulo' => 'Título notícia 2', 'conteudo' => 'Conteudo noticia 2'],
				['titulo' => 'Título notícia 3', 'conteudo' => 'Conteudo noticia 3'],
				['titulo' => 'Título notícia 4', 'conteudo' => 'Conteudo noticia 4'],
				['titulo' => 'Título notícia 5', 'conteudo' => 'Conteudo noticia 5'],
			 	);

			echo '<pre>';
			print_r($registros);
			echo '</pre>';
			echo '<br />';
			

			echo 'O array possui: ' . count($registros) . ' registros';
			echo '<br/>';
			/*
			while($idx < count($registros)) {

				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
				echo '<hr />';

				$idx++;
			}
			*/

			/*
			do {
				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
				echo '<hr />';

				$idx++;
			} while($idx < count($registros));
			*/

			for ($idx = 0; $idx < count($registros); $idx++) { 
				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
				echo '<hr />';
			}
			

		?>

	</body>
</html>