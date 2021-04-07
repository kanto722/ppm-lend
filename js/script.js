const swiper = new Swiper('.swiper-container', {
    loop: true,
    spaceBetween: 28,
    slidesPerView: 3,
    // Navigation arrows
    // allowTouchMove: false,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 28
      }
    }
    });


  $(document).ready(function() {
    
    // бургер клик
    $('.header-burger').click(function() {
      $('.header-burger').toggleClass('open-menu');
      $('.header-media').toggleClass('header-media__active');
    });

});

// Отложенная загрузка карты
var YaMapsShown = false;

$(window).scroll(function () {
  var offset = $('.maps-container').offset().top;
  if (!YaMapsShown) {
    if ($(window).scrollTop() + $(window).height() > offset - 600) {
      showYaMaps();
      YaMapsShown = true;
    }
  }
});

function showYaMaps() {
   var script = document.createElement("script");
   script.type = "text/javascript";
   script.src = "https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa4e2e6cb1d0825abe818445dcb12af0ce5e644314352f086ea7e77460648844f&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false";

   document.getElementById("maps").appendChild(script);
 };
// КОНЕЦ Отложенная загрузка карты