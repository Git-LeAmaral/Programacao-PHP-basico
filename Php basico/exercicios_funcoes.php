<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php
			
			function calcularImposto($salario) {
				

				if($salario <= 1903.98) {
				$imposto = 0;

				} else if($salario >= 1903.99 && $salario <= 2826.65) {
					$imposto = ($salario * 7.5) / 100;

				} else if($salario >= 2826.66 && $salario <= 3751.05) {
					$imposto = ($salario * 15) / 100;

				} else if($salario >= 3751.06 && $salario <= 4664.68) {
					$imposto = ($salario * 22.5) / 100;

				} else {
					$imposto = ($salario * 27.5) / 100;
				}

				return $imposto;
			}

			$impostoPago = calcularImposto(1900.00);

			echo "O imposto a pagar é $impostoPago";
		?>

	</body>
</html>