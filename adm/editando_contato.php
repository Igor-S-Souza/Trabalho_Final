<?php  
	//Conectando com o banco de dados
	include("../banco/Banco.php");

	//Iniciando uma sessão
	session_start();

	//Recebendo e armazenando a identificação do usuário
	$id = $_POST['id'];
	//Recebendo e armazenando os dados inseridos pelo usuário
	$nome = $_POST['nome'];
	$setor = $_POST['setor'];
	$email = $_POST['email'];
	$contato = $_POST['contato'];
	$observacao = $_POST['observacao'];
	//Editando os dados do usuário
	$editando = mysqli_query($funciona, "UPDATE contatos SET entidade='$nome', setor='$setor', contato='$contato',email='$email', observacao='$observacao' WHERE id='$id' ");

	if (isset($editando)) {
		$_SESSION['msg_usuario_alt_sucesso'] = "<p >Usuário alterado com sucesso!</p>";
		header("Location: contatos.php");
	}
	else {
		$_SESSION['msg_erro_alt_usuario'] = "<p >Usuário não alterado</p>";
		header("Location: editar_contato.php");
	}

?>