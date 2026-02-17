
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА СТИЛИ |||||||||| ********** ---------- */



    // 1. ЗАКРЫТИЕ / РАСКРЫТИЕ ТАБЛИЦ TABLE

    if (document.querySelector (".st-main--button__TABLE_HEAD")) {

        const stMainButtonTableHead = Array.from (document.querySelectorAll (".st-main--button__TABLE_HEAD"));
        const stMainDivTableBody = Array.from (document.querySelectorAll (".st-main--div__TABLE_BODY"));
        const stMainSvgTableHead = Array.from (document.querySelectorAll (".st-main--svg__TABLE_HEAD"));


        stMainButtonTableHead.forEach((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!stMainDivTableBody[i].classList.contains ("__st-main--div__TABLE_BODY")) {
                    stMainDivTableBody[i].classList.add ("__st-main--div__TABLE_BODY");
                    stMainSvgTableHead[i].classList.add ("__st-main--svg__TABLE_HEAD");
                    if (document.querySelector (".cd-abt .c-common--button__TABS")) {
                        setTimeout (() => {
                            document.querySelectorAll (".cd-abt .c-common--button__TABS")[1].click ();
                        }, 60);
                    }
                    
                } else {
                    stMainDivTableBody[i].classList.remove ("__st-main--div__TABLE_BODY");
                    stMainSvgTableHead[i].classList.remove ("__st-main--svg__TABLE_HEAD");
                    if (document.querySelector (".cd-abt .c-common--button__TABS")) {
                        setTimeout (() => {
                            document.querySelectorAll (".cd-abt .c-common--button__TABS")[1].click ();
                        }, 60);
                    }
                }
            });
        });

    }

    







    // 2. СЧЕТЧИКИ (ЗАПУСК ПО СКРОЛЛУ ЧЕРЕЗ IntersectionObserver)

    if (document.querySelector (".st-main--div__COUNT .st-main--span__COUNT")) {

        const stMainSpanCount = Array.from (document.querySelectorAll (".st-main--div__COUNT .st-main--span__COUNT"));

        stMainSpanCount.forEach ((v, i, a) => {
            a[i].stMainCounter = function () {
                
                let stMainSpanNumber = 0;
                let localFormat = new Intl.NumberFormat("ru-RU");
                let dS = parseInt (a[i].dataset.finl);
        
                let time;
                let count;
                
                if (dS <= 100) {
                    time = 1000 / dS;
                    count = 1;
                } else {
                    time = 10;
                    count = dS / 100;
                }
        
                let stMainClear = setInterval (() => {
                    stMainSpanNumber = stMainSpanNumber + count;
                    a[i].textContent = `${localFormat.format (stMainSpanNumber)} +`;
                    if (stMainSpanNumber == dS) {
                        clearInterval (stMainClear);
                    }
                }, time);
            
            }
        });

    }

    







    // 3. ШИРИНА БЛОКА IMGLIST

    if (document.querySelector (".st-main--div__IMGLIST")) {

        const stMainDivImglist = Array.from (document.querySelectorAll (".st-main--div__IMGLIST"));

        function stMainDivImglistWidth () {
            stMainDivImglist.forEach ((v, i, a) => {
                a[i].style.width = `${document.documentElement.clientWidth}px`;
            });
        }

        stMainDivImglistWidth ();

        function stMainDivImglistWidthDebounce0 (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const stMainDivImglistWidthDebounce1 = stMainDivImglistWidthDebounce0 (stMainDivImglistWidth, 150);

        window.addEventListener ("resize", stMainDivImglistWidthDebounce1);

    }







    // 4. ОТКРЫТИЕ / ЗАКРЫТИЕ ПОПАП ОКНА ПРИ КЛИКЕ ПО КАРТИНКЕ IMAGE9

    if (document.querySelector (".st-main--div__IMAGES9_ITEM > .st-main--div__IMAGE9")) {

        const stMainDivImage9 = Array.from (document.querySelectorAll (".st-main--div__IMAGES9_ITEM > .st-main--div__IMAGE9"));
        const stMainDivImage9Popup = Array.from (document.querySelectorAll (".st-main--div__IMAGES9_POPUP"));
        const stMainButtonImage9PopupClose = Array.from (document.querySelectorAll (".st-main--button__IMAGES9_POPUP_CLOSE"));

        stMainDivImage9.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                stMainDivImage9Popup[i].classList.add ("__st-main--div__IMAGES9_POPUP");
            });
        });

        stMainButtonImage9PopupClose.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                stMainDivImage9Popup[i].classList.remove ("__st-main--div__IMAGES9_POPUP");
            });
        });

        stMainDivImage9Popup.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                if (a[i].classList.contains ("__st-main--div__IMAGES9_POPUP") && e.target === a[i]) {
                    a[i].classList.remove ("__st-main--div__IMAGES9_POPUP");
                }
            });
        });

    }







    // 5. АККОРДЕОН ДЛЯ МОБИЛОК БЛОКА GRID2

    if (document.querySelector (".st-main--div__GRID2_ITEM")) {
        const stMainDivGrid2Item = Array.from (document.querySelectorAll (".st-main--div__GRID2_ITEM"));
        const stMainButtonGrid2ItemTop = Array.from (document.querySelectorAll (".st-main--button__GRID2_ITEM_TOP"));
        const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");

        stMainButtonGrid2ItemTop.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!cdCommonMedia1440.matches) {
                    stMainDivGrid2Item[i].classList.toggle ("__st-main--div__GRID2_ITEM");
                }
            });
        });







        // 6. ШИРИНА СЕТКИ БЛОКА GRID2

        const stMainDivGrid2Cont = document.querySelector (".st-main--div__GRID2_CONT");

        function stMainDivGrid2ContWidthDesc () {
            stMainDivGrid2Cont.style.width = `${document.documentElement.clientWidth}px`;
        }

        stMainDivGrid2ContWidthDesc ();

        function stMainDivGrid2ContWidthDescDebounce0 (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const stMainDivGrid2ContWidthDescDebounce1 = stMainDivGrid2ContWidthDescDebounce0 (stMainDivGrid2ContWidthDesc, 150);

        window.addEventListener ("resize", stMainDivGrid2ContWidthDescDebounce1);

    }





   
    
    // АНИМАЦИЯ ПРИ СКРОЛЛЕ 

    // (ЕСЛИ НА КАКУЮ-ЛИБО СТРАНИЦУ ДОБАВЛЯЕТСЯ БЛОК st-main--div__THESIS,
    // ТО В СКРИПТ НА СТРАНИЦЕ ВНЕСТИ УСЛОВИЕ, РАСПОЛОЖЕННОЕ НИЖЕ, ПО ЗАПУСКУ СЧЕТЧИКОВ)

    if (document.querySelector ("#stl")) {

        const scrolls = document.querySelectorAll('.__C-SCRL');

        const callback = (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove ("__C-SCRL");

                    // УСЛОВИЕ ПО ЗАПУСКУ СЧЕТЧИКОВ
                    if (entry.target.classList.contains ("st-main--div__THESIS")) {
                        entry.target.querySelector (".st-main--span__COUNT").stMainCounter ();
                    }
                    //

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

    }
    
});