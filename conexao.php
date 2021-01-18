<?php
require_once('conecta.php');
//Função que permite que você conecte ao banco de maneira mais eficaz. Não pode mexer.

	function dbConexao()
	{
		$conecta = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) OR DIE(mysqli_connect_error());
		mysqli_set_charset($conecta, DB_CHARSET) or die(mysqli_error($conecta));

		return $conecta;
	}

	//Função que fecha o banco. Não pode mexer.
	
	function dbClose($conecta)
	{
		mysqli_close($conecta) or die(mysqli_error($conecta));
	}

	function dbProtege($dados){
	$conexao = dbConexao();

	if(!is_array($dados))
		$dados = mysqli_real_escape_string($conexao, $dados);
	else
	{
		$a = $dados;

		foreach ($a as $key => $value) {
			$key   = mysqli_real_escape_string($conexao, $key);
			$value = mysqli_real_escape_string($conexao, $value);

			$dados[$key] = $value;
		}
	}
	dbClose($conexao);
	return $dados;
}
?>

