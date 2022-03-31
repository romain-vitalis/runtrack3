//https://www.youtube.com/watch?v=Z9ly47Ybki4
const parallax = document.querySelector('.parallax');

window.addEventListener('scroll', () => {
    console.log(window.scrollY/6);
    parallax.style.backgroundPositionY = -window.scrollY / 4 + "px";
});