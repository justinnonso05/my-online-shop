document.addEventListener('DOMContentLoaded', function() {
    const nav = document.querySelector('nav');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
            nav.classList.remove('transparent');
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
            nav.classList.add('transparent');
        }
    });
});
    