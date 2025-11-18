
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА КАРТОЧКА СЕРИИ |||||||||| ********** ---------- */


    if (document.querySelector ("#card")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cdCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cdCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ USE ********** ---------- */


        // 1. СЛАЙДЕР С КОНТЕНТОМ
        
        const cdUseDivSwiper2 = new Swiper (".cd-use--div__SWIPER2", {
            autoHeight: true,
            effect: "fade",
            allowTouchMove: false,
        });




        // 2. КНОПКИ УПРАВЛЕНИЯ
        
        const cdUseDivTabs = document.querySelector (".cd-use .c-common--div__TABS");
        const cdUseDivTabsTop = document.querySelector (".cd-use .c-common--div__TABS_TOP");
        const cdUseButtonTabs = Array.from (document.querySelectorAll (".cd-use .c-common--button__TABS"));
        const cdUseDivTabsFrame = document.querySelector (".cd-use .c-common--div__TABS_FRAME");
        const cdUseButtonTabsLeft = document.querySelector (".cd-use .c-common--button__TABS_LEFT");
        const cdUseButtonTabsRight = document.querySelector (".cd-use .c-common--button__TABS_RIGHT");


        // Функция для статичного состояния (для обработки ресайза контейнера)

        function cdUseButtonTabsDefault () {
            cdUseButtonTabs.forEach ((v, i, a) => { 
                if (a[i].classList.contains ("_ACT")) {
                    if (cdUseDivTabsTop.scrollWidth > cdUseDivTabsTop.offsetWidth && window.innerWidth < 768) {
                        if (i === 0) {
                            cdUseDivTabsTop.scrollLeft = 0;
                            cdUseButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            cdUseButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === cdUseButtonTabs.length - 1) {
                            cdUseDivTabsTop.scrollLeft = cdUseButtonTabs[cdUseButtonTabs.length - 1].offsetLeft + cdUseButtonTabs[cdUseButtonTabs.length - 1].offsetWidth - cdUseDivTabsTop.offsetWidth + parseInt (getComputedStyle (cdUseDivTabsTop).paddingLeft);
                            cdUseButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            cdUseButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            cdUseDivTabsTop.scrollLeft = cdUseButtonTabs[i].offsetLeft - ((cdUseDivTabsTop.offsetWidth / 2) - (cdUseButtonTabs[i].offsetWidth / 2));
                            cdUseButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                            cdUseButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        }
                        cdUseDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (cdUseDivTabsTop).paddingLeft)}px)`;
                        cdUseDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    } else {
                        cdUseButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                        cdUseButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
            
                        cdUseDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (cdUseDivTabsTop).paddingLeft)}px)`;
                        cdUseDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    }
                }
            });
        }
        

        // Функция для обработки кликов

        function cdUseButtonTabsClick () {
            cdUseButtonTabs.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.add ("_ACT");
                    cdUseButtonTabs.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("_ACT");
                    });
        
                    if (cdUseDivTabsTop.scrollWidth > cdUseDivTabsTop.offsetWidth && window.innerWidth < 768) {
                        if (i === 0) {
                            cdUseDivTabsTop.scrollLeft = 0;
                            cdUseButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            cdUseButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === cdUseButtonTabs.length - 1) {
                            cdUseDivTabsTop.scrollLeft = a[i].offsetLeft + a[i].offsetWidth - cdUseDivTabsTop.offsetWidth + parseInt (getComputedStyle (cdUseDivTabsTop).paddingLeft);
                            cdUseButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            cdUseButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            cdUseDivTabsTop.scrollLeft = a[i].offsetLeft - ((cdUseDivTabsTop.offsetWidth / 2) - (a[i].offsetWidth / 2));
                            cdUseButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            cdUseButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    
                    cdUseDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (cdUseDivTabsTop).paddingLeft)}px)`;
                    cdUseDivTabsFrame.style.width = getComputedStyle (a[i]).width;

                    cdUseDivSwiper2.slideTo (i);
                });
            });
        }

        cdUseButtonTabsClick ();

        cdUseButtonTabs[0].click ();


        let cdUsetimeout;
        const cdUseobserver = new ResizeObserver(() => {
            clearTimeout(cdUsetimeout);
            cdUsetimeout = setTimeout(() => {
                cdUseButtonTabsDefault ();
                cdUseButtonTabsClick ();
            }, 150);
        });

        cdUseobserver.observe (cdUseDivTabs);


        cdCommonMedia1920.addEventListener ("change", () => {
            cdUseButtonTabsDefault ();
            cdUseButtonTabsClick ();
        });
        

        // Обработка кликов правой и левой кнопок

        cdUseButtonTabsLeft.addEventListener ("click", () => {
            for (let i = 0; i < cdUseButtonTabs.length; i++) {
                if (cdUseButtonTabs[i].classList.contains ("_ACT")) {
                    cdUseButtonTabs[i - 1].click ();
                    break;
                }
            }
        });

        cdUseButtonTabsRight.addEventListener ("click", () => {
            for (let i = 0; i < cdUseButtonTabs.length; i++) {
                if (cdUseButtonTabs[i].classList.contains ("_ACT")) {
                    cdUseButtonTabs[i + 1].click ();
                    break;
                }
            }
        });





        // 4. СЛАЙДЕР ОТРАСЛИ
        
        const cdUseDivSwiper21 = new Swiper (".cd-use--div__SWIPER21", {
            navigation: {
                nextEl: '.cd-use--button__SWIPER21_NEXT',
                prevEl: '.cd-use--button__SWIPER21_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: "auto",
                },
            
                1440: {
                    slidesPerView: 2,
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




        // 5. СЛАЙДЕР РЕШЕНИЯ
        
        const cdUseDivSwiper22 = new Swiper (".cd-use--div__SWIPER22", {
            navigation: {
                nextEl: '.cd-use--button__SWIPER22_NEXT',
                prevEl: '.cd-use--button__SWIPER22_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: "auto",
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




        // 6. СЛАЙДЕР ИСТОРИЯ
        
        const cdUseDivSwiper23 = new Swiper (".cd-use--div__SWIPER23", {
            navigation: {
                nextEl: '.cd-use--button__SWIPER23_NEXT',
                prevEl: '.cd-use--button__SWIPER23_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: "auto",
                },
            
                1440: {
                    slidesPerView: 2,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                }
            },
        });




        // 7. ДОПОЛНИТЕЛЬНЫЕ НАСТРОЙКИ СЛАЙДЕРОВ ОТРАСЛЕЙ, РЕШЕНИЙ, ИСТОРИЙ

        if (cdCommonMedia1440.matches) {
            cdUseDivSwiper21.enable ();
            cdUseDivSwiper22.enable ();
            cdUseDivSwiper23.enable ();
        } else {
            cdUseDivSwiper21.disable ();
            cdUseDivSwiper22.disable ();
            cdUseDivSwiper23.disable ();
        }


        cdCommonMedia1440.addEventListener ("change", (e) => {
            if (e.matches) {
                cdUseDivSwiper21.enable ();
                cdUseDivSwiper22.enable ();
                cdUseDivSwiper23.enable ();
            } else {
                cdUseDivSwiper21.disable ();
                cdUseDivSwiper22.disable ();
                cdUseDivSwiper23.disable ();
            }
        });
    }
});