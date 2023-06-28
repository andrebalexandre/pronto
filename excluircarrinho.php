<?php
include("conecta.php");

$Id_produtos = $_GET["id"];

$comando = $pdo->prepare("DELETE FROM `carrinho` WHERE `Id_produtos` = :id");
$comando->bindParam(':id', $Id_produtos);

if ($comando->execute()) {
    // Registro excluído com sucesso
    header("Location: carrinho.php");
    exit();
} else {
    // Ocorreu um erro ao excluir o registro
    echo "Erro ao excluir o registro.";
}
?>
