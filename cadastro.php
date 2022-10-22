<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
    <title>Cadastro</title>
</head>
    <body>
        <div class="container">
            <div class="alinhar">
            <h1 class="titulo" style="color:#483D8B">Cadastre-se</h1>
            
            <form action="cadastrar.php" method="post">


                <input type="text" name="nome" placeholder="Nome">
            
                <input type="text" name="sobrenome" placeholder="Sobrenome">
                
                <input type="email" name="usuario" placeholder="Email">
                  

                <input type="password" name="senha" placeholder="Senha">
                

                <button type="submit" class="button">Cadastrar</button>
            </form>

            <?php
                 if(isset($_SESSION['status_cadastro'])):
            ?>  
                <div class="Sucesso">
                 <p style="color:green">Cadastro efetuado! Para logar, click <a href="login.php">aqui</a></p>
             
            <?php
                endif;
                unset($_SESSION['status_cadastro']);
            ?>


            <?php
                 if(isset($_SESSION['usuario_existe'])):
            ?>
                <div class="Existe">
                 <p style="color:red">Usuário já existe.Tente novamente.</p>
                </div>
            <?php
                endif;
                unset($_SESSION['usuario_existe']);
            ?>
            </div>
                
            <p class="redi">Já possui Cadastro? Faça seu <a href="index.php">Login</a></p>     






        </div>   
    </body>
    <script src="cadas.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.6.5/firebase.js"></script>
</html>