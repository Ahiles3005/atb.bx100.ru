
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА Р.О.И. |||||||||| ********** ---------- */


    if (document.querySelector ("#dih")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cdCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cdCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");


        



        
        /* ---------- ********** СЕКЦИЯ DES ********** ---------- */


        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ 


        const hmDesDivHead = document.querySelector (".hm-des--div__HEAD");
        const hmDesSvgSubmenu = document.querySelector (".hm-des--svg__SUBMENU");
        const hmDesFormSubmenu = document.querySelector (".hm-des--form__SUBMENU");
        const hmDesDivContent = document.querySelector (".hm-des--div__CONTENT");
        const dhDesDivSubmenuBack = document.querySelector (".hm-des--div__SUBMENU_BACK");


        // 1.1 Выбор первой радиокнопки в субменю при загрузке страницы

        hmDesFormSubmenu.querySelector (".hm-des--label__SUBMENU:first-of-type").click ();


        hmDesDivHead.addEventListener ("click", () => {
        
            // 1.2 Открытие / закрытие субменю

            if (!hmDesFormSubmenu.classList.contains ("__hm-des--form__SUBMENU")) {
                hmDesFormSubmenu.classList.add ("__hm-des--form__SUBMENU");
                hmDesSvgSubmenu.classList.add ("__hm-des--svg__SUBMENU");
            } else {
                hmDesFormSubmenu.classList.remove ("__hm-des--form__SUBMENU");
                hmDesSvgSubmenu.classList.remove ("__hm-des--svg__SUBMENU");
            }
        });


        // 1.2 Выравнивание высоты form для десктопов по блоку с контентом

        function hmDesFormHeight () {
            if (window.innerWidth > 1439) {
                setTimeout (() => {
                    hmDesFormSubmenu.style.maxHeight = `${parseInt (getComputedStyle (hmDesDivContent).height) - 64}px`;
                    dhDesDivSubmenuBack.style.top = `${parseInt (getComputedStyle (hmDesDivContent).height) + 44}px`;
                }, 900);
            } else {
                setTimeout (() => {
                    hmDesFormSubmenu.style.maxHeight = null;
                }, 50);
            }
        }

        hmDesFormHeight ();

        function hmDesDebounce (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const hmDesFormDebounce = hmDesDebounce (hmDesFormHeight, 100);

        window.addEventListener ("resize", hmDesFormDebounce);


        //1.3 Скролл элементов субменю до видимой части
        
        const hmDesLabelSubmenu = Array.from (document.querySelectorAll (".hm-des--label__SUBMENU"));

        hmDesLabelSubmenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                
                if (a[i].parentNode.scrollHeight > a[i].parentNode.offsetHeight) {

                    let k = a[i].offsetTop - a[i].parentNode.scrollTop;
                    let k1 = a[i].offsetTop + a[i].offsetHeight - a[i].parentNode.scrollTop;


                    if (k < 0 && k1 > 0) {
                        a[i].parentNode.scrollTop = a[i].offsetTop;
                    } else if (k < a[i].parentNode.offsetHeight && k1 > a[i].parentNode.offsetHeight) {
                        a[i].parentNode.scrollTop = a[i].parentNode.scrollTop + k1 - a[i].parentNode.offsetHeight;
                    }
                }
            });
        });




        // 2. СЛАЙДЕРЫ РЕШЕНИЯ

        // 2.1 Основной слайдер - переключатель между слайдерами
        
        const dhDesDivSwiper = new Swiper (".dh-des--div__SWIPER", {
            effect: "fade",
            allowTouchMove: false,
        });


        hmDesLabelSubmenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                dhDesDivSwiper.slideTo(i);
            });
        });
        

        // 2.2 Слайдеры

        const cdUseDivSwiper22 = Array.from (document.querySelectorAll (".dh-des--div__SWIPER_SLIDE"), x => {
            return new Swiper (x.querySelector (".cd-use--div__SWIPER22"), {
                navigation: {
                    nextEl: x.querySelector ('.cd-use--button__SWIPER22_NEXT'),
                    prevEl: x.querySelector ('.cd-use--button__SWIPER22_PREV'),
                },
                breakpoints: {
                    200: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 44,
                        slidesPerGroup: 1,
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 44,
                        slidesPerGroup: 1,
                    },
                    1440: {
                        slidesPerView: 1,
                        spaceBetween: 44,
                        slidesPerGroup: 1,
                    },
    
                    1920: {
                        slidesPerView: 1,
                        spaceBetween: 44,
                        slidesPerGroup: 1,
                    },
                },
            });
        });
    }
});