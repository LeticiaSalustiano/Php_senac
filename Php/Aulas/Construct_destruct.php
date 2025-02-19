<?php

//modelo

class Alunos{

//atributos

public $nome = null;

//metodos

function __construct($nome){
   echo 'Contagem iniciada: <br/>';
   $this-> nome = $nome;
}

function __destruct(){
    echo '<br/> Contagem finalizada';
}

function __get($contagem){
    return $this-> $contagem;
}

function __set($contagem,$nmr){
    $this-> $contagem = $nmr;
}

function presença(){
    return '<br/>' . $this-> __get('nome') . ' Está presente!';
}

}


$alunos = new Alunos('Letícia');
    echo '<hr/> Nome: ' . $alunos-> __get('nome');   
    echo $alunos-> presença();

$alunos-> __set('nome','Júlia');
    echo '<hr/> Nome atualizado: ' . $alunos-> __get('nome'); 
    echo $alunos-> presença();
    echo "<hr/>";
    unset($alunos); 
?>