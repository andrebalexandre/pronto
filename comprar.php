<?php
    $Id_produtos = $_GET["Id_produtos"];
    $quantidade      = $_GET["quantidade"];
    include("conecta.php");
    

    $comando = $pdo->prepare("INSERT INTO carrinho Values($Id_produtos, $quantidade)");
    $resultado = $comando->execute();
    //para voltar no formulário:
    header("location: carrinho.php");
    ?>