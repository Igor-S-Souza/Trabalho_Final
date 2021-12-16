<?php 
include('../banco/Banco.php');

session_start();

//Recebendo e armazenando os dados inseridos pelo usuário
	$nome = $_POST['nome'];
	$setor = $_POST['setor'];
	$email =$_POST['email'];
	$contato = $_POST['contato'];
	$observacao = $_POST['observacao'];

	//Inserido o novo usuário no banco de dados
$cadastrando_contato ="INSERT INTO contatos(entidade, setor,contato, email,	observacao	
) VALUES ('$nome','$setor','$contato', '$email', '$observacao' )";
$resultado = mysqli_query($funciona, $cadastrando_contato );
//Verificando se o usuário foi cadastrado
	if (isset($cadastrando_contato)) {
		//Mensagem de sucesso
		$_SESSION['msg_usuario_cadastrado'] = "<p>Usuário cadastrado com sucesso!</p>";
		//Redirecionando o usuário a página de cadastro
		header("Location: contatos.php");
	}
	//Caso o usuário não seja cadastrado
	else {
		//Mensagem de erro ao cadastrar usuário
		$_SESSION['msg_usuario_nao_cadastrado'] = "<p>Usuário não cadastrado</p>";
		//Redirecionando o usuário a página de cadastro
		header("Location: cadastrando_contato.php");
	}

 ?>