<?php

require_once 'Classes/Lutador.php';

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovado;

    public function marcarLuta ($l1, $l2){
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){

            $this->aprovado = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;

        } else{
            $this->aprovado = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }

    }

   public function lutar(){

      if($this->aprovado){
        $this->desafiado->apresentar();
        $this->desafiante->apresentar();
        $vencedor = rand(0, 2);
        switch($vencedor){
            case 0 :
                echo "A luta Empatou";
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
                break;
            case 1 :
                echo " <p>" . $this->desafiante->getNome() . " venceu </p>";
                $this->desafiante->ganharLuta();
                $this->desafiado->perderLuta();
        
                break;
            case 2 :
                echo "<p>" . $this->desafiado->getNome() . " venceu a luta </p>";
                $this->desafiante->perderLuta();
                $this->desafiado->ganharLuta();
                break;
        }
        
      } else {
        echo "<p> A luta não pode acontecer! </p>";
      }

   }
   
   function getDesafiado(){
    return $this -> desafiado;
   }

   function getDesafiante(){
    return $this -> desafiante;
   }
   
   function getRounds(){
    return $this-> rounds;
   }

   function getAprovado(){
    return $this-> aprovado;
   }

   function setDesafiado($desafiado){
    $this->desafiado = $desafiado;
   }

   function setDesafiante($desafiante){
    $this->desafiante = $desafiante;
   }

   function setRounds ($rounds){
    $this->rounds = $rounds;
   }

   function setAprovado($aprovado){
    $this->aprovado=$aprovado;
   }



}