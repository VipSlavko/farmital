export class Slider {
    elements;
    buttons;
    position = 0;
    movePosition;
    maxPosition;

    constructor(wrapper, config) {
        this.elements = {
            container: wrapper.querySelector('.slider-container'),
            track: wrapper.querySelector('.slider-track'),
            items: wrapper.querySelectorAll('.card')
        };

        this.buttons = {
            prev: wrapper.querySelector('.btn-prev'),
            next: wrapper.querySelector('.btn-next'),
        };
    }
}