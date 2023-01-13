<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php
			
			/*
			//recuperação da data atual / data corrente
			echo date('d/F/Y H:i'); //dia-mes-ano hora:minuto

			// Recuperar o timezone default da aplicação
			echo '<hr />';
			echo date_default_timezone_get();
			echo '<hr />';
			// Atualizar o timezone default da aplicação
			echo date_default_timezone_set('America/Sao_Paulo');
			echo date('d/F/Y H:i');
			echo '<br />';
			echo date_default_timezone_get();
			*/

			//Transformar datas textuais em segundos

			$data_inicial = '2021-08-02';
			$data_final = '2022-06-20';

			//Timestamp
			//01/01/1970 -- 2019-08-26

			$time_inicial = strtotime($data_inicial);
			$time_final = strtotime($data_final);

			echo $data_inicial . ' - ' . $time_inicial;
			echo '<br />';
			echo $data_final . ' - ' . $time_final;

			$diferenca_times = $time_final - $time_inicial;
			//Usar função ABS caso seja invertido o time abs($time_inicial - $time_final)
			echo '<br />';
			echo 'A diferença de segundos entre a data inicial e final é ' . $diferenca_times . ' segundos';

			//Descobrir quantos segundo existem em um dia
			$segundos_existem_dia = 24 * 60 * 60;
			echo '<br />';
			echo 'Um dia possui ' . $segundos_existem_dia . ' segundos';

			$diferenca_entre_datas = $diferenca_times / $segundos_existem_dia;
			echo '<br />';
			echo 'A diferença em dias é ' . $diferenca_entre_datas . ' dias';

		?>

	</body>
</html>