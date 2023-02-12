<?php 

    class Pai {
      private $nome = 'Leandro';
      protected $sobrenome = 'Amaral';
      public $humor = 'Preguiça';

      // public function getNome() {
      //   return $this->nome;
      // }

      // public function setNome($value) {

      //   if (strlen($value) >= 3) {
      //     $this->nome = $value;
      //   }
      // }

      // ***Método magico __GET & __SET****

      // public function __get($attr) {
      //   return $this->$attr;
      // }

      // public function __set($attr, $value) {
      //   $this->$attr = $value;
      // }

      private function executarMania() {
        echo 'Assobiar';
      }

      protected function responder() {
        echo 'Oi';
      }

      public function executarAcao() {
        $this->executarMania();
        echo '<br/>';
        $this->responder();
      }
    }

    class Filho extends Pai {
      public function getAtributo($attr) {
        return $this->$attr;
      }

      public function setAtributo($attr, $value) {
        $this->$attr = $value;
      }
    }

    $filho = new Filho();

    echo'<pre>';
    print_r($filho);
    echo'</pre>';
    echo $filho->getAtributo('humor');
    $filho->setAtributo('humor', 'Alegre');
    echo '<br/>';
    echo $filho->getAtributo('humor');

    // $pai = new Pai();
    // echo $pai->executarAcao();

?>