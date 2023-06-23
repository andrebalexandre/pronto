<?php
include("conecta.php"); // conectar com banco de dados

$comando = $pdo->prepare("SELECT produtos.Id_produtos, produtos.nome, produtos.preco, produtos.imagem FROM produtos INNER JOIN carrinho WHERE produtos.Id_produtos = carrinho.Id_produtos" );
$resultado = $comando->execute();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="carrinho.css">
    <link rel="stylesheet" href="./style.css">
    <script src="carrinho.js"></script>


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
                <li><a href="/">Minha Conta</a></li>
                <li><a href="principal.html">Produtos</a></li>
                <li><a href="">Sobre nós</a></li>
                <li><a href="/carrinho.html">Carrinho</a></li>
                <li><a href="/fale_conosco1.html">Fale conosco</a></li>
              </ul>
            </nav>
          </header>
          <script src="./script.js"></script>
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
        <?php
            while ( $linhas = $comando->fetch() )
            {
                $id = $linhas ["Id_produtos"];
                $Nome = $linhas ["nome"];
                $imagem = $linhas ["imagem"];
                $imagem=base64_encode($imagem);
                $preco = $linhas ["preco"];
                echo("
                <div class=\"tudo\" id=\"tudo\">

            <div class=\"fild\">
              <img src=\"data:image/jpeg;base64,$imagem\" width='50px'>
            </div>

            <div class=\"nome\">
               <b>$Nome</b>
                <br> <br>
                <b>R$ $preco</b>
            </div>

            <div class=\"ult\">

                 <div class=\"preencher\">
                    <img onclick=\"Fechar('tudo');\" class=\"fechar\" src='' width=\"30px\">
                 </div>

                 <div class=\"quantidade\">
                    <fieldset class=\"geral\">
                        <button onclick=\"Subtrair();\" class=\"menos\"> <b>-</b> </button>
                        <input class=\"numero\" value=\"1\" id=\"numero\" type=\"number\">
                        <button onclick=\"Adicionar();\" class=\"mais\"><b>+</b></button>
                    </fieldset>
                 </div>
                 <div class=\"botao\">  </div>
            </div>
        </div>
                ");
            }
        ?>

<fieldset class="teste1">
           <a href="pg_pagamentos.html"> <button  class="teste">COMPRAR</button> </a>
         </fieldset>

        <script>
            function Adicionar()
            {
                numero.value=parseInt(numero.value)+1
               
            }

            function Subtrair()
            {
                if(numero.value >1)
                {
                    numero.value=parseInt(numero.value)-1
                }
                

            }

            function voltar() 
    {
        window.history.back();
    }
            

        </script>
    
</body>
</html>