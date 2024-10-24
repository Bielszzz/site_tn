// Obtém o ícone de menu e o menu lateral
const menuIcon = document.getElementById('menu-icon');
const menu = document.getElementById('menu');

// Adiciona um evento de clique no ícone de menu
menuIcon.addEventListener('click', function() {
  // Alterna a classe "open" no menu para abrir ou fechar
  menu.classList.toggle('open');
});

