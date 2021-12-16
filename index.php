<?php 
 include ('dados_usuario/dados_user.php');
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="macacada">
	<form  method="POST" action="direcionando.php">
	<input  type="text" name="login"  placeholder="login" required>
	<label>Login:  </label>
	<br><br>
	<input  type="password"  placeholder="senha " name="senha" required>
	<label>senha: </label>
	<br><br>
	<input type="submit" value="ACESSAR" >
	</form>
</div>
</body>
</html>