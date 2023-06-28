function Fechar(productId)
{
    window.open("excluircarrinho.php?id=" + productId, "_self");
}

function Adicionar(productId) {
    var inputId = "numero_" + productId;
    var input = document.getElementById(inputId);
    input.value = parseInt(input.value) + 1;
    CalcularTotal()
    }

function Subtrair(productId) {
    var inputId = "numero_" + productId;
    var input = document.getElementById(inputId);
    if (input.value > 1) {
        input.value = parseInt(input.value) - 1;
        CalcularTotal()
    }
}

function voltar() 
{
window.history.back();
}

function CalcularTotal()
{
    total = 0
    for (x=1;x<100; x++)
    {
        try 
            {
            preco = document.getElementById("span_" +x).innerHTML
            quantidade = document.getElementById("numero_" +x).value
            console.log (preco, quantidade)
            total += parseFloat(preco) * parseFloat(quantidade)
            } 
          
        catch (e) 
            {

            }
    }
    t.innerHTML = total.toFixed(2)
  
}