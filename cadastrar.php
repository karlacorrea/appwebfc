<?php 
require_once("comando.php");
require_once("conexao.php");
$conexao = dbConexao();

session_start();

$email = $_POST['email'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dt_nasc = $_POST['data'];
$cpf = $_POST['cpf'];
$cnpj = "";
$senha = $_POST['password'];
$confsenha = $_POST['repassword'];

$idade="";
$help = "";

  dbComando("INSERT into tb_usuario(nm_email,cd_senha,nm_usuario,nm_sobrenome_usuario,nm_profissao_usuario,ds_idade,cd_cpf) 
  VALUES ('$email','$senha','$nome','$sobrenome','$profissao','$idade','$cpf');");
  $_SESSION["data"] = $idade; 
  $_SESSION["login"] = $email;
 
  header('Location:perfil-usuario.php');
  
?>