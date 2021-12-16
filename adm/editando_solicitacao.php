<?php  
	//Conectando com o banco de dados
	include("../banco/Banco.php");

	//Iniciando uma sessão
	session_start();

	//Recebendo e armazenando a identificação do usuário
	$id = $_POST['id'];
	//Recebendo e armazenando os dados inseridos pelo usuário
	$setor = $_POST['setor'];
	$nome = $_POST['nome'];
	$problema = $_POST['problema'];

	//Editando os dados do usuário
	$editando = mysqli_query($funciona, "UPDATE solicitacao SET nome='$nome', setor='$setor', problema='$problema'  WHERE id='$id' ");

	if (isset($editando)) {
		$_SESSION['msg_usuario_alt_sucesso'] = "<p >Usuário alterado com sucesso!</p>";
		header("Location: usuarios.php");
	}
	else {
		$_SESSION['msg_erro_alt_usuario'] = "<p >Usuário não alterado</p>";
		header("Location: usuarios.php");
	}

?>