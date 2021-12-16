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
	<a href="cadastrando_contato.php">Novo contato</a>
	<a href="menu.php">Pagina inicial</a>
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
	          <center>Contato</center>
	       </strong>
	    </td>
	    <td >
	       <strong>
	          <center>Email</center>
	       </strong>
	    </td>
	    <td >
	       <strong>
	          <center>Observação</center>
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
        $seleciona=mysqli_query($funciona, "SELECT * FROM contatos ORDER BY id ASC");
        while($campo=mysqli_fetch_array($seleciona)){
           $id = $campo['id'];
        ?>
     <tr>
        <td >
           <center>
              <p><?=$campo['entidade']?> </p>
           </center>
        </td>
        <td >
           <center>
              <p><?=$campo['contato']?> </p>
           </center>
        </td>
        <td >
           <center>
              <p><?=$campo['email']?> </p>
           </center>
        </td>
        <td >
           <center>
              <p><?=$campo['observacao']?> </p>
           </center>
        </td>
        <td class="corpotabela excluir">
            <center>
               <!-- botão editar -->
               <div>
                  <a href="editar_contato.php?id=<?php echo $id //Enviando a identificação do usuário para a página de edição de usuário (editar_user.php) ?>">editar
                  </a>
               </div>
            </center>
         </td>
         <td >
            <center>
               <!-- botão excluir -->
               <div>
                  <a href="excluir_contato.php?id=<?php echo $id; //Enviando a identificação do usuário para a página de exclusão de usuáro (conf_excluir_user.php) ?>">excluir
                  </a>
               </div>
            </center>
         </td>
      </tr>
 <?php } ?>
</table>
</center>
</body>
</html>