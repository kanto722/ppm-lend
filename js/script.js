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
    });


  $(document).ready(function() {
    
    // бургер клик
    $('.header-burger').click(function() {
      $('.header-burger').toggleClass('open-menu');
      $('.header-media').toggleClass('header-media__active');
    });






});