<?php 
	//Conexão com o banco de dados
	include("../banco/Banco.php");

	//Iniciando uma sessão
	session_start();

	//Recebendo e armazenando a identificação do usuário
	$id = intval($_GET['id']);

	//Excluindo o usuário do banco de dados
	$excluindo_contato = mysqli_query($funciona, "DELETE FROM contatos WHERE id='$id' ");

	if (isset($excluindo_usuario)) {
		$_SESSION['msg_excluido_com_sucesso'] = "<p>Usuário excluído com sucesso!</p>";
		header("Location: contatos.php");
	}
	else {
		$_SESSION['msg_erro_ao_excluir'] = "<p>Usuário não excluído...</p>";
		header("Location: contatos.php");
	}
?>	