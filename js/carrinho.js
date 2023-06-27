function Fechar(Id)
{
    window.open("excluircarrinho.php?id=" +Id, "_self");
}

function Adicionar(productId) {
    var inputId = "numero_" + productId;
    var input = document.getElementById(inputId);
    input.value = parseInt(input.value) + 1;
    }

function Subtrair(productId) {
    var inputId = "numero_" + productId;
    var input = document.getElementById(inputId);
    if (input.value > 1) {
        input.value = parseInt(input.value) - 1;
    }
}

function voltar() 
{
window.history.back();
}

function calcularTotal() {
    var total = 0;
    var quantidades = document.getElementsByClassName('quantidade-produto');

    for (var i = 0; i < quantidades.length; i++) {
      var quantidade = parseInt(quantidades[i].value);
      var preco = parseFloat(quantidades[i].getAttribute('data-preco'));
      var subtotal = quantidade * preco;
      total += subtotal;
    }

    document.getElementById('total').innerText = 'Total: R$ ' + total.toFixed(2);
  }