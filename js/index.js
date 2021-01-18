$(document).ready(function () {
  var cpfval = false, cnpjval = false; // Variáveis que verificam se variáveis estão válidas
  function alerta(tipo, titulo, conteudo){
    return '<div class="alert alert-'+tipo+' alert-dismissible fade in top-p" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button> <strong>'+titulo+'</strong> '+conteudo+'</div>';
  }

  $('#cpfPessoa').mask("000.000.000-00", {reverse:true});
  $('input[name="telPessoa"]').mask("(00) 0000-0000");
  $('input[name="celPessoa"]').mask("(00) 00000-0000");

  $('#scroll').on('click',function () {
    $('html, body').animate({scrollTop: 0}, "slow");
  });

  $('#btnlogin').on('click',function () {
    $('#modal-login').modal('show');
    $('#modal-login').on('shown.bs.modal', function() {
      $('#emailLogin').focus();
    })
  });

  $('#btncadastrar').on('click',function () {
    $('#modal-cad').modal('show');
    $('#modal-cad').on('shown.bs.modal', function() {
      $('#nomeUsuario').focus();
    });
  });

  $('#login').on('submit', function () {
    $.post("sistema/login.php", $(this).serialize(), function (json) {
      if (json.logado) {
        window.location.reload();
      }else{
        alert('Erro: Email e/ou senhas inválidos');
      }
    }, "json");
      
    return false;
  });

  $('input[name="nomeUsuario"]').on({
      keydown: function(e) {
        if (e.which === 32) {
          return false;
        }
      },
        change: function() {
          this.value = this.value.replace(/\s/g, "");
        }
      });

  $('#cadastro').on('submit', function() {
    if ($('#senha1Pessoa').val() != $('#senha2Pessoa').val()) {
      $('#alertas-cad').html(alerta('danger', 'Erro', 'Senhas não correspondem'));
      $('#senha1Pessoa').focus();
    }else{
      if (!cnpjval) {
        $('#cnpjPessoa').wrap('<div class="has-error"></div>');
        $('#alertas-cad').html(alerta('danger', 'Erro', 'Preencha com um CNPJ válido'));
        $('#cnpjPessoa').focus();
      }else{
        $('.has-error','#cnpjPessoa').removeClass();
        $('#alertas-cad').html('');
        if ($('#cpfPessoa').val() != "" && !cpfval) {
            $('#alertas-cad').html(alerta('danger', 'Erro', 'Preencha com um CPF válido'));
            $('#cpfPessoa').focus();
          }else{
            var dados = $(this).serialize();
            dados += '&cpf='+$('#cpfPessoa').cleanVal();
            dados += '&cnpj='+$('#cnpjPessoa').cleanVal();
            $.post("sistema/cadastro.php", dados, function(json) {
              if (json.success) {
                $('input','#cadastro').val('');
                $('#alertas-cad').html(alerta('success', 'Sucesso', 'Cadastro realizado com sucesso!'))
              }else{
                $('#alertas-cad').html(alerta('danger', 'Erro', json.error))
              }
            }, "json");
          }
      }
    }
    return false;
  });

 $('#cpfPessoa').on('input',function() {
    if ($('#cpfPessoa').val().length == 14) {
      cpfval = validaCPF($(this).cleanVal());
      if(!cpfval){
        $(this).wrap('<div class="has-error"></div>');
        $('#alertas-cad').html(alerta('danger', 'Erro ', 'CPF inválido')).fadeIn("slow");
      }else{
        $('.has-error').removeClass();
        $('#alertas-cad').html('');
        // $.post("sistema/");
      }
    }
  });

 $('#cnpjPessoa').on('input', function() {
  if ($('#cnpjPessoa').val().length == 18) {
   cnpjval = validaCNPJ($(this).cleanVal());
   if (!cnpjval){
      $(this).wrap('<div class="has-error"></div>');
      $('#alertas-cad').html(alerta('danger', 'Erro', 'CNPJ inválido')).fadeIn("slow");
   }else{
    $('.has-error').removeClass();
    $('#alertas-cad').html('');
   }
  }
 });
 $('#scroll').trigger('click');
});
