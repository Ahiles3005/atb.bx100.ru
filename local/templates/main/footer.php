<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<!-- Кнопка UP -->
<button class="c-common--button__UP">
    <?= \Site\Template::showSvg('/assets/images/svg/arrow-up-red.svg') ?>
</button>
</main>
<!-- FOOTER -->
<footer class="c-footer">
    <div class="c-footer--div__CONT C-CONTAINER">
        <div class="c-footer--div__TOP">
            <div class="c-footer--div__LEFT">
                <a class="c-footer--a__LOGO" href="#">
                    <img class="c-footer--img__LOGO" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/footer/c-footer_logo.svg" alt="Логотип">
                </a>

                <div class="c-footer--div__LEFT_BTNS">
                    <button class="c-footer--button__REQUEST">
                        ОТПРАВИТЬ ЗАПРОС
                    </button>
                    <button class="c-footer--button__SUBSCR">
                        ПОДПИСАТЬСЯ НА НОВОСТИ
                    </button>
                </div>

                <div class="c-footer--div__LEFT_CONTACTS">
                    <a class="c-footer--a__TEL" href="tel:+74994449047">
                        8 (499) 444-90-47
                    </a>
                    <a class="c-footer--a__MAIL" href="mailto:company@atbelectronica.ru">
                        company@atbelectronica.ru
                    </a>
                </div>
            </div>


            <div class="c-footer--div__0">
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:menu',
                    'footer',
                    [
                        'ROOT_MENU_TYPE' => 'footer',
                        'CHILD_MENU_TYPE' => 'child',
                        'MAX_LEVEL' => '4',
                        'USE_EXT' => 'Y',
                        'DELAY' => 'N',
                        'ALLOW_MULTI_SELECT' => 'N',
                        'MENU_CACHE_TYPE' => 'N',
                        'MENU_CACHE_TIME' => '3600',
                        'MENU_CACHE_USE_GROUPS' => 'Y',
                    ],
                    false
                );
                ?>
            </div>

            <!-- <div class="c-footer--div__RIGHT">
                    
                </div> -->
        </div>




        <div class="c-footer--div__BOTTOM">
            <div class="c-footer--div__BOTTOM1">
                <div class="c-footer--div__SOCIAL">
                    <a class="c-footer--a__SOCIAL" href="#">
                        <?= \Site\Template::showSvg('/assets/images/svg/social-1.svg') ?>
                    </a>
                    <a class="c-footer--a__SOCIAL" href="#">
                        <?= \Site\Template::showSvg('/assets/images/svg/social-2.svg') ?>
                    </a>
                    <a class="c-footer--a__SOCIAL" href="#">
                        <?= \Site\Template::showSvg('/assets/images/svg/social-3.svg') ?>
                    </a>
                    <a class="c-footer--a__SOCIAL" href="#">
                        <?= \Site\Template::showSvg('/assets/images/svg/social-5.svg') ?>
                    </a>
                    <a class="c-footer--a__SOCIAL" href="#">
                        <?= \Site\Template::showSvg('/assets/images/svg/social-4.svg') ?>
                    </a>
                </div>

                <div class="c-footer--div__ADDRESS">
                    <span class="c-footer--span__ADDRESS">
                        Офис и R&D Центр
                    </span>
                    <span class="c-footer--span__ADDRESS">
                        127273, Москва, ул. Отрадная, д. 2Б, стр. 6, 7 этаж. Технопарк «Отрадное»
                    </span>
                </div>
            </div>
            <div class="c-footer--div__LINE"></div>
            <div class="c-footer--div__BOTTOM2">
                <a class="c-footer--a__RIGHTS" href="#">
                    Правовая информация
                </a>
                <span class="c-footer--span__BOTTOM2">
                    © 2025, ООО «АТБ ЭЛЕКТРОНИКА»
                </span>
                <div class="c-footer--div__EMPTY"></div>
            </div>
        </div>
    </div>
</footer>

</body>

</html>