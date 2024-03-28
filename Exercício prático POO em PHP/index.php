
<?php

require_once "Pessoa.php";
require_once "Livro.php";

$pessoa[0] = new Pessoa('Pedro', 23, 'masc');
$pessoa[1] = new Pessoa('Maria', 32, 'fem');

$livro[0] = new Livro('Fundamentos do PHP', 'José da Silva', 300, $pessoa[0]);
$livro[1] = new Livro('POO com PHP', 'Maria de Souza', 500, $pessoa[1]);

print_r($livro[0]);

