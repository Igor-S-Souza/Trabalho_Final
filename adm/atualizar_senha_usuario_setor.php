   <?php

   include('../banco/Banco.php');

   include('../dados_usuario/dados_user.php');

   //Recebendo e armazenando a identificação do usuário
      $id = intval($_GET['id']);
      
      $seleciona=mysqli_query($funciona, "SELECT * FROM usuario_por_setor WHERE id='$id' ");
         while($campo=mysqli_fetch_array($seleciona)){
            $id_bd = $campo['id'];
            $nome = $campo['nome'];
      ?>
   <body >
      <br>
      <br>
      <br>
      <br>
      <center>
         <form method="POST" action="atualizando_senha_usuario.php">
            <h1>Atualizando senha - <?php echo $nome; ?></h1>
            <input type="hidden" name="id_usuario" value="<?php echo $id_bd; ?>">
            <br>
            <p>
              
            </p>
            <br>
            <!-- Login do usuáio (e-mail) -->
            <input type="password" name="senha" placeholder="NOVA SENHA" required>
            <br>
            <br>
            <!-- Senha -->
            <input type="password" name="conf_senha" placeholder="CONFIRMAR NOVA SENHA" required>
            <br>
            <br>
            <button name="menu2" type="submit" name="atualizar">ATUALIZAR</button>
            <br>
         </form>
      </center>
      <?php 
         }
      ?>
      <br>
      <br>