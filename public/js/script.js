var nav = document.querySelector('nav');
        
nav.classList.remove('bgnav');

window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
        nav.classList.add('bgnav', 'shadow');
    } else {
        nav.classList.remove('bgnav', 'shadow');
    }
});