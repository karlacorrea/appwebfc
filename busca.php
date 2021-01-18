<?php
	$pagina = "Busca";
	$titulo = "Busca";
	include "template/head.php";
	include "comando.php";
	
?>
<body>
	<?php include "template/menu.php" ?>
	<!-- CONTEUDO -->
	<section class="row">
	    <div class="col s12">
	      	<div class="row">
		        <div class="input-field col s8 offset-s2">
		          	<i class="material-icons prefix">search</i>
		          	<input type="text" id="categoriaServico" class="autocomplete">
		          	<label for="categoriaServico">Procure por um serviço</label>
		        </div>
	      </div>
	    </div>
  	</section>
	
		   <!--  <h2 class="header">"Pesquisa"</h2> -->
		    <div class="row">
		    	<div class="col s10 offset-s1">
		    	<?php
		     $_GET['busca'] = (isset($_GET['busca']))?$_GET['busca']:"";
		     //$retVal = (condition) ? a : b ;
		    $prof = $_GET['busca'];
		   $sql = dbComando("select nm_usuario , nm_profissao_usuario from tb_usuario 
		   	where nm_profissao_usuario like '%$prof%'");
		   $jesus="";
		   while($linha=mysqli_fetch_assoc($sql))
		   {
		  	
		  	$jesus.= '
		  	
		<div class="col s6">
		  	<div class="card horizontal">
		   			      <div class="card-image">
		   			        <img src="https://lorempixel.com/100/190/nature/6"> <!--imagem-->
		   			      </div>
		   			      <div class="card-stacked">
		   			        <div class="card-content"><!-- informações do trabaiadô-->
		   			          <p>Profissão:'.$linha['nm_profissao_usuario'].'</p><br>
		   			          <p>Nome: '.$linha['nm_usuario'].'</p><br>
		   			          <p>Cidade:São Vicente</p><br>
		   			          <p>Idade:343634 </p>
		   			        </div>
		   			        <div class="card-action">
		   			          <a href="perfil-trabalhador.php">Acesse esse perfil!</a><!-- link pra ir pra outra pagina -->
		   			        
		   			      </div>
		   			    </div>
		   			 
		   		  	</div><!-- termina aqui-->
		   		  	</div>
		   		  	
		   		  	
  	';

		   }
		   echo $jesus;
?>
	</div>
	</div>	   

	<?php include "template/rodape.php" ?>
	
</body>