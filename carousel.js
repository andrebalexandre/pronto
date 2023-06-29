// Selecionando todos os elementos com a classe "control"
const controls = document.querySelectorAll(".control");
// Variável que armazena o índice do item atual
let currentItem = 0;
// Selecionando todos os elementos com a classe "item"
const items = document.querySelectorAll(".item");
// Armazenando o número máximo de itens
const maxItems = items.length;

// Iterando sobre todos os elementos com a classe "control"
controls.forEach((control) => {
  // Adicionando um evento de clique a cada elemento
  control.addEventListener("click", (e) => {
    // Verificando se o botão clicado é o da seta para a esquerda
    isLeft = e.target.classList.contains("arrow-left");

    // Atualizando o valor do índice do item atual
    if (isLeft) {
      currentItem -= 1;
    } else {
      currentItem += 1;
    }

    // Verificando se o índice do item atual é maior ou igual ao número máximo de itens
    // Se sim, volta para o primeiro item
    if (currentItem >= maxItems) {
      currentItem = 0;
    }

    // Verificando se o índice do item atual é menor que zero
    // Se sim, vai para o último item
    if (currentItem < 0) {
      currentItem = maxItems - 1;
    }

    // Removendo a classe "current-item" de todos os elementos com a classe "item"
    items.forEach((item) => item.classList.remove("current-item"));

    // Movendo o item atual para a visualização suavemente
    items[currentItem].scrollIntoView({
      behavior: "smooth",
      inline: "center"
    });

    // Adicionando a classe "current-item" ao item atual
    items[currentItem].classList.add("current-item");
  });
});
