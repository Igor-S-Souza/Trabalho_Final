<?php 
	//Conexão com o banco de dados v1
	// $funciona = mysqli_connect("localhost", "root", "", "trabalho_final");

	#region Conexão com o banco
    $user = 'root';
    $pass = 'wyl0w_mar&__2021';
    $db = 'trabalho_final';

    $funciona = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to database.");

    echo "A conexão está funcionando! ";
    #endregion

?>