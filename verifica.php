<?php

  $email = $_POST ["email"]; //pega o input
  $senha = $_POST ["senha"];

    include("conecta.php"); // conectar com banco de dados

    $comando = $pdo->prepare("SELECT * FROM cadastro WHERE Email='$email' and Senha='$senha' ");
    $resultado = $comando->execute();
    $n = 0;
    $admin= "n";
    while ( $linhas = $comando->fetch() )
    {
        $n = 1;
        $admin = $linhas ["Admin"];
    }

    if($n == 0)
    { 
        header ("Location: pglogin1.html");
    }


    if($n == 1)
    {
        if($admin == "s")
        {
            header ("Location: pagcadastro_adm.html");
        }

        else
        {
            header ("Location: principal.html");
        }
    }

?>