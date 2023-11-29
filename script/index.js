
try {
    var swiperHero = new Swiper(".swiperhero", {
        spaceBetween: 40,
        lazy: false,
        freeMode: true,
        loop: true,
        speed: 8999999,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        slidesPerView: "auto",
    });
} catch (error) { }



try {
    document.addEventListener("DOMContentLoaded", function () {
        var header = document.getElementById("site-header");

        window.addEventListener("scroll", function () {
            if (window.scrollY > 5) {
                header.classList.remove("bg-transparent");
                header.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                header.classList.add("bg-transparent");
            }
        });
    });
} catch (error) { }