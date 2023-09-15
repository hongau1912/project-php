const downIcon = document.querySelector('#btn-show');
const navbar = document.querySelector('#name');
downIcon.addEventListener('click', () => {
    navbar.classList.toggle('hide');
});
const btnImage = document.querySelector('#btn-image');
const image = document.querySelector('#image');
btnImage.addEventListener('click', () => {
    image.classList.toggle('hide');
});
const downIcon1 = document.querySelector('#btn-content');
const navbar1 = document.querySelector('#content');
downIcon1.addEventListener('click', () => {
    navbar1.classList.toggle('hide');

});
const btnPrice = document.querySelector('#btn-price');
const price = document.querySelector('#price');
btnPrice.addEventListener('click', () => {
    price.classList.toggle('hide');
});
const btnAvailable = document.querySelector('#btn-available');
const available = document.querySelector('#available');
btnAvailable.addEventListener('click', () => {
    available.classList.toggle('hide');
});

