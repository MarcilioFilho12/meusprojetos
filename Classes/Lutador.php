<?php

class Lutador {
   private $nome;
   private $nacionalidade;
   private $idade, $altura, $peso;
   private $categoria, $lutas, $vitorias, $derrotas, $empates;


   function apresentar(){
    echo "<p>-----------------------------------------</p>" . PHP_EOL;
    echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
    echo " tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "kg";
    echo "\n Ele tem " . $this->getVitorias() . " vitórias, e " . $this->getDerrotas() . " derrotas, e " . $this->getEmpates() . " empates, dentro de " . $this->getLutas() . " lutas ";

   }

   function status(){
    echo "<p>--------------------------------------------------</p>" . PHP_EOL;
    echo "<p>" . $this->getNome() . " é um peso" . $this->getCategoria();
    echo " que já ganhou " . $this->getVitorias() . " vezes,";
    echo " perdeu " . $this->getDerrotas() . " vezes, e";
    Echo " empatou " . $this->getEmpates() . " vezes!";
   }

   function ganharLuta() {
    $this->setVitorias($this->getVitorias() + 1);

   }

   function perderLuta(){
    $this->setDerrotas($this->getDerrotas() + 1);

   }
   function empatarLuta(){
    $this->setEmpates($this->getEmpates() + 1);

   }   

function __construct($no, $na, $id, $al, $pe, $lu, $vi, $de, $em) {
    $this->nome=$no;
    $this->nacionalidade=$na;
    $this->idade=$id;
    $this->altura=$al;
    $this->setPeso($pe);
    $this->lutas=$lu;
    $this->vitorias=$vi;
    $this->derrotas=$de;
    $this->empates=$em;

}

function getNome() {
    return $this->nome;
}

function getNacionalidade() {
    return $this->nacionalidade;
}

function getIdade() {
    return $this->idade;
}

function getAltura() {
    return $this->altura;
}

function getPeso() {
    return $this->peso;
}

function getCategoria(){
    return $this->categoria;
}

function getLutas(){
    return $this->lutas;
}

function getVitorias() {
    return $this->vitorias;

}

function getDerrotas() {
    return $this->derrotas;
}

function getEmpates() {
    return $this->empates;
}

function setNome($nome) {
     $this->nome = $nome;
}

function setNacionalidade($nacionalidade) {
     $this->nacionalidade = $nacionalidade;
}

function setIDade($idade) {
   $this->idade = $idade;
}

function setAltura($altura) {
    $this->altura = $altura;
}

function setPeso($peso) {
    $this->peso = $peso;
    $this->setCategoria();
}

private function setCategoria(){

if ( $this->peso < 52.2 ){
     $this->categoria = ' Inválido ';
}
elseif ($this->peso <= 70.3){
    $this->categoria = ' Leve ';
}
elseif ($this->peso <= 83.9){
    $this->categoria = ' Médio ';
}
elseif ( $this->peso <= 120.2){
    $this->categoria = ' Pesado ';
}
else {
    $this->categoria = 'I nválido ';
}
}


function setLutas($lutas){
    $this->lutas = $lutas;
}

function setVitorias($vitorias) {
    $this->vitorias = $vitorias;

}

function setDerrotas($derrotas) {
    $this->derrotas = $derrotas;
}

function setEmpates($empates) {
    $this->empates = $empates;
}

}