<?php
   //Iniciando uma sessão 
   session_start();
   
   //Finalizando as sessões do usuário
   unset($_SESSION['id_do_usuario'],
   	$_SESSION['nome_do_usuario'],
      $_SESSION['login_do_usuario'],
   	$_SESSION['senha_do_usuario']
   );
   
   //Redirecionar o usuario para a página de login
   //Mensagem de saída
   $_SESSION['msg_de_saida'] = "<p>Até logo!</p>";
   header("Location: index.php");
?>