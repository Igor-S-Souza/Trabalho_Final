<?php  
	//Conectando com o banco de dados
	include("../banco/Banco.php");

	//Iniciando uma sessão
	session_start();

	//Recebendo e armazenando a identificação do usuário
	$id = $_POST['id'];
	//Recebendo e armazenando os dados inseridos pelo usuário
	$setor = $_POST['setor'];
	$email = $_POST['email'];
	$contato = $_POST['contato'];

	//Editando os dados do usuário
	$editando = mysqli_query($funciona, "UPDATE usuario_por_setor SET setor='$setor', email='$email', contato='$contato' WHERE id='$id' ");

	if (isset($editando)) {
		$_SESSION['msg_usuario_alt_sucesso'] = "<p class='msg_sucesso'>Usuário alterado com sucesso!</p>";
		header("Location: usuarios.php");
	}
	else {
		$_SESSION['msg_erro_alt_usuario'] = "<p class='msg_sucesso'>Usuário não alterado</p>";
		header("Location: usuarios.php");
	}

?>