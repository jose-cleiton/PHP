<?php
class Pessoa {
  private $nome;
  private $idade;
  
  public function __construct($n, $i) {
      $this->nome = $n;
      $this->idade = $i;
  }
  
  public function getNome() {
      return $this->nome;
  }
  
  public function setNome($n) {
      $this->nome = $n;
  }
  
  public function getIdade() {
      return $this->idade;
  }
  
  public function setIdade($i) {
      $this->idade = $i;
  }
  
  public function mostrarDados() {
      echo "Nome: " . $this->nome . "\n";
      echo "Idade: " . $this->idade . "\n";
  }
}
?>