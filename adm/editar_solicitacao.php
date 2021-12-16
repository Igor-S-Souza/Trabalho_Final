 <?php 
      include('../banco/Banco.php');

      include('../dados_usuario/dados_user.php');
 
      //Armazenando e recebendo a identificação do usuário
      $id = intval($_GET['id']);
    ?>
    <head>
       <link rel="stylesheet" href="../css/estilo.css">
    </head>
<body>
      <br>
      <br>
      <br>
      <center>
         <div>
            <center>
               <br>
            </center>
            <center>
               <!-- Nome da página  -->
               <h1> Alterando usuário</h1>
               <br>
               <?php                   
               //Selecionando o usuario do banco de dados na tabela usuarios
               $seleciona=mysqli_query($funciona, "SELECT * FROM solicitacao WHERE  id_solicitacao = '$id' ");
                     while($campo=mysqli_fetch_array($seleciona)){?>
               <!-- Formulário de cadastro -->
         <form action="editando_solicitacao.php" method="POST">
             <input type="hidden" name="id" value="<?php echo $campo['id']; //Armazenando a identificação do usuário ?>">
               
                  <div>
                     <input value="<?php echo $campo['nome']; //Apresentando o nome do usuário ?> ">Nome do Usuario</label>
                     </div>
                  <br>
                  <div>
                     <!-- Selecionando o setor -->
                     <select name="setor" required="required">
                     <optgroup>
                     <option><?php echo $campo['setor']; //Apresentando o setor do solicitante em questão ?></option>
                     </optgroup>
                     <optgroup label="tipo de acesso">
                     <option >Tecnico</option>
                     <option >Gestor</option>
                     <option >Telefonista</option>
                     </optgroup>
                     </select>
                     </div>  
                     <input type="text" name="problema" value="<?php echo $campo['problema']; ?>">
                        <br>
                     <div>
                     <div>
                     <br>
                        <button type="submit">
                           Alterar
                        </button>
                  </form>
               <?php } ?>
            </center>