document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.querySelector('.burger-menu');
    const mobileMenu = document.querySelector('.mobile-menu');

    burgerMenu.addEventListener('click', function () {
        this.classList.toggle('active'); // Add/Remove the "active" class to the burger menu
        mobileMenu.classList.toggle('active'); // Add/Remove the "active" class to the mobile menu
    });
});
