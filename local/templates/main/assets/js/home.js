"use strict";

window.addEventListener ("load", function () {

    /* ---------- ********** |||||||||| ДОМАШНЯЯ СТРАНИЦА |||||||||| ********** ---------- */

    if (document.querySelector ("#home")) {

        /* ---------- ********** ОБЩИЕ ДЛЯ ВСЕЙ СТРАНИЦЫ ********** ---------- */

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
            rootMargin: '-10px 0px 0px 0px',
            threshold: 0,
        }

        const observer = new IntersectionObserver(callback, options)

        scrolls.forEach((v) => observer.observe(v));

        /* ---------- ********** СЕКЦИЯ HERO ********** ---------- */

        // 1. SWIPER

        const hmHeroDivSwiper0 = document.querySelector (".hm-hero--div__SWIPER");

        const hmHeroDivSwiper = new Swiper (".hm-hero--div__SWIPER", {
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 7000
            },
            breakpoints: {
                320: {
                    speed: 1050
                },
                1440: {
                    speed: 1050
                }
            },
            navigation: {
                nextEl: '.hm-hero--button__NEXT',
                prevEl: '.hm-hero--button__PREV',
            },
            pagination: {
                el: '.hm-hero--div__SWIPER_PAGINATION',
                type: 'bullets',
                clickable: true,
            },
            on: {
                init() {
                    this.el.addEventListener('mouseenter', () => {
                        this.autoplay.stop();
                    });
                    this.el.addEventListener('mouseleave', () => {
                        this.autoplay.start();
                    });
                }
            },
        });

        // 2. СЧЕТЧИКИ

        // 2.1 Обнуление для скрытых слайдов

        function hmHeroCounterHide () {
            const hmHeroSpanCounts = Array.from (document.querySelectorAll (".hm-hero--span__COUNT"));
            hmHeroSpanCounts.forEach ((v, i, a) => {
                a[i].textContent = "0 +";
            });
        }

        // 2.2 Первый

        function hmHeroCounter1 () {
            const hmHeroSpanCount1 = document.querySelector (".swiper-slide-active .hm-hero--div__COUNT:first-of-type .hm-hero--span__COUNT");


            if(!hmHeroSpanCount1){
                return true;
            }

            let hmHeroSpanNumber1 = 0;
            let localFormat = new Intl.NumberFormat("ru-RU");
            let dS = parseInt (hmHeroSpanCount1.dataset.finl);

            let time;
            let count;
            
            if (dS <= 100) {
                time = 1000 / dS;
                count = 1;
            } else {
                time = 10;
                count = dS / 100;
            }

            let hmHeroClear1 = setInterval (() => {
                hmHeroSpanNumber1 = hmHeroSpanNumber1 + count;
                hmHeroSpanCount1.textContent = `${localFormat.format (hmHeroSpanNumber1)} +`;
                if (hmHeroSpanNumber1 == dS) {
                    clearInterval (hmHeroClear1);
                }
            }, time);
        }

        hmHeroCounter1 ();

        // 2.3 Второй

        function hmHeroCounter2 () {
            const hmHeroSpanCount2 = document.querySelector (".swiper-slide-active .hm-hero--div__COUNT:last-of-type .hm-hero--span__COUNT");

            if(!hmHeroSpanCount2){
                return true;
            }


            let hmHeroSpanNumber2 = 0;
            let localFormat = new Intl.NumberFormat("ru-RU");
            let dS = parseInt (hmHeroSpanCount2.dataset.finl);

            let time;
            let count;

            if (dS <= 100) {
                time = 1000 / dS;
                count = 1;
            } else {
                time = 10;
                count = dS / 100;
            }

            let hmHeroClear2 = setInterval (() => {
                hmHeroSpanNumber2 = hmHeroSpanNumber2 + count;
                hmHeroSpanCount2.textContent = `${localFormat.format (hmHeroSpanNumber2)} +`;
                if (hmHeroSpanNumber2 == dS) {
                    clearInterval (hmHeroClear2);
                }
            }, time);
        }

        hmHeroCounter2 ();

        // 2.4 Запуск счетчика при пролистывании и обнуление счетчиков на скрытых слайдах

        hmHeroDivSwiper.on ("slideChangeTransitionEnd", () => {
            hmHeroCounterHide ()
            hmHeroCounter1 ();
            hmHeroCounter2 ();
        });

        // 3. АНИМАЦИЯ (СДВИГИ С ПРОЯВЛЕНИЯМИ) ЭЛЕМЕНТОВ

        // 3.1 При загрузке

        function hmHeroAnimation () {
            if(!hmHeroDivSwiper0){
                return true;
            }

            hmHeroDivSwiper0.querySelector (".swiper-slide-active").classList.add ("__hm-hero--div__SWIPER_SLIDE");
            const freeSlides = Array.from (hmHeroDivSwiper0.querySelectorAll (".hm-hero--div__SWIPER_SLIDE:not(.swiper-slide-active)"));
            freeSlides.forEach ((v, i, a) => {
                a[i].classList.remove ("__hm-hero--div__SWIPER_SLIDE");
            });
        }

        hmHeroAnimation ();

        // 3.2 При пролистывании слайдера

        hmHeroDivSwiper.on ("slideChangeTransitionStart", () => {
            setTimeout (hmHeroAnimation, 850);
        });

        /* ---------- ********** СЕКЦИЯ CAT ********** ---------- */

        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ, 
        // ВЫБОР ПЕРВОЙ РАДИОКНОПКИ В ОТКРЫВШЕМСЯ СУБМЕНЮ,
        // СНЯТИЕ ВЫБОРА СО ВСЕХ РАДИОКНОПОК В ЗАКРЫВАЮЩИХСЯ СУБМЕНЮ

        const hmCatLiMenuItem = Array.from (document.querySelectorAll (".hm-cat--li__MENU_ITEM"));
        const hmCatButtonMenuItem = Array.from (document.querySelectorAll (".hm-cat--button__MENU_ITEM"));
        const hmCatFormSubmenu = Array.from (document.querySelectorAll (".hm-cat--form__SUBMENU"));
        const hmCatDivContent = document.querySelector (".hm-cat--div__CONTENT");
        
        hmCatButtonMenuItem.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                
                // 1.1 Открытие субменю

                if (!hmCatLiMenuItem[i].classList.contains ("__hm-cat--li__MENU_ITEM")) {
                    if (window.innerWidth < 1440) {
                        hmCatLiMenuItem[i].classList.add ("__hm-cat--li__MENU_ITEM");
                    } else {
                        hmCatLiMenuItem[i].classList.add ("__hm-cat--li__MENU_ITEM");
                    }
                    
                    // 1.2 Выбор первой радиокнопки в открывшемся субменю

                    if (hmCatLiMenuItem[i].querySelector (".hm-cat--label__SUBMENU:first-of-type > .hm-cat--input__SUBMENU")) {
                        hmCatLiMenuItem[i].querySelector (".hm-cat--label__SUBMENU:first-of-type").click ();
                    }
                    
                    // 1.3 Закрытие остальных субменю

                    hmCatLiMenuItem.filter (x => x !== hmCatLiMenuItem[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__hm-cat--li__MENU_ITEM");

                        // 1.4 Снятие выбора с радиокнопки в закрывающемся меню

                        if (a1[i1].querySelector (".hm-cat--input__SUBMENU:checked")) {
                            const a = a1[i1].querySelector (".hm-cat--input__SUBMENU:checked");
                            a.checked = false;
                        } 
                    });
                } else {
                    // 1.5 Закрытие субменю
                    if (window.innerWidth < 1440) {
                        hmCatLiMenuItem[i].classList.remove ("__hm-cat--li__MENU_ITEM");
                    }
                }
            });
        });

        // 1.6 Открытие первого субменю при загрузке страницы

        hmCatButtonMenuItem[0]?.click ();

        // 2. СЛАЙДЕР КАРТОЧЕК ТОВАРОВ
        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

        function hmCatImageSwiper () {
            const hmCatDivCardImage = Array.from (document.querySelectorAll (".hm-cat--div__CARD_IMAGE"), x => {
                return new Swiper (x.querySelector (".hm-cat--div__SWIPER"), {
                    loop: true,
                    speed: 700,
                    grabCursor: true,
                    pagination: {
                        el: x.querySelector (".hm-cat--div__SWIPER_PAGINATION"),
                        type: 'bullets',
                        clickable: true,
                    },
                });
            });

            const hmCatDivCardImage0 = Array.from (document.querySelectorAll (".hm-cat--div__CARD_IMAGE"));

            hmCatDivCardImage0.forEach ((v, i, a) => {
                const num = Array.from (a[i].querySelectorAll (".hm-cat--div__SWIPER_SLIDE"));

                num.forEach ((v1, i1, a1) => {
                    let div = document.createElement ("div");
                    div.className = "hm-cat--div__CARD_SENSOR_ITEM";
                    a[i].querySelector (".hm-cat--div__CARD_SENSOR").append (div);
                    
                    div.addEventListener ("mouseover", () => {
                        hmCatDivCardImage[i].slideTo (i1);
                    });
                });
            });
        }

        hmCatImageSwiper ();

        // 3. КНОПКИ ВЫБОРА ТОВАРА ДЛЯ СРАВНЕНИЯ ИЛИ В ИЗБРАННОЕ
        function hmCatCardButtons () {
            const hmCatButtonCardCom = Array.from (document.querySelectorAll (".hm-cat--button__CARD_COMPARISON"));
            const hmCatButtonCardFav = Array.from (document.querySelectorAll (".hm-cat--button__CARD_FAVOURITES"));

            hmCatButtonCardCom.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.toggle ("__hm-cat--button__CARD_COMPARISON");
                });
            });
            hmCatButtonCardFav.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.toggle ("__hm-cat--button__CARD_FAVOURITES");
                });
            });
        }

        hmCatCardButtons ();

        // 4. РАЗБИВКА ЧИСЕЛ В ЦЕННИКАХ ПО ТЫСЯЧАМ
        function hmCatPriceSplit () {
            const localFormat = new Intl.NumberFormat("ru-RU");
            const hmCatPrices = Array.from (document.querySelectorAll (".hm-cat--span__CARD_PRICE_CUR:first-of-type, .hm-cat--span__CARD_PRICE_OLD:first-of-type"));
            hmCatPrices.forEach ((v, i, a) => {
                a[i].textContent = `${localFormat.format (a[i].textContent)}`;
            });
        }

        hmCatPriceSplit ();

        /* ---------- ********** СЕКЦИЯ IND ********** ---------- */

        const hmIndDivHead = document.querySelector (".hm-ind--div__HEAD");
        const hmIndSvgSubmenu = document.querySelector (".hm-ind--svg__SUBMENU");
        const hmIndFormSubmenu = document.querySelector (".hm-ind--form__SUBMENU");
        const hmIndDivContent = document.querySelector (".hm-ind--div__CONTENT");
        const hmIndDivSubmenuBack = document.querySelector (".hm-ind--div__SUBMENU_BACK");

        hmIndFormSubmenu?.querySelector (".hm-ind--label__SUBMENU:first-of-type")?.click ();
        
        hmIndDivHead?.addEventListener ("click", () => {
            if (!hmIndFormSubmenu.classList.contains ("__hm-ind--form__SUBMENU")) {
                hmIndFormSubmenu.classList.add ("__hm-ind--form__SUBMENU");
                hmIndSvgSubmenu.classList.add ("__hm-ind--svg__SUBMENU");
            } else {
                hmIndFormSubmenu.classList.remove ("__hm-ind--form__SUBMENU");
                hmIndSvgSubmenu.classList.remove ("__hm-ind--svg__SUBMENU");
            }
        });

        function hmIndFormHeight () {
            if (window.innerWidth > 1439) {
                setTimeout (() => {
                    hmIndFormSubmenu.style.maxHeight = getComputedStyle (hmIndDivContent).height;
                    hmIndDivSubmenuBack.style.top = `${parseInt (getComputedStyle (hmIndDivContent).height) + 108}px`;
                }, 800);
            } else {
                setTimeout (() => {
                    hmIndFormSubmenu.style.maxHeight = null;
                }, 50);
            }
        }

        if (hmIndFormSubmenu && hmIndDivContent && hmIndDivSubmenuBack) {
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
        }

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

        /* ---------- ********** СЕКЦИЯ DES ********** ---------- */

        const hmDesDivHead = document.querySelector (".hm-des--div__HEAD");
        const hmDesSvgSubmenu = document.querySelector (".hm-des--svg__SUBMENU");
        const hmDesFormSubmenu = document.querySelector (".hm-des--form__SUBMENU");
        const hmDesDivContent = document.querySelector (".hm-des--div__CONTENT");

        hmDesFormSubmenu?.querySelector (".hm-des--label__SUBMENU:first-of-type")?.click ();

        hmDesDivHead?.addEventListener ("click", () => {
            if (!hmDesFormSubmenu.classList.contains ("__hm-des--form__SUBMENU")) {
                hmDesFormSubmenu.classList.add ("__hm-des--form__SUBMENU");
                hmDesSvgSubmenu.classList.add ("__hm-des--svg__SUBMENU");
            } else {
                hmDesFormSubmenu.classList.remove ("__hm-des--form__SUBMENU");
                hmDesSvgSubmenu.classList.remove ("__hm-des--svg__SUBMENU");
            }
        });

        /* ---------- ********** СЕКЦИЯ HST ********** ---------- */

        const hmHstLiMenuItem = Array.from (document.querySelectorAll (".hm-hst--li__MENU_ITEM"));
        const hmHstButtonMenuItem = Array.from (document.querySelectorAll (".hm-hst--button__MENU_ITEM"));
        const hmHstFormSubmenu = Array.from (document.querySelectorAll (".hm-hst--form__SUBMENU"));
        const hmHstDivContent = document.querySelector (".hm-hst--div__CONTENT");
        const hmHstDivSubmenuBack = document.querySelector (".hm-hst--div__SUBMENU_BACK");
        
        hmHstButtonMenuItem.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!hmHstLiMenuItem[i].classList.contains ("__hm-hst--li__MENU_ITEM")) {
                    if (window.innerWidth < 1440) {
                        hmHstLiMenuItem[i].classList.add ("__hm-hst--li__MENU_ITEM");
                        hmHstFormSubmenu[i].classList.add ("__hm-hst--form__SUBMENU");
                    } else {
                        hmHstLiMenuItem[i].classList.add ("__hm-hst--li__MENU_ITEM");
                        hmHstFormSubmenu[i].classList.add ("__hm-hst--form__SUBMENU");
                    }
                    if (hmHstLiMenuItem[i].querySelector (".hm-hst--label__SUBMENU:first-of-type > .hm-hst--input__SUBMENU")) {
                        hmHstLiMenuItem[i].querySelector (".hm-hst--label__SUBMENU:first-of-type").click ();
                    }
                    hmHstLiMenuItem.filter (x => x !== hmHstLiMenuItem[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__hm-hst--li__MENU_ITEM");
                        if (a1[i1].querySelector (".hm-hst--input__SUBMENU:checked")) {
                            const a = a1[i1].querySelector (".hm-hst--input__SUBMENU:checked");
                            a.checked = false;
                        }
                    });
                } else {
                    if (window.innerWidth < 1440) {
                        hmHstLiMenuItem[i].classList.remove ("__hm-hst--li__MENU_ITEM");
                        hmHstFormSubmenu[i].classList.remove ("__hm-hst--form__SUBMENU");
                    }
                }
            });
        });

        hmHstButtonMenuItem[0]?.click ();

        function hmHstFormHeight () {
            if (window.innerWidth > 1439) {
                hmHstFormSubmenu.forEach ((v, i, a) => {
                    setTimeout (() => {
                        a[i].style.maxHeight = getComputedStyle (hmHstDivContent).height;
                        hmHstDivSubmenuBack.style.top = `${parseInt (getComputedStyle (hmHstDivContent).height) + 115}px`;
                    }, 800);
                });
            } else {
                hmHstFormSubmenu.forEach ((v, i, a) => {
                    setTimeout (() => {
                        a[i].style.maxHeight = null;
                    }, 50);
                });
            }
        }

        if (hmHstDivContent && hmHstDivSubmenuBack) {
            hmHstFormHeight ();
            function hmHstDebounce (cB, time) {
                let idTimer;
                return function () {
                    clearTimeout (idTimer);
                    idTimer = setTimeout (() => {
                        cB();
                    }, time);
                }
            }
            const hmHstFormDebounce = hmHstDebounce (hmHstFormHeight, 100);
            window.addEventListener ("resize", hmHstFormDebounce);
        }

        const hmHstLabelSubmenu = Array.from (document.querySelectorAll (".hm-hst--label__SUBMENU"));
        hmHstLabelSubmenu.forEach ((v, i, a) => {
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

        /* ---------- ********** СЕКЦИЯ PRE ********** ---------- */

        const hmPreInputSubmenu1 = document.querySelector (".hm-pre--label__SUBMENU1 > input");
        const hmPreDivFormBody = document.querySelector (".hm-pre--div__FORM_BODY");
        const hmPreSvgSubmenu = document.querySelector (".hm-pre--svg__SUBMENU");

        hmPreInputSubmenu1?.addEventListener ("click", (e) => {
            e.stopPropagation()
            hmPreDivFormBody?.classList.toggle ("__hm-pre--div__FORM_BODY");
            hmPreSvgSubmenu?.classList.toggle ("__hm-pre--svg__SUBMENU");
        });

        hmPreInputSubmenu1?.click ();
    }

});


