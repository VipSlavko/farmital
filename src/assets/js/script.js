//import { popups } from './popups.js';
import { burger } from './burger.js';
//popups();
burger();
const rangeMin = document.querySelector('#min-range');
const inputMin = document.querySelector('#min-input');
const rangeMax = document.querySelector('#max-range');
const inputMax = document.querySelector('#max-input');
if (rangeMin) {
    rangeMin.addEventListener("input", function(event){
        inputMin.value = event.target.value;
    });
}
if (inputMin) {
    inputMin.addEventListener("input", function(event){
        rangeMin.value = event.target.value;
    });
}
if (rangeMax) {
    rangeMax.addEventListener("input", function(event){
        inputMax.value = event.target.value;
    });
}
if (inputMax) {
    inputMax.addEventListener("input", function(event){
        rangeMax.value = event.target.value;
    });
}