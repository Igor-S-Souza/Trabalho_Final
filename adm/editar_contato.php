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
               $seleciona=mysqli_query($funciona, "SELECT * FROM contatos WHERE  id = '$id' ");
                     while($campo=mysqli_fetch_array($seleciona)){?>
               <!-- Formulário de cadastro -->
         <form action="editando_contato.php" method="POST">
             <input type="hidden" name="id" value="<?php echo $campo['id']; //Armazenando a identificação do usuário ?>">
               
               <div >
                     <!-- preencher com o nome do solicitante -->
                     <input type="text" name="nome" placeholder=" "  value="<?php echo $campo['entidade'] ?>" required >  
                     <label> Nome: </label>
                  </div>
                  <br>
                  <div>
                     <!-- Selecionando o setor -->
                     <select name="setor" >
                     <optgroup>
                     <option >Selecione o acesso</option>
                     </optgroup>
                     <optgroup label="tipo de acesso">
                     <option >Tecnico</option>
                     <option >Gestor</option>
                     <option >Telefonista</option>
                     </optgroup>
                     </select>
                     <label >Setor</label>
                     </div>
                     <br>
                     <div >
                        <input type="email" name="email" placeholder=" " value="<?php echo $campo['email'] ?>">
                        <label> E-mail: </label>
                     </div>
                     <br>
                     <div>
                        <!-- contato -->
                        <input type="text" maxlength="15" name="contato" placeholder=" " value="<?php echo $campo['contato'] ?>">  
                        <label> Contato: </label>
                     </div>
                     <br>
                     <br>
                     <div >
                     <!-- confirmar senha -->
                     <input type="text" name="observacao" placeholder=" "  value="<?php echo $campo['observacao'] ?>">
                     <label> Observação:</label>
                     </div>
                  <br>
                        <!-- enviar -->
                        <button type="submit">CADASTRAR</button>
                     </td>
                  </form>
               <?php } ?>
            </center>