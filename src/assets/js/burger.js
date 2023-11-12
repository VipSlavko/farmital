export function burger() {
    const burgerButton = document.querySelector(".burger-menu");
    const menu = document.querySelector(".menu");
    const menuClose = document.querySelector(".menu__close");
    burgerButton.addEventListener("click", toggleMenu);
    menuClose.addEventListener("click", toggleMenu); 
    function toggleMenu() {
      menu.classList.toggle("active");
      document.body.classList.toggle("lock");
    }
}