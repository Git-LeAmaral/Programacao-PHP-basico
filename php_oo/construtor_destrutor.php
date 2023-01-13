<?php

	class Pessoa {

		public $nome = null;

		function __construct($nome) {
			echo 'Objeto iniciado';
			$this->nome = $nome;
		}

		function __destruct() {
			echo 'Objeto removido';
		}

		function __get($atributo) {
			return $this->$atributo;
		}

		function jogar() {
			return $this->nome . ' esta jogando';
		}
	}

	$pessoa = new Pessoa('Leandro');
	echo '<br />Nome: ' . $pessoa->__get('nome');
	echo '<br />' . $pessoa->jogar();

	echo '<br />';
	unset($pessoa);

?>x