<?php 

include('../banco/Banco.php'); 


include('../dados_usuario/dados_user.php');

?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
   <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
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
	          <center>Solicitação</center>
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
	</tr>
	<?php 
        //Selecionando usuários no banco de dados tabela usuarios em ordem crescente  
        $seleciona=mysqli_query($funciona, "SELECT * FROM solicitacao ORDER BY id_solicitacao ASC");
        while($campo=mysqli_fetch_array($seleciona)){
           $id = $campo['id_solicitacao'];
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
        <td class="corpotabela excluir">
            <center>
               <!-- botão editar -->
               <div>
                  <a href="editar_user_setor.php?id=<?php echo $id //Enviando a identificação do usuário para a página de edição de usuário (editar_user.php) ?>">editar
                  </a>
               </div>
            </center>
         </td>
         <td >
            <center>
               <!-- botão excluir -->
               <div>
                  <a href="conf_excluir_user_setor.php?id=<?php echo $id; //Enviando a identificação do usuário para a página de exclusão de usuáro (conf_excluir_user.php) ?>">excluir
                  </a>
               </div>
            </center>
         </td>
         <td>
            <center>
               <a href="atualizar_senha_usuario_setor.php?id=<?php echo $id; ?>">Atualizar senha</a>
            </center>
         </td>
      </tr>
 <?php } ?>
</table>
</center>
</body>
</html>