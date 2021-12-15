<?php 
   include('../dados_usuario/dados_user.php');
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
               <h1> Cadastro de usuário</h1>
               <br>
              
               <!-- Formulário de cadastro -->
               <form action="verificacao_cadastro_usuario.php" method="POST">

                  <div >
                     <!-- preencher com o nome do solicitante -->
                     <input type="text" name="nome" placeholder=" " required>  
                     <label> Nome: </label>
                  </div>
                  <br>
                  <div>
                     <!-- Selecionando o setor -->
                     <select name="setor" required="required">
                     <optgroup>
                     <option>Selecione o acesso</option>
                     </optgroup>
                     <optgroup label="tipo de acesso">
                     <option >Tecnico</option>
                     <option >Gestor</option>
                     <option >Telefonista</option>
                     </optgroup>
                     </select>
                     <label >Setor</label>
                     </div>
                     <div >
                        <input type="email" name="email" placeholder=" " required>
                        <label> E-mail: </label>
                     </div>
                     <br>
                     <div>
                        <!-- contato -->
                        <input type="text" maxlength="15" name="contato" placeholder=" " required>  
                        <label> Contato: </label>
                     </div>
                     <br>
                     <div >
                        <!-- login -->
                        <input type="text" name="login" placeholder=" " required>   
                        <label>Login: nome-sobrenome</label>
                     </div>
                  <br>
                     <div >
                        <!-- senha -->
                        <input type="password" name="senha_cadastro" placeholder=" " required>
                        <label> Senha: EX: 1234567</label>
                     </div>
                     <br>
                     <div >
                     <!-- confirmar senha -->
                     <input type="password" name="conf_senha_cadastro" placeholder=" " required>
                     <label> Confirmar senha:</label>
                     
                  </div>
                  <br>
                        <!-- enviar -->
                        <button type="submit">CADASTRAR</button>
                     </td>
                     <br>
                     <br>
                  </tr>
               </form>
            </center>