<?php
    // DEFININDO O FUSO HORÁRIO:
    date_default_timezone_set('America/Sao_Paulo');
    
    // CONEXÃO COM A BASE DE DADOS: verifique sempre o dbname
    try{
        $pdo = new PDO("mysql:dbname=aplicativo;host=localhost;charset=utf8","root","");
    }
    catch(PDOException $erro)
    {
        echo("ERRO NA CONEXÃO: <br>".$erro->getMessage());
    }

    //parte da avaliação S2
    $servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "aplicativo";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

?>