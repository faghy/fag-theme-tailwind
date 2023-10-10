document.addEventListener('DOMContentLoaded', function () {
    // Mobile Menu
    const burgerMenu = document.querySelector('.burger-menu');
    const mobileMenu = document.querySelector('.mobile-menu');

    burgerMenu.addEventListener('click', function () {
        this.classList.toggle('active'); // Add/Remove the "active" class to the burger menu
        mobileMenu.classList.toggle('active'); // Add/Remove the "active" class to the mobile menu
    });

    // Submenu
    const menuItemHasChildren = document.querySelectorAll('.menu-item-has-children');

    menuItemHasChildren.forEach(function (menuItem) {
        const subMenu = menuItem.querySelector('.sub-menu');

        if (subMenu) {
            // Create an arrow element
            const arrow = document.createElement('span');
            arrow.classList.add('arrow-down'); // You can define CSS classes for the arrow
            arrow.textContent = ' ▼'; // Text for the arrow (customize as needed)

            // Add the arrow to the menu item
            menuItem.querySelector('a').appendChild(arrow);

            // Handle submenu opening and closing when clicking the arrow
            arrow.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent the default link behavior (if present)
                subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
            });

            // Hide the submenu initially
            subMenu.style.display = 'none';
        }

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
