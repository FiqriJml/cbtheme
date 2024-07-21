document.addEventListener('DOMContentLoaded', function () {
    // Ambil elemen hamburger dan mobile-navigation
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const mobileNavigation = document.querySelector('.mobile-navigation');

    // Tangani klik pada hamburger menu
    hamburgerMenu.addEventListener('click', function () {
        // Toggle kelas active pada mobile-navigation
        mobileNavigation.classList.toggle('active');
    });
});
