<?php
session_start();

    // Usuários pré-cadastrados
    $usuarios = array(
        ['id' => 1, 'perfil' => 0, 'nome' => 'Letícia', 'email' => 'leticiasalustiano07@gmail.com', 'senha' => '12345'],
        ['id' => 2, 'perfil' => 1, 'nome' => 'Letícia2', 'email' => 'leticia.fsalustiano@senacsp.edu.br', 'senha' => '321'],
        ['id' => 3, 'perfil' => 1, 'nome' => 'Ysabelly', 'email' => 'isabellyrodriguessilva2007@gmail.com', 'senha' => '0000']
    );
    $usuarioAutenticado = false;

    //RECEBENDO OS DADOS VIA MÉTODO GET
    $emailUsuario = $_GET['email'];
    $senhaUsuario = $_GET['senha'];
    
    // AUTENTICANDO O USUÁRIO
    for ($idx = 0; $idx < count($usuarios); $idx++) {
        if ($emailUsuario == $usuarios[$idx]['email'] && $senhaUsuario == $usuarios[$idx]['senha']) {
            $usuarioAutenticado = true;
            $_SESSION['id'] = $usuarios[$idx]['id'];
            $_SESSION['perfil'] = $usuarios[$idx]['perfil'];
            $_SESSION['nome'] = $usuarios[$idx]['nome'];
            break;
        } else {
            $usuarioAutenticado = false;
        }
    }
    
    if($usuarioAutenticado){
        // VALIDANDO A SESSÃO
        $_SESSION['autenticado'] = 'sim';
        header('location: home.php');
    } else {
        // VALIDANDO A SESSÃO
        $_SESSION['autenticado'] = 'nao';
        header('location: index.php?login=erro');
    }