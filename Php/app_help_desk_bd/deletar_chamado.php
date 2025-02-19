<?php
    require_once "validador_acesso.php";
    require 'config.php';


    $sql = "DELETE FROM chamados WHERE id_chamado = '{$_GET["id"]}';";
    $conexao-> query($sql);

    header('location: editar.php?delete=sucesso');

?>