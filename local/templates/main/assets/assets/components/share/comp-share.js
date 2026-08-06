
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** КОМПОНЕНТ SHARE ********** ---------- */

    if (document.querySelector (".c-common--div__SHARE")) {


        // 1 ОТКРЫТИЕ / ЗАКРЫТИЕ ПОПАПА "ПОДЕЛИТЬСЯ"

        const cCommonDivShare = Array.from (document.querySelectorAll (".c-common--div__SHARE"));
        const cCommonButtonShare = Array.from (document.querySelectorAll (".c-common--button__SHARE"));
        const cCommonDivSharePopupCont = Array.from (document.querySelectorAll (".c-common--div__SHARE_POPUP_CONT"));
        const cCommonDivSharePopupCont2 = Array.from (document.querySelectorAll (".c-common--div__SHARE_POPUP_CONT2"));
        const cCommonButtonSharePopupClose = Array.from (document.querySelectorAll (".c-common--button__SHARE_POPUP_CLOSE"));
        const cCommonDivSharePopupLinks = Array.from (document.querySelectorAll (".c-common--div__SHARE_POPUP_LINKS"));


        // 1.1 Открытие

        cCommonButtonShare.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                cCommonDivShare[i].classList.toggle ("__c-common--div__SHARE");
                cCommonDivSharePopupCont[i].classList.toggle ("__c-common--div__SHARE_POPUP_CONT");
                setTimeout (() => {
                    cCommonDivSharePopupCont[i].classList.toggle ("__c-common--div__SHARE_POPUP_CONT1");
                    cCommonDivSharePopupCont2[i].classList.toggle ("__c-common--div__SHARE_POPUP_CONT2");
                }, 50);
            });
        });


        // 1.2 Закрытие

        cCommonButtonSharePopupClose.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                cCommonDivShare[i].classList.remove ("__c-common--div__SHARE");
                cCommonDivSharePopupCont[i].classList.remove ("__c-common--div__SHARE_POPUP_CONT");
                cCommonDivSharePopupCont[i].classList.remove ("__c-common--div__SHARE_POPUP_CONT1");
                cCommonDivSharePopupCont2[i].classList.remove ("__c-common--div__SHARE_POPUP_CONT2");
            });
        });

        cCommonDivSharePopupCont.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                if (e.target === a[i]) {
                    cCommonDivShare[i].classList.remove ("__c-common--div__SHARE");
                    cCommonDivSharePopupCont[i].classList.remove ("__c-common--div__SHARE_POPUP_CONT");
                    cCommonDivSharePopupCont[i].classList.remove ("__c-common--div__SHARE_POPUP_CONT1");
                    cCommonDivSharePopupCont2[i].classList.remove ("__c-common--div__SHARE_POPUP_CONT2");
                }
            });
        });

        cCommonDivShare.forEach ((v, i, a) => {
            document.addEventListener ("click", (e) => {
                if (!e.target.closest (".c-common--div__SHARE") && !e.target.closest (".c-common--div__SHARE_POPUP_CONT")) {
                    cCommonDivShare[i].classList.remove ("__c-common--div__SHARE");
                    cCommonDivSharePopupCont[i].classList.remove ("__c-common--div__SHARE_POPUP_CONT");
                    cCommonDivSharePopupCont[i].classList.remove ("__c-common--div__SHARE_POPUP_CONT1");
                    cCommonDivSharePopupCont2[i].classList.remove ("__c-common--div__SHARE_POPUP_CONT2");
                }
            });
        });

        cCommonDivSharePopupLinks.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                cCommonDivShare[i].classList.remove ("__c-common--div__SHARE");
                cCommonDivSharePopupCont[i].classList.remove ("__c-common--div__SHARE_POPUP_CONT");
                cCommonDivSharePopupCont[i].classList.remove ("__c-common--div__SHARE_POPUP_CONT1");
                cCommonDivSharePopupCont2[i].classList.remove ("__c-common--div__SHARE_POPUP_CONT2");
            });
        });









        // 2 ПРОГРАММИРОВАНИЕ ССЫЛОК

        // 2.1 Копирование ссылки на страницу в буфер обмена (кнопка "Скопировать ссылку")

        const cCommonAnySharePopupLinkCopy = Array.from (document.querySelectorAll (".c-common--any__SHARE_POPUP_LINK._COPY"));

        cCommonAnySharePopupLinkCopy.forEach((v, i, a) => {
            a[i].addEventListener("click", (e) => {
                const url = window.location.href;

                // Проверяем, доступен ли современный Clipboard API
                if (navigator.clipboard && typeof navigator.clipboard.writeText === "function") {
                    navigator.clipboard.writeText(url).catch(err => {
                        console.error("Ошибка при копировании через Clipboard API: ", err);
                    });
                } else {
                    // Резервный метод для HTTP и старых браузеров
                    const textArea = document.createElement("textarea");
                    textArea.value = url;
                    textArea.style.position = "fixed"; // Избегаем прокрутки страницы
                    document.body.appendChild(textArea);
                    textArea.focus();
                    textArea.select();
                    try {
                        document.execCommand("copy");
                    } catch (err) {
                        console.error("Не удалось скопировать текст: ", err);
                    }
                    document.body.removeChild(textArea);
                }
            });
        });




        // 2.2 Отправка ссылки на страницу по почте

        /// !!! ПРОВЕРИТЬ РАБОТОСПОСОБНОСТЬ ПРИ ИНТЕГРАЦИИ !!!
        
        const cCommonAnySharePopupLinkMail = Array.from (document.querySelectorAll (".c-common--any__SHARE_POPUP_LINK._MAIL"));

        cCommonAnySharePopupLinkMail.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                window.location.href = `mailto:ex@mail.pru?subject=${document.location.href}`;
            });
        });




        // 2.3 Поделиться ссылкой на страницу во ВКонтакте

        /// !!! ПРОВЕРИТЬ РАБОТОСПОСОБНОСТЬ ПРИ ИНТЕГРАЦИИ !!!

        const cCommonAnySharePopupLinkVk = Array.from (document.querySelectorAll (".c-common--any__SHARE_POPUP_LINK._VK"));

        cCommonAnySharePopupLinkVk.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                window.location.href = `https://vk.com/share.php?url=${document.location.href}`;
            });
        });




        // 2.4 Поделиться ссылкой на страницу в Дзене

        /// !!! СПОСОБ НЕ НАЙДЕН !!!

        


        // 2.5 Поделиться ссылкой на страницу в Telegram

        /// !!! ПРОВЕРИТЬ РАБОТОСПОСОБНОСТЬ ПРИ ИНТЕГРАЦИИ !!!

        const cCommonAnySharePopupLinkTg = Array.from (document.querySelectorAll (".c-common--any__SHARE_POPUP_LINK._TG"));

        cCommonAnySharePopupLinkTg.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                window.location.href = `https://t.me/share/url?url=${document.location.href}`;
            });
        });




        // 2.6 Поделиться ссылкой на страницу в Max

        /// !!! СПОСОБ НЕ НАЙДЕН !!!



        // 2.7 Поделиться ссылкой через стандартный интерфейс смартфона (кнопка "Еще")

        /// !!! ПРОВЕРИТЬ РАБОТОСПОСОБНОСТЬ ПРИ ИНТЕГРАЦИИ !!!

        const cCommonAnySharePopupLinkElse = Array.from (document.querySelectorAll (".c-common--any__SHARE_POPUP_LINK._ELSE"));

        cCommonAnySharePopupLinkElse.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => { 
                if (navigator.share) {
                    navigator.share ({url: `${document.location.href}`}).then (() => {console.log ("Успех");}).catch (console.error ("Не успех"));  
                } else {
                    console.error ("Не успех"); 
                }  
            });
        });
    }

});


    