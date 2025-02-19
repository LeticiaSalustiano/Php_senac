<?php

abstract class Veiculo {

    private $marca;
    private $modelo;
    private $combustivel;

    public function __construct($marca, $modelo, $combustivel) {

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->combustivel = $combustivel;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getCombustivel() {
        return $this->combustivel;
    }

    abstract public function acaoEspecifica();
}

class Carro extends Veiculo {
    public function acaoEspecifica() {
        return 'Acelerar e Frear';
    }
}

class Moto extends Veiculo {
    public function acaoEspecifica() {
        return 'Fazer Manobras';
    }
}

class Caminhao extends Veiculo {
    public function acaoEspecifica() {
        return 'Transportar Cargas';
    }
}

?>
