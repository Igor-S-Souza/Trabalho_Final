 <?php 
      include('../banco/Banco.php');

      //Armazenando e recebendo a identificação do usuário
      $id = intval($_GET['id']);
    ?>
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
               $seleciona=mysqli_query($funciona, "SELECT * FROM usuario_por_setor WHERE  id = '$id' ");
                     while($campo=mysqli_fetch_array($seleciona)){?>
               <!-- Formulário de cadastro -->
         <form action="editando_usuario.php" method="POST">
             <input type="hidden" name="id" value="<?php echo $campo['id']; //Armazenando a identificação do usuário ?>">
               
               <div>
                     <label>Nome do Usuario</label>
                     <p> <?php echo $campo['nome']; //Apresentando o nome do usuário ?> </p>
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
                    
                     <input placeholder=" " type="email" name="email" value="<?php echo $campo['email']; //Apresentando o email do usuário ?>" required>
                     <label>Email</label>
                     </div>   
                        <br>
                     <div>
                        <input placeholder=" " required required name="contato" value="<?php echo($campo['contato']); ?>"> 
                        <label>Contato do Usuarios</label>
                     </div>
                    
                     <div>
                     <label>Login</label>
                     <p> <?php echo $campo['login']; //Apresentando o login do usuário ?> </p>
                     <br>
                     <br>
                        <button type="submit">
                           Alterar
                        </button>
                  </form>
               <?php } ?>
            </center>