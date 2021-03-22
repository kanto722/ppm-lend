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
                                <br>
                            Так же выполняем нанесение полимерно-порошкового 
                            покрытия на металлоизделия на собственном участке 
                            подготовки и окраски, что позволяет быстро и качественно 
                            изготавливать и окрашивать как собственные, так 
                            и сторонние металлоизделия, в том числе крупногабаритные. 

                            Для успешной реализации производственных планов 
                            компания имеет все необходимое оборудование 
                            и производственные помещения площадью 1200 м2.
                                <br>
                            <span>Основные виды деятельности организации:</span>
                                <br>
                            - производство готовых металлических изделий 
                            и конструкций;
                            - производство малых архитектурных форм
                            - обработка металлов и нанесение покрытий 
                            на металлы;      

                            <span>ООО "ПрофПолимерМеталл"</span> достойно справляется
                            со всеми взятыми на себя обязательствам - от понимания
                            идеи и задачи Заказчика до воплощения и последующего
                            гарантийного обслуживания.
                        </p>
                    </div>
                </div>
                <div class="about-img">
                    <img src="/css/img/abouts-block2.jpg" alt="фото">
                    <div class="about-img-elem bg-white">
                        <p class="fsz16 black">На рынке с</p>
                        <span class="fsz40 green">2014 г.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project">
        <div class="wrap">
            <div class="project-container">
                <h2 class="fsz36 black">Нужен проект?</h2>
                <form class="project-content">
                    <div class="project-number">
                        <div class="plast-form-item">
                            <img src="/css/img/svg/phone-footer.svg" alt="иконка">
                            <input class="plast-input fsz16 black" type="text" placeholder="+7 (999) 999-99-99">
                        </div>
                        <div class="project-number-btn">
                            <input class="input-project-btn" type="submit" value="Оставить заявку">
                        </div>
                    </div>
                    <div class="project-text">
                        <p class="fsz16 hex">Воспользуйтесь этой формой, если хотите задать вопрос нашим специалистам. Мы ответим в течение 5 минут.</p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
        include (''.$root_server.'/include/step.php');
    ?>
    <section class="invite-consult">
        <div class="invite-consult-container">
            <div class="invite-consult-text">
                <h2 class="fsz36 white">Давайте начнем с консультации!</h2>
            </div>
            <form class="invite-consult-input">
                <div class="plast-form-item">
                    <img src="/css/img/svg/phone-footer.svg" alt="иконка">
                    <input class="plast-input fsz16 black" type="text" placeholder="+7 (999) 999-99-99">
                </div>
                <div class="project-number-btn">
                    <input class="input-project-btn invite-btn" type="submit" value="Получить консультацию">
                </div>
            </form>
        </div>
    </section>

    <?php
        include (''.$root_server.'/include/contacts.php');
    ?>
    <section class="docum">
        <div class="wrap">
            <div class="docum-content">
                <h2 class="fsz36 black">Официальные документы</h2>
                <div class="docum-content-item">
                    <p class="fsz16 black">Реквизиты компании “ПрофПолимерМеталл”</p>
                    <div class="line-docum"></div>
                    <a class="fsz16 green" href="#">Скачать *pdf</a>
                </div>
            </div>
        </div>
    </section>
    <?php
        include (''.$root_server.'/include/footer.php');
    ?>