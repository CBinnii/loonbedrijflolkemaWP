// MENU
function menuMobile() {
    var menu = document.getElementById("menu-button");
    var collapse = document.getElementById("navbar-collapse");

    if (collapse.classList.contains("show")) {
        collapse.classList.remove("show");
    } else {
        collapse.classList.add("show");
    }

    if (menu.classList.contains("cross")) {
        menu.classList.remove("cross");
    } else {
        menu.classList.add("cross");
    }
}

// Initialize Swiper
var swiperGeral = new Swiper(".slider-geral", {
    pagination: {
        el: ".swiper-pagination-slider-geral",
        clickable: true,
    },
});

var swiperHome = new Swiper(".slider-home", {
    pagination: {
        el: ".swiper-pagination-slider-home",
        clickable: true,
    },
});

var swiperDoing = new Swiper(".swiper-services", {
    // pagination: {
    //     el: ".swiper-pagination-slider-services",
    //     clickable: true,
    // },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    breakpoints: {
        100: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        991: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});