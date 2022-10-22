<?php
session_start();
include ('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])|| empty($_POST['nome'])||empty($_POST['sobrenome'])) {
	header('Location: cadastro.php');
	exit();
}

$nome= mysqli_real_escape_string($conexao, trim($_POST['nome']));
$sobrenome= mysqli_real_escape_string($conexao, trim($_POST ['sobrenome']));
$usuario= mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha= mysqli_real_escape_string($conexao, trim($_POST['senha']));

$sql="select count(*) as total from usuario where usuario='$usuario'";
$result= mysqli_query($conexao, $sql);
$row=mysqli_fetch_assoc($result);

if ($row['total']==1)
{
    $_SESSION['usuario_existe']=true;
    header ('Location: cadastro.php');
    exit;
}

$sql="INSERT INTO usuario (nome, sobrenome, usuario, senha, data_cadastro) VALUES ('$nome', '$sobrenome', '$usuario', '$senha', NOW())";

if ($conexao->query($sql))
{
    $_SESSION['status_cadastro']=true;
    
}


$conexao->close();
header('Location:cadastro.php');
exit;


?>