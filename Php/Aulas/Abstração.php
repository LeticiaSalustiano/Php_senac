<?php

//modelo
class Times{

//atributos

public $nomeT;
public $principal;
public $mundial;


//metodos
public function exibirAtributos() {
    return "Time: $this->nomeT <br>
            Mundial: $this->mundial <br>
            Jogador principal: $this->principal <hr>";
} 

  public function setAtributos($nomeT,$principal,$mundial) {
      $this->nomeT = $nomeT;
      $this->principal = $principal;
      $this->mundial = $mundial;

  }

}


$time1 = new Times;
$time2 = new Times;
$time3 = new Times;


$time1 -> setAtributos('Corinthians','Depay',2);
$time2 -> setAtributos('São Paulo', 'Wellington Rato',3);
$time3 -> setAtributos('Santos','Tiquinho Soares',2);

echo "<hr/>";

echo $time1 -> exibirAtributos();
echo $time2 -> exibirAtributos();
echo $time3 -> exibirAtributos();



?>