
<body>
    <br><br><br>
    <div>
        <br>
        <h1>Abrir uma Solicitação</h1>
        <br>

        <form action="./verificar_solicitacao.php" method="post">
            <div>
                <!-- Nome do solicitante -->
                <input type="text" name="nome" placeholder=" " required>
                <label> Nome: </label>
            </div>

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
            
            <div>
                <input type="text" name="recepcao" placeholder=" " required>
                <label> Recepção: </label>
            </div>

            <div>
                <input type="text" name="problema" placeholder=" " required>
                <label> Problema: </label>
            </div>

            <div>
                <input type="time" name="horario" placeholder=" " required>
                <label> Horário: </label>
            </div>

            <div>
                <input type="text" name="protocolo" placeholder=" " required>
                <label> Protocolo: </label>
            </div>

            <div>
                <input type="text" name="contato" placeholder=" " required>
                <label> Contato: </label>
            </div>

            <div>
                <input type="date" name="data" placeholder=" " required>
                <label> Data: </label>
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>