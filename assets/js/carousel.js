document.addEventListener('DOMContentLoaded', function () {
    var splide = new Splide('#logo-carousel', {
        type: 'loop',
        perPage: 4,
        gap: '1em',
        arrows: false,
        pagination: false,
        breakpoints: {
            1024: {
                perPage: 3,
            },
            768: {
                perPage: 2,
            },
            480: {
                perPage: 1,
            }
        },
        autoScroll: {
            speed: 3, // Adjust the scroll speed as necessary
            pauseOnHover: false,
            pauseOnFocus: false
        }
    });

    splide.mount(window.splide.Extensions);
});
