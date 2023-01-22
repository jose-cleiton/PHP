<?php
require_once 'Pessoa.php';

class Funcionario extends Pessoa {
    private $cargo;
    
    public function __construct($n, $i, $c) {
        parent::__construct($n, $i); // chama o construtor da classe pai
        $this->cargo = $c;
    }
    
    public function mostrarDados() {
        parent::mostrarDados(); // chama o método da classe pai
        echo "Cargo: " . $this->cargo . "\n";
    }
}
?>