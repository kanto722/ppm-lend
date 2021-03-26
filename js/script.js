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