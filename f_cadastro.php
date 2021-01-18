<?php 
include('conecta.php');
$nm_pessoa = $_POST['nome'];
$dt_nasc = $POST['nascimento'];
$cd_cpf = $POST['cpf'];
$nm_naturalidade = $POST['naturalidade'];
$nm_expedidor_rg = $POST['expedidor_rg'];
$cd_cnh = $POST['cnh'];
$nm_expedidor_cnh = $POST['cnh'];
$confsenha = $POST['conf_senha'];

//select day(now()), month(now()), year(now());
$dia_hoje = mysqli_query($con,"select CURDATE()");
$mes_hoje = mysqli_query($con,"select month(now())");
$ano_hoje = mysqli_query($con,"select year(now())");
calcula_idade();





?>