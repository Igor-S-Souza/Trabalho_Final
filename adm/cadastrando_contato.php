<?php 
   include('../dados_usuario/dados_user.php');
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
               <h1> Cadastro de usuário</h1>
               <br>
              
               <!-- Formulário de cadastro -->
               <form action="verificacao_cadastro_contato.php" method="POST">

                  <div >
                     <!-- preencher com o nome do solicitante -->
                     <input type="text" name="nome" placeholder=" " required>  
                     <label> Nome: </label>
                  </div>
                  <br>
                  <div>
                     <!-- Selecionando o setor -->
                     <select name="setor">
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
                     <br>
                     <div >
                        <input type="email" name="email" placeholder=" ">
                        <label> E-mail: </label>
                     </div>
                     <br>
                     <div>
                        <!-- contato -->
                        <input type="text" maxlength="15" name="contato" placeholder=" ">  
                        <label> Contato: </label>
                     </div>
                     <br>
                     <br>
                     <div >
                     <!-- confirmar senha -->
                     <input type="text" name="observacao" placeholder=" " >
                     <label> Observação:</label>
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