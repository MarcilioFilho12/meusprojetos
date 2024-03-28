<?php
require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;


    public function detalhe(){

        echo " Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "\n Páginas " . $this->totalPaginas;
        echo "\n Sendo lido por " . $this->leitor->getNome();
    }

     function __construct($titulo, $autor, $totalPaginas, $leitor){ 
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->aberto = false;
    $this->pagAtual = 0;
    $this->totalPaginas = $totalPaginas;
    $this->leitor = $leitor;
    
}

function getTitulo(){
    return $this->titulo;
}

function getAutor(){
    return $this->autor;
}

function getTotalPaginas(){
    return $this->totalPaginas;
}

function getPagAtual(){
    return $this->pagAtual;
}

function getAberto(){
    return $this->aberto;
}

function getLeitor(){
    return $this->leitor;
}
function setTitulo($titulo){
    $this->titulo = $titulo;
}

function setAutor($autor){
    $this->autor = $autor;
}

function setTotalPaginas($totalPaginas){
    $this->totalPaginas = $totalPaginas;
}

function setPAgAtual($pagAtual){
    $this->pagAtual= $pagAtual;
}

function setAberto($aberto){
    $this->aberto = $aberto;
}

function setLeitor($leitor){
    $this->leitor = $leitor;
}

public function abrir(){
    $this->aberto = true;

}
public function fechar(){
    $this->aberto = false;

}
public function folhear($p){
    if($p < $this->totalPaginas){
        $this->pagAtual = 0;
    } else{
        $this->pagAtual = $p;
    }

}
public function avançarPg(){
    $this->pagAtual ++;

}
public function voltarPg(){
    $this->pagAtual --;

}

}