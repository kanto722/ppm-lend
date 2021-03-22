<?php
    $root_server = $_SERVER["DOCUMENT_ROOT"];
    include (''.$root_server.'/include/header.php');
?>
    <section class="promo">
        <div class="wrap">
            <div class="promo-container df-column">
                <div class="promo-info df-column">
                    <h1 class="fsz36 white2">ПрофПолимерМеталл</h1>
                    <p class="fsz18 white2">Металлоконструкции различного назначения в Тюмени</p>
                    <a class="fsz16 hex bg-white" href="#">Узнать стоимость изделия</a>
                </div>
                <?php
                include (''.$root_server.'/include/promo.php');
                ?>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="wrap">
            <div class="about-container df">
                <div class="about-text df-column">
                    <h2 class="fsz36 black">О компании</h2>
                    <div class="about-text-content df">
                        <div class="line2"></div>
                        <p class="fsz16 black">
                            <span>Мы – производственное предприятие. 
                                Более 8 лет выполняем работы по изготовлению 
                                металлоконструкций по чертежам и проектным 
                                решениям Заказчика.</span>
                            <br><br>
                            Так же выполняем нанесение полимерно-порошкового 
                            покрытия на металлоизделия на собственном участке 
                            подготовки и окраски, что позволяет быстро и качественно 
                            изготавливать и окрашивать как собственные, так 
                            и сторонние металлоизделия, в том числе крупногабаритные. 
                            <br><br>
                            Для успешной реализации производственных планов 
                            компания имеет все необходимое оборудование 
                            и производственные помещения площадью 1200 м2.
                            <br><br>
                            <span>Основные виды деятельности организации:</span>
                            <br><br>
                            - производство готовых металлических изделий 
                            и конструкций;
                            - производство малых архитектурных форм
                            - обработка металлов и нанесение покрытий 
                            на металлы;      
                            <br><br>
                            <span>ООО "ПрофПолимерМеталл"</span> достойно справляется
                            со всеми взятыми на себя обязательствам - от понимания
                            идеи и задачи Заказчика до воплощения и последующего
                            гарантийного обслуживания.</p>
                    </div>
                </div>
                <div class="about-img">
                    <img src="/css/img/abouts-block.jpg" alt="фото">
                    <div class="about-img-elem bg-white">
                        <p class="fsz16 black">На рынке с</p>
                        <span class="fsz40 green">2012 г.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="direction bg-pink">
        <div class="wrap">
            <div class="direction-container">
                <h2 class="fsz36 black">Направления, с которыми мы работаем</h2>
                <div class="direction-content df">
                    <div class="direction-item df-column">
                        <img src="/css/img/direction-1.jpg" alt="картинка">
                        <div class="direction-item-text df-column">
                            <h3 class="white fsz50">01</h3>
                            <p class="white fsz18">металлоизделия</p>
                            <span class="white fsz16">Ограждения<br>Площадки ТБО<br>Скамьи<br>Урны<br>Велопарковки</span>
                        </div>
                        <div class="direction-item-img df">
                            <img src="/css/img/svg/plus-white.svg" alt="плюс">
                        </div>
                        <div class="direction-item-shadow"></div>
                    </div>
                    <div class="direction-item df-column">
                        <img src="/css/img/direction-2.jpg" alt="картинка">
                        <div class="direction-item-text df-column">
                            <h3 class="white fsz50">02</h3>
                            <p class="white fsz18">Полимерные <br>покрытия</p>
                        </div>
                        <div class="direction-item-img df">
                            <img src="/css/img/svg/plus-white.svg" alt="плюс">
                        </div>
                        <div class="direction-item-shadow"></div>
                    </div>
                    <div class="direction-item df-column">
                        <img src="/css/img/direction-3.jpg" alt="картинка">
                        <div class="direction-item-text df-column">
                            <h3 class="white fsz50">03</h3>
                            <p class="white fsz18">Металлоконструкции <br>зданий и сооружений</p>
                        </div>
                        <div class="direction-item-img df">
                            <img src="/css/img/svg/plus-white.svg" alt="плюс">
                        </div>
                        <div class="direction-item-shadow"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include (''.$root_server.'/include/step.php');
    ?>
    <section class="friends bg-pink">
        <div class="wrap">
            <div class="friends-container df-column">
                <h2 class="fsz36 black">Нам доверяют</h2>
                <div class="friebds-content">
                    <!-- Slider main container -->
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <!-- Slides -->
                            <div class="swiper-slide" style="width: 372px;height: 190px;">
                                <img src="/css/img/part-1.png" alt="партнер">
                            </div>
                            <div class="swiper-slide" style="width: 372px;height: 190px;"> 
                               <img src="/css/img/part-2.png" alt="партнер">
                            </div>
                            <div class="swiper-slide" style="width: 372px;height: 190px;">
                              <img src="/css/img/part-3.png" alt="партнер">
                            </div>
                            <div class="swiper-slide" style="width: 372px;height: 190px;">
                              <img src="/css/img/part-4.png" alt="партнер">
                            </div>
                            <div class="swiper-slide" style="width: 372px;height: 190px;">
                              <img src="/css/img/part-5.png" alt="партнер">
                            </div>
                            <div class="swiper-slide" style="width: 372px;height: 190px;"> 
                              <img src="/css/img/part-6.png" alt="партнер">
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev" style="    width: calc(var(--swiper-navigation-size)/ 44 * 40);
                        "></div>
                        <div class="swiper-button-next" style="    width: calc(var(--swiper-navigation-size)/ 44 * 40);"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include (''.$root_server.'/include/contacts.php');
    ?>
<?php
    include (''.$root_server.'/include/plasts.php');
?>


<?php
    include (''.$root_server.'/include/footer.php');
?>