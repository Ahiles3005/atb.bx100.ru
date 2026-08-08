
"use strict";

function mcCommonCardOpener (x, y) {

    const xElement = document.querySelector (`${x}`);

    if(!xElement){
        return true;
    }

    const mcCommonDivGrid = document.querySelector (`${x} .mc-common--div__GRID`);
    const ctCatArticles = Array.from (document.querySelectorAll (`${x} article`));
    const ctCatSpanInd1 = document.querySelector (`${x} .ct-cat--span__IND1`);
    const ctCatSpanInd2 = document.querySelector (`${x} .ct-cat--span__IND2`);
    const ctCatDivLine1 = document.querySelector (`${x} .ct-cat--div__LINE1`);
    const ctCatButtonElse = document.querySelector (`${x} .ct-cat--button__ELSE`);


    // 3.1 Счетчик показанных порций карточек

    let ctCatCounter = 1;


    // 3.2 Счетчик показанных карточек

    function ctCatVisCounter () {

        if(!ctCatSpanInd1){
            return true;
        }

        // 3.2.1 Числа

        const ctCatArticlesVis = ctCatArticles.filter (x => {
            return getComputedStyle (x).display == "grid";
        });

        const count1 = ctCatArticlesVis.length
        const count2 = ctCatSpanInd2.textContent

        ctCatSpanInd1.textContent = ctCatArticlesVis.length;
       // ctCatSpanInd2.textContent = ctCatArticles.length;

        // 3.2.2 Линия

        ctCatDivLine1.style.width = `${(parseFloat (ctCatSpanInd1.textContent) / parseFloat (ctCatSpanInd2.textContent)) * 100}%`;

        // 3.2.3 Уборка кнопки "Показать еще", если все карточки показаны

        if (count1 == count2) {
            ctCatButtonElse.classList.add ("__ct-cat--button__ELSE");
        } else {
            ctCatButtonElse.classList.remove ("__ct-cat--button__ELSE");
        }
    }



    // 3.3 Начальное / текущее количество видимых карточек (для начальной загрузки и изменения количества при ресайзе или переключении видов)

    function ctCatCardsCur () {
        if (y === 1) {
            if (window.innerWidth < 1440) {
                ctCatArticles.forEach ((v, i, a) => {
                    if (i < ctCatCounter * 3) {
                        a[i]?.classList.add ("__mc-common--article__CARD");
                    } else {
                        a[i]?.classList.remove ("__mc-common--article__CARD");
                    }
                });
            } else {
                ctCatArticles.forEach ((v, i, a) => {
                    if (i < ctCatCounter * 6) {
                        a[i]?.classList.add ("__mc-common--article__CARD");
                    } else {
                        a[i]?.classList.remove ("__mc-common--article__CARD");
                    }
                });
            }
        } else if (y === 2) {
            if (window.innerWidth < 1200) {
                ctCatArticles.forEach ((v, i, a) => {
                    if (i < ctCatCounter * 2) {
                        a[i]?.classList.add ("__mc-common--article__CARD");
                    } else {
                        a[i]?.classList.remove ("__mc-common--article__CARD");
                    }
                });
            } else {
                ctCatArticles.forEach ((v, i, a) => {
                    if (i < ctCatCounter * 3) {
                        a[i]?.classList.add ("__mc-common--article__CARD");
                    } else {
                        a[i]?.classList.remove ("__mc-common--article__CARD");
                    }
                });
            }
        }


        ctCatVisCounter ();
    }

    ctCatCardsCur ();



    // 3.4 Добавление карточек по клику по кнопке

    function ctCatCardsAdd () {

        ctCatCounter++;

        if (y === 1) {
            if (window.innerWidth < 1440) {
                ctCatArticles.forEach ((v, i, a) => {
                    if (i < ctCatCounter * 3) {
                        a[i]?.classList.add ("__mc-common--article__CARD");
                    } else {
                        a[i]?.classList.remove ("__mc-common--article__CARD");
                    }
                });
            } else {
                ctCatArticles.forEach ((v, i, a) => {
                    if (i < ctCatCounter * 3) {
                        a[i]?.classList.add ("__mc-common--article__CARD");
                    } else {
                        a[i]?.classList.remove ("__mc-common--article__CARD");
                    }
                });
            }
        } else if (y === 2) {
            if (window.innerWidth < 1200) {
                ctCatArticles.forEach ((v, i, a) => {
                    if (i < ctCatCounter * 2) {
                        a[i]?.classList.add ("__mc-common--article__CARD");
                    } else {
                        a[i]?.classList.remove ("__mc-common--article__CARD");
                    }
                });
            } else {
                ctCatArticles.forEach ((v, i, a) => {
                    if (i < ctCatCounter * 3) {
                        a[i]?.classList.add ("__mc-common--article__CARD");
                    } else {
                        a[i]?.classList.remove ("__mc-common--article__CARD");
                    }
                });
            }
        }

        ctCatVisCounter ();
    }

    ctCatButtonElse?.addEventListener ("click", ctCatCardsAdd);



    // 3.5 Пересчет при резайзе

    cdCommonMedia()

}


function cdCommonMedia(){
    const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
    const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
    const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
    const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");
}

window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА МЕДИАЦЕНТР |||||||||| ********** ---------- */


    if (document.querySelector ("#mc")) {

        
        /* ---------- ********** ОБЩИЕ ДЛЯ ВСЕЙ СТРАНИЦЫ ********** ---------- */


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ





        // 1. АНИМАЦИЯ ПРИ СКРОЛЛЕ 

        const scrolls = document.querySelectorAll('.__C-SCRL');

        const callback = (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove ("__C-SCRL");
                    if (entry.target.classList.contains ("hm-cat--article__CARD")) {
                        setTimeout (() => {
                            entry.target.classList.add ("__hm-cat--article__CARD");
                        }, 700);
                    }
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







        // 2. СЕЛЕКТЫ

        const mcCommonFieldsetSelect = Array.from (document.querySelectorAll (".mc-common--fieldset__SELECT"));
        const mcCommonButtonSelect = Array.from (document.querySelectorAll (".mc-common--button__SELECT"));
        const mcCommonDivSelect = Array.from (document.querySelectorAll (".mc-common--div__SELECT"));


        // 2.1 Открытие / закрытие выпадающих списков по клику

        mcCommonButtonSelect.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                mcCommonDivSelect[i].classList.toggle ("__mc-common--div__SELECT");
            });
        });


        mcCommonFieldsetSelect.forEach ((v, i, a) => {

            // 2.2 Выбор из списка

            const mcCommonLabelSelect = Array.from (a[i].querySelectorAll (".mc-common--label__SELECT"));
            const mcCommonSpanSelect = a[i].querySelector (".mc-common--span__SELECT");

            mcCommonLabelSelect.forEach ((v1, i1, a1) => {
                a1[i1].addEventListener ("click", () => {
                    mcCommonSpanSelect.textContent = a1[i1].textContent;
                    mcCommonSpanSelect.classList.add ("__mc-common--span__SELECT");
                    mcCommonDivSelect[i].classList.remove ("__mc-common--div__SELECT");
                });
            });


            // 2.3 Сворачивание списка по клику за его пределами

            document.addEventListener ("click", (e) => {
                if (!a[i].contains (e.target)) {
                    mcCommonDivSelect[i].classList.remove ("__mc-common--div__SELECT");
                }
            });
        });







        // 3. РАСКРЫТИЕ КАРТОЧЕК
 

        // Функция для любой из секций. Первым аргументом (строка) должен быть класс секции, 
        // вторым (число) - тип выдачи карточек - 
        // по 3 и 6 (для мобилок и десктопа соответственно) - 1 
        // или по 2 и 3 - 2.


        
        

        // Вызов функции для секции "Новости"

        mcCommonCardOpener (".mc-news", 1);

        // Вызов функции для секции "Мероприятия"

        mcCommonCardOpener (".mc-events", 2);

        // Вызов функции для секции "Статьи"

        mcCommonCardOpener (".mc-articles", 2);

        // Вызов функции для секции "Видео"

        mcCommonCardOpener (".mc-video", 2);

        

        
   }
});