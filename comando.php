<?php
include "conexao.php";
	//Função que permite que você retorne os resultados de maneira mais fácil. Não pode mexer.
	function dbComando($query)
	{
		$conexao = dbConexao();

		$result = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

		dbClose($conexao);

		return $result;
	}
?>
