
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** ФОРМЫ ОБРАТНОЙ СВЯЗИ ********** ---------- */


    /* --- КОММЕРЧЕСКАЯ ФОРМА --- */
    
    
    // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ МОДАЛЬНЫХ ОКОН

    const openFrmCmrs = Array.from (document.querySelectorAll ("._OPEN_FRM._FORM_COMMERCIAL"));
    

    // 1.1 Открытие

    
    openFrmCmrs?.forEach ((v0, i0, a0) => {
        a0[i0].addEventListener ("click", () => {
            if (!document.querySelector (".c-common--div__FB._FORM_COMMERCIAL")) {
                document.querySelector ("main").insertAdjacentHTML ("beforeend", `
                    <!-- КОММЕРЧЕСКАЯ ФОРМА -->
    
                    <div class="c-common--div__FB _FORM_COMMERCIAL">
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
    
                                <p class="c-common--p__FB_TEXT">
                                    Укажите ИНН, чтобы мы могли быстрее предоставить вам информацию.
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
                                    <input class="c-common--input__FB_ORG" type="text" name="feedback-org" placeholder="Компания" required>
                                    <span class="c-common--span__FB_ORG">
                                        (заполняется автоматически при вводе ИНН)
                                    </span>
                                    <span class="c-common--span__FB_ORG1">
                                        *
                                    </span>
                                    <svg class="c-common--svg__FB_ORG" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.79301 17C1.00996 17 0.530726 16.1407 0.942216 15.4745L9.6492 1.37748C10.04 0.744805 10.96 0.744806 11.3508 1.37748L20.0578 15.4745C20.4693 16.1407 19.99 17 19.207 17H1.79301ZM1.91243 15.4487C1.70623 15.7818 1.94581 16.2119 2.33756 16.2119H18.6624C19.0542 16.2119 19.2938 15.7818 19.0876 15.4487L10.9251 2.26293C10.7297 1.94716 10.2703 1.94716 10.0749 2.26293L1.91243 15.4487ZM10.5 14.5232C10.67 14.5232 10.8125 14.4692 10.9275 14.3613C11.0425 14.2534 11.1 14.1198 11.1 13.9603C11.1 13.8008 11.0425 13.6671 10.9275 13.5592C10.8125 13.4513 10.67 13.3974 10.5 13.3974C10.33 13.3974 10.1875 13.4513 10.0725 13.5592C9.9575 13.6671 9.9 13.8008 9.9 13.9603C9.9 14.1198 9.9575 14.2534 10.0725 14.3613C10.1875 14.4692 10.33 14.5232 10.5 14.5232ZM10.08 11.8515C10.08 12.0835 10.268 12.2715 10.5 12.2715C10.732 12.2715 10.92 12.0835 10.92 11.8515V7.06238C10.92 6.83042 10.732 6.64238 10.5 6.64238C10.268 6.64238 10.08 6.83042 10.08 7.06238V11.8515Z" fill="#C82121"/>
                                    </svg>
                                </label>
    
                                <p class="c-common--p__FB_ADR"></p>
    
    
    
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
                                <img src="images/home/hm-des_2.png" alt="">
                            </div>
                        </div>
                    </div>
    
    
                    <!-- ОТЧЕТ ОБ ОТПРАВКЕ ФОРМЫ (КОММЕРЧЕСКОЙ) -->
    
                    <div class="c-common--div__FB_DONE _FORM_COMMERCIAL">
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
                                Ваша заявка в работе. <br />
                                Мы свяжемся с вами в ближайшее время.
                            </p>
                        </div>
                    </div>
                `);
    
    
    
                const cCommonDivFbCmrs = document.querySelector (".c-common--div__FB._FORM_COMMERCIAL");
                const cCommonButtonFbCloseCmrs = cCommonDivFbCmrs.querySelector (".c-common--button__FB_CLOSE");
    
                setTimeout (() => {
                    cCommonDivFbCmrs.classList.add ("__c-common--div__FB");
                }, 50);
    
    
    
                // 1.2 Закрытие
    
                cCommonButtonFbCloseCmrs.addEventListener ("click", () => {
                    cCommonDivFbCmrs.classList.remove ("__c-common--div__FB");
                });
                
                
                cCommonDivFbCmrs.addEventListener ("click", (e) => {
                    if (e.target === cCommonDivFbCmrs) {
                        cCommonDivFbCmrs.classList.remove ("__c-common--div__FB");
                    }
                });
    
    
    
    
                // 2. ИСЧЕЗАНИЕ / ПОЯВЛЕНИЕ ЗВЕЗДОЧКИ И/ИЛИ ПОДПИСЕЙ В ПОЛЯХ ПРИ НАБОРЕ
    
                // 2.1 Поле организации
                
                const cCommonLabelFbOrg = cCommonDivFbCmrs.querySelector (".c-common--label__FB_ORG");
                const cCommonInputFbOrg = cCommonDivFbCmrs.querySelector (".c-common--input__FB_ORG");
                const cCommonSpanFbOrg1 = cCommonDivFbCmrs.querySelector (".c-common--span__FB_ORG1");
                const cCommonSvgFbOrg = cCommonDivFbCmrs.querySelector (".c-common--svg__FB_ORG");
    
                
                cCommonInputFbOrg.addEventListener ("input", () => {
                    if (cCommonInputFbOrg.value !== "") {
                        cCommonLabelFbOrg.classList.add ("__c-common--label__FB_ORG");
                        cCommonSpanFbOrg1.classList.add ("__c-common--span__FB_ORG1");
                    } else {
                        cCommonLabelFbOrg.classList.remove ("__c-common--label__FB_ORG");
                        cCommonSpanFbOrg1.classList.remove ("__c-common--span__FB_ORG1");
                    }
                });
                
    
    
                // 2.2 Поля имени и фамилии
    
                const cCommonInputFbName = cCommonDivFbCmrs.querySelector (".c-common--input__FB_NAME");
                const cCommonLabelFbName = cCommonDivFbCmrs.querySelector (".c-common--label__FB_NAME");
                const cCommonSvgFbName = cCommonDivFbCmrs.querySelector (".c-common--svg__FB_NAME");
                const cCommonSpanFbName = cCommonDivFbCmrs.querySelector (".c-common--span__FB_NAME");
                const cCommonInputFbSurName = cCommonDivFbCmrs.querySelector (".c-common--input__FB_SURNAME");
                const cCommonLabelFbSurName = cCommonDivFbCmrs.querySelector (".c-common--label__FB_SURNAME");
                const cCommonSvgFbSurName = cCommonDivFbCmrs.querySelector (".c-common--svg__FB_SURNAME");
                const cCommonSpanFbSurName = cCommonDivFbCmrs.querySelector (".c-common--span__FB_SURNAME");
    
                cCommonInputFbName.addEventListener ("input", () => {
                    if (cCommonInputFbName.value !== "") {
                        cCommonSpanFbName.classList.add ("__c-common--span__FB_NAME");
                    } else {
                        cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                    }
                });
                
                
                cCommonInputFbSurName.addEventListener ("input", () => {
                    if (cCommonInputFbSurName.value !== "") {
                        cCommonSpanFbSurName.classList.add ("__c-common--span__FB_SURNAME");
                    } else {
                        cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                    }
                });
                
    
    
                // 2.3 Поле электронной почты
    
                const cCommonInputFbMail = cCommonDivFbCmrs.querySelector (".c-common--input__FB_MAIL");
                const cCommonLabelFbMail = cCommonDivFbCmrs.querySelector (".c-common--label__FB_MAIL");
                const cCommonSvgFbMail = cCommonDivFbCmrs.querySelector (".c-common--svg__FB_MAIL");
                const cCommonSpanFbMail = cCommonDivFbCmrs.querySelector (".c-common--span__FB_MAIL");
    
                
                cCommonInputFbMail.addEventListener ("input", () => {
                    if (cCommonInputFbMail.value !== "") {
                        cCommonSpanFbMail.classList.add ("__c-common--span__FB_MAIL");
                    } else {
                        cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                    }
                });
    
    
    
                // 2.4 Поле телефона
    
                const cCommonInputFbTel = cCommonDivFbCmrs.querySelector (".c-common--input__FB_TEL");
                const cCommonSvgFbTel = cCommonDivFbCmrs.querySelector (".c-common--svg__FB_TEL");
                const cCommonSpanFbTel = cCommonDivFbCmrs.querySelector (".c-common--span__FB_TEL");
    
                
                cCommonInputFbTel.addEventListener ("input", () => {
                    if (cCommonInputFbTel.value !== "") {
                        cCommonSpanFbTel.classList.add ("__c-common--span__FB_TEL");
                    } else {
                        cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
                    }
                });
    
    
    
                // 2.5 Поле комментария
    
                const cCommonTextareaFbTa = cCommonDivFbCmrs.querySelector (".c-common--textarea__FB_TA");
                const cCommonLabelFbTa = cCommonDivFbCmrs.querySelector (".c-common--label__FB_TA");
                const cCommonSvgFbTa = cCommonDivFbCmrs.querySelector (".c-common--svg__FB_TA");
                const cCommonSpanFbTa = cCommonDivFbCmrs.querySelector (".c-common--span__FB_TA");
    
    
                cCommonTextareaFbTa.addEventListener ("input", () => {
                    if (cCommonTextareaFbTa.value !== "") {
                        cCommonSpanFbTa.classList.add ("__c-common--span__FB_TA");
                    } else {
                        cCommonSpanFbTa.classList.remove ("__c-common--span__FB_TA");
                    }
                });
                
    
    
    
                // 3. ВЫБОР ОРГАНИЗАЦИИ ПО ИНН  (!!! ДЕМОНСТРАЦИОННЫЙ КОД, ПРИ ИНТЕГРАЦИИ МОЖЕТ БЫТЬ ЗАМЕНЕН / УДАЛЕН)
    
                const cCommonFormFb = cCommonDivFbCmrs.querySelector (".c-common--form__FB");
                const cCommonLabelFbInn = cCommonDivFbCmrs.querySelector (".c-common--label__FB_INN");
                const cCommonInputFbInn = cCommonDivFbCmrs.querySelector (".c-common--input__FB_INN");
                const cCommonUlFbInn = cCommonDivFbCmrs.querySelector (".c-common--ul__FB_INN");
                const cCommonLiFbInn = Array.from (cCommonDivFbCmrs.querySelectorAll (".c-common--li__FB_INN"));
                const cCommonSpanFbInnNm = Array.from (cCommonDivFbCmrs.querySelectorAll (".c-common--span__FB_INN_NM"));
                const cCommonPFbInnAdr = Array.from (cCommonDivFbCmrs.querySelectorAll (".c-common--p__FB_INN_ADR"));
                const cCommonPFbAdr = cCommonDivFbCmrs.querySelector (".c-common--p__FB_ADR");
    
    
                cCommonInputFbInn.addEventListener ("input", () => {
                    if (cCommonInputFbInn.value !== "") {
                        cCommonUlFbInn.classList.add ("__c-common--ul__FB_INN");
                        cCommonLabelFbInn.classList.add ("__c-common--label__FB_INN");
                    } else {
                        cCommonUlFbInn.classList.remove ("__c-common--ul__FB_INN");
                        cCommonLabelFbInn.classList.remove ("__c-common--label__FB_INN");
                    }
                });
    
    
                cCommonFormFb.addEventListener ("click", (e) => {
                    if (e.target !== cCommonLabelFbInn) {
                        cCommonUlFbInn.classList.remove ("__c-common--ul__FB_INN");
                        cCommonLabelFbInn.classList.remove ("__c-common--label__FB_INN");
                    }
                });
    
    
                cCommonLiFbInn.forEach ((v, i, a) => {
                    a[i].addEventListener ("click", () => {
                        cCommonInputFbOrg.value = cCommonSpanFbInnNm[i].textContent;
                        cCommonSpanFbOrg1.classList.add ("__c-common--span__FB_ORG1");
                        cCommonLabelFbOrg.classList.add ("__c-common--label__FB_ORG");
                        cCommonPFbAdr.classList.add ("__c-common--p__FB_ADR");
                        cCommonPFbAdr.textContent = cCommonPFbInnAdr[i].textContent;
                        cCommonUlFbInn.classList.remove ("__c-common--ul__FB_INN");
                        cCommonLabelFbInn.classList.remove ("__c-common--label__FB_INN");
                    });
                });
    
    
                cCommonInputFbOrg.addEventListener ("input", () => {
                    if (cCommonInputFbOrg.value === "") {
                        cCommonPFbAdr.classList.remove ("__c-common--p__FB_ADR");
                        cCommonPFbAdr.textContent = "";
                    }
                });
    
    
    
    
                // 4. ИНИЦИАЛИЗАЦИЯ ПЛАГИНА intlTelInput
    
                window.intlTelInput(cCommonInputFbTel, {
                    loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js"),
                    initialCountry: "ru",
                });
    
    
    
    
                // 5. ВАЛИДАЦИЯ, ОТПРАВКА И ОТБИВКА (!!! ПРИ ИНТЕГРАЦИИ ВОЗМОЖНО БУДЕТ НЕОБХОДИМО ИЗМЕНЕНИЕ В ЧАСТИ ОТПРАВКИ)
    
                const cCommonDivFbDoneCmrs = document.querySelector (".c-common--div__FB_DONE._FORM_COMMERCIAL");
                const cCommonButtonFbDoneClose = cCommonDivFbDoneCmrs.querySelector (".c-common--button__FB_DONE_CLOSE");
    
                
                cCommonFormFb.addEventListener ("submit", (e) => {
                    e.preventDefault ();
                    
                    
                    if (cCommonInputFbOrg.checkValidity ()) {
                        cCommonLabelFbOrg.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbOrg.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbOrg.classList.add ("__c-common--label__FB");
                        cCommonSvgFbOrg.classList.add ("__c-common--svg__FB");
                    }
                    
                    
    
                    if (cCommonInputFbName.checkValidity ()) {
                        cCommonLabelFbName.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbName.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbName.classList.add ("__c-common--label__FB");
                        cCommonSvgFbName.classList.add ("__c-common--svg__FB");
                    }
                    
                    
                    
                    if (cCommonInputFbSurName.checkValidity ()) {
                        cCommonLabelFbSurName.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbSurName.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbSurName.classList.add ("__c-common--label__FB");
                        cCommonSvgFbSurName.classList.add ("__c-common--svg__FB");
                    }
                    
            
                    
                    if (cCommonInputFbMail.checkValidity ()) {
                        cCommonLabelFbMail.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbMail.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbMail.classList.add ("__c-common--label__FB");
                        cCommonSvgFbMail.classList.add ("__c-common--svg__FB");
                    }
                    
                    
                    
                    if (cCommonInputFbTel.checkValidity ()) {
                        cCommonInputFbTel.classList.remove ("__c-common--input__FB_TEL");
                        cCommonSvgFbTel.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonInputFbTel.classList.add ("__c-common--input__FB_TEL");
                        cCommonSvgFbTel.classList.add ("__c-common--svg__FB");
                    }
                    
            
                    
                    if (cCommonTextareaFbTa.checkValidity ()) {
                        cCommonLabelFbTa.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbTa.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbTa.classList.add ("__c-common--label__FB");
                        cCommonSvgFbTa.classList.add ("__c-common--svg__FB");
                    }
                    
                    
                    
                    if (cCommonDivFbCmrs.querySelector (".c-common--input__FB_APPR").checkValidity ()) {
                        cCommonDivFbCmrs.querySelector (".c-common--div__FB_APPR").classList.remove ("__c-common--div__FB_APPR");
                        cCommonDivFbCmrs.querySelector (".c-common--p__FB_APPR").classList.remove ("__c-common--p__FB_APPR");
                    } else {
                        cCommonDivFbCmrs.querySelector (".c-common--div__FB_APPR").classList.add ("__c-common--div__FB_APPR");
                        cCommonDivFbCmrs.querySelector (".c-common--p__FB_APPR").classList.add ("__c-common--p__FB_APPR");
                    }
                    
    
            
                    setTimeout (() => {
                        if (!cCommonDivFbCmrs.querySelector (".__c-common--label__FB") && !cCommonDivFbCmrs.querySelector (".__c-common--input__FB_TEL") && !cCommonDivFbCmrs.querySelector (".__c-common--div__FB_APPR")) {
                            cCommonFormFb.reset ();
                            cCommonDivFbCmrs.classList.remove ("__c-common--div__FB");
                            cCommonDivFbDoneCmrs.classList.add ("__c-common--div__FB_DONE");
                        }
                    }, 50)
                });
    
    
                
                cCommonButtonFbDoneClose.addEventListener ("click", () => {
                    cCommonDivFbDoneCmrs.classList.remove ("__c-common--div__FB_DONE");
                    cCommonLabelFbOrg.classList.remove ("__c-common--label__FB_ORG");
                    cCommonSpanFbOrg1.classList.remove ("__c-common--span__FB_ORG1");
                    cCommonFormFb.querySelector (".c-common--p__FB_ADR").classList.remove ("__c-common--p__FB_ADR");
                    cCommonFormFb.querySelector (".c-common--p__FB_ADR").textContent = "";
                    cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                    cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                    cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                    cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
                    cCommonSpanFbTa.classList.remove ("__c-common--span__FB_TA");
                });
                
                
                
                cCommonDivFbDoneCmrs.addEventListener ("click", (e) => {
                    if (e.target === cCommonDivFbDoneCmrs) {
                        cCommonDivFbDoneCmrs.classList.remove ("__c-common--div__FB_DONE");
                        cCommonLabelFbOrg.classList.remove ("__c-common--label__FB_ORG");
                        cCommonSpanFbOrg1.classList.remove ("__c-common--span__FB_ORG1");
                        cCommonFormFb.querySelector (".c-common--p__FB_ADR").classList.remove ("__c-common--p__FB_ADR");
                        cCommonFormFb.querySelector (".c-common--p__FB_ADR").textContent = "";
                        cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                        cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                        cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                        cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
                        cCommonSpanFbTa.classList.remove ("__c-common--span__FB_TA");
                    }
                });
    
    
    
    
                // 6. АНИМАЦИЯ ПРИ СКРОЛЛЕ 
    
                const scrolls = cCommonDivFbCmrs.querySelectorAll('.__C-SCRL');
    
                const callback = (entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove ("__C-SCRL");
                            observer.unobserve(entry.target);
                        }
                    });
                }
    
                const options = {
                    rootMargin: '-40px 0px 0px 0px',
                    threshold: 0,
                }
    
                const observer = new IntersectionObserver(callback, options)
    
                scrolls.forEach((v) => observer.observe(v));
                
            } else {
                document.querySelector (".c-common--div__FB._FORM_COMMERCIAL").classList.add ("__c-common--div__FB");
            }
            
        });
    });
    







    /* --- ОБЩАЯ ФОРМА --- */


    // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ МОДАЛЬНЫХ ОКОН

    const openFrmComm = Array.from (document.querySelectorAll ("._OPEN_FRM._FORM_COMMON"));
    

    // 1.1 Открытие

    
    openFrmComm?.forEach ((v0, i0, a0) => {
        a0[i0].addEventListener ("click", () => {
            if (!document.querySelector (".c-common--div__FB._FORM_COMMON")) {
                document.querySelector ("main").insertAdjacentHTML ("beforeend", `
                    <!-- ОБЩАЯ ФОРМА -->
    
                    <div class="c-common--div__FB _FORM_COMMON">
                        <div class="c-common--div__FB_CONT">
                            <button class="c-common--button__FB_CLOSE">
                                <svg class="c-common--svg__FB_CLOSE" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)" fill="#005792"/>
                                    <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)" fill="#005792"/>
                                </svg>
                            </button>
            
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
                                <img src="images/home/hm-des_2.png" alt="">
                            </div>
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
                `);
    
    
                const cCommonDivFbComm = document.querySelector (".c-common--div__FB._FORM_COMMON");
                const cCommonButtonFbCloseComm = cCommonDivFbComm.querySelector (".c-common--button__FB_CLOSE");
                const cCommonFormFb = cCommonDivFbComm.querySelector (".c-common--form__FB");
    
    
                setTimeout (() => {
                    cCommonDivFbComm.classList.add ("__c-common--div__FB");
                }, 50);
                
    
    
    
                // 1.2 Закрытие
    
                cCommonButtonFbCloseComm.addEventListener ("click", () => {
                    cCommonDivFbComm.classList.remove ("__c-common--div__FB");
                });
                
                
                cCommonDivFbComm.addEventListener ("click", (e) => {
                    if (e.target === cCommonDivFbComm) {
                        cCommonDivFbComm.classList.remove ("__c-common--div__FB");
                    }
                });
    
    
    
    
                // 2. ИСЧЕЗАНИЕ / ПОЯВЛЕНИЕ ЗВЕЗДОЧКИ И/ИЛИ ПОДПИСЕЙ В ПОЛЯХ ПРИ НАБОРЕ
    
    
                // 2.1 Поля имени и фамилии
    
                const cCommonInputFbName = cCommonDivFbComm.querySelector (".c-common--input__FB_NAME");
                const cCommonLabelFbName = cCommonDivFbComm.querySelector (".c-common--label__FB_NAME");
                const cCommonSvgFbName = cCommonDivFbComm.querySelector (".c-common--svg__FB_NAME");
                const cCommonSpanFbName = cCommonDivFbComm.querySelector (".c-common--span__FB_NAME");
                const cCommonInputFbSurName = cCommonDivFbComm.querySelector (".c-common--input__FB_SURNAME");
                const cCommonLabelFbSurName = cCommonDivFbComm.querySelector (".c-common--label__FB_SURNAME");
                const cCommonSvgFbSurName = cCommonDivFbComm.querySelector (".c-common--svg__FB_SURNAME");
                const cCommonSpanFbSurName = cCommonDivFbComm.querySelector (".c-common--span__FB_SURNAME");
    
                cCommonInputFbName.addEventListener ("input", () => {
                    if (cCommonInputFbName.value !== "") {
                        cCommonSpanFbName.classList.add ("__c-common--span__FB_NAME");
                    } else {
                        cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                    }
                });
                
                
                cCommonInputFbSurName.addEventListener ("input", () => {
                    if (cCommonInputFbSurName.value !== "") {
                        cCommonSpanFbSurName.classList.add ("__c-common--span__FB_SURNAME");
                    } else {
                        cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                    }
                });
                
    
    
                // 2.2 Поле электронной почты
    
                const cCommonInputFbMail = cCommonDivFbComm.querySelector (".c-common--input__FB_MAIL");
                const cCommonLabelFbMail = cCommonDivFbComm.querySelector (".c-common--label__FB_MAIL");
                const cCommonSvgFbMail = cCommonDivFbComm.querySelector (".c-common--svg__FB_MAIL");
                const cCommonSpanFbMail = cCommonDivFbComm.querySelector (".c-common--span__FB_MAIL");
    
                
                cCommonInputFbMail.addEventListener ("input", () => {
                    if (cCommonInputFbMail.value !== "") {
                        cCommonSpanFbMail.classList.add ("__c-common--span__FB_MAIL");
                    } else {
                        cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                    }
                });
    
    
    
                // 2.3 Поле телефона
    
                const cCommonInputFbTel = cCommonDivFbComm.querySelector (".c-common--input__FB_TEL");
                const cCommonSvgFbTel = cCommonDivFbComm.querySelector (".c-common--svg__FB_TEL");
                const cCommonSpanFbTel = cCommonDivFbComm.querySelector (".c-common--span__FB_TEL");
    
                
                cCommonInputFbTel.addEventListener ("input", () => {
                    if (cCommonInputFbTel.value !== "") {
                        cCommonSpanFbTel.classList.add ("__c-common--span__FB_TEL");
                    } else {
                        cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
                    }
                });
    
    
    
                // 2.4 Поле комментария
    
                const cCommonTextareaFbTa = cCommonDivFbComm.querySelector (".c-common--textarea__FB_TA");
                const cCommonLabelFbTa = cCommonDivFbComm.querySelector (".c-common--label__FB_TA");
                const cCommonSvgFbTa = cCommonDivFbComm.querySelector (".c-common--svg__FB_TA");
                const cCommonSpanFbTa = cCommonDivFbComm.querySelector (".c-common--span__FB_TA");
    
    
                cCommonTextareaFbTa.addEventListener ("input", () => {
                    if (cCommonTextareaFbTa.value !== "") {
                        cCommonSpanFbTa.classList.add ("__c-common--span__FB_TA");
                    } else {
                        cCommonSpanFbTa.classList.remove ("__c-common--span__FB_TA");
                    }
                });
    
    
    
    
                // 4. ИНИЦИАЛИЗАЦИЯ ПЛАГИНА intlTelInput
    
                window.intlTelInput(cCommonInputFbTel, {
                    loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js"),
                    initialCountry: "ru",
                });
    
    
    
    
                // 5. ВАЛИДАЦИЯ, ОТПРАВКА И ОТБИВКА (!!! ПРИ ИНТЕГРАЦИИ ВОЗМОЖНО БУДЕТ НЕОБХОДИМО ИЗМЕНЕНИЕ В ЧАСТИ ОТПРАВКИ)
    
                const cCommonDivFbDoneComm = document.querySelector (".c-common--div__FB_DONE._FORM_COMMON");
                const cCommonButtonFbDoneClose = cCommonDivFbDoneComm.querySelector (".c-common--button__FB_DONE_CLOSE");
    
                
                cCommonFormFb.addEventListener ("submit", (e) => {
                    e.preventDefault ();
                    
    
                    if (cCommonInputFbName.checkValidity ()) {
                        cCommonLabelFbName.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbName.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbName.classList.add ("__c-common--label__FB");
                        cCommonSvgFbName.classList.add ("__c-common--svg__FB");
                    }
                    
                    
                    
                    if (cCommonInputFbSurName.checkValidity ()) {
                        cCommonLabelFbSurName.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbSurName.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbSurName.classList.add ("__c-common--label__FB");
                        cCommonSvgFbSurName.classList.add ("__c-common--svg__FB");
                    }
                    
            
                    
                    if (cCommonInputFbMail.checkValidity ()) {
                        cCommonLabelFbMail.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbMail.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbMail.classList.add ("__c-common--label__FB");
                        cCommonSvgFbMail.classList.add ("__c-common--svg__FB");
                    }
                    
                    
                    
                    if (cCommonInputFbTel.checkValidity ()) {
                        cCommonInputFbTel.classList.remove ("__c-common--input__FB_TEL");
                        cCommonSvgFbTel.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonInputFbTel.classList.add ("__c-common--input__FB_TEL");
                        cCommonSvgFbTel.classList.add ("__c-common--svg__FB");
                    }
                    
            
                    
                    if (cCommonTextareaFbTa.checkValidity ()) {
                        cCommonLabelFbTa.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbTa.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbTa.classList.add ("__c-common--label__FB");
                        cCommonSvgFbTa.classList.add ("__c-common--svg__FB");
                    }
                    
                    
                    
                    if (cCommonDivFbComm.querySelector (".c-common--input__FB_APPR").checkValidity ()) {
                        cCommonDivFbComm.querySelector (".c-common--div__FB_APPR").classList.remove ("__c-common--div__FB_APPR");
                        cCommonDivFbComm.querySelector (".c-common--p__FB_APPR").classList.remove ("__c-common--p__FB_APPR");
                    } else {
                        cCommonDivFbComm.querySelector (".c-common--div__FB_APPR").classList.add ("__c-common--div__FB_APPR");
                        cCommonDivFbComm.querySelector (".c-common--p__FB_APPR").classList.add ("__c-common--p__FB_APPR");
                    }
                    
    
            
                    setTimeout (() => {
                        if (!cCommonDivFbComm.querySelector (".__c-common--label__FB") && !cCommonDivFbComm.querySelector (".__c-common--input__FB_TEL") && !cCommonDivFbComm.querySelector (".__c-common--div__FB_APPR")) {
                            cCommonFormFb.reset ();
                            cCommonDivFbComm.classList.remove ("__c-common--div__FB");
                            cCommonDivFbDoneComm.classList.add ("__c-common--div__FB_DONE");
                        }
                    }, 50)
                });
    
    
                
                cCommonButtonFbDoneClose.addEventListener ("click", () => {
                    cCommonDivFbDoneComm.classList.remove ("__c-common--div__FB_DONE");
                    cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                    cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                    cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                    cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
                    cCommonSpanFbTa.classList.remove ("__c-common--span__FB_TA");
                });
                
                
                
                cCommonDivFbDoneComm.addEventListener ("click", (e) => {
                    if (e.target === cCommonDivFbDoneComm) {
                        cCommonDivFbDoneComm.classList.remove ("__c-common--div__FB_DONE");
                        cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                        cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                        cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                        cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
                        cCommonSpanFbTa.classList.remove ("__c-common--span__FB_TA");
                    }
                });
    
    
    
    
                // 6. АНИМАЦИЯ ПРИ СКРОЛЛЕ 
    
                const scrolls = cCommonDivFbComm.querySelectorAll('.__C-SCRL');
    
                const callback = (entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove ("__C-SCRL");
                            observer.unobserve(entry.target);
                        }
                    });
                }
    
                const options = {
                    rootMargin: '-40px 0px 0px 0px',
                    threshold: 0,
                }
    
                const observer = new IntersectionObserver(callback, options)
    
                scrolls.forEach((v) => observer.observe(v));
                
            } else {
                document.querySelector (".c-common--div__FB._FORM_COMMON").classList.add ("__c-common--div__FB");
            }
            
        });
    });
    







    /* --- РЕГИСТРАЦИОННАЯ ФОРМА --- */
    
    
    // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ МОДАЛЬНЫХ ОКОН

    const openFrmReg = Array.from (document.querySelectorAll ("._OPEN_FRM._FORM_REGISTRATION"));
    

    // 1.1 Открытие

    
    openFrmReg?.forEach ((v0, i0, a0) => {
        a0[i0].addEventListener ("click", () => {
            if (!document.querySelector (".c-common--div__FB._FORM_REGISTRATION")) {
                document.querySelector ("main").insertAdjacentHTML ("beforeend", `
                
                    <!-- РЕГИСТРАЦИОННАЯ ФОРМА -->
    
                    <div class="c-common--div__FB _FORM_REGISTRATION">
                        <div class="c-common--div__FB_CONT">
                            <button class="c-common--button__FB_CLOSE">
                                <svg class="c-common--svg__FB_CLOSE" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)" fill="#005792"/>
                                    <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)" fill="#005792"/>
                                </svg>
                            </button>
            
                            <form class="c-common--form__FB _FORM_REGISTRATION __C-SCRL RIGHT" action="#" method="post" name="feedback" novalidate>
                                <p class="c-common--p__FB_NAME">
                                    Зарегистрируйтесь
                                </p>
            
            
            
                                
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
            
            
            
            
                                <label class="c-common--label__FB_PATR">
                                    <input class="c-common--input__FB_PATR" type="text" name="feedback-patr" placeholder="Отчество">
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
            
            
            
                                
                                <label class="c-common--label__FB_COMP1">
                                    <input class="c-common--input__FB_COMP1" type="text" name="feedback-comp" placeholder="Компания" required>
                                    <span class="c-common--span__FB_COMP1">
                                        *
                                    </span>
                                    <svg class="c-common--svg__FB_COMP1" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.79301 17C1.00996 17 0.530726 16.1407 0.942216 15.4745L9.6492 1.37748C10.04 0.744805 10.96 0.744806 11.3508 1.37748L20.0578 15.4745C20.4693 16.1407 19.99 17 19.207 17H1.79301ZM1.91243 15.4487C1.70623 15.7818 1.94581 16.2119 2.33756 16.2119H18.6624C19.0542 16.2119 19.2938 15.7818 19.0876 15.4487L10.9251 2.26293C10.7297 1.94716 10.2703 1.94716 10.0749 2.26293L1.91243 15.4487ZM10.5 14.5232C10.67 14.5232 10.8125 14.4692 10.9275 14.3613C11.0425 14.2534 11.1 14.1198 11.1 13.9603C11.1 13.8008 11.0425 13.6671 10.9275 13.5592C10.8125 13.4513 10.67 13.3974 10.5 13.3974C10.33 13.3974 10.1875 13.4513 10.0725 13.5592C9.9575 13.6671 9.9 13.8008 9.9 13.9603C9.9 14.1198 9.9575 14.2534 10.0725 14.3613C10.1875 14.4692 10.33 14.5232 10.5 14.5232ZM10.08 11.8515C10.08 12.0835 10.268 12.2715 10.5 12.2715C10.732 12.2715 10.92 12.0835 10.92 11.8515V7.06238C10.92 6.83042 10.732 6.64238 10.5 6.64238C10.268 6.64238 10.08 6.83042 10.08 7.06238V11.8515Z" fill="#C82121"/>
                                    </svg>
                                </label>
            
            
            
            
                                <label class="c-common--label__FB_POST1">
                                    <input class="c-common--input__FB_POST1" type="text" name="feedback-post" placeholder="Должность" required>
                                    <span class="c-common--span__FB_POST1">
                                        *
                                    </span>
                                    <svg class="c-common--svg__FB_POST1" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                <img src="images/home/hm-des_2.png" alt="">
                            </div>
                        </div>
                    </div>
    
    
                    <!-- ОТЧЕТ ОБ ОТПРАВКЕ ФОРМЫ (РЕГИСТРАЦИОННОЙ) -->
    
                    <div class="c-common--div__FB_DONE _FORM_REGISTRATION">
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
                                Ваша заявка в работе. <br />
                                Мы свяжемся с вами в ближайшее время.
                            </p>
                        </div>
                    </div>
                `);
    
    
    
                const cCommonDivFbReg = document.querySelector (".c-common--div__FB._FORM_REGISTRATION");
                const cCommonButtonFbCloseReg = cCommonDivFbReg.querySelector (".c-common--button__FB_CLOSE");
                const cCommonFormFb = cCommonDivFbReg.querySelector (".c-common--form__FB");
    
                setTimeout (() => {
                    cCommonDivFbReg.classList.add ("__c-common--div__FB");
                }, 50);
    
    
    
                // 1.2 Закрытие
    
                cCommonButtonFbCloseReg.addEventListener ("click", () => {
                    cCommonDivFbReg.classList.remove ("__c-common--div__FB");
                });
                
                
                cCommonDivFbReg.addEventListener ("click", (e) => {
                    if (e.target === cCommonDivFbReg) {
                        cCommonDivFbReg.classList.remove ("__c-common--div__FB");
                    }
                });
    
    
    
    
                // 2. ИСЧЕЗАНИЕ / ПОЯВЛЕНИЕ ЗВЕЗДОЧКИ И/ИЛИ ПОДПИСЕЙ В ПОЛЯХ ПРИ НАБОРЕ
    
                
                // 2.1 Поля имени и фамилии
    
                const cCommonInputFbName = cCommonDivFbReg.querySelector (".c-common--input__FB_NAME");
                const cCommonLabelFbName = cCommonDivFbReg.querySelector (".c-common--label__FB_NAME");
                const cCommonSvgFbName = cCommonDivFbReg.querySelector (".c-common--svg__FB_NAME");
                const cCommonSpanFbName = cCommonDivFbReg.querySelector (".c-common--span__FB_NAME");
                const cCommonInputFbSurName = cCommonDivFbReg.querySelector (".c-common--input__FB_SURNAME");
                const cCommonLabelFbSurName = cCommonDivFbReg.querySelector (".c-common--label__FB_SURNAME");
                const cCommonSvgFbSurName = cCommonDivFbReg.querySelector (".c-common--svg__FB_SURNAME");
                const cCommonSpanFbSurName = cCommonDivFbReg.querySelector (".c-common--span__FB_SURNAME");
    
                cCommonInputFbName.addEventListener ("input", () => {
                    if (cCommonInputFbName.value !== "") {
                        cCommonSpanFbName.classList.add ("__c-common--span__FB_NAME");
                    } else {
                        cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                    }
                });
                
                
                cCommonInputFbSurName.addEventListener ("input", () => {
                    if (cCommonInputFbSurName.value !== "") {
                        cCommonSpanFbSurName.classList.add ("__c-common--span__FB_SURNAME");
                    } else {
                        cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                    }
                });
                
    
    
                // 2.2 Поле электронной почты
    
                const cCommonInputFbMail = cCommonDivFbReg.querySelector (".c-common--input__FB_MAIL");
                const cCommonLabelFbMail = cCommonDivFbReg.querySelector (".c-common--label__FB_MAIL");
                const cCommonSvgFbMail = cCommonDivFbReg.querySelector (".c-common--svg__FB_MAIL");
                const cCommonSpanFbMail = cCommonDivFbReg.querySelector (".c-common--span__FB_MAIL");
    
                
                cCommonInputFbMail.addEventListener ("input", () => {
                    if (cCommonInputFbMail.value !== "") {
                        cCommonSpanFbMail.classList.add ("__c-common--span__FB_MAIL");
                    } else {
                        cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                    }
                });
    
    
    
                // 2.3 Поле телефона
    
                const cCommonInputFbTel = cCommonDivFbReg.querySelector (".c-common--input__FB_TEL");
                const cCommonSvgFbTel = cCommonDivFbReg.querySelector (".c-common--svg__FB_TEL");
                const cCommonSpanFbTel = cCommonDivFbReg.querySelector (".c-common--span__FB_TEL");
    
                
                cCommonInputFbTel.addEventListener ("input", () => {
                    if (cCommonInputFbTel.value !== "") {
                        cCommonSpanFbTel.classList.add ("__c-common--span__FB_TEL");
                    } else {
                        cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
                    }
                });
    
    
    
                // 2.4 Поля компании и должности
    
                const cCommonInputFbComp1 = cCommonDivFbReg.querySelector (".c-common--input__FB_COMP1");
                const cCommonLabelFbComp1 = cCommonDivFbReg.querySelector (".c-common--label__FB_COMP1");
                const cCommonSvgFbComp1 = cCommonDivFbReg.querySelector (".c-common--svg__FB_COMP1");
                const cCommonSpanFbComp1 = cCommonDivFbReg.querySelector (".c-common--span__FB_COMP1");
                const cCommonInputFbPost1 = cCommonDivFbReg.querySelector (".c-common--input__FB_POST1");
                const cCommonLabelFbPost1 = cCommonDivFbReg.querySelector (".c-common--label__FB_POST1");
                const cCommonSvgFbPost1 = cCommonDivFbReg.querySelector (".c-common--svg__FB_POST1");
                const cCommonSpanFbPost1 = cCommonDivFbReg.querySelector (".c-common--span__FB_POST1");
    
                
                cCommonInputFbComp1.addEventListener ("input", () => {
                    if (cCommonInputFbComp1.value !== "") {
                        cCommonSpanFbComp1.classList.add ("__c-common--span__FB_COMP1");
                    } else {
                        cCommonSpanFbComp1.classList.remove ("__c-common--span__FB_COMP1");
                    }
                });
            
            
            
                cCommonInputFbPost1.addEventListener ("input", () => {
                    if (cCommonInputFbPost1.value !== "") {
                        cCommonSpanFbPost1.classList.add ("__c-common--span__FB_POST1");
                    } else {
                        cCommonSpanFbPost1.classList.remove ("__c-common--span__FB_POST1");
                    }
                });
                            
    
    
    
                // 4. ИНИЦИАЛИЗАЦИЯ ПЛАГИНА intlTelInput
    
                window.intlTelInput(cCommonInputFbTel, {
                    loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js"),
                    initialCountry: "ru",
                });
    
    
    
    
                // 5. ВАЛИДАЦИЯ, ОТПРАВКА И ОТБИВКА (!!! ПРИ ИНТЕГРАЦИИ ВОЗМОЖНО БУДЕТ НЕОБХОДИМО ИЗМЕНЕНИЕ В ЧАСТИ ОТПРАВКИ)
    
                const cCommonDivFbDoneReg = document.querySelector (".c-common--div__FB_DONE._FORM_REGISTRATION");
                const cCommonButtonFbDoneClose = cCommonDivFbDoneReg.querySelector (".c-common--button__FB_DONE_CLOSE");
    
                
                cCommonFormFb.addEventListener ("submit", (e) => {
                    e.preventDefault ();
                    
    
                    if (cCommonInputFbName.checkValidity ()) {
                        cCommonLabelFbName.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbName.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbName.classList.add ("__c-common--label__FB");
                        cCommonSvgFbName.classList.add ("__c-common--svg__FB");
                    }
                    
                    
                    
                    if (cCommonInputFbSurName.checkValidity ()) {
                        cCommonLabelFbSurName.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbSurName.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbSurName.classList.add ("__c-common--label__FB");
                        cCommonSvgFbSurName.classList.add ("__c-common--svg__FB");
                    }
                    
            
                    
                    if (cCommonInputFbMail.checkValidity ()) {
                        cCommonLabelFbMail.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbMail.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbMail.classList.add ("__c-common--label__FB");
                        cCommonSvgFbMail.classList.add ("__c-common--svg__FB");
                    }
                    
                    
                    
                    if (cCommonInputFbTel.checkValidity ()) {
                        cCommonInputFbTel.classList.remove ("__c-common--input__FB_TEL");
                        cCommonSvgFbTel.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonInputFbTel.classList.add ("__c-common--input__FB_TEL");
                        cCommonSvgFbTel.classList.add ("__c-common--svg__FB");
                    }
    
    
                    
                    if (cCommonInputFbComp1.checkValidity ()) {
                        cCommonLabelFbComp1.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbComp1.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbComp1.classList.add ("__c-common--label__FB");
                        cCommonSvgFbComp1.classList.add ("__c-common--svg__FB");
                    }
            
                    
                    
                    if (cCommonInputFbPost1.checkValidity ()) {
                        cCommonLabelFbPost1.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbPost1.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbPost1.classList.add ("__c-common--label__FB");
                        cCommonSvgFbPost1.classList.add ("__c-common--svg__FB");
                    }
    
                    
                    
                    if (cCommonDivFbReg.querySelector (".c-common--input__FB_APPR").checkValidity ()) {
                        cCommonDivFbReg.querySelector (".c-common--div__FB_APPR").classList.remove ("__c-common--div__FB_APPR");
                        cCommonDivFbReg.querySelector (".c-common--p__FB_APPR").classList.remove ("__c-common--p__FB_APPR");
                    } else {
                        cCommonDivFbReg.querySelector (".c-common--div__FB_APPR").classList.add ("__c-common--div__FB_APPR");
                        cCommonDivFbReg.querySelector (".c-common--p__FB_APPR").classList.add ("__c-common--p__FB_APPR");
                    }
                    
    
            
                    setTimeout (() => {
                        if (!cCommonDivFbReg.querySelector (".__c-common--label__FB") && !cCommonDivFbReg.querySelector (".__c-common--input__FB_TEL") && !cCommonDivFbReg.querySelector (".__c-common--div__FB_APPR")) {
                            cCommonFormFb.reset ();
                            cCommonDivFbReg.classList.remove ("__c-common--div__FB");
                            cCommonDivFbDoneReg.classList.add ("__c-common--div__FB_DONE");
                        }
                    }, 50)
                });
    
    
                
                cCommonButtonFbDoneClose.addEventListener ("click", () => {
                    cCommonDivFbDoneReg.classList.remove ("__c-common--div__FB_DONE");
                    cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                    cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                    cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                    cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
                    cCommonSpanFbComp1.classList.remove ("__c-common--span__FB_COMP1");
                    cCommonSpanFbPost1.classList.remove ("__c-common--span__FB_POST1");
                });
                
                
                
                cCommonDivFbDoneReg.addEventListener ("click", (e) => {
                    if (e.target === cCommonDivFbDoneReg) {
                        cCommonDivFbDoneReg.classList.remove ("__c-common--div__FB_DONE");
                        cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                        cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                        cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                        cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
                        cCommonSpanFbComp1.classList.remove ("__c-common--span__FB_COMP1");
                        cCommonSpanFbPost1.classList.remove ("__c-common--span__FB_POST1");
                    }
                });
    
    
    
    
                // 6. АНИМАЦИЯ ПРИ СКРОЛЛЕ 
    
                const scrolls = cCommonDivFbReg.querySelectorAll('.__C-SCRL');
    
                const callback = (entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove ("__C-SCRL");
                            observer.unobserve(entry.target);
                        }
                    });
                }
    
                const options = {
                    rootMargin: '-40px 0px 0px 0px',
                    threshold: 0,
                }
    
                const observer = new IntersectionObserver(callback, options)
    
                scrolls.forEach((v) => observer.observe(v));
                
            } else {
                document.querySelector (".c-common--div__FB._FORM_REGISTRATION").classList.add ("__c-common--div__FB");
            }
            
        });
    });
    







    /* --- ФОРМА ДЛЯ ВАКАНСИЙ --- */
    
    
    // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ МОДАЛЬНЫХ ОКОН

    const openFrmVac = Array.from (document.querySelectorAll ("._OPEN_FRM._FORM_VACANCY"));
    

    // 1.1 Открытие

    
    openFrmVac?.forEach ((v0, i0, a0) => {
        a0[i0].addEventListener ("click", () => {
            if (!document.querySelector (".c-common--div__FB._FORM_VACANCY")) {
                document.querySelector ("main").insertAdjacentHTML ("beforeend", `
                
                    <!-- ФОРМА ДЛЯ ВАКАНСИЙ -->
    
                    <div class="c-common--div__FB _FORM_VACANCY">
                        <div class="c-common--div__FB_CONT">
                            <button class="c-common--button__FB_CLOSE">
                                <svg class="c-common--svg__FB_CLOSE" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)" fill="#005792"/>
                                    <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)" fill="#005792"/>
                                </svg>
                            </button>
            
                            <form class="c-common--form__FB _FORM_VACANCY __C-SCRL RIGHT" action="#" method="post" name="feedback" novalidate>
                                <p class="c-common--p__FB_NAME">
                                    Откликнуться на вакансию
                                </p>
            
                                <p class="c-common--p__FB_TEXT">
                                    Расскажите нам о себе
                                </p>
            
            
            
                                <label class="c-common--label__FB_RESM">
                                    <input class="c-common--input__FB_RESM" type="file" name="feedback-resm" accept=".pdf, .doc, .docx, .rtf" placeholder="Резюме" required>
                                    <svg class="c-common--svg__FB_RESM" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.79301 17C1.00996 17 0.530726 16.1407 0.942216 15.4745L9.6492 1.37748C10.04 0.744805 10.96 0.744806 11.3508 1.37748L20.0578 15.4745C20.4693 16.1407 19.99 17 19.207 17H1.79301ZM1.91243 15.4487C1.70623 15.7818 1.94581 16.2119 2.33756 16.2119H18.6624C19.0542 16.2119 19.2938 15.7818 19.0876 15.4487L10.9251 2.26293C10.7297 1.94716 10.2703 1.94716 10.0749 2.26293L1.91243 15.4487ZM10.5 14.5232C10.67 14.5232 10.8125 14.4692 10.9275 14.3613C11.0425 14.2534 11.1 14.1198 11.1 13.9603C11.1 13.8008 11.0425 13.6671 10.9275 13.5592C10.8125 13.4513 10.67 13.3974 10.5 13.3974C10.33 13.3974 10.1875 13.4513 10.0725 13.5592C9.9575 13.6671 9.9 13.8008 9.9 13.9603C9.9 14.1198 9.9575 14.2534 10.0725 14.3613C10.1875 14.4692 10.33 14.5232 10.5 14.5232ZM10.08 11.8515C10.08 12.0835 10.268 12.2715 10.5 12.2715C10.732 12.2715 10.92 12.0835 10.92 11.8515V7.06238C10.92 6.83042 10.732 6.64238 10.5 6.64238C10.268 6.64238 10.08 6.83042 10.08 7.06238V11.8515Z" fill="#C82121"/>
                                    </svg>
                                    <svg class="c-common--svg__FB_RESM1" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.1868 23.4131C14.6397 24.9602 12.8112 25.7645 10.701 25.8262C8.59105 25.888 6.7956 25.1784 5.31469 23.6975C3.83377 22.2166 3.12103 20.418 3.17647 18.3016C3.2319 16.1853 4.03315 14.3536 5.58019 12.8065L14.4976 3.88915C15.5778 2.80887 16.8531 2.24755 18.3234 2.20518C19.7937 2.16314 21.0478 2.66112 22.0858 3.6991C23.1238 4.73708 23.6217 5.99113 23.5795 7.46125C23.5373 8.9317 22.976 10.2071 21.8958 11.2873L13.4498 19.7334C12.85 20.3331 12.1324 20.6485 11.2968 20.6797C10.4613 20.7111 9.75457 20.4378 9.17654 19.8597C8.5985 19.2817 8.31456 18.5712 8.32471 17.7281C8.33487 16.8851 8.64662 16.1569 9.25996 15.5436L17.7453 7.05823L18.7267 8.03962L10.2413 16.525C9.91536 16.8509 9.74468 17.2361 9.7293 17.6803C9.71409 18.1247 9.86309 18.5035 10.1763 18.8168C10.4897 19.1301 10.8685 19.2792 11.3128 19.2638C11.7572 19.2486 12.1424 19.078 12.4684 18.752L20.934 10.2863C21.7239 9.48892 22.1348 8.55364 22.1667 7.48045C22.1988 6.40742 21.8314 5.48743 21.0644 4.72048C20.3034 3.95941 19.3806 3.59579 18.296 3.62962C17.2116 3.66329 16.2726 4.07693 15.479 4.87053L6.56158 13.7879C5.29676 15.0452 4.64164 16.5396 4.59622 18.271C4.55065 20.0023 5.13288 21.473 6.34294 22.683C7.53565 23.8757 8.99372 24.4454 10.7171 24.3919C12.4406 24.3385 13.9367 23.6851 15.2054 22.4317L24.1621 13.475L25.1435 14.4564L16.1868 23.4131Z" fill="#005792" fill-opacity="0.2"/>
                                    </svg>
                                    <span class="c-common--span__FB_RESM1">
                                        Резюме
                                    </span>
                                    <span class="c-common--span__FB_RESM2">
                                        *
                                    </span>
                                    <span class="c-common--span__FB_RESM3">
                                        (загрузите файл с резюме)
                                    </span>
                                </label>
                                <p class="c-common--p__FB_RESM">
                                    <span class="c-common--span__FB_RESM4">
                                        Формат файла:
                                    </span>
                                    <span class="c-common--span__FB_RESM5">
                                        pdf, doc, docx, rtf
                                    </span>
                                    <span class="c-common--span__FB_RESM4">
                                        Максимальный размер:
                                    </span>
                                    <span class="c-common--span__FB_RESM5">
                                        не более 10 МБ
                                    </span>
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
                                
            
            
                                <label class="c-common--label__FB_TA_RESM">
                                    <textarea class="c-common--textarea__FB_TA_RESM" name="feedback-textarea" placeholder="Сопроводительное письмо"></textarea>
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
                                <img src="images/home/hm-des_2.png" alt="">
                            </div>
                        </div>
                    </div>
    
    
                    <!-- ОТЧЕТ ОБ ОТПРАВКЕ ФОРМЫ (ДЛЯ ВАКАНСИИ) -->
    
                    <div class="c-common--div__FB_DONE _FORM_VACANCY">
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
                                Ваша заявка в работе. <br />
                                Мы свяжемся с вами в ближайшее время.
                            </p>
                        </div>
                    </div>
                `);
    
    
    
                const cCommonDivFbVac = document.querySelector (".c-common--div__FB._FORM_VACANCY");
                const cCommonButtonFbCloseVac = cCommonDivFbVac.querySelector (".c-common--button__FB_CLOSE");
                const cCommonFormFb = cCommonDivFbVac.querySelector (".c-common--form__FB");
    
                setTimeout (() => {
                    cCommonDivFbVac.classList.add ("__c-common--div__FB");
                }, 50);
    
    
    
                // 1.2 Закрытие
    
                cCommonButtonFbCloseVac.addEventListener ("click", () => {
                    cCommonDivFbVac.classList.remove ("__c-common--div__FB");
                });
                
                
                cCommonDivFbVac.addEventListener ("click", (e) => {
                    if (e.target === cCommonDivFbVac) {
                        cCommonDivFbVac.classList.remove ("__c-common--div__FB");
                    }
                });
    
    
    
    
                // 2. ИСЧЕЗАНИЕ / ПОЯВЛЕНИЕ ЗВЕЗДОЧКИ И/ИЛИ ПОДПИСЕЙ В ПОЛЯХ ПРИ НАБОРЕ
    
                
                // 2.1 Поля имени и фамилии
    
                const cCommonInputFbName = cCommonDivFbVac.querySelector (".c-common--input__FB_NAME");
                const cCommonLabelFbName = cCommonDivFbVac.querySelector (".c-common--label__FB_NAME");
                const cCommonSvgFbName = cCommonDivFbVac.querySelector (".c-common--svg__FB_NAME");
                const cCommonSpanFbName = cCommonDivFbVac.querySelector (".c-common--span__FB_NAME");
                const cCommonInputFbSurName = cCommonDivFbVac.querySelector (".c-common--input__FB_SURNAME");
                const cCommonLabelFbSurName = cCommonDivFbVac.querySelector (".c-common--label__FB_SURNAME");
                const cCommonSvgFbSurName = cCommonDivFbVac.querySelector (".c-common--svg__FB_SURNAME");
                const cCommonSpanFbSurName = cCommonDivFbVac.querySelector (".c-common--span__FB_SURNAME");
    
                cCommonInputFbName.addEventListener ("input", () => {
                    if (cCommonInputFbName.value !== "") {
                        cCommonSpanFbName.classList.add ("__c-common--span__FB_NAME");
                    } else {
                        cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                    }
                });
                
                
                cCommonInputFbSurName.addEventListener ("input", () => {
                    if (cCommonInputFbSurName.value !== "") {
                        cCommonSpanFbSurName.classList.add ("__c-common--span__FB_SURNAME");
                    } else {
                        cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                    }
                });
                
    
    
                // 2.2 Поле электронной почты
    
                const cCommonInputFbMail = cCommonDivFbVac.querySelector (".c-common--input__FB_MAIL");
                const cCommonLabelFbMail = cCommonDivFbVac.querySelector (".c-common--label__FB_MAIL");
                const cCommonSvgFbMail = cCommonDivFbVac.querySelector (".c-common--svg__FB_MAIL");
                const cCommonSpanFbMail = cCommonDivFbVac.querySelector (".c-common--span__FB_MAIL");
    
                
                cCommonInputFbMail.addEventListener ("input", () => {
                    if (cCommonInputFbMail.value !== "") {
                        cCommonSpanFbMail.classList.add ("__c-common--span__FB_MAIL");
                    } else {
                        cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                    }
                });
    
    
    
                // 2.3 Поле телефона
    
                const cCommonInputFbTel = cCommonDivFbVac.querySelector (".c-common--input__FB_TEL");
                const cCommonSvgFbTel = cCommonDivFbVac.querySelector (".c-common--svg__FB_TEL");
                const cCommonSpanFbTel = cCommonDivFbVac.querySelector (".c-common--span__FB_TEL");
    
                
                cCommonInputFbTel.addEventListener ("input", () => {
                    if (cCommonInputFbTel.value !== "") {
                        cCommonSpanFbTel.classList.add ("__c-common--span__FB_TEL");
                    } else {
                        cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
                    }
                });
                            
    
    
    
                // 4. ИНИЦИАЛИЗАЦИЯ ПЛАГИНА intlTelInput
    
                window.intlTelInput(cCommonInputFbTel, {
                    loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js"),
                    initialCountry: "ru",
                });
    
    
    
    
                // 5. ОГРАНИЧЕНИЕ РАЗМЕРА ЗАГРУЖАЕМОГО ФАЙЛА (!!! ЖЕЛАТЕЛЬНО СДЕЛАТЬ ПРОВЕРКУ И НА СТОРОНЕ СЕРВЕРА)
    
                const cCommonInputFbResm = document.querySelector (".c-common--input__FB_RESM");
                const cCommonSvgFbResm1 = document.querySelector (".c-common--svg__FB_RESM1");
    
                cCommonInputFbResm.addEventListener ("change", () => {
                    if (cCommonInputFbResm.files[0].size > 10485760) {
                        cCommonInputFbResm.setCustomValidity ("Превышен допустимый размер файла");
                    }
                });
    
    
    
    
                // 6. ВАЛИДАЦИЯ, ОТПРАВКА И ОТБИВКА (!!! ПРИ ИНТЕГРАЦИИ ВОЗМОЖНО БУДЕТ НЕОБХОДИМО ИЗМЕНЕНИЕ В ЧАСТИ ОТПРАВКИ)
    
                const cCommonDivFbDoneVac = document.querySelector (".c-common--div__FB_DONE._FORM_VACANCY");
                const cCommonButtonFbDoneClose = cCommonDivFbDoneVac.querySelector (".c-common--button__FB_DONE_CLOSE");
    
                
                cCommonFormFb.addEventListener ("submit", (e) => {
                    e.preventDefault ();
    
    
                    
                    if (cCommonDivFbVac.querySelector (".c-common--input__FB_RESM").checkValidity ()) {
                        cCommonDivFbVac.querySelector (".c-common--label__FB_RESM").classList.remove ("__c-common--label__FB");
                        cCommonDivFbVac.querySelector (".c-common--svg__FB_RESM").classList.remove ("__c-common--svg__FB");
                        cCommonDivFbVac.querySelector (".c-common--svg__FB_RESM1").classList.remove ("__c-common--svg__FB_RESM1");
                    } else {
                        cCommonDivFbVac.querySelector (".c-common--label__FB_RESM").classList.add ("__c-common--label__FB");
                        cCommonDivFbVac.querySelector (".c-common--svg__FB_RESM").classList.add ("__c-common--svg__FB");
                        cCommonDivFbVac.querySelector (".c-common--svg__FB_RESM1").classList.add ("__c-common--svg__FB_RESM1");
                    }
                    
                    
    
                    if (cCommonInputFbName.checkValidity ()) {
                        cCommonLabelFbName.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbName.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbName.classList.add ("__c-common--label__FB");
                        cCommonSvgFbName.classList.add ("__c-common--svg__FB");
                    }
                    
                    
                    
                    if (cCommonInputFbSurName.checkValidity ()) {
                        cCommonLabelFbSurName.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbSurName.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbSurName.classList.add ("__c-common--label__FB");
                        cCommonSvgFbSurName.classList.add ("__c-common--svg__FB");
                    }
                    
            
                    
                    if (cCommonInputFbMail.checkValidity ()) {
                        cCommonLabelFbMail.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbMail.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbMail.classList.add ("__c-common--label__FB");
                        cCommonSvgFbMail.classList.add ("__c-common--svg__FB");
                    }
                    
                    
                    
                    if (cCommonInputFbTel.checkValidity ()) {
                        cCommonInputFbTel.classList.remove ("__c-common--input__FB_TEL");
                        cCommonSvgFbTel.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonInputFbTel.classList.add ("__c-common--input__FB_TEL");
                        cCommonSvgFbTel.classList.add ("__c-common--svg__FB");
                    }
    
                    
                    
                    if (cCommonDivFbVac.querySelector (".c-common--input__FB_APPR").checkValidity ()) {
                        cCommonDivFbVac.querySelector (".c-common--div__FB_APPR").classList.remove ("__c-common--div__FB_APPR");
                        cCommonDivFbVac.querySelector (".c-common--p__FB_APPR").classList.remove ("__c-common--p__FB_APPR");
                    } else {
                        cCommonDivFbVac.querySelector (".c-common--div__FB_APPR").classList.add ("__c-common--div__FB_APPR");
                        cCommonDivFbVac.querySelector (".c-common--p__FB_APPR").classList.add ("__c-common--p__FB_APPR");
                    }
                    
    
            
                    setTimeout (() => {
                        if (!cCommonDivFbVac.querySelector (".__c-common--label__FB") && !cCommonDivFbVac.querySelector (".__c-common--input__FB_TEL") && !cCommonDivFbVac.querySelector (".__c-common--div__FB_APPR")) {
                            cCommonFormFb.reset ();
                            cCommonDivFbVac.classList.remove ("__c-common--div__FB");
                            cCommonDivFbDoneVac.classList.add ("__c-common--div__FB_DONE");
                        }
                    }, 50)
                });
    
    
                
                cCommonButtonFbDoneClose.addEventListener ("click", () => {
                    cCommonDivFbDoneVac.classList.remove ("__c-common--div__FB_DONE");
                    cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                    cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                    cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                    cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
                });
                
                
                
                cCommonDivFbDoneVac.addEventListener ("click", (e) => {
                    if (e.target === cCommonDivFbDoneVac) {
                        cCommonDivFbDoneVac.classList.remove ("__c-common--div__FB_DONE");
                        cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                        cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                        cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                        cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
                    }
                });
    
    
    
    
                // 7. АНИМАЦИЯ ПРИ СКРОЛЛЕ 
    
                const scrolls = cCommonDivFbVac.querySelectorAll('.__C-SCRL');
    
                const callback = (entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove ("__C-SCRL");
                            observer.unobserve(entry.target);
                        }
                    });
                }
    
                const options = {
                    rootMargin: '-40px 0px 0px 0px',
                    threshold: 0,
                }
    
                const observer = new IntersectionObserver(callback, options)
    
                scrolls.forEach((v) => observer.observe(v));
                
            } else {
                document.querySelector (".c-common--div__FB._FORM_VACANCY").classList.add ("__c-common--div__FB");
            }
            
        });
    });
    







    /* --- ФОРМА ДЛЯ ПОДПИСКИ --- */
    
    
    // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ МОДАЛЬНЫХ ОКОН

    const openFrmSub = Array.from (document.querySelectorAll ("._OPEN_FRM._FORM_SUBSCR"));
    

    // 1.1 Открытие

    
    openFrmSub?.forEach ((v0, i0, a0) => {
        a0[i0].addEventListener ("click", () => {
            if (!document.querySelector (".c-common--div__FB._FORM_SUBSCR")) {
                document.querySelector ("main").insertAdjacentHTML ("beforeend", `
                
                    <!-- ФОРМА ДЛЯ ПОДПИСКИ -->
    
    
                    <div class="c-common--div__FB _FORM_SUBSCR">
                        <div class="c-common--div__FB_CONT">
                            <button class="c-common--button__FB_CLOSE">
                                <svg class="c-common--svg__FB_CLOSE" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)" fill="#005792"/>
                                    <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)" fill="#005792"/>
                                </svg>
                            </button>
            
                            <form class="c-common--form__FB _FORM_COMMON __C-SCRL RIGHT" action="#" method="post" name="feedback" novalidate>
                                <p class="c-common--p__FB_NAME">
                                    Подпишитесь на нашу новостную рассылку
                                </p>
            
            
            
                                <p class="c-common--p__FB_TEXT">
                                    Будьте в курсе событий и новинок!
                                </p>
            
            
            
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
            
            
            
                                <label class="c-common--label__FB_MAIL">
                                    <input class="c-common--input__FB_MAIL" type="email" name="feedback-mail" placeholder="Email" required>
                                    <span class="c-common--span__FB_MAIL">
                                        *
                                    </span>
                                    <svg class="c-common--svg__FB_MAIL" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                <img src="images/home/hm-des_2.png" alt="">
                            </div>
                        </div>
                    </div>
    
    
                    <!-- ОТЧЕТ ОБ ОТПРАВКЕ ФОРМЫ (ДЛЯ ПОДПИСКИ) -->
    
                    <div class="c-common--div__FB_DONE _FORM_SUBSCR">
                        <div class="c-common--div__FB_DONE_CONT">
                            <button class="c-common--button__FB_DONE_CLOSE">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(0.705843 -0.708368 0.705843 0.708368 0 13.9355)" fill="#BFBFBF"/>
                                    <rect width="19.6727" height="1.50269" rx="0.751343" transform="matrix(-0.705843 -0.708368 -0.705843 0.708368 15 13.9355)" fill="#BFBFBF"/>
                                </svg>
                            </button>
                            <div class="c-common--div__FB_DONE_TOP">
                                <p class="c-common--p__FB_DONE_TOP">
                                    Ваша заявка
                                </p>
                                <p class="c-common--p__FB_DONE_TOP">
                                    отправлена!
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
                                Спасибо за подписку на нашу новостную рассылку.
                            </p>
                        </div>
                    </div>
                `);
    
    
    
                const cCommonDivFbSub = document.querySelector (".c-common--div__FB._FORM_SUBSCR");
                const cCommonButtonFbCloseSub = cCommonDivFbSub.querySelector (".c-common--button__FB_CLOSE");
                const cCommonFormFb = cCommonDivFbSub.querySelector (".c-common--form__FB");
    
                setTimeout (() => {
                    cCommonDivFbSub.classList.add ("__c-common--div__FB");
                }, 50);
    
    
    
                // 1.2 Закрытие
    
                cCommonButtonFbCloseSub.addEventListener ("click", () => {
                    cCommonDivFbSub.classList.remove ("__c-common--div__FB");
                });
                
                
                cCommonDivFbSub.addEventListener ("click", (e) => {
                    if (e.target === cCommonDivFbSub) {
                        cCommonDivFbSub.classList.remove ("__c-common--div__FB");
                    }
                });
    
    
    
    
                // 2. ИСЧЕЗАНИЕ / ПОЯВЛЕНИЕ ЗВЕЗДОЧКИ И/ИЛИ ПОДПИСЕЙ В ПОЛЯХ ПРИ НАБОРЕ
    
                
                // 2.1 Поля имени и фамилии
    
                const cCommonInputFbName = cCommonDivFbSub.querySelector (".c-common--input__FB_NAME");
                const cCommonLabelFbName = cCommonDivFbSub.querySelector (".c-common--label__FB_NAME");
                const cCommonSvgFbName = cCommonDivFbSub.querySelector (".c-common--svg__FB_NAME");
                const cCommonSpanFbName = cCommonDivFbSub.querySelector (".c-common--span__FB_NAME");
                const cCommonInputFbSurName = cCommonDivFbSub.querySelector (".c-common--input__FB_SURNAME");
                const cCommonLabelFbSurName = cCommonDivFbSub.querySelector (".c-common--label__FB_SURNAME");
                const cCommonSvgFbSurName = cCommonDivFbSub.querySelector (".c-common--svg__FB_SURNAME");
                const cCommonSpanFbSurName = cCommonDivFbSub.querySelector (".c-common--span__FB_SURNAME");
    
                cCommonInputFbName.addEventListener ("input", () => {
                    if (cCommonInputFbName.value !== "") {
                        cCommonSpanFbName.classList.add ("__c-common--span__FB_NAME");
                    } else {
                        cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                    }
                });
                
                
                cCommonInputFbSurName.addEventListener ("input", () => {
                    if (cCommonInputFbSurName.value !== "") {
                        cCommonSpanFbSurName.classList.add ("__c-common--span__FB_SURNAME");
                    } else {
                        cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                    }
                });
                
    
    
                // 2.2 Поле электронной почты
    
                const cCommonInputFbMail = cCommonDivFbSub.querySelector (".c-common--input__FB_MAIL");
                const cCommonLabelFbMail = cCommonDivFbSub.querySelector (".c-common--label__FB_MAIL");
                const cCommonSvgFbMail = cCommonDivFbSub.querySelector (".c-common--svg__FB_MAIL");
                const cCommonSpanFbMail = cCommonDivFbSub.querySelector (".c-common--span__FB_MAIL");
    
                
                cCommonInputFbMail.addEventListener ("input", () => {
                    if (cCommonInputFbMail.value !== "") {
                        cCommonSpanFbMail.classList.add ("__c-common--span__FB_MAIL");
                    } else {
                        cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                    }
                });
    
    
    
    
                // 5. ВАЛИДАЦИЯ, ОТПРАВКА И ОТБИВКА (!!! ПРИ ИНТЕГРАЦИИ ВОЗМОЖНО БУДЕТ НЕОБХОДИМО ИЗМЕНЕНИЕ В ЧАСТИ ОТПРАВКИ)
    
                const cCommonDivFbDoneSub = document.querySelector (".c-common--div__FB_DONE._FORM_SUBSCR");
                const cCommonButtonFbDoneClose = cCommonDivFbDoneSub.querySelector (".c-common--button__FB_DONE_CLOSE");
    
                
                cCommonFormFb.addEventListener ("submit", (e) => {
                    e.preventDefault ();
                    
                    
                    if (cCommonInputFbName.checkValidity ()) {
                        cCommonLabelFbName.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbName.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbName.classList.add ("__c-common--label__FB");
                        cCommonSvgFbName.classList.add ("__c-common--svg__FB");
                    }
                    
                    
                    
                    if (cCommonInputFbSurName.checkValidity ()) {
                        cCommonLabelFbSurName.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbSurName.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbSurName.classList.add ("__c-common--label__FB");
                        cCommonSvgFbSurName.classList.add ("__c-common--svg__FB");
                    }
                    
            
                    
                    if (cCommonInputFbMail.checkValidity ()) {
                        cCommonLabelFbMail.classList.remove ("__c-common--label__FB");
                        cCommonSvgFbMail.classList.remove ("__c-common--svg__FB");
                    } else {
                        cCommonLabelFbMail.classList.add ("__c-common--label__FB");
                        cCommonSvgFbMail.classList.add ("__c-common--svg__FB");
                    }
    
                    
                    
                    if (cCommonDivFbSub.querySelector (".c-common--input__FB_APPR").checkValidity ()) {
                        cCommonDivFbSub.querySelector (".c-common--div__FB_APPR").classList.remove ("__c-common--div__FB_APPR");
                        cCommonDivFbSub.querySelector (".c-common--p__FB_APPR").classList.remove ("__c-common--p__FB_APPR");
                    } else {
                        cCommonDivFbSub.querySelector (".c-common--div__FB_APPR").classList.add ("__c-common--div__FB_APPR");
                        cCommonDivFbSub.querySelector (".c-common--p__FB_APPR").classList.add ("__c-common--p__FB_APPR");
                    }
                    
    
            
                    setTimeout (() => {
                        if (!cCommonDivFbSub.querySelector (".__c-common--label__FB") && !cCommonDivFbSub.querySelector (".__c-common--input__FB_TEL") && !cCommonDivFbSub.querySelector (".__c-common--div__FB_APPR")) {
                            cCommonFormFb.reset ();
                            cCommonDivFbSub.classList.remove ("__c-common--div__FB");
                            cCommonDivFbDoneSub.classList.add ("__c-common--div__FB_DONE");
                        }
                    }, 50)
                });
    
    
                
                cCommonButtonFbDoneClose.addEventListener ("click", () => {
                    cCommonDivFbDoneSub.classList.remove ("__c-common--div__FB_DONE");
                    cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                    cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                    cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                });
                
                
                
                cCommonDivFbDoneSub.addEventListener ("click", (e) => {
                    if (e.target === cCommonDivFbDoneSub) {
                        cCommonDivFbDoneSub.classList.remove ("__c-common--div__FB_DONE");
                        cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                        cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                        cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                    }
                });
    
    
    
    
                // 6. АНИМАЦИЯ ПРИ СКРОЛЛЕ 
    
                const scrolls = cCommonDivFbSub.querySelectorAll('.__C-SCRL');
    
                const callback = (entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove ("__C-SCRL");
                            observer.unobserve(entry.target);
                        }
                    });
                }
    
                const options = {
                    rootMargin: '-40px 0px 0px 0px',
                    threshold: 0,
                }
    
                const observer = new IntersectionObserver(callback, options)
    
                scrolls.forEach((v) => observer.observe(v));
                
            } else {
                document.querySelector (".c-common--div__FB._FORM_SUBSCR").classList.add ("__c-common--div__FB");
            }
            
        });
    });
    
    
    
});