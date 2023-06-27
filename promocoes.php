<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="website icon " type="png"
  href="img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promoções</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="produtos.css">
    <script src="js/produtos.js"></script>

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
            <li><a href="carrinho.php">Carrinho</a></li>
            <li><a href="fale_conosco.html">Fale conosco</a></li>
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
    <br><br><br>
<?php
            include("conecta.php"); // conectar com banco de dados
            $comando = $pdo->prepare("SELECT * FROM produtos WHERE produtos.categoria = 'promocoes';");
            $resultado = $comando->execute();  

            while ( $linhas = $comando->fetch() )
            {
                $Nome = $linhas ["nome"];
                $imagem = $linhas ["imagem"];
                $i=base64_encode($imagem);
                $preco = $linhas ["preco"];
                $id = $linhas ["Id_produtos"];
                echo("
                <div class=\"tudo\" id=\"tudo\">

            <div class=\"fild\">
              <img class=\"imagem\" src=\"data:image/jpeg;base64,$i\">
            </div>

            <div class=\"nome\">
                <br>
                <b>$Nome</b>
                <br>
                <b>R$ $preco</b>
            </div>

            <div class=\"ult\">  
                <button class=\"comprar\" onclick=\"comprarRedirecionar('$id')\">COMPRAR</button>
            </div>
            </div>
            </div>
                ");
            }
            

        ?>
        </body>
<script>
    function voltar() 
    {
        window.history.back();
    }
</script>
</html>