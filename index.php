<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
	$pagina = "home";
	$titulo = "Bem vindo ao Focus";
	include "template/head.php";
?>
<?php 
if((isset($_SESSION['login']))) // isset serve pra verificar se algum dado foi passado para a sessão.
	{
		$dado = $_SESSION['login'];
		include "template/menu-perfil.php";
		
	}
	else
    {
      include "template/menu.php" ;
    }
	?>
<body>
	

	<section>
		<form method="get" action="busca.php">
		<div class="row" >
			<div class="col s12" id="plagioGoogle">
				<div class="col s2 offset-s5">
					<img class="responsive-img" src="img\logo3.png">
				</div>
				<div class="input-field col s6 offset-s3" >
					<input type="text" name="busca" placeholder="Busque um cadastro">
					<br>
				</div>
				
				<div class="col s3 offset-s5">
					<button class="btn waves-effect waves-light bg-azul" type="submit" name="action" 
					onclick="javascript:window.location.href='busca.php'" >Pesquisar
						<i class="material-icons right">search</i>
					</button>
				</div>
			</div>
		</div>
		</form>
	</section>
	

	<?php include "template/rodape.php" ?>
</body>