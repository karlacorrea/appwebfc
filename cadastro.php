<?php
  $pagina = "Cadastro";
  $titulo = "cadastro";
  include "template/head.php";
?>
<body>
  <?php include "template/menu.php" ?>
  <!-- CONTEUDO -->
  <div class="row">
    <div class="col s6 offset-s3 center-align">
      
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
            <h3>Cadastro</h3>
            <fieldset class="azul">
            <legend>Dados Pessoais</legend>
            <div class="row"> 
                <div class="input-field col s9 ">
                    <input name="nome" id="nome" maxlength="180" size="180" type="text" class="validate" required>
                    <label for="nome" class="azul">Nome Completo</label>
                </div>
                <div class="input-field col s3 ">
                    <input name="nascimento" id="nascimento" maxlength="180" size="180" type="text" class="validate" required>
                    <label for="nascimento" class="azul">Data de Nascimento</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 ">
                    <input name="cpfPessoa" id="cpfPessoa" maxlength="11" size="11" type="text" class="validate" required>
                    <label for="cpfPessoa" class="azul">CPF</label>
                </div>
                <div class="input-field col s6 ">
                    <input name="naturalidade" id="naturalidade" maxlength="10" size="10" type="text" class="validate" required>
                    <label for="naturalidade" class="azul">Naturalidade</label>
                </div>
            </div>
            </fieldset>
            
            <fieldset class="azul">
            <legend>RG</legend>
            <div class="row">
                <div class="input-field col s6 ">
                    <input name="rg" id="rg" maxlength="9" size="9" type="text" class="validate" required>
                    <label for="rg" class="azul">RG</label>
                </div>
                <div class="input-field col s6 ">
                    <input name="expedidor_rg" id="expedidor_rg" maxlength="5" size="5" type="text" class="validate" required>
                    <label for="expedidor_rg" class="azul">Órgão Expedidor</label>
                </div>
            </div>
            </fieldset>
            
            <fieldset class="azul">
                <legend>CNH</legend>
                <div class="row">
                    <div class="input-field col s6 ">
                        <input name="cnh" id="rg" maxlength="11" size="11" type="text" class="validate" required>
                        <label for="cnh" class="azul">CNH</label>
                    </div>
                    <div class="input-field col s6 ">
                        <input name="expedidor_cnh" id="expedidor_cnh" maxlength="5" size="5" type="text" class="validate" required>
                        <label for="expedidor_cnh" class="azul">Órgão Expedidor DETRAN</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 ">
                        <input name="expedicao_cnh" id="expedicao_cnh" maxlength="10" size="10" type="text" class="validate" required>
                        <label for="expedicao_cnh" class="azul">Data de Expedição</label>
                    </div>
                    <div class="input-field col s6 ">
                        <input name="expiracao_cnh" id="expiracao_cnh" maxlength="10" size="10" type="text" class="validate" required>
                        <label for="expiracao_cnh" class="azul">Data de Validade</label>
                    </div>
                </div>
            </fieldset>
            
            <fieldset>
                <legend>Logradouro</legend>
                <div class="row">
                    <div class="input-field col s3 ">
                        <input name="cep" id="cep" maxlength="8" size="8" type="text" class="validate" required>
                        <label for="cep" class="azul">CEP</label>
                    </div>
                    <div class="input-field col s9 ">
                        <input name="logradouro" id="logradouro" maxlength="180" size="180" type="text" class="validate" required>
                        <label for="logradouro" class="azul">Logradouro</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3 ">
                        <input name="residencia" id="residencia" maxlength="7" size="7" type="text" class="validate" required>
                        <label for="residencia" class="azul">nº</label>
                    </div>
                    <div class="input-field col s3 ">
                        <input name="logradouro" id="logradouro" maxlength="25" size="25" type="text" class="validate" required>
                        <label for="logradouro" class="azul">Complemento</label>
                    </div>
                    <div class="input-field col s6 ">
                        <input name="bairro" id="bairro" maxlength="80" size="80" type="text" class="validate" required>
                        <label for="bairro" class="azul">Bairro</label>
                    </div>
                </div>
            </fieldset>

            <button class="btn waves-effect waves-light bg-azul" type="submit" name="action">Cadastrar
              <i class="material-icons right">send</i>
            </button>     
		 </form>
    </div>
  </div>
  
  <?php include "template/rodape.php" ?>
  <script src="js/jquery.mask.js"></script>
  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="js/index.js"></script>
</body>