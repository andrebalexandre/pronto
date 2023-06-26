<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="website icon " type="png"
  href="img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pedido</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="entrega.css">
    <link rel="stylesheet" href="style.css">
    <!-- -->
    
</head>
<body>
    <div class="principal">
        <header id="header">
            <a id="logo" href=""><img src="" width="20px"></a>
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
          <script src="./script.js"></script>
        </div>
        <div class="div2">
            <div class="barra">
                
                <img src="img/logo.png" width="120px" class="logo">
                <img src="img/titulo1.png" width="180px" class="titulo">
            </div>
        </div>

        <div class="div3"></div>
      
        <div class="div4">

            <button class="truck-button">
                <span class="default">Confirmar pedido</span>
                <span class="success">
                    Pedido confirmado
                    <svg viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </svg>
                </span>
                <script src="entrega.js"></script>
                <div class="truck">
                    <div class="wheel"></div>
                    <div class="back"></div>
                    <div class="front"></div>
                    <div class="box"></div>
                </div>   
            </button>
    </div>
<div class="avaliacao">
    <h1>Avalie</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php" enctype="multipart/form-data">

			<div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
				
				<input class="btavaliar" type="submit" value="Enviar">
				
			</div>
  </div>
		</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.11/dist/gsap.min.js"></script>

</html>