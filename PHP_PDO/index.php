<?php 
   if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
        $dsn = 'mysql:host=localhost;dbname=banco_teste';
        $user = 'root';
        $pass = '';

        try{
            $link = new PDO($dsn, $user, $pass);

            $pergunta = "select * from tb_usuario where";
            $pergunta.= " usuario = :usuario";
            $pergunta.= " and senha = :senha";

            $resposta = $link->prepare($pergunta);
            $resposta->bindValue(':usuario',$_POST['usuario']);
            $resposta->bindValue(':senha',$_POST['senha']);

            $resposta->execute();

            $usuario = $resposta->fetch();
            //print_r($usuario);

        }catch(PDOException $e) {
            
            echo 'Erro'.$e->getCode().'Mensagem'.$e->getMessage();
        }
   }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form id="loginForm" action="index.php" method="post" onsubmit="clearForm()">
        <h1>Login</h1>
        <input type="text" name="usuario" placeholder="Usuario" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <button type="submit">Entrar</button>
    
    <?php 
        if(empty($usuario)) {
            echo '<h2>Faça o login para entrar!</h2>';
        }else {
            echo '<h2>Logado</h2>';
        }
    ?>
   </form>
</body>
</html>

<style>
 body { 
    font-family: Arial, sans-serif; 
    display: flex; justify-content: center; 
    align-items: center; 
    height: 100vh; 
    background-color: #f0f0f0; 
    margin: 0; 

 } 
    
 form { 
    background: #fff; 
    padding: 20px; 
    border-radius: 8px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
    width: 300px; 
    text-align: center; 

 } 
 
 h1 { 
    margin-bottom: 20px; 
    color: #333; 
    font-family: sans-serif;

} 

input[type="text"], input[type="password"] { 
    width: 92%; 
    padding: 10px; 
    margin-bottom: 10px; 
    border: 1px solid #ccc; 
    border-radius: 4px; 
    
} 

button { 
    background-color: #4CAF50; 
    color: white; 
    padding: 10px; 
    border: none; 
    border-radius: 4px; 
    cursor: pointer; 
    width: 30%; 
    
} 

button:hover { 
    background-color: #45a049;

} 

h2 { 
    color: #333;

} 

</style>

 