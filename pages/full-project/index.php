<?php
    $root_server = $_SERVER["DOCUMENT_ROOT"];
    include (''.$root_server.'/include/header.php');
?>

    <section class="project-full">
        <div class="wrap">
            <div class="project-full-container">
                <div class="project-full-img">
                    <img src="/css/img/benches.jpg" alt="скамья">
                </div>
                <div class="project-full-text">
                    <h1 class="project-full-title fsz36 black">Заголовок одна или две строки</h1>
                    <p class="project-full-text-p fsz16 hex">Короткое описание. Например местонахождение объекта или его стоимость и сроки</p>
                    <p class="project-full-text-p fsz16 hex">Модель окрашена в зеленый цвет, что делает ограждение аккуратным и привлекательным.</p>
                </div>
            </div>
            <div class="project-full-content">
                <h2 class="project-full-content-title fsz36 black">Цели и задачи</h2>
                <div class="project-full-content-text">
                    <p class="project-full-content-text-p fsz16 hex">Короткое описание. Например местонахождение объекта или его стоимость и сроки </p>
                    <p class="project-full-content-text-p fsz16 hex">Модель окрашена в зеленый цвет, что делает ограждение аккуратным и привлекательным.</p>
                    <p class="project-full-content-text-p fsz16 hex">Короткое описание. Например местонахождение объекта или его стоимость и сроки </p>
                    <p class="project-full-content-text-p fsz16 hex">Модель окрашена в зеленый цвет, что делает ограждение аккуратным и привлекательным.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="jobs-up">
        <div class="wrap">
            <h2 class="jobs-up-title"></h2>
            <div class="jobs-up-container">

            </div>
        </div>
    </section> -->
    <section class="gotovo">
        <div class="wrap">
            <div class="gotovo-container">
                <h2 class="gotovo-title fsz36 black">Примеры готовых изделий</h2>
                <!-- Slider main container -->
                <div class="swiper-container production-swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide production-slider gotovo-slider-wrap" >
                            <img class="swiper-slide-img gotovo-slider-img" src="/css/img/bench-rotate.jpg" alt="скамейка">
                            <div class="production-slider-price">
                                <p class="production-price-text fsz16 black">Скамья садовая №1</p>
                                <p class="production-price-text2 fsz16 black"><span class="production-price-span fsz16 black">Размер:</span> 1500 х 600 х 790 мм</p>
                                <p class="margin-btn"><span class="production-price-span fsz16 black">Цена:</span> 10 500 руб</p>
                            </div>
                        </div>
                        <div class="swiper-slide production-slider gotovo-slider-wrap" >
                            <img class="swiper-slide-img gotovo-slider-img" src="/css/img/benches.jpg" alt="скамейка">
                            <div class="production-slider-price">
                                <p class="production-price-text fsz16 black">Скамья садовая №1</p>
                                <p class="production-price-text2 fsz16 black"><span class="production-price-span fsz16 black">Размер:</span> 1500 х 600 х 790 мм</p>
                                <p class="margin-btn"><span class="production-price-span fsz16 black">Цена:</span> 10 500 руб</p>
                            </div>
                        </div>
                        <div class="swiper-slide production-slider gotovo-slider-wrap">
                            <img class="swiper-slide-img gotovo-slider-img" src="/css/img/slide-inc-3.jpg" alt="скамейка">
                            <div class="production-slider-price">
                                <p class="production-price-text fsz16 black">Скамья садовая №1</p>
                                <p class="production-price-text2 fsz16 black"><span class="production-price-span fsz16 black">Размер:</span> 1500 х 600 х 790 мм</p>
                                <p class="margin-btn"><span class="production-price-span fsz16 black">Цена:</span> 10 500 руб</p>
                            </div>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev" style="     top: 41%;
                    width: calc(var(--swiper-navigation-size)/ 44 * 40);
                    "></div>
                    <div class="swiper-button-next" style="    top: 41%;
                    width: calc(var(--swiper-navigation-size)/ 44 * 40);"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="info-product">
        <div class="wrap">
            <div class="info-product-container">
                <h2 class="info-product-title fsz36 black">Нужен проект?</h2>
                <div class="info-product-content">
                    <div class="info-product-input">
                        <form class="imazing-phone">
                            <div class="plast-form-content imazing-flex">
                                <div class="plast-form-item no-margin">
                                    <img src="/css/img/svg/phone-footer.svg" alt="иконка">
                                    <input class="plast-input fsz16 black" type="text" placeholder="+7 (999) 999-99-99">
                                </div>
                                <div class="imazing-btn">
                                    <a class="info-product-link" href="#">Узнать больше</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="info-product-text">
                        <p class="info-product-text-p">Воспользуйтесь этой формой, если хотите задать вопрос нашим специалистам. Мы ответим в течение 5 минут.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    
    
    <!-- <?php
        include (''.$root_server.'/include/footer.php');
    ?> -->