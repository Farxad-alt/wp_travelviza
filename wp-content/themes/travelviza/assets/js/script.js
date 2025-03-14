jQuery(document).ready(function ($) {
  jQuery(".toggle-nav").click(function (e) {
    jQuery(".menu-header ul.menu").slideToggle(500);

    e.preventDefault();
  });
});
// Форма поиска
jQuery(document).ready(function ($) {
  const search_input = $(".search-form__input");
  const search_results = $(".ajax-search");

  search_input.keyup(function () {
    let search_value = $(this).val();

    if (search_value.length > 2) {
      // кол-во символов
      $.ajax({
        url: "/wp-admin/admin-ajax.php",
        type: "POST",
        data: {
          action: "ajax_search", // functions.php
          term: search_value,
        },
        success: function (results) {
          search_results.fadeIn(200).html(results);
        },
      });
    } else {
      search_results.fadeOut(200);
    }
  });

  // Закрытие поиска при клике вне его
  $(document).mouseup(function (e) {
    if (
      search_input.has(e.target).length === 0 &&
      search_results.has(e.target).length === 0
    ) {
      search_results.fadeOut(200);
    }
  });
});

const imageSwiper = new Swiper(".image-swiper", {
  autoplay: {
    delay: 3000,
  },
  loop: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination-image",
    clickable: true,
  },
});
const directionSwiper = new Swiper(".directionSwiper-slider", {
  autoplay: {
    delay: 3000,
  },
  loop: true,
  slidesPerView: 4,
  // spaceBetween: 10,
  freeMode: true,
  // If we need pagination
  pagination: {
    el: ".swiper-pagination-image",
    clickable: true,
  },
  navigation: {
    nextEl: ".s-button-next",
    prevEl: ".s-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 4,
    },
  },
});

const reviewsSwiper = new Swiper(".reviews-swiper", {
  loop: true,

  // autoplay: {
  //   delay: 3000,
  // },
  // If we need pagination
  pagination: {
    el: ".swiper-pagination-reviews",
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    // disabledClass: "swiper-button-disabled",
  },

  // And if we need scrollbar
});
const rmySwiper = new Swiper(".mySwiper", {
  loop: true,

  // autoplay: {
  //   delay: 3000,
  // },
  // If we need pagination
  pagination: {
    el: ".swiper-pagination-reviews",
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    // disabledClass: "swiper-button-disabled",
  },

  // And if we need scrollbar
});

const btnUp = {
  el: document.querySelector(".btn-up"),
  show() {
    // удалим у кнопки класс btn-up_hide
    this.el.classList.remove("btn-up_hide");
  },
  hide() {
    // добавим к кнопке класс btn-up_hide
    this.el.classList.add("btn-up_hide");
  },
  addEventListener() {
    // при прокрутке содержимого страницы
    window.addEventListener("scroll", () => {
      // определяем величину прокрутки
      const scrollY = window.scrollY || document.documentElement.scrollTop;
      // если страница прокручена больше чем на 400px, то делаем кнопку видимой, иначе скрываем
      scrollY > 400 ? this.show() : this.hide();
    });
    // при нажатии на кнопку .btn-up
    document.querySelector(".btn-up").onclick = () => {
      // переместим в начало страницы
      window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth",
      });
    };
  },
};

btnUp.addEventListener();

// Initialize and add the map
let map;

async function initMap() {
  // The location of Uluru
  const position = { lat: 53.9182929, lng: 27.4479571 };
  // Request needed libraries.
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerView } = await google.maps.importLibrary("marker");

  // The map, centered at Uluru
  map = new Map(document.getElementById("map"), {
    zoom: 15,
    center: position,
    mapId: "DEMO_MAP_ID",
  });

  // The marker, positioned at Uluru
  const marker = new AdvancedMarkerView({
    map: map,
    position: position,
    title: "Uluru",
  });
}

initMap();

// Форма поиска
jQuery(document).ready(function ($) {
  const search_input = $(".search-form__input");
  const search_results = $(".ajax-search");

  search_input.keyup(function () {
    let search_value = $(this).val();

    if (search_value.length > 2) {
      // кол-во символов
      $.ajax({
        url: "/wp-admin/admin-ajax.php",
        type: "POST",
        data: {
          action: "ajax_search", // functions.php
          term: search_value,
        },
        success: function (results) {
          search_results.fadeIn(200).html(results);
        },
      });
    } else {
      search_results.fadeOut(200);
    }
  });

  // Закрытие поиска при клике вне его
  $(document).mouseup(function (e) {
    if (
      search_input.has(e.target).length === 0 &&
      search_results.has(e.target).length === 0
    ) {
      search_results.fadeOut(200);
    }
  });
});
