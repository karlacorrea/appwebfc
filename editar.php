<?php
require_once('perfil-usuario.php');
require_once("conexao.php");
require_once("comando.php");
$email = $_SESSION['login'];
//$nome = $_POST['nome_edit'];
//$profissao = $_POST['profissao_edit'];
$descricao = $_POST['descricao_edit'];
$imagem = $_POST['img'];
dbComando("update tb_usuario set ds_usuario_servico= '$descricao' where nm_email = '$email'" );

?>