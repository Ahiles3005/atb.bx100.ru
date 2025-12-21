<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<!-- Кнопка UP -->
<button class="c-common--button__UP">
    <?= \Site\Template::showSvg('/assets/images/svg/arrow-up-red.svg') ?>
</button>

    <!-- ФОРМА ОБРАТНОЙ СВЯЗИ (FeedBack)-->

    <div class="c-common--div__FB">
        <div class="c-common--div__FB_CONT">
            <button class="c-common--button__FB_CLOSE">
                <svg class="c-common--svg__FB_CLOSE" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)" fill="#005792"/>
                    <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)" fill="#005792"/>
                </svg>
            </button>

            <form class="c-common--form__FB __C-SCRL RIGHT" action="#" method="post" name="feedback" novalidate>
                <p class="c-common--p__FB_NAME">
                    Свяжитесь с нами, чтобы получить решение для вашей организации
                </p>
                <p class="c-common--p__FB_NAME">
                    Напишите нам
                </p>

                <p class="c-common--p__FB_TEXT">
                    Укажите ИНН, чтобы мы могли быстрее предоставить вам подробную информацию.
                </p>

                <label class="c-common--label__FB_INN">
                    <input class="c-common--input__FB_INN" type="number" name="feedback-inn" placeholder="ИНН">
                    <svg class="c-common--svg__FB_INN" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.0819 19.0003L10.9113 11.8294C10.3615 12.3161 9.72039 12.691 8.98803 12.9542C8.25568 13.2174 7.49753 13.349 6.7136 13.349C4.83722 13.349 3.24919 12.6996 1.94951 11.4009C0.649837 10.1019 0 8.52708 0 6.6763C0 4.82533 0.649376 3.24992 1.94813 1.95006C3.24688 0.65002 4.82377 0 6.67879 0C8.53363 0 10.1108 0.64956 11.4103 1.94868C12.7098 3.2478 13.3595 4.82322 13.3595 6.67492C13.3595 7.4489 13.2271 8.20254 12.9622 8.93581C12.6972 9.66909 12.3138 10.3333 11.8123 10.9284L19 18.0717L18.0819 19.0003ZM6.69675 12.0952C8.20622 12.0952 9.48508 11.5691 10.5333 10.517C11.5816 9.46509 12.1057 8.1843 12.1057 6.67464C12.1057 5.1648 11.5816 3.88392 10.5333 2.83199C9.48508 1.77987 8.20622 1.25381 6.69675 1.25381C5.1777 1.25381 3.89073 1.77987 2.83585 2.83199C1.78116 3.88392 1.25381 5.1648 1.25381 6.67464C1.25381 8.1843 1.78116 9.46509 2.83585 10.517C3.89073 11.5691 5.1777 12.0952 6.69675 12.0952Z" fill="#005792" fill-opacity="0.2"/>
                    </svg>
                    <ul class="c-common--ul__FB_INN">
                        <li class="c-common--li__FB_INN">
                            <span class="c-common--span__FB_INN_NM">ООО "Организация № 1"</span>
                            <p class="c-common--p__FB_INN_ADR">
                                Адрес:
                                <span class="c-common--span__FB_INN_ADR">
                                        141407, Московская область, город Химки, Транспортный пр-д, д. 2, помещ. 1.29
                                    </span>
                            </p>
                        </li>
                        <li class="c-common--li__FB_INN">
                            <span class="c-common--span__FB_INN_NM">ООО "Организация № 2"</span>
                            <p class="c-common--p__FB_INN_ADR">
                                Адрес:
                                <span class="c-common--span__FB_INN_ADR">
                                        141407, Московская область, город Химки, Транспортный пр-д, д. 2, помещ. 2.29
                                    </span>
                            </p>
                        </li>
                        <li class="c-common--li__FB_INN">
                            <span class="c-common--span__FB_INN_NM">ООО "Организация № 3"</span>
                            <p class="c-common--p__FB_INN_ADR">
                                Адрес:
                                <span class="c-common--span__FB_INN_ADR">
                                        141407, Московская область, город Химки, Транспортный пр-д, д. 2, помещ. 3.29
                                    </span>
                            </p>
                        </li>
                        <li class="c-common--li__FB_INN">
                            <span class="c-common--span__FB_INN_NM">ООО "Организация № 4"</span>
                            <p class="c-common--p__FB_INN_ADR">
                                Адрес:
                                <span class="c-common--span__FB_INN_ADR">
                                        141407, Московская область, город Химки, Транспортный пр-д, д. 2, помещ. 4.29
                                    </span>
                            </p>
                        </li>
                    </ul>
                </label>

                <label class="c-common--label__FB_ORG">
                    <input class="c-common--input__FB_ORG" type="text" name="feedback-org" placeholder="Компания">
                    <span class="c-common--span__FB_ORG">
                            (заполняется автоматически при вводе ИНН)
                        </span>
                </label>

                <p class="c-common--p__FB_ADR"></p>

                <label class="c-common--label__FB_NAME">
                    <input class="c-common--input__FB_NAME" type="text" name="feedback-org" placeholder="Имя Фамилия" required>
                    <span class="c-common--span__FB_NAME">
                            *
                        </span>
                    <svg class="c-common--svg__FB_NAME" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.79301 17C1.00996 17 0.530726 16.1407 0.942216 15.4745L9.6492 1.37748C10.04 0.744805 10.96 0.744806 11.3508 1.37748L20.0578 15.4745C20.4693 16.1407 19.99 17 19.207 17H1.79301ZM1.91243 15.4487C1.70623 15.7818 1.94581 16.2119 2.33756 16.2119H18.6624C19.0542 16.2119 19.2938 15.7818 19.0876 15.4487L10.9251 2.26293C10.7297 1.94716 10.2703 1.94716 10.0749 2.26293L1.91243 15.4487ZM10.5 14.5232C10.67 14.5232 10.8125 14.4692 10.9275 14.3613C11.0425 14.2534 11.1 14.1198 11.1 13.9603C11.1 13.8008 11.0425 13.6671 10.9275 13.5592C10.8125 13.4513 10.67 13.3974 10.5 13.3974C10.33 13.3974 10.1875 13.4513 10.0725 13.5592C9.9575 13.6671 9.9 13.8008 9.9 13.9603C9.9 14.1198 9.9575 14.2534 10.0725 14.3613C10.1875 14.4692 10.33 14.5232 10.5 14.5232ZM10.08 11.8515C10.08 12.0835 10.268 12.2715 10.5 12.2715C10.732 12.2715 10.92 12.0835 10.92 11.8515V7.06238C10.92 6.83042 10.732 6.64238 10.5 6.64238C10.268 6.64238 10.08 6.83042 10.08 7.06238V11.8515Z" fill="#C82121"/>
                    </svg>
                </label>

                <div class="c-common--div__FB_MAIL_TEL">
                    <label class="c-common--label__FB_MAIL">
                        <input class="c-common--input__FB_MAIL" type="email" name="feedback-mail" placeholder="Email" required>
                        <span class="c-common--span__FB_MAIL">
                                *
                            </span>
                        <svg class="c-common--svg__FB_MAIL" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.79301 17C1.00996 17 0.530726 16.1407 0.942216 15.4745L9.6492 1.37748C10.04 0.744805 10.96 0.744806 11.3508 1.37748L20.0578 15.4745C20.4693 16.1407 19.99 17 19.207 17H1.79301ZM1.91243 15.4487C1.70623 15.7818 1.94581 16.2119 2.33756 16.2119H18.6624C19.0542 16.2119 19.2938 15.7818 19.0876 15.4487L10.9251 2.26293C10.7297 1.94716 10.2703 1.94716 10.0749 2.26293L1.91243 15.4487ZM10.5 14.5232C10.67 14.5232 10.8125 14.4692 10.9275 14.3613C11.0425 14.2534 11.1 14.1198 11.1 13.9603C11.1 13.8008 11.0425 13.6671 10.9275 13.5592C10.8125 13.4513 10.67 13.3974 10.5 13.3974C10.33 13.3974 10.1875 13.4513 10.0725 13.5592C9.9575 13.6671 9.9 13.8008 9.9 13.9603C9.9 14.1198 9.9575 14.2534 10.0725 14.3613C10.1875 14.4692 10.33 14.5232 10.5 14.5232ZM10.08 11.8515C10.08 12.0835 10.268 12.2715 10.5 12.2715C10.732 12.2715 10.92 12.0835 10.92 11.8515V7.06238C10.92 6.83042 10.732 6.64238 10.5 6.64238C10.268 6.64238 10.08 6.83042 10.08 7.06238V11.8515Z" fill="#C82121"/>
                        </svg>
                        <span class="c-common--span__FB_TEL">
                                *
                            </span>
                        <svg class="c-common--svg__FB_TEL" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.79301 17C1.00996 17 0.530726 16.1407 0.942216 15.4745L9.6492 1.37748C10.04 0.744805 10.96 0.744806 11.3508 1.37748L20.0578 15.4745C20.4693 16.1407 19.99 17 19.207 17H1.79301ZM1.91243 15.4487C1.70623 15.7818 1.94581 16.2119 2.33756 16.2119H18.6624C19.0542 16.2119 19.2938 15.7818 19.0876 15.4487L10.9251 2.26293C10.7297 1.94716 10.2703 1.94716 10.0749 2.26293L1.91243 15.4487ZM10.5 14.5232C10.67 14.5232 10.8125 14.4692 10.9275 14.3613C11.0425 14.2534 11.1 14.1198 11.1 13.9603C11.1 13.8008 11.0425 13.6671 10.9275 13.5592C10.8125 13.4513 10.67 13.3974 10.5 13.3974C10.33 13.3974 10.1875 13.4513 10.0725 13.5592C9.9575 13.6671 9.9 13.8008 9.9 13.9603C9.9 14.1198 9.9575 14.2534 10.0725 14.3613C10.1875 14.4692 10.33 14.5232 10.5 14.5232ZM10.08 11.8515C10.08 12.0835 10.268 12.2715 10.5 12.2715C10.732 12.2715 10.92 12.0835 10.92 11.8515V7.06238C10.92 6.83042 10.732 6.64238 10.5 6.64238C10.268 6.64238 10.08 6.83042 10.08 7.06238V11.8515Z" fill="#C82121"/>
                        </svg>
                    </label>

                    <input class="c-common--input__FB_TEL" type="tel" name="feedback-tel" required>
                </div>

                <label class="c-common--label__FB_TA">
                    <textarea class="c-common--textarea__FB_TA" name="feedback-textarea" placeholder="Ваш вопрос" required></textarea>
                    <span class="c-common--span__FB_TA">
                            *
                        </span>
                    <svg class="c-common--svg__FB_TA" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.79301 17C1.00996 17 0.530726 16.1407 0.942216 15.4745L9.6492 1.37748C10.04 0.744805 10.96 0.744806 11.3508 1.37748L20.0578 15.4745C20.4693 16.1407 19.99 17 19.207 17H1.79301ZM1.91243 15.4487C1.70623 15.7818 1.94581 16.2119 2.33756 16.2119H18.6624C19.0542 16.2119 19.2938 15.7818 19.0876 15.4487L10.9251 2.26293C10.7297 1.94716 10.2703 1.94716 10.0749 2.26293L1.91243 15.4487ZM10.5 14.5232C10.67 14.5232 10.8125 14.4692 10.9275 14.3613C11.0425 14.2534 11.1 14.1198 11.1 13.9603C11.1 13.8008 11.0425 13.6671 10.9275 13.5592C10.8125 13.4513 10.67 13.3974 10.5 13.3974C10.33 13.3974 10.1875 13.4513 10.0725 13.5592C9.9575 13.6671 9.9 13.8008 9.9 13.9603C9.9 14.1198 9.9575 14.2534 10.0725 14.3613C10.1875 14.4692 10.33 14.5232 10.5 14.5232ZM10.08 11.8515C10.08 12.0835 10.268 12.2715 10.5 12.2715C10.732 12.2715 10.92 12.0835 10.92 11.8515V7.06238C10.92 6.83042 10.732 6.64238 10.5 6.64238C10.268 6.64238 10.08 6.83042 10.08 7.06238V11.8515Z" fill="#C82121"/>
                    </svg>
                </label>

                <button class="c-common--button__FB_SB" type="submit">
                    Отправить запрос
                </button>

                <label class="c-common--label__FB_APPR">
                    <input class="c-common--input__FB_APPR _REQ" type="checkbox" name="feedback-approve1" value="1" required>
                    <div class="c-common--div__FB_APPR">
                        <svg class="c-common--svg__FB_APPR" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"></path>
                        </svg>
                    </div>
                    <p class="c-common--p__FB_APPR">
                        Я даю ООО «АТБ Электроника» согласие на <a class="c-common--a__FB_APPR" href="#">Обработку моих персональных данных</a> для цели ответа на мою заявку.
                    </p>
                </label>

                <label class="c-common--label__FB_APPR">
                    <input class="c-common--input__FB_APPR" type="checkbox" name="feedback-approve2" value="1">
                    <div class="c-common--div__FB_APPR">
                        <svg class="c-common--svg__FB_APPR" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.33398 6L5.77843 11L14.6673 1" stroke="#005792" stroke-linecap="round"></path>
                        </svg>
                    </div>
                    <p class="c-common--p__FB_APPR">
                        Я даю согласие на получение рекламных и иных маркетинговых сообщений от ООО «АТБ Электроника» и <a class="c-common--a__FB_APPR" href="#">обработку моих персональных данных</a> для указанной цели.
                    </p>
                </label>
            </form>

            <div class="c-common--div__FB_IMAGE __C-SCRL LEFT">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-des_2.png" alt="">
            </div>
        </div>
    </div>

    <!-- ОТЧЕТ ОБ ОТПРАВКЕ ФОРМЫ -->

    <div class="c-common--div__FB_DONE">
        <div class="c-common--div__FB_DONE_CONT">
            <button class="c-common--button__FB_DONE_CLOSE">
                <svg class="c-common--svg__FB_DONE_CLOSE" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)" fill="#005792"/>
                    <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)" fill="#005792"/>
                </svg>
            </button>
            <p class="c-common--p__FB_DONE">
                Запрос успешно отправлен!
            </p>
        </div>
    </div>

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

<?php


use Bitrix\Main\Page\Asset;


$mainId = $APPLICATION->GetProperty('mainid','other');

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/libs/swiper/swiper-bundle.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/common/css/common.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/header/css/header.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/footer/css/footer.css');
Asset::getInstance()->addCss('https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/css/intlTelInput.css');

switch ($mainId) {
    case 'home':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home3-ind.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home5-hst.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home6-pre.css');
        break;

    case 'catalog':
        Asset::getInstance()->addCss('https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/css/intlTelInput.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/css/catalog1-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/css/catalog2-wrt.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/css/catalog3-abt.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        break;

    case 'catalog-n':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/css/catalog1-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/css/catalog2-wrt.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/css/catalog3-abt.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog-n/css/catalog-n1-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        break;


    case 'card':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home3-ind.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home5-hst.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home6-pre.css');

        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card0-common.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card2-adv.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card3-mod.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card4-abt.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card5-cnf.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card6-rec.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card7-use.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card8-mat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card9-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card10-med.css');
        break;

    case 'card-n':

        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home3-ind.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home5-hst.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home6-pre.css');

        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n1-mod.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n2-abt.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n3-mat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n5-med.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n5-rec.css');
        break;


}


Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/swiper/swiper-bundle.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/common/js/common.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/common/js/form.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/header/js/header.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/footer/js/footer.js');
Asset::getInstance()->addJs('https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/intlTelInput.min.js');

switch ($mainId) {
    case 'home':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/js/home0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/js/home1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/js/home2-cat.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/js/home3-ind.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/js/home4-des.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/js/home5-hst.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/js/home6-pre.js');
        break;

    case 'catalog':

        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/js/catalog0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/js/catalog1-cat.js');
        break;

    case 'catalog-n':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog-n/js/catalog-n0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog-n/js/catalog-n1-cat.js');
        break;

    case 'card':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card2-adv.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card3-mod.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card4-abt.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card5-cnf.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card6-rec.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card7-use.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card8-mat.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card10-med.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'card-n':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/js/card-n0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/js/card-n1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/js/card-n3-mod.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/js/card-n4-abt.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/js/card-n6-rec.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/js/card-n8-mat.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');

        break;
}


?>