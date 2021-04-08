<?php
    $root_server = $_SERVER["DOCUMENT_ROOT"];
    include (''.$root_server.'/include/header.php');
?>
        <section class="error_page-section">
            <div class="wrap">
                <div class="error_page-content">
                    <p class="error_page-title">Упс, что-то пошло не так...</p>
                    <a href="/" class="error_page-a">Уйти на главную страницу</a>
                    <a href="/"><img src="/css/img/svg/logo-header.svg" alt="alt"></a>
                </div>
            </div>
        </section>
        <?php
    include (''.$root_server.'/include/footer.php');
?> 