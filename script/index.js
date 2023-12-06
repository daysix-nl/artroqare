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
  const button = document.querySelector(".hamburger-button");
  const header = document.getElementById("site-header");
  button.addEventListener("click", () => {
    const menu = document.querySelector(".menu");
    button.classList.toggle("button-hamburger--active");
    menu.classList.toggle("menu--active");

    console.log(window.scrollY);

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
    }
  });

  const menuItems = document.querySelectorAll(".menu-item");

  menuItems.forEach((item) => {
    item.addEventListener("click", () => {
      const menu = document.querySelector(".inner-menu");
      menu.classList.add("inner_menu--active");
    });
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
