<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="website icon " type="png"
  href="img/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="minhaconta.css">
</head>
<body>
    <div class="principal">
    <header id="header">
        <a id="logo" href="salgados.html"><img src="img/seta.png" width="20px"></a>
        <nav id="nav">
          <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
            <span id="hamburger"></span>
          </button>
          <ul id="menu" role="menu">
            <li><a href="minhaconta.php">Minha Conta</a></li>
            <li><a href="principal.html">Produtos</a></li>
            <li><a href="sobrenos.html">Sobre nós</a></li>
            <li><a href="carrinho.html">Carrinho</a></li>
            <li><a href="fale_conosco.html">Fale conosco</a></li>
          </ul>
        </nav>
      </header>
      <script src="js/script.js"></script>
    </div>
    <div class="div2">
        <div class="barra">
            
            <img src="img/logo.png" width="120px" class="logo">
            <img src="img/titulo1.png" width="180px" class="titulo">
        </div>
    </div>
    <div class="div3">
     <?php
        include ("conecta.php");
        $logado = $_SESSION["logado"];
        $admin = $_SESSION["admin"];
        if( $admin == "s")
        {
          $comando = $pdo->prepare("SELECT * FROM cadastro ");
        }
        else
        {
          $comando = $pdo->prepare("SELECT * FROM cadastro where Email = '$logado'");
        }
       
        $resultado = $comando->execute();
        
        while( $linhas = $comando->fetch()){
        $email = $linhas["Email"];
        $senha      = $linhas["Senha"];
        $nome    = $linhas["Nome"];
        $telefone    = $linhas["Telefone"];
        $data    = $linhas["Data"];
        $cep     = $linhas["Cep"];
        $rua     =$linhas["Rua"];
        $bairro     = $linhas["Bairro"];
        $numero    = $linhas["Numero"];
        $estado   = $linhas["Estado"];
        $complemento    = $linhas["Complemento"];

        echo("
        <div class='dados1'>
            Perfil
        </div>
      <br> 
        <div class='dados'>
            Email: $email
        </div>
      <br>
        <div class='dados'>
            Senha: $senha
        </div>
       <br>
       <div class='dados'>
            Nome: $nome
        </div>
        <br>
       <div class='dados'>
            Telefone: $telefone
        </div>
       <br>
       <div class='dados'>
            Data: $data
        </div>
       <br>
        <div class='dados'>
            Cep: $cep
        </div>
       <br>
       <div class='dados'>
            Rua: $rua
        </div>
       <br>
       <div class='dados'>
            Bairro: $bairro
        </div>
       <br>
       <div class='dados'>
            Número: $numero
        </div>
       <br>
        
       <div class='dados'>
            Estado: $estado
        </div>
       <br>
       <div class='dados'>
            Complemento: $complemento
        </div>
       <br>
        ");
      }        
      ?>
          
  
     
    </div>
</body>
</html>