<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="website icon " type="png"href="img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto escolhido</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="produto_individual.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <script src="js/produto_individual.js"></script>
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
            <li><a href="minhaconta.php">Minha Conta</a></li> <!-- Link para a página "Minha Conta" -->
            <li><a href="principal.html">Produtos</a></li> <!-- Link para a página "Produtos" -->
            <li><a href="sobrenos.html">Sobre nós</a></li> <!-- Link para a página "Sobre nós" -->
            <li><a href="carrinho.php">Carrinho</a></li> <!-- Link para a página "Carrinho" -->
            <li><a href="fale_conosco.html">Fale conosco</a></li> <!-- Link para a página "Fale conosco" -->
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
                include("conecta.php"); // Inclui o arquivo de conexão com o banco de dados

                $id = $_GET['id']; // Obtém o ID da URL

                $comando = $pdo->prepare("SELECT * FROM produtos WHERE produtos.Id_produtos = :id"); // Prepara a consulta SQL para selecionar os dados do produto com base no ID
                $comando->bindParam(':id', $id); // Vincula o parâmetro do ID à consulta
                $resultado = $comando->execute(); // Executa a consulta e armazena o resultado

            while ( $linhas = $comando->fetch() )
            {
                $Nome = $linhas ["nome"]; // Obtém o nome do produto
                $imagem = $linhas ["imagem"]; // Obtém a imagem do produto
                $i=base64_encode($imagem); // Codifica a imagem em base64
                $preco = $linhas ["preco"]; // Obtém o preço do produto
                $id = $linhas ["Id_produtos"]; // Obtém o ID do produto
                $q = $linhas ["quantidade"]; // Obtém a quantidade do produto
                echo("
                <div class=\"foto\">
                    <b>$Nome</b> 
                    <img class=\"imagem\" src=\"data:image/jpeg;base64,$i\" width=\"150px\"> <!-- Exibe a imagem do produto -->
                </div>
                <br>
                <fieldset class=\"fil1\"> 
      
                  <table align=\"center\">
                    <tr>
                      <td> <input type=\"checkbox\"> SEM OVO</td>  <td><input type=\"checkbox\"> SEM GLÚTEM</td> <!-- Opções de personalização do produto -->
                    </tr>

                    <tr>
                      <td><input type=\"checkbox\"> SEM LEITE</td>  <td><input type=\"checkbox\"> SEM SAL</td> <!-- Opções de personalização do produto -->
                    </tr>
                  </table>
                </fieldset>
                
                <div class=\"uni\">

                <fieldset class=\"fil2\">
                 
                
                 <button onclick=\"Subtrair();\" class=\"menos\"> <b>-</b> </button> <!-- Botão para diminuir a quantidade do produto -->
                 <input class=\"numero\" value=\"1\" id=\"numero\" type=\"number\"> <!-- Campo de entrada para a quantidade do produto -->
                 <button onclick=\"Adicionar();\" class=\"mais\"><b>+</b></button> <!-- Botão para aumentar a quantidade do produto -->
             
                </fieldset>

                <button onclick=\"comprar($id);\" class=\"comprar\"> COMPRAR </button> <!-- Botão para comprar o produto -->
                ");
            }
            

        ?>
    <div class=tudo></div>
</body>
<script>
    function voltar() 
    {
        window.history.back(); // Função para voltar para a página anterior
    }
</script>
</html>