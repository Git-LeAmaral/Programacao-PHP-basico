<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php
			
			//Função do tipo void, não retorna nada
			function exibirBoasVindas() {
				echo 'Bem-vindo ao curso de PHP! <hr />';
			}	

			exibirBoasVindas();

			//return (com retorno)
			function calcularAreaTerreno($largura, $comprimento) {
				$area = $largura * $comprimento;
				return $area;
			}

			$resultado = calcularAreaTerreno(10, 30);
			echo $resultado;
		?>

	</body>
</html>