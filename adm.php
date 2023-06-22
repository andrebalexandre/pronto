<?php
    $Id_produtos = $_POST["id"];
    $nome      = $_POST["nome"];
    $imagem    = $_POST["imagem"];
    $preco    = $_POST["preco"];
    include("conecta.php");
    
    //se clicou no botão Inserir:
    if(isset($_POST["inserir"]) )
    {

    $comando = $pdo->prepare("INSERT INTO produtos Values('$Id_produtos','$nome','$imagem','$preco')");
    $resultado = $comando->execute();
    //para voltar no formulário:
    header("location: adm.html", "_self");
    }
    ?>