<?php

    class Carro extends Veiculo {
      public $teto_solar = 'true';

      function __construct($placa, $cor) {
        $this->placa = $placa;
        $this->cor = $cor;
      }

      function abrirTetoSolar() {
        echo 'Abrir teto solar';
      }

      function alterarPosicaoVolante() {
        echo 'Alterar posição do volante';
      }
    }

    class Moto extends Veiculo {
      public $contraPesoGuidao = 'true';

      function __construct($placa, $cor) {
        $this->placa = $placa;
        $this->cor = $cor;
      }

      function empinar() {
        echo 'Empinar';
      }

      function trocarMarcha() {
        echo 'trocar marcha da moto';
      }
    }

    class Veiculo {
      public $placa = null;
      public $cor = null;

      function acelerar() {
        echo 'Acelerar';
      }

      function frear() {
        echo 'frear';
      }

      function trocarMarcha() {
        echo 'trocar marcha do carro';
      }
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('CDE1122', 'Azul');

    $carro->trocarMarcha();
    echo '<br/>';
    $moto->trocarMarcha();