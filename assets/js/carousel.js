document.addEventListener('DOMContentLoaded', function () {
    // Logo Caraousel
    var logoSplide = new Splide('#logo-carousel', {
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
    logoSplide.mount({ AutoScroll: window.splide.Extensions.AutoScroll });
    // @end Logo Caraousel

    var gallerySplide = new Splide('#gallery-carousel', {
        type: 'loop',
        autoplay: true,
        interval: 2000, // Interval 2 detik
        direction: 'ltr', // Arah slide dari kiri ke kanan, ini adalah default. Untuk arah kiri, sesuaikan CSS.
        speed: 600,
        pauseOnHover: false,
        pauseOnFocus: false,
        perPage: 4,
        perMove: 1, // Menggeser satu gambar setiap kali
        breakpoints: {
            1024: {
                perPage: 3, // Tablet
            },
            768: {
                perPage: 2,
            }
        }
    });

    gallerySplide.mount();
});
