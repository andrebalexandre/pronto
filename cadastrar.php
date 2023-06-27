<?php
    $Id_produtos = $_POST["id"];
    $nome      = $_POST["nome"];
    $imagem = file_get_contents($_FILES["imagem"]["name"]);
    $preco    = $_POST["preco"];
    $categoria    = $_POST["categoria"];
    
    include("conecta.php");
    
    //se clicou no botão Inserir:
    if(isset($_POST["inserir"]) )
    {

    $comando = $pdo->prepare("INSERT INTO produtos(Id_produtos, nome, imagem, preco, categoria) Values('$Id_produtos','$nome','$imagem','$preco', '$categoria')");
    $comando->bindParam(":imagem", $imagem, PDO::PARAM_LOB);
    $resultado = $comando->execute();
    //para voltar no formulário:
    header("location: cadastrarprodutos.html", "_self");
    }
    ?>