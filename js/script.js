// //tela do menu

document.addEventListener('DOMContentLoaded', () => {
    const hamburgerBtn = document.getElementById('hamburger');
    const sidebarMenu = document.getElementById('tela_menu');
    hamburgerBtn.addEventListener('click', () => {
        hamburgerBtn.classList.toggle('is-active');
        sidebarMenu.classList.toggle('active');
    });
    const closeMenu = () => {
        if (sidebarMenu.classList.contains('active')) {
            sidebarMenu.classList.remove('active');
            hamburgerBtn.classList.remove('is-active');
        }
    };
    window.addEventListener('scroll', () => {
        closeMenu();
    });
});


//modal
function exibirModal(){
    // 1. Pega os elementos do DOM (Document Object Model)
    var modal = document.getElementById("meuModal");
    var spanFechador = document.getElementsByClassName("fechar")[0];
    
    // 2. Exibe o modal
    modal.style.display = "block";

    // 3. Configura o evento para fechar ao clicar no 'x'
    spanFechador.onclick = function() {
        modal.style.display = "none";
    }

    // 4. Configura o evento para fechar ao clicar FORA do modal
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}