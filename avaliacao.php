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
            <li><a href="contas.php">Cadastros</a></li>
            <li><a href="cadastrarprodutos.html">Cadastrar produtos</a></li>
            <li><a href="/">Pedidos</a></li>
            <li><a href="/">Atendimento</a></li>
            <li><a href="avaliacao.php">Avaliações</a></li>
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

  
         include("conecta.php");

$logado = $_SESSION["logado"];
$admin = $_SESSION["admin"];
if ($admin == "s") {
    $comando = $pdo->prepare("SELECT qnt_estrela, Id_usuario FROM avaliacao");
    $comando->execute();
}

while ($linhas = $comando->fetch()) {
    $id = $linhas["Id_usuario"];
    $estrelas = $linhas["qnt_estrela"];

   
    echo("<div class='dados'>");
    echo("Email: $id<br>");

   
    if ($estrelas) {
        echo("Estrelas: $estrelas");
    } else {
        echo("Estrelas: 0");
    }

    echo("</div>");
}
?>
          </div>