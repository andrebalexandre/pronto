<?php
 include("conecta.php");
 $id_produto = $_GET["id"];

 $comando = $pdo->prepare("DELETE FROM carrinho where id_produto = $id_produto");
    $resultado = $comando->execute();
    //para voltar no formulário:
     header("location: carrinho.php"); 
?>