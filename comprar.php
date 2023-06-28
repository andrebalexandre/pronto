<?php
    $id_carrinho = $_GET["Id_carrinho"];
    $quantidade      = $_GET["quantidade"];
    include("conecta.php");
    
// email vem cadastro e id do produto q vem do produtos

    $comando = $pdo->prepare("INSERT INTO carrinho Values(' ',$quantidade,)  ");
    $resultado = $comando->execute();
    //para voltar no formulário:
    header("location: carrinho.php");
    ?>