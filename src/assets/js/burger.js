export function burger() {
    const burgerButton = document.querySelector(".burger-menu");
    const menu = document.querySelector(".menu");
    const menu_close = document.querySelector(".menu__close");
    burgerButton.addEventListener("click", function () {
      menu.classList.toggle("active");
    });
    menu_close.addEventListener("click", function () {
      menu.classList.toggle("active");
    }); 
}