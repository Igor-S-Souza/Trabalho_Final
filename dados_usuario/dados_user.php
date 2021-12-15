<?php 
   //Iniciando a sessão
   session_start();
   
   //Verificando se há um  usuário iniciado
   //Verificando a identificação do usuário
	if (isset($_SESSION['id_do_usuario'])) {
		//Verificando o nome do usuário
		if (isset($_SESSION['nome_do_usuario'])) {
			//Verificando o login do usuário
			if (isset($_SESSION['login_do_usuario'])) {
				//Verificando a senha do usuário
				if (isset($_SESSION['senha_do_usuario'])) {
					
				}
				//Caso não tenha uma senha iniciada
				else {
					header("Location: ../index.php");
				}
			}
			//Caso não tenha um login iniciado
			else {
				header("Location: ../index.php");
			}
		}
		//Caso não tenha um nome de usuário iniciado
		else {
			header("Location: ../index.php");
		}
	}
   //Caso não tenha uma identificação iniciada
   else {
      header("Location: ../index.php");
   }
   
?>