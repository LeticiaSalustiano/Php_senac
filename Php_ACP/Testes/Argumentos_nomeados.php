<?php

//Argumentos Nomeados
function Pessoa($Nome = '', $Idade = '', $Nacionalidade = '', $Personalidade = '') {
    echo "Nome: $Nome<br>";
    echo "Idade: $Idade<br>";
    echo "Nacionalidade: $Nacionalidade<br>";
    echo "Personalidade: $Personalidade<br>";
}

Pessoa(
    Nome: 'Julia',
    Idade: 16,
    Nacionalidade: 'Brasileira',
    Personalidade: 'Extrovertida'
    
);



Pessoa(
    Nome: 'Antonela',
    Idade: 18,
    Nacionalidade: 'Italiana',
    Personalidade: 'introvertida'
    
);

?>
