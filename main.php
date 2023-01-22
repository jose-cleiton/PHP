<?php
    require_once 'Pessoa.php';
    require_once 'Funcionario.php';

    $funcionario = new Funcionario("Maria", 30, "Gerente");
    $funcionario->mostrarDados();
?>