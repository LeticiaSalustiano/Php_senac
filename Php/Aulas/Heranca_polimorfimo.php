<?php

// Modelo
abstract class Animais {

// Atributos
    public $nome = null;
    public $idade = null;
    public $cor = null;
    public $raca = null;

// Métodos
    function comunicar() {
        echo "Comunicar"; 
    }

    function movimentar() {
        echo "Movimentar"; 
    }

    function __get($atributo){
        return $this->$atributo;
    }

    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
}

class Cachorro extends Animais {
    function comunicar(){ 
        echo "Latir"; 
    }
}

class Gato extends Animais {
    function comunicar(){ 
        echo "Miar"; 
    }
}

class Passaro extends Animais {
    function comunicar(){ 
        echo "Cantar"; 
    }

    function voar(){
        echo "Voar"; 
    }
}

$cachorro = new Cachorro();
$gato = new Gato();
$passaro = new Passaro();
echo "<hr/>";

$cachorro->__set("nome", "Chico");
$cachorro->__set("idade", "5 anos");
$cachorro->__set("cor", "Preto");
$cachorro->__set("raca", "Rottweiler");

$gato->__set("nome", "Luna");
$gato->__set("idade", "3 anos");
$gato->__set("cor", "Branca");
$gato->__set("raca", "Ragdoll");

$passaro->__set("nome", "Birita");
$passaro->__set("idade", "2 anos");
$passaro->__set("cor", "Amarelo e cinza");
$passaro->__set("raca", "Calopsita");

echo "<b>Cachorro:</b> " . $cachorro->__get("nome");
echo "<br/>";
echo "Idade: " . $cachorro->__get("idade");
echo "<br/>";
echo "Cor: " . $cachorro->__get("cor");
echo "<br/>";
echo "Raça: " . $cachorro->__get("raca");
echo "<br/>";
echo "Comunicação: ";
$cachorro->comunicar();
echo "<br/>";
echo "<hr>";

echo "<br/>";
echo "<b>Gato:</b> " . $gato->__get("nome");
echo "<br/>";
echo "Idade: " . $gato->__get("idade");
echo "<br/>";
echo "Cor: " . $gato->__get("cor");
echo "<br/>";
echo "Raça: " . $gato->__get("raca");
echo "<br/>";
echo "Comunicação: ";
$gato->comunicar();
echo "<br/>";
echo "<hr>";

echo "<br/>";
echo "<b>Pássaro:</b> " . $passaro->__get("nome");
echo "<br/>";
echo "Idade: " . $passaro->__get("idade");
echo "<br/>";
echo "Cor: " . $passaro->__get("cor");
echo "<br/>";
echo "Raça: " . $passaro->__get("raca");
echo "<br/>";
echo "Comunicação: ";
$passaro->comunicar();
echo "<br/>";
echo "Ação: ";
$passaro->voar();
echo "<br/>";
echo "<hr>";

?>
