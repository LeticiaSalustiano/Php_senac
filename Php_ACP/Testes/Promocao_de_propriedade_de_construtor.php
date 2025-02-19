<?php

//Promoção de Propriedade de Construtor
class Cardapio{
    public function __construct(
        public string $nome,
        public string $produto,
        public float $quantidade = 0,
        public float $valor = 0
    ){}
}

$cardapios = [
    new Cardapio('Maria', 'Água', 1, 3.50),
    new Cardapio('joão','Suco natural', 4, 13.00),
    new Cardapio('Gustavo','Café', 3, 5.00),
    new Cardapio('Mario','Óvos', 1, 10.00),
    new Cardapio('Jorge','Misto quente', 2, 7.50),
    new Cardapio('Elias','Salgado', 0, 6.50),
    new Cardapio('Velna','Bolo', 1, 7.50)
];

foreach ($cardapios as $item) {
    echo "<strong>Nome:  </strong>{$item->nome} , <strong>Produto: </strong> {$item->produto} , <strong>Quantidade: </strong> {$item->quantidade} , <strong>Valor: R$ </strong> {$item->valor}<br>";
}

?>
