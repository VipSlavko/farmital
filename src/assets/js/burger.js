document.addEventListener("DOMContentLoaded", function () {
    const burgerButton = document.querySelector(".burger-button");
    const menu = document.querySelector(".menu");
  
    burgerButton.addEventListener("click", function () {
      menu.classList.toggle("active");
    });
});  