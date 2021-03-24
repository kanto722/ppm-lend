const swiper = new Swiper('.swiper-container', {
    loop: true,
    spaceBetween: 28,
    slidesPerView: 3,
    // Navigation arrows
    allowTouchMove: false,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    });

    
  
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 3,
      freeMode: true,
      // watchSlidesVisibility: true,
      // watchSlidesProgress: true,
      direction: 'vertical',
      

    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: 1,
      keyboard: {
        enabled: true,

      },
      allowTouchMove: false,
      // navigation: {
      //   nextEl: '.swiper-button-next',
      //   prevEl: '.swiper-button-prev',
      // },
      thumbs: {
        swiper: galleryThumbs
      }
    });