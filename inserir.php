<?php
    $email = $_POST["Email"];
    $senha      = $_POST["Senha"];
    $nome    = $_POST["Nome"];
    $telefone    = $_POST["Telefone"];
    $data    = $_POST["Data"];
    $cep     = $_POST["Cep"];
    $rua     = $_POST["Rua"];
    $bairro     = $_POST["Bairro"];
    $numero    = $_POST["Numero"];
    $estado   = $_POST["Estado"];
    $complemento    = $_POST["Complemento"];
    include("conecta.php");
    
    //se clicou no botão Inserir:
    if(isset($_POST["inserir"]) )
    {

    $comando = $pdo->prepare("INSERT INTO cadastro Values('$email','$senha','$nome','$telefone','$data', $cep,'$rua','$bairro',$numero,'$estado','$complemento','n')");
    $resultado = $comando->execute();
    //para voltar no formulário:
    header("location: pglogin1.html");
    }
    ?>