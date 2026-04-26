<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("КОНТАКТЫ");
$APPLICATION->SetPageProperty('mainid', 'conts');
?>


<section class="conts-main">
    <div class="conts-main--div__CONT C-CONTAINER">
        <? $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                ".default",
                [
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                ]
        ); ?>



        <div class="conts-main--div__TOP">
            <h1 class="conts-main--h1 __C-SCRL RIGHT">
                Контакты
            </h1>
        </div>


        <?$APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "contacts",
                Array(
                        "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "N",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COUNT_ELEMENTS" => "N",
                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                        "FILTER_NAME" => "",
                        "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                        "IBLOCK_ID" => "13",
                        "IBLOCK_TYPE" => "content",
                        "SECTION_CODE" => "",
                        "SECTION_FIELDS" => array("",""),
                        "SECTION_ID" => "",
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array("UF_CONTACTS",""),
                        "TOP_DEPTH" => "2"
                )
        );?>




        <div class="conts-main--div__FORM">
            <div class="c-common--div__FB_CONT">
                <form class="c-common--form__FB _FORM_COMMON __C-SCRL RIGHT" action="#" method="post" name="feedback" novalidate>
                    <p class="c-common--p__FB_NAME">
                        Напишите нам
                    </p>



                    <div class="c-common--div__FB_NAME_SURNAME">
                        <label class="c-common--label__FB_NAME">
                            <input class="c-common--input__FB_NAME" type="text" name="feedback-name" placeholder="Имя" required>
                            <span class="c-common--span__FB_NAME">
                                        *
                                    </span>
                            <svg class="c-common--svg__FB_NAME" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.79301 17C1.00996 17 0.530726 16.1407 0.942216 15.4745L9.6492 1.37748C10.04 0.744805 10.96 0.744806 11.3508 1.37748L20.0578 15.4745C20.4693 16.1407 19.99 17 19.207 17H1.79301ZM1.91243 15.4487C1.70623 15.7818 1.94581 16.2119 2.33756 16.2119H18.6624C19.0542 16.2119 19.2938 15.7818 19.0876 15.4487L10.9251 2.26293C10.7297 1.94716 10.2703 1.94716 10.0749 2.26293L1.91243 15.4487ZM10.5 14.5232C10.67 14.5232 10.8125 14.4692 10.9275 14.3613C11.0425 14.2534 11.1 14.1198 11.1 13.9603C11.1 13.8008 11.0425 13.6671 10.9275 13.5592C10.8125 13.4513 10.67 13.3974 10.5 13.3974C10.33 13.3974 10.1875 13.4513 10.0725 13.5592C9.9575 13.6671 9.9 13.8008 9.9 13.9603C9.9 14.1198 9.9575 14.2534 10.0725 14.3613C10.1875 14.4692 10.33 14.5232 10.5 14.5232ZM10.08 11.8515C10.08 12.0835 10.268 12.2715 10.5 12.2715C10.732 12.2715 10.92 12.0835 10.92 11.8515V7.06238C10.92 6.83042 10.732 6.64238 10.5 6.64238C10.268 6.64238 10.08 6.83042 10.08 7.06238V11.8515Z" fill="#C82121"/>
                            </svg>
                        </label>
                        <label class="c-common--label__FB_SURNAME">
                            <input class="c-common--input__FB_SURNAME" type="text" name="feedback-surname" placeholder="Фамилия" required>
                            <span class="c-common--span__FB_SURNAME">
                                        *
                                    </span>
                            <svg class="c-common--svg__FB_SURNAME" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.79301 17C1.00996 17 0.530726 16.1407 0.942216 15.4745L9.6492 1.37748C10.04 0.744805 10.96 0.744806 11.3508 1.37748L20.0578 15.4745C20.4693 16.1407 19.99 17 19.207 17H1.79301ZM1.91243 15.4487C1.70623 15.7818 1.94581 16.2119 2.33756 16.2119H18.6624C19.0542 16.2119 19.2938 15.7818 19.0876 15.4487L10.9251 2.26293C10.7297 1.94716 10.2703 1.94716 10.0749 2.26293L1.91243 15.4487ZM10.5 14.5232C10.67 14.5232 10.8125 14.4692 10.9275 14.3613C11.0425 14.2534 11.1 14.1198 11.1 13.9603C11.1 13.8008 11.0425 13.6671 10.9275 13.5592C10.8125 13.4513 10.67 13.3974 10.5 13.3974C10.33 13.3974 10.1875 13.4513 10.0725 13.5592C9.9575 13.6671 9.9 13.8008 9.9 13.9603C9.9 14.1198 9.9575 14.2534 10.0725 14.3613C10.1875 14.4692 10.33 14.5232 10.5 14.5232ZM10.08 11.8515C10.08 12.0835 10.268 12.2715 10.5 12.2715C10.732 12.2715 10.92 12.0835 10.92 11.8515V7.06238C10.92 6.83042 10.732 6.64238 10.5 6.64238C10.268 6.64238 10.08 6.83042 10.08 7.06238V11.8515Z" fill="#C82121"/>
                            </svg>
                        </label>
                    </div>



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



                    <div class="c-common--div__FB_COMP_POST">
                        <label class="c-common--label__FB_COMP">
                            <input class="c-common--input__FB_COMP" type="text" name="feedback-comp" placeholder="Компания">
                        </label>
                        <label class="c-common--label__FB_POST">
                            <input class="c-common--input__FB_POST" type="text" name="feedback-post" placeholder="Должность">
                        </label>
                    </div>



                    <label class="c-common--label__FB_TA">
                        <textarea class="c-common--textarea__FB_TA" name="feedback-textarea" placeholder="Сопроводительное письмо"></textarea>
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
                    <img src="/local/templates/main/assets/images/contacts/conts-main_request.png" alt="" loading="lazy">
                </div>
            </div>



            <!-- ОТЧЕТ ОБ ОТПРАВКЕ ФОРМЫ (ОБЩЕЙ) -->

            <div class="c-common--div__FB_DONE _FORM_COMMON">
                <div class="c-common--div__FB_DONE_CONT">
                    <button class="c-common--button__FB_DONE_CLOSE">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)" fill="#BFBFBF"/>
                            <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)" fill="#BFBFBF"/>
                        </svg>
                    </button>
                    <div class="c-common--div__FB_DONE_TOP">
                        <p class="c-common--p__FB_DONE_TOP">
                            Спасибо
                        </p>
                        <p class="c-common--p__FB_DONE_TOP">
                            за обращение!
                        </p>
                    </div>


                    <svg class="c-common--svg__FB_DONE" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_5522_2984" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="50" height="50">
                            <rect width="50" height="50" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_5522_2984)">
                            <path d="M24.9932 43.1289C22.4873 43.1289 20.1309 42.6534 17.924 41.7024C15.717 40.7513 13.7974 39.4605 12.1651 37.83C10.5325 36.1994 9.24011 34.2822 8.28802 32.0784C7.33559 29.8742 6.85938 27.519 6.85938 25.0128C6.85938 22.5069 7.33507 20.1504 8.28646 17.9435C9.2382 15.7366 10.5297 13.8169 12.1609 12.1846C13.7922 10.552 15.7104 9.25964 17.9156 8.30755C20.1208 7.35512 22.4771 6.87891 24.9844 6.87891C27.0792 6.87891 29.0613 7.20877 30.9307 7.86849C32.7998 8.52821 34.4983 9.44835 36.0261 10.6289L34.9844 11.7227C33.5955 10.6463 32.0542 9.81294 30.3604 9.22266C28.667 8.63238 26.875 8.33724 24.9844 8.33724C20.3663 8.33724 16.434 9.96051 13.1875 13.207C9.94097 16.4536 8.31771 20.3859 8.31771 25.0039C8.31771 29.622 9.94097 33.5543 13.1875 36.8008C16.434 40.0473 20.3663 41.6706 24.9844 41.6706C29.6024 41.6706 33.5347 40.0473 36.7813 36.8008C40.0278 33.5543 41.6511 29.622 41.6511 25.0039C41.6511 24.1011 41.5816 23.2194 41.4427 22.3586C41.3038 21.4978 41.0955 20.6609 40.8177 19.8477L41.9636 18.6497C42.3455 19.6567 42.632 20.6879 42.8229 21.7435C43.0139 22.7994 43.1094 23.8862 43.1094 25.0039C43.1094 27.5112 42.6339 29.8675 41.6828 32.0727C40.7318 34.2779 39.441 36.1961 37.8104 37.8274C36.1799 39.4586 34.2627 40.7501 32.0589 41.7019C29.8547 42.6532 27.4995 43.1289 24.9932 43.1289ZM21.9636 32.7123L14.9844 25.7331L16.026 24.6914L21.9636 30.6289L42.0677 10.5247L43.1094 11.5664L21.9636 32.7123Z" fill="#005792"/>
                        </g>
                    </svg>


                    <p class="c-common--p__FB_DONE_BOTTOM">
                        Мы получили ваше сообщение и постараемся ответить в ближайшее время.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

