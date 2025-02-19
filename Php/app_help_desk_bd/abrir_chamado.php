<?php
require_once "validador_acesso.php";
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

.card-abrir-chamado {
    padding: 30px 0 0 0;
    width: 100%;
    margin: 0 auto;
}

.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: gray;
    color: white;
    font-size: 1.2em;
    text-align: center;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.card-body {
    padding: 20px;
}

.form-group label {
    font-weight: bold;
}

.form-control {
    border-radius: 5px;
    margin-bottom: 10px;
}

.btn-block {
    background-color: gray;
    border: none;
    color: white;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.1em;
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
      <img src="" alt="">
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

      <div class="card-abrir-chamado">
        <div class="card">
          <div class="card-header">
            Abertura de chamado
            <?php if (isset($_GET['cadastro']) && $_GET['cadastro'] === 'efetuado') { ?>
              <div style="color: green;">
                <script>
                  alert('Chamado cadastrado com sucesso!')
                </script>
              </div>
            <?php } else if (isset($_GET['cadastro']) && $_GET['cadastro'] === 'falha'){ ?>
              <div style="color: red;">
                <script>
                  alert('Erro de inserção de chamado no banco, contate o administrador!')
                </script>
              </div>
            <?php } ?>

          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">


                <form action="registra_chamado.php" method="POST">
                  <div class="form-group">
                    <label>Título</label>
                    <input name="titulo" type="text" class="form-control" placeholder="Título" required autofocus>
                  </div>

                  <div class="form-group">
                    <label>Categoria</label>
                    <select name="categoria" class="form-control" required>
                      <option value="" disabled selected>Selecione uma opção!</option>
                      <option value="Criação Usuário">Criação Usuário</option>
                      <option value="Impressora">Impressora</option>
                      <option value="Hardware">Hardware</option>
                      <option value="Software">Software</option>
                      <option value="Rede">Rede</option>
                      <option value="Formatação">Formatação</option>
                      <option value="Orçamento">Orçamento</option>
                      <option value="Desenvolvimento">Desenvolvimento</option>
                      <option value="Outros">Outros</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Descrição</label>
                    <textarea name="descricao" class="form-control" rows="3" required></textarea>
                  </div>
                    <div class="col-6">
                      <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>