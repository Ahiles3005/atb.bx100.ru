
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
            history.replaceState('', document.title, window.location.pathname + window.location.search);

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
                history.replaceState('', document.title, window.location.pathname + window.location.search);

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
    
});