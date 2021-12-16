<?php
    include("./banco/Banco.php");

    session_start();

    $nome = $_POST['nome'];
	$setor = $_POST['setor'];
    $recepcao = $_POST['recepcao'];
    $problema = $_POST['problema'];
    $horario = $_POST['horario'];
    $protocolo = $_POST['protocolo'];
    $contato = $_POST['contato'];
    $data = $_POST['data'];


    //  Estou verificando mas não está inserindo no banco esses dados
    $cadastrar_solic = "INSERT INTO solicitacao(nome, setor, recepcao, problema, horario, protocolo, contato, data1) VALUES('$nome', '$setor', '$recepcao', '$problema', '$horario', '$protocolo', '$contato', '$data1');";
    $resultado = mysqli_query($funciona, $cadastrar_solic);

    echo "Informações inseridas com sucesso!";
    header("Location: abrir_solicitacao.php");
?>
