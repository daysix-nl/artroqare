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
} catch (error) {}

try {
  addEventListener("scroll", (event) => {
    const header = document.getElementById("site-header");
    const button = document.querySelector(".hamburger-button");
    const menu = document.querySelector(".menu");

    if (window.scrollY > 5) {
      header.classList.remove("bg-transparent");
      header.classList.add("bg-white");
      button.classList.remove("button-hamburger--active");
      menu.classList.remove("menu--active");
    } else {
      header.classList.remove("bg-white");
      header.classList.add("bg-transparent");
    }
  });
} catch (error) {}

try {
  const button = document.querySelector(".hamburger-button");
  const header = document.getElementById("site-header");
  button.addEventListener("click", () => {
    const menu = document.querySelector(".menu");
    button.classList.toggle("button-hamburger--active");
    menu.classList.toggle("menu--active");

    if (
      !button.classList.contains("button-hamburger--active") &&
      window.scrollY > 5
    ) {
      header.classList.remove("bg-transparent");
      header.classList.add("bg-white");
    } else {
      header.classList.remove("bg-white");
      header.classList.add("bg-transparent");
    }

    if (!button.classList.contains("button-hamburger--active")) {
      const menu = document.querySelector(".inner-menu");
      menu.classList.remove("inner_menu--active");

      const innerMenu = document.querySelector(".inner-submenu");
      innerMenu.classList.remove("active");
    }
  });

  const menuItems = document.querySelectorAll(".menu-item");
  const subMenu = document.querySelectorAll(".inner-submenu-absolute");

  menuItems.forEach((item) => {
    item.addEventListener("click", () => {
      const menu = document.querySelector(".inner-menu");
      const innerMenu = document.querySelector(".inner-submenu");
      menu.classList.add("inner_menu--active");
      innerMenu.classList.add("active");

      subMenu.forEach((itemInner, index) => {
        itemInner.style.display = "none";
        const dataBlock = item.getAttribute("data-index-number");
        if (dataBlock === index.toString()) {
          itemInner.style.display = "flex";
        }
      });
    });
  });

  const backBtn = document.querySelector(".back-inner-submenu-absolute");

  backBtn.addEventListener("click", () => {
    subMenu.forEach((itemInner) => {
      itemInner.style.display = "none";
    });

    const menu = document.querySelector(".inner-menu");
    const innerMenu = document.querySelector(".inner-submenu");
    menu.classList.remove("inner_menu--active");
    innerMenu.classList.remove("active");
  });
} catch (error) {}

/**********************/
/**** accordion ***/
/**********************/
const acc = document.getElementsByClassName("accordion");

for (let i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    const panel = this.nextElementSibling;
    this.classList.toggle("active");
    panel.style.height =
      panel.style.height === panel.scrollHeight + "px"
        ? "0"
        : panel.scrollHeight + "px";

    for (let j = 0; j < acc.length; j++) {
      if (this !== acc[j]) {
        acc[j].classList.remove("active");
        acc[j].nextElementSibling.style.height = "0";
      }
    }
  });
}

try {
  document.addEventListener("DOMContentLoaded", function () {
    const btn = document.querySelector(".button-lees-meer");
    const btnText = btn.querySelector("span");
    const paragraphs = document.querySelectorAll(".dynamic-paragraph");
    let isVisibleCount = 1;

    paragraphs[0].classList.add("visible");

    btn.addEventListener("click", function () {
      if (isVisibleCount < paragraphs.length) {
        paragraphs[isVisibleCount].classList.add("visible");
        isVisibleCount++;
        if (isVisibleCount === paragraphs.length) {
          btnText.innerText = "Lees minder";
        }
      } else {
        for (let i = 1; i < paragraphs.length; i++) {
          paragraphs[i].classList.remove("visible");
        }
        isVisibleCount = 1;
        btnText.innerText = "Lees meer";
      }
    });
  });
} catch (error) {}

try {
  const sliders = document.querySelectorAll(".mySwiperSlider-1");

  sliders.forEach((slider) => {
    const slides = slider.querySelectorAll(".swiper-slide");
    const middleSlideIndex = Math.floor(slides.length / 2);

    new Swiper(slider, {
      slidesPerView: 1.3,
      centeredSlides: true,
      initialSlide: middleSlideIndex,
      scrollbar: {
        el: ".swiper-scrollbar",
        hide: false,
        draggable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 2.6,
        },
        1280: {
          slidesPerView: 2.4,
        },
        1440: {
          slidesPerView: 2.8,
        },
      },
    });
  });
} catch (error) {}

try {
  const sliders = document.querySelectorAll(".mySwiperSlider-2");

  sliders.forEach((slider) => {
    new Swiper(slider, {
      slidesPerView: 1,
      centeredSlides: true,
      initialSlide: 1,

      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });
} catch (error) {}
