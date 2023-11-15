export function filters() {
    const filtersButtons = document.querySelectorAll('.filter-head')
    const filterPopup = document.querySelector('.filter.mobile');
    const tabsControllers = document.querySelectorAll('.filter-header > img');
    tabsControllers.forEach(controller => controller.addEventListener('click', (e) => {
        e.preventDefault();
        e.target.classList.toggle('active');
        const filterBody = e.target.parentElement.nextElementSibling;
        filterBody.classList.toggle('active');
        
    }));
    filtersButtons.forEach(buttons => buttons.addEventListener('click', (e) => {
        e.preventDefault();
        filterPopup.classList.toggle('active');
        document.body.classList.toggle('lock');
    }));
}