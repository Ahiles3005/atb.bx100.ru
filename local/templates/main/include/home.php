<main id="home">


    <?$APPLICATION->IncludeComponent("bitrix:news.list", "home_baners", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
            "DISPLAY_DATE" => "Y",	// Выводить дату элемента
            "DISPLAY_NAME" => "Y",	// Выводить название элемента
            "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "FIELD_CODE" => array(	// Поля
                    0 => "",
                    1 => "",
            ),
            "FILTER_NAME" => "",	// Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "6",	// Код информационного блока
            "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "20",	// Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
            "PAGER_TITLE" => "Новости",	// Название категорий
            "PARENT_SECTION" => "",	// ID раздела
            "PARENT_SECTION_CODE" => "",	// Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(	// Свойства
                    0 => "URL",
                    1 => "TEXT_2",
                    2 => "TEXT_1",
                    3 => "NUMBER_2",
                    4 => "NUMBER_1",
                    5 => "",
            ),
            "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
            "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",	// Устанавливать статус 404
            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
            "SHOW_404" => "N",	// Показ специальной страницы
            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
    ),
            false
    );?>

    <!-- ---------- ********** СЕКЦИЯ CAT ********** ---------- -->


    <section class="hm-cat">
        <div class="hm-cat--div__CONT C-CONTAINER">
            <div class="c-common--div__HEAD">
                <h2 class="c-common--h2 __C-SCRL RIGHT">
                    Каталог
                </h2>

                <a class="c-common--a__ALL __C-SCRL DOWN" href="#">
                    СМОТРЕТЬ ВСЕ
                </a>
            </div>


            <div class="hm-cat--div__BODY">
                <ul class="hm-cat--ul__MENU __C-SCRL LEFT">
                    <li class="hm-cat--li__MENU_ITEM __C-SCRL DOWN">
                        <button class="hm-cat--button__MENU_ITEM">
                            <div class="hm-cat--div__MENU_ITEM">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/menu/Вычислительные-системы.png"
                                     alt="Вычислительные-системы">
                            </div>
                            <span class="hm-cat--span__MENU_ITEM">
                            Вычислительные<br>системы
                        </span>
                            <?= \Site\Template::showSvg('/local/templates/main/assets/<?=SITE_TEMPLATE_PATH?>/assets/images/svg/inline-svg-003.svg') ?>
                        </button>

                        <form class="hm-cat--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Промышленные компьютеры</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Аппаратные платформы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">SOM — процессорные модули</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Материнские платы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                        </form>

                    </li>
                    <li class="hm-cat--li__MENU_ITEM __C-SCRL DOWN">
                        <button class="hm-cat--button__MENU_ITEM">
                            <div class="hm-cat--div__MENU_ITEM">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/menu/АСУ-ТП.png" alt="АСУ-ТП">
                            </div>
                            <span class="hm-cat--span__MENU_ITEM">
                            АСУ ТП
                        </span>
                            <svg class="hm-cat--svg__MENU_ITEM" width="28" height="14" viewBox="0 0 28 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"/>
                            </svg>
                        </button>

                        <form class="hm-cat--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Аппаратные платформы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">SOM — процессорные модули</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Материнские платы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Промышленные компьютеры</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                        </form>
                    </li>
                    <li class="hm-cat--li__MENU_ITEM __C-SCRL DOWN">
                        <button class="hm-cat--button__MENU_ITEM">
                            <div class="hm-cat--div__MENU_ITEM">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/menu/Промышленный-интернет-вещей.png"
                                     alt="Промышленный-интернет-вещей">
                            </div>
                            <span class="hm-cat--span__MENU_ITEM">
                            Промышленный<br>интернет вещей
                        </span>
                            <svg class="hm-cat--svg__MENU_ITEM" width="28" height="14" viewBox="0 0 28 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"/>
                            </svg>
                        </button>

                        <form class="hm-cat--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Промышленные компьютеры</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Аппаратные платформы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">SOM — процессорные модули</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Материнские платы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                        </form>
                    </li>
                    <li class="hm-cat--li__MENU_ITEM __C-SCRL DOWN">
                        <button class="hm-cat--button__MENU_ITEM">
                            <div class="hm-cat--div__MENU_ITEM">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/menu/Контроль-и-мониторинг.png"
                                     alt="Контроль и мониторинг">
                            </div>
                            <span class="hm-cat--span__MENU_ITEM">
                            Контроль и<br>мониторинг
                        </span>
                            <svg class="hm-cat--svg__MENU_ITEM" width="28" height="14" viewBox="0 0 28 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"/>
                            </svg>
                        </button>

                        <form class="hm-cat--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Промышленные компьютеры</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Аппаратные платформы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">SOM — процессорные модули</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Материнские платы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                        </form>
                    </li>
                    <li class="hm-cat--li__MENU_ITEM __C-SCRL DOWN">
                        <button class="hm-cat--button__MENU_ITEM">
                            <div class="hm-cat--div__MENU_ITEM">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/menu/Аппаратные-платформы.png"
                                     alt="Аппаратные-платформы">
                            </div>
                            <span class="hm-cat--span__MENU_ITEM">
                            Аппаратные<br>платформы
                        </span>
                            <svg class="hm-cat--svg__MENU_ITEM" width="28" height="14" viewBox="0 0 28 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"/>
                            </svg>
                        </button>

                        <form class="hm-cat--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Промышленные компьютеры</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Аппаратные платформы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">SOM — процессорные модули</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Материнские платы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                        </form>
                    </li>
                    <li class="hm-cat--li__MENU_ITEM __C-SCRL DOWN">
                        <button class="hm-cat--button__MENU_ITEM">
                            <div class="hm-cat--div__MENU_ITEM">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/menu/Промышленные-компьютеры.png"
                                     alt="Промышленные-компьютеры">
                            </div>
                            <span class="hm-cat--span__MENU_ITEM">
                            Промышленные<br>компьютеры
                        </span>
                            <svg class="hm-cat--svg__MENU_ITEM" width="28" height="14" viewBox="0 0 28 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"/>
                            </svg>
                        </button>

                        <form class="hm-cat--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Промышленные компьютеры</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Аппаратные платформы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">SOM — процессорные модули</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Материнские платы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                        </form>
                    </li>
                    <li class="hm-cat--li__MENU_ITEM __C-SCRL DOWN">
                        <button class="hm-cat--button__MENU_ITEM">
                            <div class="hm-cat--div__MENU_ITEM">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/menu/Программое-обеспечение.png"
                                     alt="Программое-обеспечение">
                            </div>
                            <span class="hm-cat--span__MENU_ITEM">
                            Программное<br>обеспечение
                        </span>
                            <svg class="hm-cat--svg__MENU_ITEM" width="28" height="14" viewBox="0 0 28 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"/>
                            </svg>
                        </button>

                        <form class="hm-cat--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Промышленные компьютеры</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Аппаратные платформы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">SOM — процессорные модули</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Материнские платы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                        </form>
                    </li>
                    <li class="hm-cat--li__MENU_ITEM __C-SCRL DOWN">
                        <button class="hm-cat--button__MENU_ITEM">
                            <div class="hm-cat--div__MENU_ITEM">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/menu/АСУНО.png" alt="АСУНО">
                            </div>
                            <span class="hm-cat--span__MENU_ITEM">
                            АСУ НО
                        </span>
                            <svg class="hm-cat--svg__MENU_ITEM" width="28" height="14" viewBox="0 0 28 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"/>
                            </svg>
                        </button>

                        <form class="hm-cat--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Промышленные компьютеры</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Аппаратные платформы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">SOM — процессорные модули</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-cat--label__SUBMENU">
                                <input class="hm-cat--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-cat--span__SUBMENU">Материнские платы</span>
                                <a class="hm-cat--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                        </form>
                    </li>
                </ul>


                <div class="hm-cat--div__MAIN">
                    <div class="hm-cat--div__LEFT"></div>


                    <div class="hm-cat--div__CONTENT">
                        <article class="hm-cat--article__CARD __C-SCRL DOWN" href="#">
                            <div class="hm-cat--div__CARD_IMAGE">
                                <div class="hm-cat--div__SWIPER swiper">
                                    <div class="hm-cat--div__SWIPER_WRAPPER swiper-wrapper">
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_1.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_2.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_3.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_4.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_5.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_PAGINATION swiper-pagination"></div>
                                </div>


                                <div class="hm-cat--div__CARD_SENSOR"></div>


                                <a class="hm-cat--a__CARD_TAG" href="#">
                                    В реестре
                                </a>
                                <div class="hm-cat--div__CARD_BTNS">
                                    <button class="hm-cat--button__CARD_COMPARISON">
                                        <svg class="hm-cat--svg__CARD_COMPARISON" width="23" height="28"
                                             viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.2508 14H19.582V27.5H22.2508V14Z" fill="#BFBFBF"/>
                                            <path d="M2.66878 9.23438H0V27.5H2.66878V9.23438Z" fill="#BFBFBF"/>
                                            <path d="M12.4617 0.5H9.79297V27.5H12.4617V0.5Z" fill="#BFBFBF"/>
                                        </svg>
                                    </button>

                                    <button class="hm-cat--button__CARD_FAVOURITES">
                                        <svg class="hm-cat--svg__CARD_FAVOURITES" width="28" height="28"
                                             viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.8609 14.3162C20.7753 14.3162 19.8168 13.7066 19.3539 12.771H15.7222V8.12534C14.5322 7.79933 13.6553 6.71046 13.6553 5.41947C13.6553 4.12847 14.5322 3.03961 15.7222 2.7136V0.5H27.9996V12.771H24.3679C23.9017 13.7066 22.9465 14.3162 21.8609 14.3162ZM17.3522 11.1409H20.5699L20.7133 11.7734C20.8372 12.3113 21.3067 12.6862 21.8576 12.6862C22.4086 12.6862 22.8813 12.3113 23.0019 11.7734L23.1453 11.1409H26.363V2.13004H17.3457V4.24584H16.4524C15.8037 4.24584 15.2788 4.77397 15.2788 5.41947C15.2788 6.06496 15.8069 6.5931 16.4524 6.5931H17.3457V11.1409H17.3522Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M23.5017 27.4935H11.2275V22.6457L11.86 22.5023C12.3979 22.3784 12.7728 21.909 12.7728 21.358C12.7728 20.8071 12.3979 20.3343 11.86 20.2137L11.2275 20.0703V15.2225H15.3515V16.5559C15.3515 16.8298 15.4167 17.7295 16.2383 17.7295C17.0598 17.7295 17.125 16.8298 17.125 16.5559V15.2225H23.5017V27.5V27.4935ZM12.8576 25.8634H21.8717V16.8493H18.7453C18.6279 18.3392 17.6303 19.3531 16.2383 19.3531C14.8462 19.3531 13.8486 18.3359 13.7345 16.8461H12.8576V18.8477C13.7932 19.3139 14.4028 20.2691 14.4028 21.3548C14.4028 22.4404 13.7932 23.3988 12.8576 23.8618V25.8634Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M12.8601 27.4869H0.585938V15.2127H4.70666V16.5461C4.70666 16.8199 4.77187 17.7197 5.5934 17.7197C6.41494 17.7197 6.48014 16.8232 6.48014 16.5461V15.2127H12.8601V18.8444C13.7925 19.3106 14.4054 20.2626 14.4054 21.3482C14.4054 22.4371 13.7925 23.3923 12.8601 23.8552V27.4869ZM2.21597 25.8569H11.2301V22.6392L11.8625 22.4957C12.4004 22.3719 12.7721 21.9024 12.7753 21.3514C12.7753 20.8103 12.3906 20.3278 11.8625 20.2072L11.2301 20.0605V16.8427H8.1004C7.98303 18.3326 6.98545 19.3498 5.5934 19.3498C4.20135 19.3498 3.20377 18.3326 3.08967 16.8427H2.21597V25.8569Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M5.59666 19.353C4.20461 19.353 3.20703 18.3359 3.08967 16.846H0.585938V4.72504H12.8634V8.84904H11.53C11.2561 8.84904 10.3564 8.91425 10.3564 9.73579C10.3564 10.5573 11.2561 10.6225 11.53 10.6225H12.8634V16.846H8.1004C7.98303 18.3359 6.98545 19.353 5.59666 19.353ZM2.21597 15.216H4.70992V16.5494C4.70992 16.8232 4.77513 17.723 5.59666 17.723C6.4182 17.723 6.4834 16.8232 6.4834 16.5494V15.216H11.2333V12.2428C9.74347 12.1254 8.72633 11.1278 8.72633 9.73579C8.72633 8.34373 9.74347 7.34614 11.2333 7.23204V6.35508H2.21597V15.216Z"
                                                  fill="#BFBFBF"/>
                                        </svg>
                                    </button>
                                </div>
                                <img class="hm-cat--img__CARD_GISP"
                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-cat_icon.svg" alt="ГИСП">
                            </div>

                            <a class="hm-cat--a__CARD_NAME" href="#">
                                <p class="hm-cat--p__CARD_NAME1">
                                    АТБ-АТОМ-1.3
                                </p>
                                <p class="hm-cat--p__CARD_NAME2">
                                    Сетевая вычислительная платформа
                                </p>
                            </a>

                            <p class="hm-cat--p__CARD_TEXT">
                                Является сетевой вычислительной платформой,
                                вклюоный рер российскиный реестр российскиный
                                реестр российскиный рапавпвпаррор вашщшщестр российск
                            </p>
                            <ul class="hm-cat--ul__CARD_PARAMS">
                                <li class="hm-cat--li__CARD_PARAM">
                                    RK3568, 4 х Cortex-A55, 2.0 ГГц
                                </li>
                                <li class="hm-cat--li__CARD_PARAM">
                                    LPDDR4 non-ECC, от 4 до 8 Гб
                                </li>
                                <li class="hm-cat--li__CARD_PARAM">
                                    3 x Ethernet 1G/100M RJ45
                                </li>
                            </ul>
                            <div class="hm-cat--div__CARD_PRICE">
                                <p class="hm-cat--p__CARD_PRICE_CUR">
                                <span class="hm-cat--span__CARD_PRICE_CUR">
                                    100000
                                </span>
                                    <span class="hm-cat--span__CARD_PRICE_CUR">
                                    ₽
                                </span>
                                </p>
                                <p class="hm-cat--p__CARD_PRICE_OLD">
                                <span class="hm-cat--span__CARD_PRICE_OLD">
                                    250000
                                </span>
                                    <span class="hm-cat--span__CARD_PRICE_OLD">
                                    ₽
                                </span>
                                </p>
                                <button class="hm-cat--button__CARD_PRICE">
                                    %
                                </button>
                            </div>
                            <a class="hm-cat--a__CARD" href="#">
                                <span>ПОДРОБНЕЕ</span>
                                <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.166992 11H27.667M27.667 11L17.167 0.5M27.667 11L17.167 21.5"
                                          stroke="#C82121" stroke-width="0.25"/>
                                </svg>
                            </a>
                        </article>


                        <article class="hm-cat--article__CARD __C-SCRL DOWN" href="#">
                            <div class="hm-cat--div__CARD_IMAGE">
                                <div class="hm-cat--div__SWIPER swiper">
                                    <div class="hm-cat--div__SWIPER_WRAPPER swiper-wrapper">
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-2100/АТБ-2100_1.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-2100/АТБ-2100_2.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-2100/АТБ-2100_3.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-2100/АТБ-2100_4.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-2100/АТБ-2100_5.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-2100/АТБ-2100_6.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_PAGINATION swiper-pagination"></div>
                                </div>


                                <div class="hm-cat--div__CARD_SENSOR"></div>


                                <a class="hm-cat--a__CARD_TAG" href="#">
                                    Хит
                                </a>
                                <div class="hm-cat--div__CARD_BTNS">
                                    <button class="hm-cat--button__CARD_COMPARISON">
                                        <svg class="hm-cat--svg__CARD_COMPARISON" width="23" height="28"
                                             viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.2508 14H19.582V27.5H22.2508V14Z" fill="#BFBFBF"/>
                                            <path d="M2.66878 9.23438H0V27.5H2.66878V9.23438Z" fill="#BFBFBF"/>
                                            <path d="M12.4617 0.5H9.79297V27.5H12.4617V0.5Z" fill="#BFBFBF"/>
                                        </svg>
                                    </button>

                                    <button class="hm-cat--button__CARD_FAVOURITES">
                                        <svg class="hm-cat--svg__CARD_FAVOURITES" width="28" height="28"
                                             viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.8609 14.3162C20.7753 14.3162 19.8168 13.7066 19.3539 12.771H15.7222V8.12534C14.5322 7.79933 13.6553 6.71046 13.6553 5.41947C13.6553 4.12847 14.5322 3.03961 15.7222 2.7136V0.5H27.9996V12.771H24.3679C23.9017 13.7066 22.9465 14.3162 21.8609 14.3162ZM17.3522 11.1409H20.5699L20.7133 11.7734C20.8372 12.3113 21.3067 12.6862 21.8576 12.6862C22.4086 12.6862 22.8813 12.3113 23.0019 11.7734L23.1453 11.1409H26.363V2.13004H17.3457V4.24584H16.4524C15.8037 4.24584 15.2788 4.77397 15.2788 5.41947C15.2788 6.06496 15.8069 6.5931 16.4524 6.5931H17.3457V11.1409H17.3522Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M23.5017 27.4935H11.2275V22.6457L11.86 22.5023C12.3979 22.3784 12.7728 21.909 12.7728 21.358C12.7728 20.8071 12.3979 20.3343 11.86 20.2137L11.2275 20.0703V15.2225H15.3515V16.5559C15.3515 16.8298 15.4167 17.7295 16.2383 17.7295C17.0598 17.7295 17.125 16.8298 17.125 16.5559V15.2225H23.5017V27.5V27.4935ZM12.8576 25.8634H21.8717V16.8493H18.7453C18.6279 18.3392 17.6303 19.3531 16.2383 19.3531C14.8462 19.3531 13.8486 18.3359 13.7345 16.8461H12.8576V18.8477C13.7932 19.3139 14.4028 20.2691 14.4028 21.3548C14.4028 22.4404 13.7932 23.3988 12.8576 23.8618V25.8634Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M12.8601 27.4869H0.585938V15.2127H4.70666V16.5461C4.70666 16.8199 4.77187 17.7197 5.5934 17.7197C6.41494 17.7197 6.48014 16.8232 6.48014 16.5461V15.2127H12.8601V18.8444C13.7925 19.3106 14.4054 20.2626 14.4054 21.3482C14.4054 22.4371 13.7925 23.3923 12.8601 23.8552V27.4869ZM2.21597 25.8569H11.2301V22.6392L11.8625 22.4957C12.4004 22.3719 12.7721 21.9024 12.7753 21.3514C12.7753 20.8103 12.3906 20.3278 11.8625 20.2072L11.2301 20.0605V16.8427H8.1004C7.98303 18.3326 6.98545 19.3498 5.5934 19.3498C4.20135 19.3498 3.20377 18.3326 3.08967 16.8427H2.21597V25.8569Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M5.59666 19.353C4.20461 19.353 3.20703 18.3359 3.08967 16.846H0.585938V4.72504H12.8634V8.84904H11.53C11.2561 8.84904 10.3564 8.91425 10.3564 9.73579C10.3564 10.5573 11.2561 10.6225 11.53 10.6225H12.8634V16.846H8.1004C7.98303 18.3359 6.98545 19.353 5.59666 19.353ZM2.21597 15.216H4.70992V16.5494C4.70992 16.8232 4.77513 17.723 5.59666 17.723C6.4182 17.723 6.4834 16.8232 6.4834 16.5494V15.216H11.2333V12.2428C9.74347 12.1254 8.72633 11.1278 8.72633 9.73579C8.72633 8.34373 9.74347 7.34614 11.2333 7.23204V6.35508H2.21597V15.216Z"
                                                  fill="#BFBFBF"/>
                                        </svg>
                                    </button>
                                </div>
                                <img class="hm-cat--img__CARD_GISP"
                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-cat_icon.svg" alt="ГИСП">
                            </div>

                            <a class="hm-cat--a__CARD_NAME" href="#">
                                <p class="hm-cat--p__CARD_NAME1">
                                    АТБ-АТОМ-1.3
                                </p>
                                <p class="hm-cat--p__CARD_NAME2">
                                    Сетевая вычислительная платформа
                                </p>
                            </a>

                            <p class="hm-cat--p__CARD_TEXT">
                                Является сетевой вычислительной платформой,
                                вклюоный рер российскиный реестр российскиный
                                реестр российскиный рапавпвпаррор вашщшщестр российск
                            </p>
                            <ul class="hm-cat--ul__CARD_PARAMS">
                                <li class="hm-cat--li__CARD_PARAM">
                                    RK3568, 4 х Cortex-A55, 2.0 ГГц
                                </li>
                                <li class="hm-cat--li__CARD_PARAM">
                                    LPDDR4 non-ECC, от 4 до 8 Гб
                                </li>
                                <li class="hm-cat--li__CARD_PARAM">
                                    3 x Ethernet 1G/100M RJ45
                                </li>
                            </ul>
                            <div class="hm-cat--div__CARD_PRICE">
                                <p class="hm-cat--p__CARD_PRICE_CUR">
                                <span class="hm-cat--span__CARD_PRICE_CUR">
                                    100000
                                </span>
                                    <span class="hm-cat--span__CARD_PRICE_CUR">
                                    ₽
                                </span>
                                </p>
                                <p class="hm-cat--p__CARD_PRICE_OLD">
                                <span class="hm-cat--span__CARD_PRICE_OLD">
                                    250000
                                </span>
                                    <span class="hm-cat--span__CARD_PRICE_OLD">
                                    ₽
                                </span>
                                </p>
                                <button class="hm-cat--button__CARD_PRICE">
                                    %
                                </button>
                            </div>
                            <a class="hm-cat--a__CARD" href="#">
                                <span>ПОДРОБНЕЕ</span>
                                <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.166992 11H27.667M27.667 11L17.167 0.5M27.667 11L17.167 21.5"
                                          stroke="#C82121" stroke-width="0.25"/>
                                </svg>
                            </a>
                        </article>


                        <article class="hm-cat--article__CARD __C-SCRL DOWN" href="#">
                            <div class="hm-cat--div__CARD_IMAGE">
                                <div class="hm-cat--div__SWIPER swiper">
                                    <div class="hm-cat--div__SWIPER_WRAPPER swiper-wrapper">
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3568-MPC-G/АТБ-RK3568-MPC-G_1.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3568-MPC-G/АТБ-RK3568-MPC-G_2.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3568-MPC-G/АТБ-RK3568-MPC-G_3.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3568-MPC-G/АТБ-RK3568-MPC-G_4.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3568-MPC-G/АТБ-RK3568-MPC-G_5.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_PAGINATION swiper-pagination"></div>
                                </div>


                                <div class="hm-cat--div__CARD_SENSOR"></div>


                                <a class="hm-cat--a__CARD_TAG" href="#">
                                    В реестре
                                </a>
                                <div class="hm-cat--div__CARD_BTNS">
                                    <button class="hm-cat--button__CARD_COMPARISON">
                                        <svg class="hm-cat--svg__CARD_COMPARISON" width="23" height="28"
                                             viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.2508 14H19.582V27.5H22.2508V14Z" fill="#BFBFBF"/>
                                            <path d="M2.66878 9.23438H0V27.5H2.66878V9.23438Z" fill="#BFBFBF"/>
                                            <path d="M12.4617 0.5H9.79297V27.5H12.4617V0.5Z" fill="#BFBFBF"/>
                                        </svg>
                                    </button>

                                    <button class="hm-cat--button__CARD_FAVOURITES">
                                        <svg class="hm-cat--svg__CARD_FAVOURITES" width="28" height="28"
                                             viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.8609 14.3162C20.7753 14.3162 19.8168 13.7066 19.3539 12.771H15.7222V8.12534C14.5322 7.79933 13.6553 6.71046 13.6553 5.41947C13.6553 4.12847 14.5322 3.03961 15.7222 2.7136V0.5H27.9996V12.771H24.3679C23.9017 13.7066 22.9465 14.3162 21.8609 14.3162ZM17.3522 11.1409H20.5699L20.7133 11.7734C20.8372 12.3113 21.3067 12.6862 21.8576 12.6862C22.4086 12.6862 22.8813 12.3113 23.0019 11.7734L23.1453 11.1409H26.363V2.13004H17.3457V4.24584H16.4524C15.8037 4.24584 15.2788 4.77397 15.2788 5.41947C15.2788 6.06496 15.8069 6.5931 16.4524 6.5931H17.3457V11.1409H17.3522Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M23.5017 27.4935H11.2275V22.6457L11.86 22.5023C12.3979 22.3784 12.7728 21.909 12.7728 21.358C12.7728 20.8071 12.3979 20.3343 11.86 20.2137L11.2275 20.0703V15.2225H15.3515V16.5559C15.3515 16.8298 15.4167 17.7295 16.2383 17.7295C17.0598 17.7295 17.125 16.8298 17.125 16.5559V15.2225H23.5017V27.5V27.4935ZM12.8576 25.8634H21.8717V16.8493H18.7453C18.6279 18.3392 17.6303 19.3531 16.2383 19.3531C14.8462 19.3531 13.8486 18.3359 13.7345 16.8461H12.8576V18.8477C13.7932 19.3139 14.4028 20.2691 14.4028 21.3548C14.4028 22.4404 13.7932 23.3988 12.8576 23.8618V25.8634Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M12.8601 27.4869H0.585938V15.2127H4.70666V16.5461C4.70666 16.8199 4.77187 17.7197 5.5934 17.7197C6.41494 17.7197 6.48014 16.8232 6.48014 16.5461V15.2127H12.8601V18.8444C13.7925 19.3106 14.4054 20.2626 14.4054 21.3482C14.4054 22.4371 13.7925 23.3923 12.8601 23.8552V27.4869ZM2.21597 25.8569H11.2301V22.6392L11.8625 22.4957C12.4004 22.3719 12.7721 21.9024 12.7753 21.3514C12.7753 20.8103 12.3906 20.3278 11.8625 20.2072L11.2301 20.0605V16.8427H8.1004C7.98303 18.3326 6.98545 19.3498 5.5934 19.3498C4.20135 19.3498 3.20377 18.3326 3.08967 16.8427H2.21597V25.8569Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M5.59666 19.353C4.20461 19.353 3.20703 18.3359 3.08967 16.846H0.585938V4.72504H12.8634V8.84904H11.53C11.2561 8.84904 10.3564 8.91425 10.3564 9.73579C10.3564 10.5573 11.2561 10.6225 11.53 10.6225H12.8634V16.846H8.1004C7.98303 18.3359 6.98545 19.353 5.59666 19.353ZM2.21597 15.216H4.70992V16.5494C4.70992 16.8232 4.77513 17.723 5.59666 17.723C6.4182 17.723 6.4834 16.8232 6.4834 16.5494V15.216H11.2333V12.2428C9.74347 12.1254 8.72633 11.1278 8.72633 9.73579C8.72633 8.34373 9.74347 7.34614 11.2333 7.23204V6.35508H2.21597V15.216Z"
                                                  fill="#BFBFBF"/>
                                        </svg>
                                    </button>
                                </div>
                                <img class="hm-cat--img__CARD_GISP"
                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-cat_icon.svg" alt="ГИСП">
                            </div>

                            <a class="hm-cat--a__CARD_NAME" href="#">
                                <p class="hm-cat--p__CARD_NAME1">
                                    АТБ-АТОМ-1.3
                                </p>
                                <p class="hm-cat--p__CARD_NAME2">
                                    Сетевая вычислительная платформа
                                </p>
                            </a>

                            <p class="hm-cat--p__CARD_TEXT">
                                Является сетевой вычислительной платформой,
                                вклюоный рер российскиный реестр российскиный
                                реестр российскиный рапавпвпаррор вашщшщестр российск
                            </p>
                            <ul class="hm-cat--ul__CARD_PARAMS">
                                <li class="hm-cat--li__CARD_PARAM">
                                    RK3568, 4 х Cortex-A55, 2.0 ГГц
                                </li>
                                <li class="hm-cat--li__CARD_PARAM">
                                    LPDDR4 non-ECC, от 4 до 8 Гб
                                </li>
                                <li class="hm-cat--li__CARD_PARAM">
                                    3 x Ethernet 1G/100M RJ45
                                </li>
                            </ul>
                            <div class="hm-cat--div__CARD_PRICE">
                                <p class="hm-cat--p__CARD_PRICE_CUR">
                                <span class="hm-cat--span__CARD_PRICE_CUR">
                                    100000
                                </span>
                                    <span class="hm-cat--span__CARD_PRICE_CUR">
                                    ₽
                                </span>
                                </p>
                                <p class="hm-cat--p__CARD_PRICE_OLD">
                                <span class="hm-cat--span__CARD_PRICE_OLD">
                                    250000
                                </span>
                                    <span class="hm-cat--span__CARD_PRICE_OLD">
                                    ₽
                                </span>
                                </p>
                                <button class="hm-cat--button__CARD_PRICE">
                                    %
                                </button>
                            </div>
                            <a class="hm-cat--a__CARD" href="#">
                                <span>ПОДРОБНЕЕ</span>
                                <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.166992 11H27.667M27.667 11L17.167 0.5M27.667 11L17.167 21.5"
                                          stroke="#C82121" stroke-width="0.25"/>
                                </svg>
                            </a>
                        </article>


                        <article class="hm-cat--article__CARD __C-SCRL DOWN" href="#">
                            <div class="hm-cat--div__CARD_IMAGE">
                                <div class="hm-cat--div__SWIPER swiper">
                                    <div class="hm-cat--div__SWIPER_WRAPPER swiper-wrapper">
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-2400/АТБ-2400_1.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-2400/АТБ-2400_2.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-2400/АТБ-2400_3.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-2400/АТБ-2400_4.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_PAGINATION swiper-pagination"></div>
                                </div>


                                <div class="hm-cat--div__CARD_SENSOR"></div>


                                <a class="hm-cat--a__CARD_TAG" href="#">
                                    В реестре
                                </a>
                                <div class="hm-cat--div__CARD_BTNS">
                                    <button class="hm-cat--button__CARD_COMPARISON">
                                        <svg class="hm-cat--svg__CARD_COMPARISON" width="23" height="28"
                                             viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.2508 14H19.582V27.5H22.2508V14Z" fill="#BFBFBF"/>
                                            <path d="M2.66878 9.23438H0V27.5H2.66878V9.23438Z" fill="#BFBFBF"/>
                                            <path d="M12.4617 0.5H9.79297V27.5H12.4617V0.5Z" fill="#BFBFBF"/>
                                        </svg>
                                    </button>

                                    <button class="hm-cat--button__CARD_FAVOURITES">
                                        <svg class="hm-cat--svg__CARD_FAVOURITES" width="28" height="28"
                                             viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.8609 14.3162C20.7753 14.3162 19.8168 13.7066 19.3539 12.771H15.7222V8.12534C14.5322 7.79933 13.6553 6.71046 13.6553 5.41947C13.6553 4.12847 14.5322 3.03961 15.7222 2.7136V0.5H27.9996V12.771H24.3679C23.9017 13.7066 22.9465 14.3162 21.8609 14.3162ZM17.3522 11.1409H20.5699L20.7133 11.7734C20.8372 12.3113 21.3067 12.6862 21.8576 12.6862C22.4086 12.6862 22.8813 12.3113 23.0019 11.7734L23.1453 11.1409H26.363V2.13004H17.3457V4.24584H16.4524C15.8037 4.24584 15.2788 4.77397 15.2788 5.41947C15.2788 6.06496 15.8069 6.5931 16.4524 6.5931H17.3457V11.1409H17.3522Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M23.5017 27.4935H11.2275V22.6457L11.86 22.5023C12.3979 22.3784 12.7728 21.909 12.7728 21.358C12.7728 20.8071 12.3979 20.3343 11.86 20.2137L11.2275 20.0703V15.2225H15.3515V16.5559C15.3515 16.8298 15.4167 17.7295 16.2383 17.7295C17.0598 17.7295 17.125 16.8298 17.125 16.5559V15.2225H23.5017V27.5V27.4935ZM12.8576 25.8634H21.8717V16.8493H18.7453C18.6279 18.3392 17.6303 19.3531 16.2383 19.3531C14.8462 19.3531 13.8486 18.3359 13.7345 16.8461H12.8576V18.8477C13.7932 19.3139 14.4028 20.2691 14.4028 21.3548C14.4028 22.4404 13.7932 23.3988 12.8576 23.8618V25.8634Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M12.8601 27.4869H0.585938V15.2127H4.70666V16.5461C4.70666 16.8199 4.77187 17.7197 5.5934 17.7197C6.41494 17.7197 6.48014 16.8232 6.48014 16.5461V15.2127H12.8601V18.8444C13.7925 19.3106 14.4054 20.2626 14.4054 21.3482C14.4054 22.4371 13.7925 23.3923 12.8601 23.8552V27.4869ZM2.21597 25.8569H11.2301V22.6392L11.8625 22.4957C12.4004 22.3719 12.7721 21.9024 12.7753 21.3514C12.7753 20.8103 12.3906 20.3278 11.8625 20.2072L11.2301 20.0605V16.8427H8.1004C7.98303 18.3326 6.98545 19.3498 5.5934 19.3498C4.20135 19.3498 3.20377 18.3326 3.08967 16.8427H2.21597V25.8569Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M5.59666 19.353C4.20461 19.353 3.20703 18.3359 3.08967 16.846H0.585938V4.72504H12.8634V8.84904H11.53C11.2561 8.84904 10.3564 8.91425 10.3564 9.73579C10.3564 10.5573 11.2561 10.6225 11.53 10.6225H12.8634V16.846H8.1004C7.98303 18.3359 6.98545 19.353 5.59666 19.353ZM2.21597 15.216H4.70992V16.5494C4.70992 16.8232 4.77513 17.723 5.59666 17.723C6.4182 17.723 6.4834 16.8232 6.4834 16.5494V15.216H11.2333V12.2428C9.74347 12.1254 8.72633 11.1278 8.72633 9.73579C8.72633 8.34373 9.74347 7.34614 11.2333 7.23204V6.35508H2.21597V15.216Z"
                                                  fill="#BFBFBF"/>
                                        </svg>
                                    </button>
                                </div>
                                <img class="hm-cat--img__CARD_GISP"
                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-cat_icon.svg" alt="ГИСП">
                            </div>

                            <a class="hm-cat--a__CARD_NAME" href="#">
                                <p class="hm-cat--p__CARD_NAME1">
                                    АТБ-АТОМ-1.3
                                </p>
                                <p class="hm-cat--p__CARD_NAME2">
                                    Сетевая вычислительная платформа
                                </p>
                            </a>

                            <p class="hm-cat--p__CARD_TEXT">
                                Является сетевой вычислительной платформой,
                                вклюоный рер российскиный реестр российскиный
                                реестр российскиный рапавпвпаррор вашщшщестр российск
                            </p>
                            <ul class="hm-cat--ul__CARD_PARAMS">
                                <li class="hm-cat--li__CARD_PARAM">
                                    RK3568, 4 х Cortex-A55, 2.0 ГГц
                                </li>
                                <li class="hm-cat--li__CARD_PARAM">
                                    LPDDR4 non-ECC, от 4 до 8 Гб
                                </li>
                                <li class="hm-cat--li__CARD_PARAM">
                                    3 x Ethernet 1G/100M RJ45
                                </li>
                            </ul>
                            <div class="hm-cat--div__CARD_PRICE">
                                <p class="hm-cat--p__CARD_PRICE_CUR">
                                <span class="hm-cat--span__CARD_PRICE_CUR">
                                    100000
                                </span>
                                    <span class="hm-cat--span__CARD_PRICE_CUR">
                                    ₽
                                </span>
                                </p>
                                <p class="hm-cat--p__CARD_PRICE_OLD">
                                <span class="hm-cat--span__CARD_PRICE_OLD">
                                    250000
                                </span>
                                    <span class="hm-cat--span__CARD_PRICE_OLD">
                                    ₽
                                </span>
                                </p>
                                <button class="hm-cat--button__CARD_PRICE">
                                    %
                                </button>
                            </div>
                            <a class="hm-cat--a__CARD" href="#">
                                <span>ПОДРОБНЕЕ</span>
                                <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.166992 11H27.667M27.667 11L17.167 0.5M27.667 11L17.167 21.5"
                                          stroke="#C82121" stroke-width="0.25"/>
                                </svg>
                            </a>
                        </article>


                        <article class="hm-cat--article__CARD __C-SCRL DOWN" href="#">
                            <div class="hm-cat--div__CARD_IMAGE">
                                <div class="hm-cat--div__SWIPER swiper">
                                    <div class="hm-cat--div__SWIPER_WRAPPER swiper-wrapper">
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3568-MPC-M/АТБ-RK3568-MPC-M_1.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3568-MPC-M/АТБ-RK3568-MPC-M_2.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3568-MPC-M/АТБ-RK3568-MPC-M_3.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3568-MPC-M/АТБ-RK3568-MPC-M_4.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_PAGINATION swiper-pagination"></div>
                                </div>


                                <div class="hm-cat--div__CARD_SENSOR"></div>


                                <a class="hm-cat--a__CARD_TAG" href="#">
                                    В реестре
                                </a>
                                <div class="hm-cat--div__CARD_BTNS">
                                    <button class="hm-cat--button__CARD_COMPARISON">
                                        <svg class="hm-cat--svg__CARD_COMPARISON" width="23" height="28"
                                             viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.2508 14H19.582V27.5H22.2508V14Z" fill="#BFBFBF"/>
                                            <path d="M2.66878 9.23438H0V27.5H2.66878V9.23438Z" fill="#BFBFBF"/>
                                            <path d="M12.4617 0.5H9.79297V27.5H12.4617V0.5Z" fill="#BFBFBF"/>
                                        </svg>
                                    </button>

                                    <button class="hm-cat--button__CARD_FAVOURITES">
                                        <svg class="hm-cat--svg__CARD_FAVOURITES" width="28" height="28"
                                             viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.8609 14.3162C20.7753 14.3162 19.8168 13.7066 19.3539 12.771H15.7222V8.12534C14.5322 7.79933 13.6553 6.71046 13.6553 5.41947C13.6553 4.12847 14.5322 3.03961 15.7222 2.7136V0.5H27.9996V12.771H24.3679C23.9017 13.7066 22.9465 14.3162 21.8609 14.3162ZM17.3522 11.1409H20.5699L20.7133 11.7734C20.8372 12.3113 21.3067 12.6862 21.8576 12.6862C22.4086 12.6862 22.8813 12.3113 23.0019 11.7734L23.1453 11.1409H26.363V2.13004H17.3457V4.24584H16.4524C15.8037 4.24584 15.2788 4.77397 15.2788 5.41947C15.2788 6.06496 15.8069 6.5931 16.4524 6.5931H17.3457V11.1409H17.3522Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M23.5017 27.4935H11.2275V22.6457L11.86 22.5023C12.3979 22.3784 12.7728 21.909 12.7728 21.358C12.7728 20.8071 12.3979 20.3343 11.86 20.2137L11.2275 20.0703V15.2225H15.3515V16.5559C15.3515 16.8298 15.4167 17.7295 16.2383 17.7295C17.0598 17.7295 17.125 16.8298 17.125 16.5559V15.2225H23.5017V27.5V27.4935ZM12.8576 25.8634H21.8717V16.8493H18.7453C18.6279 18.3392 17.6303 19.3531 16.2383 19.3531C14.8462 19.3531 13.8486 18.3359 13.7345 16.8461H12.8576V18.8477C13.7932 19.3139 14.4028 20.2691 14.4028 21.3548C14.4028 22.4404 13.7932 23.3988 12.8576 23.8618V25.8634Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M12.8601 27.4869H0.585938V15.2127H4.70666V16.5461C4.70666 16.8199 4.77187 17.7197 5.5934 17.7197C6.41494 17.7197 6.48014 16.8232 6.48014 16.5461V15.2127H12.8601V18.8444C13.7925 19.3106 14.4054 20.2626 14.4054 21.3482C14.4054 22.4371 13.7925 23.3923 12.8601 23.8552V27.4869ZM2.21597 25.8569H11.2301V22.6392L11.8625 22.4957C12.4004 22.3719 12.7721 21.9024 12.7753 21.3514C12.7753 20.8103 12.3906 20.3278 11.8625 20.2072L11.2301 20.0605V16.8427H8.1004C7.98303 18.3326 6.98545 19.3498 5.5934 19.3498C4.20135 19.3498 3.20377 18.3326 3.08967 16.8427H2.21597V25.8569Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M5.59666 19.353C4.20461 19.353 3.20703 18.3359 3.08967 16.846H0.585938V4.72504H12.8634V8.84904H11.53C11.2561 8.84904 10.3564 8.91425 10.3564 9.73579C10.3564 10.5573 11.2561 10.6225 11.53 10.6225H12.8634V16.846H8.1004C7.98303 18.3359 6.98545 19.353 5.59666 19.353ZM2.21597 15.216H4.70992V16.5494C4.70992 16.8232 4.77513 17.723 5.59666 17.723C6.4182 17.723 6.4834 16.8232 6.4834 16.5494V15.216H11.2333V12.2428C9.74347 12.1254 8.72633 11.1278 8.72633 9.73579C8.72633 8.34373 9.74347 7.34614 11.2333 7.23204V6.35508H2.21597V15.216Z"
                                                  fill="#BFBFBF"/>
                                        </svg>
                                    </button>
                                </div>
                                <img class="hm-cat--img__CARD_GISP"
                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-cat_icon.svg" alt="ГИСП">
                            </div>

                            <a class="hm-cat--a__CARD_NAME" href="#">
                                <p class="hm-cat--p__CARD_NAME1">
                                    АТБ-АТОМ-1.3
                                </p>
                                <p class="hm-cat--p__CARD_NAME2">
                                    Сетевая вычислительная платформа
                                </p>
                            </a>

                            <p class="hm-cat--p__CARD_TEXT">
                                Является сетевой вычислительной платформой,
                                вклюоный рер российскиный реестр российскиный
                                реестр российскиный рапавпвпаррор вашщшщестр российск
                            </p>
                            <ul class="hm-cat--ul__CARD_PARAMS">
                                <li class="hm-cat--li__CARD_PARAM">
                                    RK3568, 4 х Cortex-A55, 2.0 ГГц
                                </li>
                                <li class="hm-cat--li__CARD_PARAM">
                                    LPDDR4 non-ECC, от 4 до 8 Гб
                                </li>
                                <li class="hm-cat--li__CARD_PARAM">
                                    3 x Ethernet 1G/100M RJ45
                                </li>
                            </ul>
                            <div class="hm-cat--div__CARD_PRICE">
                                <p class="hm-cat--p__CARD_PRICE_CUR">
                                <span class="hm-cat--span__CARD_PRICE_CUR">
                                    100000
                                </span>
                                    <span class="hm-cat--span__CARD_PRICE_CUR">
                                    ₽
                                </span>
                                </p>
                                <p class="hm-cat--p__CARD_PRICE_OLD">
                                <span class="hm-cat--span__CARD_PRICE_OLD">
                                    250000
                                </span>
                                    <span class="hm-cat--span__CARD_PRICE_OLD">
                                    ₽
                                </span>
                                </p>
                                <button class="hm-cat--button__CARD_PRICE">
                                    %
                                </button>
                            </div>
                            <a class="hm-cat--a__CARD" href="#">
                                <span>ПОДРОБНЕЕ</span>
                                <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.166992 11H27.667M27.667 11L17.167 0.5M27.667 11L17.167 21.5"
                                          stroke="#C82121" stroke-width="0.25"/>
                                </svg>
                            </a>
                        </article>


                        <article class="hm-cat--article__CARD __C-SCRL DOWN" href="#">
                            <div class="hm-cat--div__CARD_IMAGE">
                                <div class="hm-cat--div__SWIPER swiper">
                                    <div class="hm-cat--div__SWIPER_WRAPPER swiper-wrapper">
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_1.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_2.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_3.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_4.webp"
                                                     alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                            <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                                <img class="hm-cat--img__SWIPER_SLIDE"
                                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/ATB-RK3588J-SMC/АТБ-RK3588J-SMC_5.webp"
                                                     alt="товар" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hm-cat--div__SWIPER_PAGINATION swiper-pagination"></div>
                                </div>


                                <div class="hm-cat--div__CARD_SENSOR"></div>


                                <a class="hm-cat--a__CARD_TAG" href="#">
                                    Новинка
                                </a>
                                <div class="hm-cat--div__CARD_BTNS">
                                    <button class="hm-cat--button__CARD_COMPARISON">
                                        <svg class="hm-cat--svg__CARD_COMPARISON" width="23" height="28"
                                             viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.2508 14H19.582V27.5H22.2508V14Z" fill="#BFBFBF"/>
                                            <path d="M2.66878 9.23438H0V27.5H2.66878V9.23438Z" fill="#BFBFBF"/>
                                            <path d="M12.4617 0.5H9.79297V27.5H12.4617V0.5Z" fill="#BFBFBF"/>
                                        </svg>
                                    </button>

                                    <button class="hm-cat--button__CARD_FAVOURITES">
                                        <svg class="hm-cat--svg__CARD_FAVOURITES" width="28" height="28"
                                             viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.8609 14.3162C20.7753 14.3162 19.8168 13.7066 19.3539 12.771H15.7222V8.12534C14.5322 7.79933 13.6553 6.71046 13.6553 5.41947C13.6553 4.12847 14.5322 3.03961 15.7222 2.7136V0.5H27.9996V12.771H24.3679C23.9017 13.7066 22.9465 14.3162 21.8609 14.3162ZM17.3522 11.1409H20.5699L20.7133 11.7734C20.8372 12.3113 21.3067 12.6862 21.8576 12.6862C22.4086 12.6862 22.8813 12.3113 23.0019 11.7734L23.1453 11.1409H26.363V2.13004H17.3457V4.24584H16.4524C15.8037 4.24584 15.2788 4.77397 15.2788 5.41947C15.2788 6.06496 15.8069 6.5931 16.4524 6.5931H17.3457V11.1409H17.3522Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M23.5017 27.4935H11.2275V22.6457L11.86 22.5023C12.3979 22.3784 12.7728 21.909 12.7728 21.358C12.7728 20.8071 12.3979 20.3343 11.86 20.2137L11.2275 20.0703V15.2225H15.3515V16.5559C15.3515 16.8298 15.4167 17.7295 16.2383 17.7295C17.0598 17.7295 17.125 16.8298 17.125 16.5559V15.2225H23.5017V27.5V27.4935ZM12.8576 25.8634H21.8717V16.8493H18.7453C18.6279 18.3392 17.6303 19.3531 16.2383 19.3531C14.8462 19.3531 13.8486 18.3359 13.7345 16.8461H12.8576V18.8477C13.7932 19.3139 14.4028 20.2691 14.4028 21.3548C14.4028 22.4404 13.7932 23.3988 12.8576 23.8618V25.8634Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M12.8601 27.4869H0.585938V15.2127H4.70666V16.5461C4.70666 16.8199 4.77187 17.7197 5.5934 17.7197C6.41494 17.7197 6.48014 16.8232 6.48014 16.5461V15.2127H12.8601V18.8444C13.7925 19.3106 14.4054 20.2626 14.4054 21.3482C14.4054 22.4371 13.7925 23.3923 12.8601 23.8552V27.4869ZM2.21597 25.8569H11.2301V22.6392L11.8625 22.4957C12.4004 22.3719 12.7721 21.9024 12.7753 21.3514C12.7753 20.8103 12.3906 20.3278 11.8625 20.2072L11.2301 20.0605V16.8427H8.1004C7.98303 18.3326 6.98545 19.3498 5.5934 19.3498C4.20135 19.3498 3.20377 18.3326 3.08967 16.8427H2.21597V25.8569Z"
                                                  fill="#BFBFBF"/>
                                            <path d="M5.59666 19.353C4.20461 19.353 3.20703 18.3359 3.08967 16.846H0.585938V4.72504H12.8634V8.84904H11.53C11.2561 8.84904 10.3564 8.91425 10.3564 9.73579C10.3564 10.5573 11.2561 10.6225 11.53 10.6225H12.8634V16.846H8.1004C7.98303 18.3359 6.98545 19.353 5.59666 19.353ZM2.21597 15.216H4.70992V16.5494C4.70992 16.8232 4.77513 17.723 5.59666 17.723C6.4182 17.723 6.4834 16.8232 6.4834 16.5494V15.216H11.2333V12.2428C9.74347 12.1254 8.72633 11.1278 8.72633 9.73579C8.72633 8.34373 9.74347 7.34614 11.2333 7.23204V6.35508H2.21597V15.216Z"
                                                  fill="#BFBFBF"/>
                                        </svg>
                                    </button>
                                </div>
                                <img class="hm-cat--img__CARD_GISP"
                                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-cat_icon.svg" alt="ГИСП">
                            </div>

                            <a class="hm-cat--a__CARD_NAME" href="#">
                                <p class="hm-cat--p__CARD_NAME1">
                                    АТБ-АТОМ-1.3
                                </p>
                                <p class="hm-cat--p__CARD_NAME2">
                                    Сетевая вычислительная платформа
                                </p>
                            </a>

                            <p class="hm-cat--p__CARD_TEXT">
                                Является сетевой вычислительной платформой,
                                вклюоный рер российскиный реестр российскиный
                                реестр российскиный рапавпвпаррор вашщшщестр российск
                            </p>
                            <ul class="hm-cat--ul__CARD_PARAMS">
                                <li class="hm-cat--li__CARD_PARAM">
                                    RK3568, 4 х Cortex-A55, 2.0 ГГц
                                </li>
                                <li class="hm-cat--li__CARD_PARAM">
                                    LPDDR4 non-ECC, от 4 до 8 Гб
                                </li>
                                <li class="hm-cat--li__CARD_PARAM">
                                    3 x Ethernet 1G/100M RJ45
                                </li>
                            </ul>
                            <div class="hm-cat--div__CARD_PRICE">
                                <p class="hm-cat--p__CARD_PRICE_CUR">
                                <span class="hm-cat--span__CARD_PRICE_CUR">
                                    100000
                                </span>
                                    <span class="hm-cat--span__CARD_PRICE_CUR">
                                    ₽
                                </span>
                                </p>
                                <p class="hm-cat--p__CARD_PRICE_OLD">
                                <span class="hm-cat--span__CARD_PRICE_OLD">
                                    250000
                                </span>
                                    <span class="hm-cat--span__CARD_PRICE_OLD">
                                    ₽
                                </span>
                                </p>
                                <button class="hm-cat--button__CARD_PRICE">
                                    %
                                </button>
                            </div>
                            <a class="hm-cat--a__CARD" href="#">
                                <span>ПОДРОБНЕЕ</span>
                                <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.166992 11H27.667M27.667 11L17.167 0.5M27.667 11L17.167 21.5"
                                          stroke="#C82121" stroke-width="0.25"/>
                                </svg>
                            </a>
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <!-- <img class="hm-cat--img__ATOMS" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-cat_atoms.svg" alt="Молекула"> -->
    </section>


    <!-- ---------- ********** СЕКЦИЯ IND ********** ---------- -->


    <section class="hm-ind">
        <div class="hm-ind--div__CONT C-CONTAINER">
            <div class="c-common--div__HEAD hm-ind--div__HEAD" role="button">
                <h2 class="c-common--h2 __C-SCRL RIGHT">
                    Отрасли
                </h2>

                <a class="c-common--a__ALL hm-ind--a__ALL __C-SCRL DOWN" href="#">
                    СМОТРЕТЬ ВСЕ
                </a>

                <svg class="hm-ind--svg__SUBMENU" width="28" height="14" viewBox="0 0 28 14" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"></path>
                </svg>

                <!-- <img class="hm-ind--img__ATOMS" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-ind_atoms.svg" alt="Молекула"> -->
            </div>


            <form class="c-common--form__SUBMENU hm-ind--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                <label class="hm-ind--label__SUBMENU">
                    <input class="hm-ind--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-ind--span__SUBMENU">
                    Добыча и переработка полезных ископаемых
                </span>
                    <a class="hm-ind--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
                <label class="hm-ind--label__SUBMENU">
                    <input class="hm-ind--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-ind--span__SUBMENU">
                    Строительство и ЖКХ
                </span>
                    <a class="hm-ind--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
                <label class="hm-ind--label__SUBMENU">
                    <input class="hm-ind--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-ind--span__SUBMENU">
                    Железнодорожный транспорт
                </span>
                    <a class="hm-ind--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
                <label class="hm-ind--label__SUBMENU">
                    <input class="hm-ind--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-ind--span__SUBMENU">
                    Медицинская техника
                </span>
                    <a class="hm-ind--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
                <label class="hm-ind--label__SUBMENU">
                    <input class="hm-ind--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-ind--span__SUBMENU">
                    Банки и финансовый сектор
                </span>
                    <a class="hm-ind--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
                <label class="hm-ind--label__SUBMENU">
                    <input class="hm-ind--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-ind--span__SUBMENU">
                    Медицинская техника
                </span>
                    <a class="hm-ind--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
                <label class="hm-ind--label__SUBMENU">
                    <input class="hm-ind--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-ind--span__SUBMENU">
                    Медицинская техника
                </span>
                    <a class="hm-ind--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
                <label class="hm-ind--label__SUBMENU">
                    <input class="hm-ind--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-ind--span__SUBMENU">
                    Банки и финансовый сектор
                </span>
                    <a class="hm-ind--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
                <label class="hm-ind--label__SUBMENU">
                    <input class="hm-ind--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-ind--span__SUBMENU">
                    Медицинская техника
                </span>
                    <a class="hm-ind--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
            </form>
            <div class="hm-ind--div__SUBMENU_BACK"></div>


            <div class="с-common--div__SECT_MAIN hm-ind--div__MAIN">
                <div class="с-common--div__SECT_LEFT hm-ind--div__LEFT"></div>


                <div class="с-common--div__SECT_CONTENT hm-ind--div__CONTENT">
                    <article class="hm-ind--article__CARD __C-SCRL DOWN">
                        <a class="hm-ind--a__CARD_TAG color-yellow" href="#">
                            <div class="hm-ind--div__CARD_TAG_CIRCLE"></div>
                            <span class="hm-ind--span__CARD_TAG">
                            СТРОИТЕЛЬСТВО И ЖКХ
                        </span>
                        </a>
                        <p class="hm-ind--p__CARD_NAME">
                            Решение по отслеживанию перевозок
                        </p>
                        <p class="hm-ind--p__CARD_TEXT">
                            Решение направлено на повышение безопасности
                            транспортировки точки зрения безопасности
                            обслуживающего персонала.
                        </p>

                        <div class="hm-ind--div__CARD_IMAGE">
                            <a class="hm-ind--a__MORE" href="#">
                                <span class="hm-ind--span__MORE">ПОДРОБНЕЕ</span>
                                <svg width="27" height="20" viewBox="0 0 27 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 10H26M26 10L16.0727 1M26 10L16.0727 19" stroke="white"
                                          stroke-width="0.55"/>
                                </svg>
                            </a>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-ind_1.png" alt="Отрасли 1"
                                 loading="lazy">
                        </div>
                    </article>

                    <article class="hm-ind--article__CARD __C-SCRL DOWN">
                        <a class="hm-ind--a__CARD_TAG color-green" href="#">
                            <div class="hm-ind--div__CARD_TAG_CIRCLE"></div>
                            <span class="hm-ind--span__CARD_TAG">
                            ЖЕЛЕЗНОДОРОЖНЫЙ ТРАНСПОРТ
                        </span>
                        </a>
                        <p class="hm-ind--p__CARD_NAME">
                            Решение по отслеживанию перевозок
                        </p>
                        <p class="hm-ind--p__CARD_TEXT">
                            Решение направлено на повышение безопасности
                            транспортировки точки зрения безопасности
                            обслуживающего персонала.
                        </p>

                        <div class="hm-ind--div__CARD_IMAGE">
                            <a class="hm-ind--a__MORE" href="#">
                                <span class="hm-ind--span__MORE">ПОДРОБНЕЕ</span>
                                <svg width="27" height="20" viewBox="0 0 27 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 10H26M26 10L16.0727 1M26 10L16.0727 19" stroke="white"
                                          stroke-width="0.55"/>
                                </svg>
                            </a>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-ind_2.png" alt="Отрасли 2"
                                 loading="lazy">
                        </div>
                    </article>

                    <article class="hm-ind--article__CARD __C-SCRL DOWN">
                        <a class="hm-ind--a__CARD_TAG color-mare" href="#">
                            <div class="hm-ind--div__CARD_TAG_CIRCLE"></div>
                            <span class="hm-ind--span__CARD_TAG">
                            МЕДИЦИНСКАЯ ТЕХНИКА
                        </span>
                        </a>
                        <p class="hm-ind--p__CARD_NAME">
                            Решение по отслеживанию перевозок
                        </p>
                        <p class="hm-ind--p__CARD_TEXT">
                            Решение направлено на повышение безопасности
                            транспортировки точки зрения безопасности
                            обслуживающего персонала.
                        </p>

                        <div class="hm-ind--div__CARD_IMAGE">
                            <a class="hm-ind--a__MORE" href="#">
                                <span class="hm-ind--span__MORE">ПОДРОБНЕЕ</span>
                                <svg width="27" height="20" viewBox="0 0 27 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 10H26M26 10L16.0727 1M26 10L16.0727 19" stroke="white"
                                          stroke-width="0.55"/>
                                </svg>
                            </a>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-ind_3.png" alt="Отрасли 3"
                                 loading="lazy">
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>


    <!-- ---------- ********** СЕКЦИЯ DES ********** ---------- -->


    <section class="hm-des">
        <div class="hm-des--div__CONT C-CONTAINER">
            <div class="c-common--div__HEAD hm-des--div__HEAD" role="button">
                <h2 class="c-common--h2 __C-SCRL RIGHT">
                    Решения
                </h2>

                <a class="c-common--a__ALL hm-des--a__ALL __C-SCRL DOWN" href="#">
                    СМОТРЕТЬ ВСЕ
                </a>

                <svg class="hm-des--svg__SUBMENU" width="28" height="14" viewBox="0 0 28 14" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"></path>
                </svg>
            </div>


            <form class="c-common--form__SUBMENU hm-des--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                <label class="hm-des--label__SUBMENU">
                    <input class="hm-des--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-des--span__SUBMENU">
                    Пограничные вычисления
                </span>
                    <a class="hm-des--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
                <label class="hm-des--label__SUBMENU">
                    <input class="hm-des--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-des--span__SUBMENU">
                    Информационная безопасность (ИБ)
                </span>
                    <a class="hm-des--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
                <label class="hm-des--label__SUBMENU">
                    <input class="hm-des--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-des--span__SUBMENU">
                    Автоматизация процессов (АСУ ТП)
                </span>
                    <a class="hm-des--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
                <label class="hm-des--label__SUBMENU">
                    <input class="hm-des--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-des--span__SUBMENU">
                    Контроль и мониторинг
                </span>
                    <a class="hm-des--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
                <label class="hm-des--label__SUBMENU">
                    <input class="hm-des--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-des--span__SUBMENU">
                    Отопление, вентиляция, охлаждение (HVAC)
                </span>
                    <a class="hm-des--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
                <label class="hm-des--label__SUBMENU">
                    <input class="hm-des--input__SUBMENU" type="radio" name="1" value="">
                    <span class="hm-des--span__SUBMENU">
                    Промышленный интернет вещей (IIOT)
                </span>
                    <a class="hm-des--a__SUBMENU" href="#">Перейти в раздел</a>
                </label>
            </form>


            <div class="с-common--div__SECT_MAIN hm-des--div__MAIN">
                <div class="с-common--div__SECT_LEFT hm-des--div__LEFT"></div>


                <div class="с-common--div__SECT_CONTENT hm-des--div__CONTENT">
                    <article class="hm-des--article__CARD __C-SCRL DOWN">
                        <div class="hm-des--div__CARD_TEXT">
                            <a class="hm-des--a__CARD_TAG color-green" href="#">
                                <div class="hm-des--div__CARD_TAG_CIRCLE"></div>
                                <span class="hm-des--span__CARD_TAG">
                                ПОГРАНИЧНЫЕ ВЫЧИСЛЕНИЯ
                            </span>
                            </a>
                            <p class="hm-des--p__CARD_NAME">
                                Решение по отслеживанию контейнерных перевозок
                            </p>
                            <ul class="hm-des--ul__CARD_LIST">
                                <li class="hm-des--li__CARD_LIST">
                                    Контроль отклонений
                                </li>
                                <div class="hm-des--div__CARD_LIST"></div>
                                <li class="hm-des--li__CARD_LIST">
                                    Формирование отчетов о поездках
                                </li>
                                <div class="hm-des--div__CARD_LIST"></div>
                                <li class="hm-des--li__CARD_LIST">
                                    Оповещение при въезде
                                </li>
                            </ul>
                            <p class="hm-des--p__CARD_TEXT">
                                Решение направлено на повышение безопасности
                                транспортировки грузовых контейнеров, как с точки
                                зрения сохранности груза, так и с точки зрения
                                безопасности обслуживающего персонала.
                                Оно позволяет сделать прозрачным весь процесс
                                транспортировки до пункта назначену.
                            </p>
                        </div>


                        <div class="hm-des--div__CARD_IMAGE">
                            <a class="hm-des--a__MORE" href="#">
                                <span class="hm-des--span__MORE">ПОДРОБНЕЕ</span>
                                <svg width="27" height="20" viewBox="0 0 27 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 10H26M26 10L16.0727 1M26 10L16.0727 19" stroke="white"
                                          stroke-width="0.55"/>
                                </svg>
                            </a>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-des_1.png" alt="Решение 1"
                                 loading="lazy">
                        </div>
                    </article>

                    <article class="hm-des--article__CARD __C-SCRL DOWN">
                        <div class="hm-des--div__CARD_TEXT">
                            <a class="hm-des--a__CARD_TAG color-green" href="#">
                                <div class="hm-des--div__CARD_TAG_CIRCLE"></div>
                                <span class="hm-des--span__CARD_TAG">
                                ПОГРАНИЧНЫЕ ВЫЧИСЛЕНИЯ
                            </span>
                            </a>
                            <p class="hm-des--p__CARD_NAME">
                                Решение по отслеживанию контейнерных перевозок
                            </p>
                            <ul class="hm-des--ul__CARD_LIST">
                                <li class="hm-des--li__CARD_LIST">
                                    Контроль отклонений
                                </li>
                                <div class="hm-des--div__CARD_LIST"></div>
                                <li class="hm-des--li__CARD_LIST">
                                    Формирование отчетов о поездках
                                </li>
                                <div class="hm-des--div__CARD_LIST"></div>
                                <li class="hm-des--li__CARD_LIST">
                                    Оповещение при въезде
                                </li>
                            </ul>
                            <p class="hm-des--p__CARD_TEXT">
                                Решение направлено на повышение безопасности
                                транспортировки грузовых контейнеров, как с точки
                                зрения сохранности груза, так и с точки зрения
                                безопасности обслуживающего персонала.
                                Оно позволяет сделать прозрачным весь процесс
                                транспортировки до пункта назначену.
                            </p>
                        </div>


                        <div class="hm-des--div__CARD_IMAGE">
                            <a class="hm-des--a__MORE" href="#">
                                <span class="hm-des--span__MORE">ПОДРОБНЕЕ</span>
                                <svg width="27" height="20" viewBox="0 0 27 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 10H26M26 10L16.0727 1M26 10L16.0727 19" stroke="white"
                                          stroke-width="0.55"/>
                                </svg>
                            </a>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-des_2.png" alt="Решение 2"
                                 loading="lazy">
                        </div>
                    </article>

                    <article class="hm-des--article__CARD __C-SCRL DOWN">
                        <div class="hm-des--div__CARD_TEXT">
                            <a class="hm-des--a__CARD_TAG color-green" href="#">
                                <div class="hm-des--div__CARD_TAG_CIRCLE"></div>
                                <span class="hm-des--span__CARD_TAG">
                                ПОГРАНИЧНЫЕ ВЫЧИСЛЕНИЯ
                            </span>
                            </a>
                            <p class="hm-des--p__CARD_NAME">
                                Решение по отслеживанию контейнерных перевозок
                            </p>
                            <ul class="hm-des--ul__CARD_LIST">
                                <li class="hm-des--li__CARD_LIST">
                                    Контроль отклонений
                                </li>
                                <div class="hm-des--div__CARD_LIST"></div>
                                <li class="hm-des--li__CARD_LIST">
                                    Формирование отчетов о поездках
                                </li>
                                <div class="hm-des--div__CARD_LIST"></div>
                                <li class="hm-des--li__CARD_LIST">
                                    Оповещение при въезде
                                </li>
                            </ul>
                            <p class="hm-des--p__CARD_TEXT">
                                Решение направлено на повышение безопасности
                                транспортировки грузовых контейнеров, как с точки
                                зрения сохранности груза, так и с точки зрения
                                безопасности обслуживающего персонала.
                                Оно позволяет сделать прозрачным весь процесс
                                транспортировки до пункта назначену.
                            </p>
                        </div>


                        <div class="hm-des--div__CARD_IMAGE">
                            <a class="hm-des--a__MORE" href="#">
                                <span class="hm-des--span__MORE">ПОДРОБНЕЕ</span>
                                <svg width="27" height="20" viewBox="0 0 27 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 10H26M26 10L16.0727 1M26 10L16.0727 19" stroke="white"
                                          stroke-width="0.55"/>
                                </svg>
                            </a>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-des_3.png" alt="Решение 3"
                                 loading="lazy">
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <!-- <img class="hm-des--img__ATOMS" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-des_atoms.svg" alt="Молекула"> -->
    </section>


    <!-- ---------- ********** СЕКЦИЯ HST ********** ---------- -->


    <section class="hm-hst">
        <div class="hm-hst--div__CONT C-CONTAINER">
            <div class="c-common--div__HEAD">
                <h2 class="c-common--h2 __C-SCRL RIGHT">
                    Истории успеха
                </h2>

                <a class="c-common--a__ALL __C-SCRL DOWN" href="#">
                    СМОТРЕТЬ ВСЕ
                </a>
            </div>


            <div class="hm-hst--div__BODY">
                <ul class="hm-hst--ul__MENU __C-SCRL LEFT">
                    <li class="hm-hst--li__MENU_ITEM">
                        <button class="hm-hst--button__MENU_ITEM">
                        <span class="hm-hst--span__MENU_ITEM">
                            По отраслям
                        </span>
                            <svg class="hm-hst--svg__MENU_ITEM" width="28" height="14" viewBox="0 0 28 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"/>
                            </svg>
                        </button>

                        <form class="hm-hst--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Добыча и переработка полезных ископаемых
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Строительство и ЖКХ
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Железнодорожный транспорт
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Медицинская техника
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Инфраструктура
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Электроэнергетика
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Телекоммуникации
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                        </form>
                    </li>


                    <li class="hm-hst--li__MENU_ITEM">
                        <button class="hm-hst--button__MENU_ITEM">
                        <span class="hm-hst--span__MENU_ITEM">
                            По решениям
                        </span>
                            <svg class="hm-hst--svg__MENU_ITEM" width="28" height="14" viewBox="0 0 28 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"/>
                            </svg>
                        </button>

                        <form class="hm-hst--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Строительство и ЖКХ
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Добыча и переработка полезных ископаемых
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Железнодорожный транспорт
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Медицинская техника
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Инфраструктура
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Электроэнергетика
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Телекоммуникации
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Инфраструктура
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Электроэнергетика
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                            <label class="hm-hst--label__SUBMENU">
                                <input class="hm-hst--input__SUBMENU" type="radio" name="1" value="">
                                <span class="hm-hst--span__SUBMENU">
                                Телекоммуникации
                            </span>
                                <a class="hm-hst--a__SUBMENU" href="#">Перейти в раздел</a>
                            </label>
                        </form>
                        <div class="hm-hst--div__SUBMENU_BACK"></div>
                    </li>

                    <div class="hm-hst--div__LINE"></div>
                </ul>


                <div class="hm-hst--div__MAIN">
                    <div class="hm-hst--div__LEFT"></div>


                    <div class="hm-hst--div__CONTENT">
                        <article class="hm-hst--article__CARD __C-SCRL DOWN">
                            <a class="hm-hst--a__CARD_TAG color-green" href="#">
                                <div class="hm-hst--div__CARD_TAG_CIRCLE"></div>
                                <span class="hm-hst--span__CARD_TAG">
                                БАНКИ И ФИНАНСОВЫЙ СЕКТОР
                            </span>
                            </a>
                            <p class="hm-hst--p__CARD_NAME">
                                Система шлюзов для банкоматов и терминалов
                                оплаты в ведущем российском федеральном банке
                            </p>
                            <p class="hm-hst--p__CARD_TEXT">
                                Аппаратная платформа АТБ - АТОМ 1 в составе
                                программно-аппаратного комплекса (ПАК),
                                выполняет функции межсетевого экранирования,
                                криптографического шлюза, устройств защиты
                                информации сети.
                            </p>

                            <div class="hm-hst--div__CARD_IMAGE">
                                <a class="hm-hst--a__MORE" href="#">
                                    <span class="hm-hst--span__MORE">ПОДРОБНЕЕ</span>
                                    <svg width="27" height="20" viewBox="0 0 27 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 10H26M26 10L16.0727 1M26 10L16.0727 19" stroke="white"
                                              stroke-width="0.55"/>
                                    </svg>
                                </a>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-hst_1.png"
                                     alt="Истории успеха 1" loading="lazy">
                            </div>
                        </article>


                        <article class="hm-hst--article__CARD __C-SCRL DOWN">
                            <a class="hm-hst--a__CARD_TAG color-mare" href="#">
                                <div class="hm-hst--div__CARD_TAG_CIRCLE"></div>
                                <span class="hm-hst--span__CARD_TAG">
                                СТРОИТЕЛЬСТВО И ЖКХ
                            </span>
                            </a>
                            <p class="hm-hst--p__CARD_NAME">
                                Управление компактными вентиляционными установками
                                на основе параметрического контроллера АТБ-2100
                            </p>
                            <p class="hm-hst--p__CARD_TEXT">
                                Решение на основе параметрического контроллера АТБ-2100
                                используется для управления компактными вентиляционными
                                установками в коттеджах и небольших помещениях в составе
                                комплексного решения партнёра.
                            </p>

                            <div class="hm-hst--div__CARD_IMAGE">
                                <a class="hm-hst--a__MORE" href="#">
                                    <span class="hm-hst--span__MORE">ПОДРОБНЕЕ</span>
                                    <svg width="27" height="20" viewBox="0 0 27 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 10H26M26 10L16.0727 1M26 10L16.0727 19" stroke="white"
                                              stroke-width="0.55"/>
                                    </svg>
                                </a>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-hst_2.png"
                                     alt="Истории успеха 2" loading="lazy">
                            </div>
                        </article>
                    </div>
                </div>
            </div>


        </div>
        <!-- <img class="hm-hst--img__ATOMS" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-hst_atoms.svg" alt="Молекула"> -->
    </section>


    <!-- ---------- ********** СЕКЦИЯ PRE ********** ---------- -->


    <section class="hm-pre">
        <div class="hm-pre--div__CONT C-CONTAINER">
            <div class="c-common--div__HEAD">
                <h2 class="c-common--h2 __C-SCRL RIGHT">
                    Пресс-центр
                </h2>

                <a class="c-common--a__ALL __C-SCRL DOWN" href="#">
                    СМОТРЕТЬ ВСЕ
                </a>
            </div>


            <div class="hm-pre--div__BODY">
                <form class="hm-pre--form__SUBMENU __C-SCRL DOWN" action="#" method="" name="">
                    <label class="hm-pre--label__SUBMENU1">
                        <input class="hm-pre--input__SUBMENU" type="radio" name="1" value="">
                        <span class="hm-pre--span__SUBMENU hm-pre--span__SUBMENU1">
                       Все
                    </span>
                        <svg class="hm-pre--svg__SUBMENU" width="28" height="14" viewBox="0 0 28 14" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L14 13.2353L27 1" stroke="#0C0C0C" stroke-width="0.25"/>
                        </svg>
                    </label>

                    <div class="hm-pre--div__FORM_BODY">
                        <label class="hm-pre--label__SUBMENU" role="button">
                            <input class="hm-pre--input__SUBMENU" type="radio" name="1" value="">
                            <span class="hm-pre--span__SUBMENU">
                            Новости
                        </span>
                            <div class="hm-pre--div__TRI"></div>
                        </label>
                        <label class="hm-pre--label__SUBMENU">
                            <input class="hm-pre--input__SUBMENU" type="radio" name="1" value="">
                            <span class="hm-pre--span__SUBMENU">
                            Мероприятия
                        </span>
                            <div class="hm-pre--div__TRI"></div>
                        </label>
                        <label class="hm-pre--label__SUBMENU">
                            <input class="hm-pre--input__SUBMENU" type="radio" name="1" value="">
                            <span class="hm-pre--span__SUBMENU">
                            Статьи
                        </span>
                            <div class="hm-pre--div__TRI"></div>
                        </label>
                        <label class="hm-pre--label__SUBMENU">
                            <input class="hm-pre--input__SUBMENU" type="radio" name="1" value="">
                            <span class="hm-pre--span__SUBMENU">
                            Видео
                        </span>
                            <div class="hm-pre--div__TRI"></div>
                        </label>
                    </div>

                    <div class="hm-pre--div__LINE"></div>
                </form>


                <div class="hm-pre--div__CONTENT">
                    <article class="hm-pre--article__CARD __C-SCRL DOWN">
                        <a class="hm-pre--a__CARD" href="#"></a>
                        <div class="hm-pre--div__CARD_IMAGE">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-pre_1.png" alt="Пресс-центр 1"
                                 loading="lazy">
                        </div>
                        <a class="hm-pre--a__CARD_TAG1" href="#">
                            Статьи
                        </a>
                        <p class="hm-pre--p__CARD_NAME">
                            Мультимедийные системы промышленных встроенных одноплатных мини компьютеров
                        </p>
                        <div class="hm-pre--div__CARD_BOTTOM">
                            <a class="hm-pre--a__CARD_TAG color-green" href="#">
                                <div class="hm-pre--div__CARD_TAG_CIRCLE"></div>
                                <span class="hm-pre--span__CARD_TAG">
                                ИНФОРМАЦИОННАЯ БЕЗОПАСНОСТЬ (ИБ)
                            </span>
                            </a>
                            <span class="hm-pre--span__CARD_DATE">
                            27.06.2025
                        </span>
                        </div>
                    </article>


                    <article class="hm-pre--article__CARD __C-SCRL DOWN">
                        <a class="hm-pre--a__CARD" href="#"></a>
                        <div class="hm-pre--div__CARD_IMAGE">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-pre_2.png" alt="Пресс-центр 2"
                                 loading="lazy">
                        </div>
                        <a class="hm-pre--a__CARD_TAG1" href="#">
                            Новости
                        </a>
                        <p class="hm-pre--p__CARD_NAME">
                            Мультимедийные системы промышленных встроенных одноплатных мини компьютеров
                        </p>
                        <div class="hm-pre--div__CARD_BOTTOM">
                            <a class="hm-pre--a__CARD_TAG color-mare" href="#">
                                <div class="hm-pre--div__CARD_TAG_CIRCLE"></div>
                                <span class="hm-pre--span__CARD_TAG">
                                ОТОПЛЕНИЕ, ВЕНТИЛЯЦИЯ, ОХЛАЖДЕНИЕ (HVAC)
                            </span>
                            </a>
                            <span class="hm-pre--span__CARD_DATE">
                            27.06.2025
                        </span>
                        </div>
                    </article>


                    <article class="hm-pre--article__CARD __C-SCRL DOWN">
                        <a class="hm-pre--a__CARD" href="#"></a>
                        <div class="hm-pre--div__CARD_IMAGE">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-pre_3.png" alt="Пресс-центр 3"
                                 loading="lazy">
                        </div>
                        <a class="hm-pre--a__CARD_TAG1" href="#">
                            Мероприятия
                        </a>
                        <p class="hm-pre--p__CARD_NAME">
                            Мультимедийные системы промышленных встроенных одноплатных мини компьютеров
                        </p>
                        <div class="hm-pre--div__CARD_BOTTOM">
                            <a class="hm-pre--a__CARD_TAG color-yellow" href="#">
                                <div class="hm-pre--div__CARD_TAG_CIRCLE"></div>
                                <span class="hm-pre--span__CARD_TAG">
                                ИМПОРТОЗАМЕЩЕНИЕ
                            </span>
                            </a>
                            <span class="hm-pre--span__CARD_DATE">
                            27.06.2025
                        </span>
                        </div>
                    </article>
                </div>
            </div>


        </div>
        <!-- <img class="hm-pre--img__ATOMS" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-pre_atoms.svg" alt="Молекула"> -->
    </section>