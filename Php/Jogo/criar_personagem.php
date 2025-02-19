<?php

//namespace
namespace Game;

//interface
interface PersonagemInterface {
    public function getNome();
    public function getTipo();
    public function getForca();
    public function getHabilidade();
    public function getInteligencia();
    public function getImagem();
    public function acaoEspecifica();
    public function determinarImagem();
}

class Personagem implements PersonagemInterface {

    private $nome;
    private $tipo;
    private $forca;
    private $habilidade;
    private $inteligencia;
    private $imagem;

    public function __construct($nome, $tipo, $forca, $habilidade, $inteligencia) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->forca = $forca;
        $this->habilidade = $habilidade;
        $this->inteligencia = $inteligencia;
        $this->imagem = $this->determinarImagem(); 
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getForca() {
        return $this->forca;
    }

    public function getHabilidade() {
        return $this->habilidade;
    }

    public function getInteligencia() {
        return $this->inteligencia;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function determinarImagem() {
        switch ($this->tipo) {
            case 'guerreiro':
                return './imagens/guerreiro.png';
            case 'mago':
                return './imagens/mago.png';
            case 'ladrao':
                return './imagens/ladrao.png';
            case 'ninja':
                return './imagens/ninja.png';
            case 'elfo':
                return './imagens/elfo.png';
            case 'anao':
                return './imagens/anao.png';
            case 'heroi':
                return './imagens/heroi.png';
            case 'arqueiro':
                return './imagens/arqueiro.png';
            default:
                return 'default.png';
        }
    }

    public function acaoEspecifica() {
        switch ($this->tipo) {
            case 'guerreiro':
                return "Método Específico: Atacar com Espada";
            case 'mago':
                return "Método Específico: Lançar Feitiço";
            case 'ladrao':
                return "Método Específico: Furtividade";
            case 'ninja':
                return "Método Específico: Ataque Rápido";
            case 'elfo':
                return "Método Específico: Tiro Preciso";
            case 'anao':
                return "Método Específico: Golpe de Martelo";
            case 'heroi':
                return "Método Específico: Inspiração";
            case 'arqueiro':
                return "Método Específico: Disparo à Distância";
            default:
                return "Método Específico: Ação desconhecida";
        }
    }
}

?>
<html>
    <body>
        <div class="container">

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? '';
    $tipo = $_POST['tipo'] ?? '';
    $forca = $_POST['forca'] ?? 0;
    $habilidade = $_POST['habilidade'] ?? 0;
    $inteligencia = $_POST['inteligencia'] ?? 0;


    // Atributo específico do personagem
    $atributo_especifico = '';
    if ($tipo == 'guerreiro') {
        $atributo_especifico = 'Armadura: ' . ($_POST['armadura'] ?? 0);
    } elseif ($tipo == 'mago') {
        $atributo_especifico = 'Mana: ' . ($_POST['mana'] ?? 0);
    } elseif ($tipo == 'ladrao') {
        $atributo_especifico = 'Furtividade: ' . ($_POST['furtividade'] ?? 0);
    } elseif ($tipo == 'ninja') {
        $atributo_especifico = 'Agilidade: ' . ($_POST['agilidade'] ?? 0);
    } elseif ($tipo == 'elfo') {
        $atributo_especifico = 'Precisão: ' . ($_POST['precisao'] ?? 0);
    } elseif ($tipo == 'anao') {
        $atributo_especifico = 'Resistência: ' . ($_POST['resistencia'] ?? 0);
    } elseif ($tipo == 'heroi') {
        $atributo_especifico = 'Carisma: ' . ($_POST['carisma'] ?? 0);
    } elseif ($tipo == 'arqueiro') {
        $atributo_especifico = 'Mira: ' . ($_POST['mira'] ?? 0);
    }

    $personagem = new Personagem($nome, $tipo, $forca, $habilidade, $inteligencia);

    echo "<h1>Personagem Criado</h1>";
    ?>

<div class="img">
<?php
    echo "<img src='" . $personagem->getImagem() . "' alt='Imagem do Personagem'><br>";
    ?>
    </div>
    <?php
    echo "Nome: " . $personagem->getNome() . "<br>";
    echo "Tipo: " . $personagem->getTipo() . "<br>";
    echo "Força: " . $personagem->getForca() . "<br>";
    echo "Habilidade: " . $personagem->getHabilidade() . "<br>";
    echo "Inteligência: " . $personagem->getInteligencia() . "<br>";
    echo "Atributo Específico: " . $atributo_especifico . "<br>";
    echo $personagem->acaoEspecifica() . "<br>";
?>


<div class="acoes">
<?php
    echo "<h2>Ações Disponíveis</h2>";
    echo "<ul>";
    echo "<li>Atacar</li>";
    echo "<li>Defender</li>";
    echo "<li>Esquivar</li>";
    echo "<li>Fugir</li>";
    echo "</ul>";
}
?>
</div>

</div>

<div class="btn"><a href="./index.html"><h3>Voltar</h3></a></div>
    </body>
</html>

<style>

body {
    font-family: 'Trebuchet MS', sans-serif;
    background-image: url('./imagens/img_fundo.avif'); 
    background-size: cover;
    background-position: center;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: #fff;
}

.container {
    background-color: rgba(34, 34, 34, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
    width: 350px;
    text-align: center;
}

.acoes{
    
    text-align: left;
}

h1 {
    font-family: 'Papyrus', cursive;
    color: #FFD700;
    text-shadow: 2px 2px 5px #000;
}

h2{
    font-family: 'Papyrus', cursive;
    color: #FFD700;
    text-shadow: 2px 2px 5px #000;
    text-align: center;
}

h3 {
    font-family: 'Papyrus', cursive;
    color: #FFD700;
    text-shadow: 2px 2px 5px #000;
}


img{
    width: 100px;
    padding: 20px;
}

.btn{
    margin-top: 37%;
    padding: 30px;
}



</style>





