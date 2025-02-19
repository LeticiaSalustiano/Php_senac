<?php
require_once "validador_acesso.php";

// Declarando a variável
$chamados = [];

// Abrindo o arquivo para consultar os dados
$arquivo = fopen('registros.hd', 'r');

// Enquanto não for o final do arquivo ele entra
while (!feof($arquivo)) {
    // Pega a linha e guarda no registro
    $registro = fgets($arquivo);
    
    // Ignora linhas vazias
    if (trim($registro) == '') {
        continue;
    }
    
    // Pega o registro e guarda num array, onde conterá todos os chamados
    $chamados[] = $registro;
}

// Fechando o arquivo
fclose($arquivo);
?>

<html>
<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <style>
        .card-consultar-chamado {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
        .card-header {
            font-size: 30px;
            font-family: arial;
        }
        a.btn {
            height: 50px;
            width: 40%;
            margin-left: 5%;
            background-color: #343a406b;
            color: black;
            border-color: black;
        }
        a.btn:hover {
            color: white;
            background-color: gray;
            border-color: black;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="./imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
            <!-- Rodamos um foreach passando por todos os chamados -->
              <?php foreach($chamados as $chamado){ ?>

                <!-- Usamos o explode para separar os valores de cada chamado em um novo array -->
                <?php $chamado_dados = explode('|', $chamado); 

                // Para validar que só será exibido um novo card se possuir todos os valores preenchidos
                if(count($chamado_dados) < 6){
                    continue; 
                }
                
               // Verifica se o perfil é de usuário, depois se o usuário for diferente passa pro próximo 
               if($_SESSION['perfil'] == $_SESSION['perfis']['Usuario']) { 
                if($chamado_dados[0] != $_SESSION['id'] ) { 
                  continue; // Pula os chamados que não são do usuário logado
                } 
               }
                ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">

                  <!-- Nos 3 itens abaixo aplicamos os valores respectivos em cada um deles -->
                  <h5 class="card-title"><?php echo $chamado_dados[1] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                    <?php echo '<p style="color: green; margin-bottom: 2px;"> Usuário: ' . $chamado_dados[2] . '</p>';?>
                  </h6>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamado_dados[3] ?></h6>
                  <p class="card-text"><?php echo $chamado_dados[4] ?></p>
                
                </div>
              </div>
              <?php } ?>
              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>