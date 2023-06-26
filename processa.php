<?php
session_start();
include_once("conexao.php");

if(!empty($_POST['estrela'])){
	//$logado = $_SESSION["logado"];
	$estrela = $_POST['estrela'];
	
	//Salvar no banco de dados
	//$comando = $pdo->prepare("SELECT * FROM cadastro where Email = '$logado'");
	$resultado_avaliacao = " INSERT INTO avaliacao (qnt_estrela, created) VALUES ('$estrela' , NOW())" ;

	$resultado_avaliacao = mysqli_query($conn, $resultado_avaliacao);
	
	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "Avaliação cadastrada com sucesso";
		header("Location: entrega.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar a avaliação";
		header("Location: entrega.php");
	}
	
}else{
	$_SESSION['msg'] = "Necessário selecionar pelo menos 1 estrela";
	header("Location: entrega.php");
}