<?php
 include("conecta.php");
 $Id_produtos = $_GET["Id_produtos"];

 $comando = $pdo->prepare("DELETE FROM carrinho WHERE Id_produtos = $Id_produtos");
    $resultado = $comando->execute();
    //para voltar no formulário:
     header("location: carrinho.php"); 
?>