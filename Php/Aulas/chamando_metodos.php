<?php

//modelo

class Frutas{

//atributos

 public $nome;
 public $quantidade;
 public $frutas;


//metodos

function __set($atributo,$valor){
    $this->$atributo = $valor;
}

function __get($atributo){
    return $this->$atributo;
}

function escrever(){
    return $this->__get('nome') . " comprou " . $this->__get("quantidade") . $this->__get("frutas") . 
    " na feira <br/><hr>";
}

}

//Instanciando os objetos
$pessoa1 = new Frutas;
$pessoa2 = new Frutas;
$pessoa3 = new Frutas;
$pessoa4 = new Frutas;

$pessoa1->__set("nome","Felipe");
$pessoa1->__set("quantidade","30 ");
$pessoa1->__set("frutas","Laranjas");

$pessoa2->__set("nome","Letícia");
$pessoa2->__set("quantidade","18 ");
$pessoa2->__set("frutas","Morangos");

$pessoa3->__set("nome","Daniel");
$pessoa3->__set("quantidade","91 ");
$pessoa3->__set("frutas","Maçãs");

$pessoa4->__set("nome","Lucas");
$pessoa4->__set("quantidade","60 ");
$pessoa4->__set("frutas","Amoras");

echo $pessoa1->escrever();
echo $pessoa2->escrever();
echo $pessoa3->escrever();
echo $pessoa4->escrever();

?>

