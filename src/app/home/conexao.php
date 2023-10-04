<?php
	// Criacao das variaveis para passagem das informacoes $enderecoDB, $usuarioDB, $senhaDB, $nomeDB. A abreviacao DB é de Data Base (Base de Dados)
	$enderecoDB = "localhost";
	$usuarioDB = "root";
	$senhaDB = "";
	$nomeDB = "form_db";
	//Conexão com o Banco de Dados MySQl sem orientação a objeto
	$conexao_db = mysqli_connect($enderecoDB,$usuarioDB,$senhaDB,$nomeDB);
?>

<p>Confirmado com sucesso!!</p>