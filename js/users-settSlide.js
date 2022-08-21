const infoServicesSwiper = new Swiper('.header-center', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            scrollbar: {
                el: ".swiper-scrollbar",
                draggable: true,
            }
        }
    },
    // Navigation arrows
    navigation: {
        nextEl: '.header-center-button-next',
        prevEl: '.header-center-button-prev',
    },
    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});