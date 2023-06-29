<?php
    $Id_produtos = $_POST["id"];
    $nome      = $_POST["nome"];
    $imagem = $_POST["imagem"];
    $preco    = $_POST["preco"];
    $categoria    = $_POST["categoria"];
    
    include("conecta.php");
    
    //se clicou no botão Inserir:
    if(isset($_POST["inserir"]) )
    {

    $comando = $pdo->prepare("INSERT INTO produtos(Id_produtos, nome, imagem, preco, categoria) Values('$Id_produtos','$nome','$imagem','$preco', '$categoria')");
    $resultado = $comando->execute();
    //para voltar no formulário:
    header("location: cadastrarprodutos.html", "_self");
    }
    ?>