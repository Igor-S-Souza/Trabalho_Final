<?php 
   //Conectando com o banco de dados
   include("../banco/Banco.php");
   
   //Iniciando uma sessão
   session_start();
   
   //Recebendo a identificação do usuário
   $id_usuario = $_POST['id_usuario'];
   
   	//Verificando se o usuário iniciou preencheu o campo senha
   	if (isset($_POST['senha'])) {
   	 	//Verificando se o usuário preencheu o campo de confirmação de senha
   	 	if (isset($_POST['conf_senha'])) {
   	 		//Recebendo os dados inseridos pelo usuário
   	 		$senha = $_POST['senha'];
   	 		$conf_senha = $_POST['conf_senha'];
   
   	 		//Verificando se as duas senhas estão iguais
   	 		if ($senha === $conf_senha) {
   
   	 			//Alterando senha do usuário no banco de dados
   	 			$alterando = mysqli_query($funciona, "UPDATE usuario_por_setor SET senha = '$conf_senha' WHERE id = '$id_usuario' ");
   	 			//Caso a alteração seja feita com sucesso
   	 			if (isset($alterando)) {
   	 				//Indicando ao usuário que a senha foi alterada com sucesso
   					$_SESSION['msg_secesso_alter_senha_usuario_setor'] = '<p>Senha atualizada com sucesso!</p>';
   					//Redirecionando o usuário a página de atualizar_senha_usuario_setor
   					header("Location: usuarios.php");
   	 			}
   	 			//Caso a senha não seja alterada
   	 			else {
   	 				//Indicando ao usuário que a não senha foi alterada
   					$_SESSION['msg_erro_alter_senha_usuario_setor'] = '<p>Senha não alterada</p>';
   					//Redirecionando o usuário a página de atualizar_senha_usuario_setor
   					header("Location: atualizar_senha_usuario_setor?id=$id_usuario.php");
   	 			}
   	 		}
   	 		//Caso as senhas estejam diferentes
   	 		else {
   	 			//Indicando ao usuário que as senhas não estão iguais
   				$_SESSION['msg_senhas_incompativeis'] = '<p>As senhas não conferem</p>';
   				//Redirecionando o usuário a página de atualizar_senha_usuario_setor
   				header("Location: atualizar_senha_usuario_setor?id=$id_usuario.php");
   	 		}
   	 	}
   	 	//Caso o usuário não tenha preenchido o campo de confirmação de senha
   	 	else {
   	 		//Indicando ao usuário que o campo confirmar nova senha deve ser preenchido
   			$_SESSION['msg_inserir_conf_senha'] = '<p>Preencha o campo "CONFIRMAR NOVA SENHA"</p>';
   			//Redirecionando o usuário a página de atualizar_senha_usuario_setor
   			header("Location: atualizar_senha_usuario_setor?id=$id_usuario.php");
   	 	}
   	}
   	//Caso o usuário não tenha inserido campo senha
   	else {
   		//Indicando ao usuário que o campo nova senha deve ser preenchido
   		$_SESSION['msg_inserir_senha'] = '<p>Preencha o campo "NOVA SENHA"</p>';
   		//Redirecionando o usuário a página de atualizar_senha_usuario_setor
   		header("Location: atualizar_senha_usuario_setor?id=$id_usuario.php");
   	} 
   
   
   ?>
