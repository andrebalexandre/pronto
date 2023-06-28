<?php
    $id_produtos = $_GET["Id_produtos"];
    $quantidade      = $_GET["quantidade"];
    include("conecta.php");
    
// email vem cadastro e id do produto q vem do produtos

    $comando = $pdo->prepare("INSERT INTO carrinho Values('$id_produtos', $quantidade)");
    $resultado = $comando->execute();
    //para voltar no formulário:
    header("location: carrinho.php");
    ?>