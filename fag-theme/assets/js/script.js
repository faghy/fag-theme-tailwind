document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.querySelector('.burger-menu');
    const mobileMenu = document.querySelector('.mobile-menu');

    burgerMenu.addEventListener('click', function () {
        this.classList.toggle('active'); // Add/Remove the "active" class to the burger menu
        mobileMenu.classList.toggle('active'); // Add/Remove the "active" class to the mobile menu
    });

    const menuItemHasChildren = document.querySelectorAll('.menu-item-has-children');

    menuItemHasChildren.forEach(function (menuItem) {
        menuItem.addEventListener('mouseenter', function () {
            const subMenu = this.querySelector('.sub-menu');
            if (subMenu) {
                subMenu.style.display = 'block';
            }
        });

        menuItem.addEventListener('mouseleave', function () {
            const subMenu = this.querySelector('.sub-menu');
            if (subMenu) {
                subMenu.style.display = 'none';
            }
        });
    });
});

