<?php 
include('../banco/Banco.php');

session_start();

//Recebendo e armazenando os dados inseridos pelo usuário
	$nome = $_POST['nome'];
	$setor = $_POST['setor'];
	$email =$_POST['email'];
	$contato = $_POST['contato'];
	$login = $_POST['login'];
	$senha = $_POST['senha_cadastro'];
	$senha_conf = $_POST['conf_senha_cadastro'];

if (isset($_POST['nome'])) {
		//Verificando se o campo setor foi selecionado
		if ($setor == "Selecione o setor do usuário") {
			//Mensagem indicando que o campo setor deve ser selecionado
			$_SESSION['msg_erro_setor'] = "<p>Selecione o setor do usuário</p>";
			//Redirecionando o usuário a página de cadastro
			header("Location: cadastrando_usuario.php");
		}
		//Caso o campo setor não tenha sido selecionado
		else {
			//Verificando se o usuário preencheu o campo email
			if (isset($_POST['email'])) {
				//Verificando se o usuário preencheu o campo contato
				if (isset($_POST['contato'])) {
					//Verificando se o campo login foi preenchido
					if (isset($_POST['login'])) {
						//Verificando se o campo senha foi preenchido
						if (isset($_POST['senha_cadastro'])) {
							//Verificando se o campo confirmação de senha foi preenchido
							if (isset($_POST['conf_senha_cadastro'])) {
								//Verificando se o mesmo nome de login já não está em uso
							    $verificando_login = mysqli_query($funciona, "SELECT * FROM usuario_por_setor WHERE login = '$login' ");
							    $login_verificado = mysqli_num_rows($verificando_login);
							    if ($login_verificado == "0") {
							    	//Verificando se o mesmo nome já não existe no banco de dados
							    	$verificando_nome = mysqli_query($funciona, "SELECT * FROM usuario_por_setor WHERE nome = '$nome' ");
							    	$nome_verificado = mysqli_num_rows($verificando_nome);
							    	if ($nome_verificado == "0") {

							    		//Verificando se senha e confirmação de senha estão iguais
								      	if ($senha == $senha_conf) {
											//Inserido o novo usuário no banco de dados
										$cadastrando_usuario ="INSERT INTO usuario_por_setor(contato, senha, login, nome, setor, email) VALUES ('$contato','$senha_conf','$login', '$nome', '$setor', '$email' )";
										$resultado = mysqli_query($funciona, $cadastrando_usuario );
										//Verificando se o usuário foi cadastrado
				            				if (isset($cadastrando_usuario)) {
				            					//Mensagem de sucesso
				            					$_SESSION['msg_usuario_cadastrado'] = "<p>Usuário cadastrado com sucesso!</p>";
				            					//Redirecionando o usuário a página de cadastro
												header("Location: cadastrando_usuario.php");
				            				}
				            				//Caso o usuário não seja cadastrado
				            				else {
				            					//Mensagem de erro ao cadastrar usuário
												$_SESSION['msg_usuario_nao_cadastrado'] = "<p>Usuário não cadastrado</p>";
												//Redirecionando o usuário a página de cadastro
												header("Location: cadastrando_usuario.php");
				            				}
										}
										//Caso senha e confirmação de senha estejam diferentes
										else {
											//Mensagem indicando que as senhas estão diferentes
											$_SESSION['msg_senhas_diferentes'] = "<p>As senhas não conferem</p>";
											//Redirecionando o usuário a página de cadastro
											header("Location: cadastrando_usuario.php");
										}
								    }
								    //Caso o nome já exista no banco de dados
								    else {
								    	//Mensagem indicando que o login inserido já existe
										$_SESSION['msg_erro_nome_existente'] = "<p>Este nome já esta sendo usado por outro usuário. <br> Insira um outro sobrenome para que se evite erro na utilização do sistema.</p>";
										//Redirecionando o usuário a página de cadastro
										header("Location: cadastrando_usuario.php");
								    }
								}
								//Caso o login já esteja em uso
								else {
									//Mensagem indicando que o login inserido já existe
									$_SESSION['msg_erro_login_existente'] = "<p>Login já existente, insira um login diferente</p>";
									//Redirecionando o usuário a página de cadastro
									header("Location: cadastrando_usuario.php");
								}
							}
							//Caso o campo senha não tenha sido preenchido
							else {
								//Mensagem indicando que o campo confirmação de senha deve ser preenchido
								$_SESSION['msg_erro_conf_senha'] = "<p>Confirme a senha</p>";
								//Redirecionando o usuário a página de cadastro
								header("Location: cadastrando_usuario.php");
							}
						}
						//Caso o campo senha não tenha sido preenchido 
						else {
							//Mensagem indicando que o campo senha deve ser preenchido 
							$_SESSION['msg_erro_senha'] = "<p>Insira a senha do usuário</p>";
							//Redirecionando o usuário a página de cadastro
							header("Location: cadastrando_usuario.php");
						}
					}
					//Caso o campo login não tenha sido preenchido 
					else {
						//Mensagem indicando que o campo login deve ser preenchido
						$_SESSION['msg_erro_login'] = "<p>Insira o login do usuário</p>";
						//Redirecionando o usuário a página de cadastro
						header("Location: cadastrando_usuario.php");
					}
				}
				else {
					//Mensagem indicando que o campo contato deve ser preenchido
					$_SESSION['msg_erro_contato'] = "<p>Insira o contato do usuário</p>";
					//Redirecionando o usuário a página de cadastro
					header("Location: cadastrando_usuario.php");
				}
			}
			else {
				//Mensagem indicando que o campo email deve ser preenchido
				$_SESSION['msg_erro_email'] = "<p>Insira o email do usuário</p>";
				//Redirecionando o usuário a página de cadastro
				header("Location: cadastrando_usuario.php");
			}
		}
	}
	//Caso o campo nome não tenha sido preenchido
	else {
		//Mensagem indicando o campo nome deve ser preenchido
		$_SESSION['msg_erro_nome'] = "<p>Insira o nome do usuário</p>";
		//Redirecionando o usuário a página de cadastro
		header("Location: cadastrando_usuario.php");
	}
 ?>