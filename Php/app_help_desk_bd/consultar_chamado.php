
<?php
  require_once "validador_acesso.php";
  require "config.php";

// Ajusta a consulta SQL com base no perfil do usuário
if ($_SESSION['perfil'] != 'Adm') {
    $sql = "SELECT * FROM chamados WHERE id_usuario = {$_SESSION['id']}";
} else {
    $sql = "SELECT * FROM chamados";
}

  $res = $conexao->query($sql);
  $qtd = $res->num_rows;

  $sql = "SELECT * FROM usuarios";
  $resusuarios = $conexao->query($sql);
  $qtdusuarios = $resusuarios->num_rows;
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="imagens/logo.png" type="image/x-icon">

<style>
body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
}

.navbar {
    margin-bottom: 20px;
}

.navbar-brand img {
    margin-right: 10px;
}

.card-consultar-chamado {
    padding: 30px 0 0 0;
    width: 100%;
    margin: 0 auto;
}

.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.card-header {
    background-color: #80808054;
    color: #000000a8;
    font-size: 2.0em;
    text-align: center;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 1.2em;
    font-weight: bold;
}

.card-subtitle {
    font-size: 1.1em;
    color: #6c757d;
}

.card-text {
    margin-top: 10px;
}

.text-muted {
    color: #6c757d !important;
}

.bg-light {
    background-color: #f8f9fa !important;
}

.btn-block {
    background-color: #007bff;
    border: none;
    color: white;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.1em;
    width: 100%;
}

.btn-block:hover {
    background-color: #0056b3;
}

.alert {
    color: red;
    text-align: center;
    margin-top: 10px;
}

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="../app_help_desk_bd/imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
        <ul class="navbar-nav">
        <li class="nav-item">
         <a class="nav-link" href="home.php">VOLTAR</a>
      </li>
    </ul>
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
              <?php while($row = $res->fetch_object()){ ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">

                  <!-- Nos 3 itens abaixo aplicamos os valores respectivos em cada um deles -->
                  <h5 class="card-title"><?php echo $row -> titulo ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Categoria: <?php echo $row -> categoria ?></h6>
                  <p class="card-text">Descrição: <?php echo $row -> descricao ?></p>
                  <h6 class="card-subtitle mb-2 text-muted" style="text-align: right;">
                    <?php 
                    $idchamado = $row -> id_chamado;
                    $idusuario = $row -> id_usuario;
                    $resusuarios->data_seek(0); // Reinicia o ponteiro do resultado da consulta de usuários
                    while ($user = $resusuarios->fetch_object()){
                        if ($user -> id_usuario == $idusuario){
                          echo '<p style="color: #0056b3; margin-bottom: 2px;"> Usuário: ' . $user -> nome . '</p>';
                            break; // Sair do loop após encontrar o usuário
                        }
                      }
                    ?>
                  </h6>
                  <h6 class="card-title" style="text-align: right;">Ordem de Serviço: <?php echo $row -> id_chamado ?></h6>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
