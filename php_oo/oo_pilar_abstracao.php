<?php

	//modelo
	class Funcionario {

		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;

		//getters e setters (overloading / sobrecarga)
		function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		function __get($atributo) {
			return $this->$atributo;
		}

		/*
		//getters setters
		function setNome($nome) {
			$this->nome = $nome;
		}

		function setNumFilhos($numFilhos) {
			$this->numFilhos = $numFilhos;
		}

		function setTelefone($telefone) {
			$this->telefone = $telefone;
		}

		function getNome() {
			return $this->nome;
		}

		function getNumFilhos() {
			return $this->numFilhos;
		}

		function getTelefone() {
			return $this->telefone;
		}
		*/

		//métodos
		function resumirCadFunc() {
			return $this->__get('nome') . ' é '. $this->__get('cargo') . ' ele ganha ' . $this->__get('salario') . ' , possui ' . $this->__get('numFilhos') . ' filho (os)  e seu tefone é ' . $this->__get('telefone');
		}

		function modificarNumFilhos($numFilhos) {
			//afetar um atributo do objeto
			$this->numFilhos = $numFilhos;
		}
	}

	$y = new Funcionario();
	$y->__set('nome', 'Leandro');
	$y->__set('cargo', 'Programador Fullstack');
	$y->__set('salario', 3900);
	$y->__set('numFilhos', 3);
	$y->__set('telefone', 991664248);
	echo $y->resumirCadFunc();
	//echo $y->__get('nome') . ' é '. $y->__get('cargo') . ' ele ganha ' . $y->__get('salario') . ' , possui ' . $y->__get('numFilhos') . ' filho (os)  e seu tefone é ' . $y->__get('telefone');
?>