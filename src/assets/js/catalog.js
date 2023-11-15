export function filters() {
    const filtersButtons = document.querySelectorAll('.h1-filter')
    const filterPopup = document.querySelector('.filter.mobile');
    filtersButtons.forEach(buttons => buttons.addEventListener('click', (e) => {
        e.preventDefault();
        filterPopup.classList.toggle('active');
        document.body.classList.toggle('lock');
    }));
}