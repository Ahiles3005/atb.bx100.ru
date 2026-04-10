
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


        



        
        /* ---------- ********** СЕКЦИЯ IND ********** ---------- */


        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ 


        const hmIndDivHead = document.querySelector (".hm-ind--div__HEAD");
        const hmIndSvgSubmenu = document.querySelector (".hm-ind--svg__SUBMENU");
        const hmIndFormSubmenu = document.querySelector (".hm-ind--form__SUBMENU");
        const hmIndDivContent = document.querySelector (".hm-ind--div__CONTENT");
        const hmIndDivSubmenuBack = document.querySelector (".hm-ind--div__SUBMENU_BACK");


        // 1.1 Выбор первой радиокнопки в субменю при загрузке страницы

        // hmIndFormSubmenu.querySelector (".hm-ind--label__SUBMENU:first-of-type").click ();
        hmIndFormSubmenu?.querySelector(".hm-ind--label__SUBMENU.active")?.click();


        hmIndDivHead?.addEventListener ("click", () => {
        
            // 1.2 Открытие / закрытие субменю

            if (!hmIndFormSubmenu.classList.contains ("__hm-ind--form__SUBMENU")) {
                hmIndFormSubmenu.classList.add ("__hm-ind--form__SUBMENU");
                hmIndSvgSubmenu.classList.add ("__hm-ind--svg__SUBMENU");
            } else {
                hmIndFormSubmenu.classList.remove ("__hm-ind--form__SUBMENU");
                hmIndSvgSubmenu.classList.remove ("__hm-ind--svg__SUBMENU");
            }
        });


        // 1.3 Выравнивание высоты form для десктопов по блоку с контентом

        function hmIndFormHeight() {
            if (window.innerWidth > 1439) {
                setTimeout(() => {
                    if (hmIndFormSubmenu) {
                        hmIndFormSubmenu.style.maxHeight = `${parseInt(getComputedStyle(hmIndDivContent).height) - 64}px`;
                    }
                    if (hmIndDivSubmenuBack) {
                        hmIndDivSubmenuBack.style.top = `${parseInt(getComputedStyle(hmIndDivContent).height) + 44}px`;
                    }
                }, 800);
            } else {
                setTimeout(() => {
                    hmIndFormSubmenu.style.maxHeight = null;
                }, 50);
            }
        }

        hmIndFormHeight ();


        function hmIndDebounce (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const hmIndFormDebounce = hmIndDebounce (hmIndFormHeight, 100);

        window.addEventListener ("resize", hmIndFormDebounce);


        // 1.4 Скролл элементов субменю до видимой части
        
        const hmIndLabelSubmenu = Array.from (document.querySelectorAll (".hm-ind--label__SUBMENU"));


        hmIndLabelSubmenu.forEach ((v, i, a) => {
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
        
        const dhIndDivSwiper = new Swiper (".dh-ind--div__SWIPER", {
            effect: "fade",
            allowTouchMove: false,
        });


        hmIndLabelSubmenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                dhIndDivSwiper.slideTo(i);
            });
        });


        // 2.2 Слайдеры

        const cdUseDivSwiper21 = Array.from (document.querySelectorAll (".dh-ind--div__SWIPER_SLIDE"), x => {
            return new Swiper (x.querySelector (".cd-use--div__SWIPER21"), {
                navigation: {
                    nextEl: x.querySelector ('.cd-use--button__SWIPER21_NEXT'),
                    prevEl: x.querySelector ('.cd-use--button__SWIPER21_PREV'),
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
                        slidesPerView: 3,
                        spaceBetween: 44,
                        slidesPerGroup: 1,
                    },
    
                    1920: {
                        slidesPerView: 3,
                        spaceBetween: 44,
                        slidesPerGroup: 1,
                    },
                },
            });
        });
    }
});