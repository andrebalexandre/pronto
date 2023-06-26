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

      function comprar(Id_produtos)
      {
        quantidade = numero.value
        window.open("comprar.php?Id_produtos="+Id_produtos+"&quantidade="+quantidade,"_self")
      }
