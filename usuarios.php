<?php include('Banco.php'); ?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<a href="cadastrando_usuario.php">Cadastrar usuario</a>
<br>
<br>
<br>
<center>
<table border="1">
	<tr>
	    <td  >
	       <strong>
	          <center>Nome</center>
	       </strong>
	    </td>
	    <td  >
	       <strong>
	          <center>Setor</center>
	       </strong>
	    </td>
	    <td >
	       <strong>
	          <center>Login</center>
	       </strong>
	    </td>
	    <td  >
	       <strong>
	          <center>EDITAR</center>
	       </strong>
	    </td>
	    <td  >
	       <strong>
	          <center>EXCLUIR</center>
	       </strong>
	    </td>
	    <td >
	       <strong>
	          <center>Atualizar senha</center>
	       </strong>
	    </td>
	</tr>
	<?php 
        //Selecionando usuários no banco de dados tabela usuarios em ordem crescente  
        $seleciona=mysqli_query($funciona, "SELECT * FROM teste ORDER BY nome ASC");
        while($campo=mysqli_fetch_array($seleciona)){
           $id = $campo['id'];
        ?>
     <tr>
        <td >
           <center>
              <p><?=$campo['nome']?> </p>
           </center>
        </td>
        <td >
           <center>
              <p><?=$campo['setor']?> </p>
           </center>
        </td>
        <td >
           <center>
              <p><?=$campo['login']?> </p>
           </center>
        </td>
     </tr>
 <?php } ?>
</table>
</center>
</body>
</html>