<?php
include("conecta.php"); // conectar com banco de dados

$comando = $pdo->prepare("SELECT produtos.Id_produtos, produtos.nome, produtos.preco, produtos.imagem, carrinho.quantidade FROM produtos INNER JOIN carrinho WHERE produtos.Id_produtos = carrinho.Id_produtos; FROM produtos INNER JOIN carrinho WHERE produtos.quantidade = carrinho.quantidade" );
$resultado = $comando->execute();



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="website icon " type="png"
  href="img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="carrinho.css">
    <link rel="stylesheet" href="./style.css">
    <script src="js/carrinho.js"></script>


</head>
<body>
    <div class="principal">
        <header id="header">
            <a id="logo" onclick="voltar()"><img src="img/seta.png" width="20px"></a>
            <nav id="nav">
              <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
                <span id="hamburger"></span>
              </button>
              <ul id="menu" role="menu">
                <li><a href="minhaconta.php">Minha Conta</a></li>
                <li><a href="principal.html">Produtos</a></li>
                <li><a href="sobrenos.html">Sobre nós</a></li>
                <li><a href="carrinho.html">Carrinho</a></li>
                <li><a href="fale_conosco1.html">Fale conosco</a></li>
              </ul>
            </nav>
          </header>
          <script src="js/script.js"></script>
        </div>

        <div class="div2">
            <div class="barra">
                
                <img src="img/logo.png" width="110px" class="logo">
                <img src="img/titulo1.png" width="190px" class="titulo">
            </div>
        </div>

        <div class="carrinho">

            <div class="esquerda">
                MEU CARRINHO
            </div>
           
            <div class="direita">
                <img src="img/carro1.png" width="100px" class="carro">
            </div>
           
        </div>
        <div class="y">
 
        <?php
            while ( $linhas = $comando->fetch() )
            {
                $Id_produtos = $linhas ["Id_produtos"];
                $Nome = $linhas ["nome"];
                $imagem = $linhas ["imagem"];
                $imagem=base64_encode($imagem);
                $preco = $linhas ["preco"];
                $quantidade = $linhas ["quantidade"];
                $subtotal = $preco * $quantidade;
                $total += $subtotal;
                
                echo("
      <!-- Seu código HTML para exibir os itens do carrinho -->
      <div class=\"tudo\" id=\"tudo\">
        <div class=\"fild\">
          <img class=\"imagem\" src=\"data:image/jpeg;base64,$imagem\" width='50px'>
        </div>
        <div class=\"nome\">
          <b>$Nome</b>
          <br>
          <b>R$ $preco</b>
        </div>
        <div class=\"ult\">
          <div class=\"preencher\">
            <img onclick=\"Fechar('tudo');\" class=\"fechar\" src='img/x.png' width=\"20px\">
          </div>
          <div class=\"quantidade\">
            <fieldset class=\"geral\">
              <button onclick=\"Subtrair($Id_produtos); calcularTotal();\" class=\"menos\"> <b>-</b> </button>
              <input class=\"numero quantidade-produto\" value=\"$quantidade\" id=\"numero_$Id_produtos\" type=\"number\" data-preco=\"$preco\" onchange=\"calcularTotal();\">
              <button onclick=\"Adicionar($Id_produtos); calcularTotal();\" class=\"mais\"><b>+</b></button>
            </fieldset>
          </div>
          <div class=\"botao\">  </div>
        </div>
      </div>
      ");
    }
        ?>
 </div>
<fieldset class="teste1">
<div class="total"></div>
<a href="pg_pagamentos.html"> <button  class="comprar">COMPRAR</button> </a>
         </fieldset>
</body>
</html>