<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>

<body>
                    
    
                 
    <div class="container">
              
    <h1 class="titulo" style="color:#483D8B">Entrar</h1>

        <form id="singin" action="login.php" method="POST">
                                
            <input type="email" name="usuario" name="text"  placeholder="Email" >  
               <i class="fas fa-envelope iEmail"></i> 
                                    
            <input name="senha" type="password" placeholder="Sua senha">
              <i class="fas fa-lock iPassword"></i>
                                    
            <button type="submit" class="button">Entrar</button>
                <?php
                    if(isset($_SESSION['nao_autenticado'])):
                ?>
                    <div class="error" >
                    <p style="color:red">Usuário ou senha inválidos.</p>
                    </div>
                <?php
                endif;
                    unset($_SESSION['nao_autenticado']);
                ?>
                    
        </form>
        <p class="redi">Não possui cadastro? <a href="cadastro.php">Cadastre-se</a></p>       
            
        
    
</body>
  <script src="cadas.js"></script>
  <script src="https://www.gstatic.com/firebasejs/3.6.5/firebase.js"></script>
</html>