<?php
require_once 'Pessoa.php';

class Funcionario extends Pessoa {
  private $cargo;
  
  public function __construct($n, $i, $c) {
      parent::__construct($n, $i);
      $this->cargo = $c;
  }
  
  public function getCargo() {
      return $this->cargo;
  }
  
  public function setCargo($c) {
      $this->cargo = $c;
  }
  
  public function mostrarDados() {
      parent::mostrarDados();
      echo "Cargo: " . $this->cargo . "\n";
  }
}
?>