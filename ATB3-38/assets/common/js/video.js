
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** ВИДЕО ********** ---------- */
    

    // 1.1 Открытие окна с видео

    const videoOpen = Array.from (document.querySelectorAll ("._VID_OPEN"));
    const cCommonDivVid = Array.from (document.querySelectorAll (".c-common--div__VID"));
    const cCommonIframeVid = Array.from (document.querySelectorAll (".c-common--iframe__VID"));

    // 1.1.1 Сбор адресов видеоресурсов для управления видео из ВК.
    const cCommonIframeVidSrcs = [];
    cCommonIframeVid.forEach ((v, i, a) => {
        cCommonIframeVidSrcs.push (a[i].src);
    });

    // 1.1.2 Переменная для контроля за адресной строкой
    let hashMark = false;

    // 1.1.3 Присвоение атрибутов data-modal модальным окнам с автоматическим присвоением значения
    cCommonDivVid.forEach ((v, i, a) => {
        a[i].setAttribute ("data-modal", `video${i + 1}`);
    });


    
    videoOpen.forEach ((v, i, a) => {
        a[i].addEventListener ("click", () => {
            cCommonDivVid[i].classList.add ("__c-common--div__VID");

            // 1.1.4 Изменение адресной строки при открытии модального окна
            hashMark = true;
            window.location.hash = `#${cCommonDivVid[i].getAttribute("data-modal")}`;

            if (cCommonDivVid[i].querySelector (".c-common--iframe__VID._VK")) {
                cCommonIframeVid[i].src = cCommonIframeVidSrcs[i];
            }
        });
    });







    // 1.2 Закрытие окна с видео

    const cCommonButtonVidClose = Array.from (document.querySelectorAll (".c-common--button__VID_CLOSE"));


    cCommonButtonVidClose.forEach ((v, i, a) => {
        a[i].addEventListener ("click", () => {
            cCommonDivVid[i].classList.remove ("__c-common--div__VID");
            
            // 1.1.4 Изменение адресной строки при закрытии модального окна
            hashMark = true;
            window.location.hash = `#`;

            // Плеер из Rutube ставится на паузу
            if (cCommonDivVid[i].querySelector (".c-common--iframe__VID._RUTUBE")) {
                const rutubePlayer = cCommonDivVid[i].querySelector (".c-common--iframe__VID._RUTUBE");
                rutubePlayer.contentWindow.postMessage (JSON.stringify ({type:'player:pause', data:{}}), '*');
            }

            // Плеер из VK ставится на паузу (альтернативный способ)
            // по API от ВК не срабатывает по неизвестной причине
            // Оставил на всякий случай закомментированный код для него ниже (также для него требуется еще
            // подключить скрипт с src=https://vk.com/js/api/videoplayer.js)
            if (cCommonDivVid[i].querySelector (".c-common--iframe__VID._VK")) {
                cCommonIframeVid[i].src = "";
                // const vkPlayer = a[i].querySelector (".c-common--iframe__VID._VK");
                // VK.VideoPlayer (vkPlayer).pause ();
            }
        });
    });

    cCommonDivVid.forEach ((v, i, a) => {
        a[i].addEventListener ("click", (e) => {
            if (a[i].classList.contains ("__c-common--div__VID") && e.target === a[i]) {
                a[i].classList.remove ("__c-common--div__VID");

                // 1.1.4 Изменение адресной строки при закрытии модального окна
                hashMark = true;
                window.location.hash = `#`;

                // Плеер из Rutube ставится на паузу
                if (a[i].querySelector (".c-common--iframe__VID._RUTUBE")) {
                    const rutubePlayer = a[i].querySelector (".c-common--iframe__VID._RUTUBE");
                    rutubePlayer.contentWindow.postMessage (JSON.stringify ({type:'player:pause', data:{}}), '*');
                }

                // Плеер из VK ставится на паузу (альтернативный способ)
                // по API от ВК не срабатывает по неизвестной причине
                // Оставил на всякий случай закомментированный код для него ниже (также для него требуется еще
                // подключить скрипт с src=https://vk.com/js/api/videoplayer.js)
                if (a[i].querySelector (".c-common--iframe__VID._VK")) {
                    cCommonIframeVid[i].src = "";
                    // const vkPlayer = a[i].querySelector (".c-common--iframe__VID._VK");
                    // VK.VideoPlayer (vkPlayer).pause ();
                }
            }
        });
    });



    // 1.2.1 Функция для показа модальных окон по переходу из внешних ссылок

    function showModal () {
        if (hashMark) {
            hashMark = false;
            return;
        }

        let modal = document.querySelector(`[data-modal="${window.location.hash.slice(1)}"]`);
        
        if (modal) {
            let k = cCommonDivVid.findIndex (x => x === modal);
            videoOpen[k].click ();
        }
    }

    showModal ();

    window.addEventListener ("hashchange", showModal);
    
    







    // 1.3 Открытие / закрытие попапа "Поделиться"

    const cCommonDivVidCont = Array.from (document.querySelectorAll (".c-common--div__VID_CONT"));
    const cCommonButtonVidShare = Array.from (document.querySelectorAll (".c-common--button__VID_SHARE"));
    const cCommonDivVidPopupCont = Array.from (document.querySelectorAll (".c-common--div__VID_POPUP_CONT"));
    const cCommonDivVidPopupCont2 = Array.from (document.querySelectorAll (".c-common--div__VID_POPUP_CONT2"));
    const cCommonButtonVidPopupClose = Array.from (document.querySelectorAll (".c-common--button__VID_POPUP_CLOSE"));
    const cCommonDivVidPopupLinks = Array.from (document.querySelectorAll (".c-common--div__VID_POPUP_LINKS"));


    // 1.3.1 Открытие

    cCommonButtonVidShare.forEach ((v, i, a) => {
        a[i].addEventListener ("click", () => {
            cCommonDivVidPopupCont[i].classList.toggle ("__c-common--div__VID_POPUP_CONT");
            setTimeout (() => {
                cCommonDivVidPopupCont[i].classList.toggle ("__c-common--div__VID_POPUP_CONT1");
                cCommonDivVidPopupCont2[i].classList.toggle ("__c-common--div__VID_POPUP_CONT2");
            }, 50);
        });
    });


    // 1.3.2 Закрытие

    cCommonButtonVidPopupClose.forEach ((v, i, a) => {
        a[i].addEventListener ("click", () => {
            cCommonDivVidPopupCont[i].classList.remove ("__c-common--div__VID_POPUP_CONT");
            cCommonDivVidPopupCont[i].classList.remove ("__c-common--div__VID_POPUP_CONT1");
            cCommonDivVidPopupCont2[i].classList.remove ("__c-common--div__VID_POPUP_CONT2");
        });
    });

    cCommonDivVidPopupCont.forEach ((v, i, a) => {
        a[i].addEventListener ("click", (e) => {
            if (e.target === a[i]) {
                cCommonDivVidPopupCont[i].classList.remove ("__c-common--div__VID_POPUP_CONT");
                cCommonDivVidPopupCont[i].classList.remove ("__c-common--div__VID_POPUP_CONT1");
                cCommonDivVidPopupCont2[i].classList.remove ("__c-common--div__VID_POPUP_CONT2");
            }
        });
    });

    cCommonDivVidCont.forEach ((v, i, a) => {
        a[i].addEventListener ("click", (e) => {
            if (e.target === a[i]) {
                cCommonDivVidPopupCont[i].classList.remove ("__c-common--div__VID_POPUP_CONT");
                cCommonDivVidPopupCont[i].classList.remove ("__c-common--div__VID_POPUP_CONT1");
                cCommonDivVidPopupCont2[i].classList.remove ("__c-common--div__VID_POPUP_CONT2");
            }
        });
    });

    cCommonDivVidPopupLinks.forEach ((v, i, a) => {
        a[i].addEventListener ("click", () => {
            cCommonDivVidPopupCont[i].classList.remove ("__c-common--div__VID_POPUP_CONT");
            cCommonDivVidPopupCont[i].classList.remove ("__c-common--div__VID_POPUP_CONT1");
            cCommonDivVidPopupCont2[i].classList.remove ("__c-common--div__VID_POPUP_CONT2");
        });
    });









    // 1.4 Программирование ссылок

    // 1.4.1 Копирование ссылки на страницу в буфер обмена (кнопка "Скопировать ссылку")

    const cCommonAnyVidPopupLinkCopy = Array.from (document.querySelectorAll (".c-common--any__VID_POPUP_LINK._COPY"));

    cCommonAnyVidPopupLinkCopy.forEach ((v, i, a) => {
        a[i].addEventListener ("click", (e) => {
            navigator.clipboard.writeText (document.location.href);
        });
    });




    // 1.4.2 Отправка ссылки на страницу по почте

    /// !!! ПРОВЕРИТЬ РАБОТОСПОСОБНОСТЬ ПРИ ИНТЕГРАЦИИ !!!
    
    const cCommonAnyVidPopupLinkMail = Array.from (document.querySelectorAll (".c-common--any__VID_POPUP_LINK._MAIL"));

    cCommonAnyVidPopupLinkMail.forEach ((v, i, a) => {
        a[i].addEventListener ("click", (e) => {
            window.location.href = `mailto:ex@mail.pru?subject=${document.location.href}`;
        });
    });




    // 1.4.3 Поделиться ссылкой на страницу во ВКонтакте

    /// !!! ПРОВЕРИТЬ РАБОТОСПОСОБНОСТЬ ПРИ ИНТЕГРАЦИИ !!!

    const cCommonAnyVidPopupLinkVk = Array.from (document.querySelectorAll (".c-common--any__VID_POPUP_LINK._VK"));

    cCommonAnyVidPopupLinkVk.forEach ((v, i, a) => {
        a[i].addEventListener ("click", (e) => {
            window.location.href = `https://vk.com/share.php?url=${document.location.href}`;
        });
    });




    // 1.4.4 Поделиться ссылкой на страницу в Дзене

    /// !!! СПОСОБ НЕ НАЙДЕН !!!

    


    // 1.4.5 Поделиться ссылкой на страницу в Telegram

    /// !!! ПРОВЕРИТЬ РАБОТОСПОСОБНОСТЬ ПРИ ИНТЕГРАЦИИ !!!

    const cCommonAnyVidPopupLinkTg = Array.from (document.querySelectorAll (".c-common--any__VID_POPUP_LINK._TG"));

    cCommonAnyVidPopupLinkTg.forEach ((v, i, a) => {
        a[i].addEventListener ("click", (e) => {
            window.location.href = `https://t.me/share/url?url=${document.location.href}`;
        });
    });




    // 1.4.6 Поделиться ссылкой на страницу в Max

    /// !!! СПОСОБ НЕ НАЙДЕН !!!



    // 1.4.7 Поделиться ссылкой через стандартный интерфейс смартфона (кнопка "Еще")

    /// !!! ПРОВЕРИТЬ РАБОТОСПОСОБНОСТЬ ПРИ ИНТЕГРАЦИИ !!!

    const cCommonAnyVidPopupLinkElse = Array.from (document.querySelectorAll (".c-common--any__VID_POPUP_LINK._ELSE"));

    cCommonAnyVidPopupLinkElse.forEach ((v, i, a) => {
        a[i].addEventListener ("click", (e) => { 
            if (navigator.share) {
                navigator.share ({url: `${document.location.href}`}).then (() => {console.log ("Успех");}).catch (console.error ("Не успех"));  
            } else {
                console.error ("Не успех"); 
            }  
        });
    });
    
});