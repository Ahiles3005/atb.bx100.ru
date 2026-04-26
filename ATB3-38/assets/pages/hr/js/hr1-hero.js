
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА HR |||||||||| ********** ---------- */


    if (document.querySelector ("#hr")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ HERO ********** ---------- */


        // 1. ИЗОБРАЖЕНИЯ

        const hrHeroDivImageCont = Array.from (document.querySelectorAll (".hr-hero--div__IMAGE_CONT"));
        const hrHeroImgImage = Array.from (document.querySelectorAll (".hr-hero--img__IMAGE"));


        // if (matchMedia ('(any-hover: none)').matches) {
        //     hrHeroDivImageCont.forEach ((v, i, a) => {
        //         a[i].addEventListener ("touchstart", () => {
        //             a[i].classList.add ("__hr-hero--div__IMAGE_CONT");
        //             hrHeroImgImage[i].classList.toggle ("__hr-hero--img__IMAGE");
        //         });
        //     });
        //     hrHeroDivImageCont.forEach ((v, i, a) => {
        //         a[i].addEventListener ("touchend", () => {
        //             a[i].classList.remove ("__hr-hero--div__IMAGE_CONT");
        //             hrHeroImgImage[i].classList.toggle ("__hr-hero--img__IMAGE");
        //         });
        //     });
        // } else {
            hrHeroDivImageCont.forEach ((v, i, a) => {
                a[i].addEventListener ("mouseenter", () => {
                    // a[i].classList.add ("__hr-hero--div__IMAGE_CONT");
                    hrHeroImgImage[i].classList.toggle ("__hr-hero--img__IMAGE");
                });
            });
            hrHeroDivImageCont.forEach ((v, i, a) => {
                a[i].addEventListener ("mouseleave", () => {
                    // a[i].classList.remove ("__hr-hero--div__IMAGE_CONT");
                    hrHeroImgImage[i].classList.toggle ("__hr-hero--img__IMAGE");
                });
            });
        // }
        
                


        // 2. КНОПКИ УПРАВЛЕНИЯ
        
        const hrHeroDivTabs = document.querySelector (".hr-hero .c-common--div__TABS");
        const hrHeroDivTabsTop = document.querySelector (".hr-hero .c-common--div__TABS_TOP");
        const hrHeroATabs = Array.from (document.querySelectorAll (".hr-hero .c-common--a__TABS"));
        const hrHeroDivTabsFrame = document.querySelector (".hr-hero .c-common--div__TABS_FRAME");
        const hrHeroButtonTabsLeft = document.querySelector (".hr-hero .c-common--button__TABS_LEFT");
        const hrHeroButtonTabsRight = document.querySelector (".hr-hero .c-common--button__TABS_RIGHT");


        // Функция для статичного состояния (для обработки ресайза контейнера)

        function hrHeroATabsDefault () {
            hrHeroATabs.forEach ((v, i, a) => { 
                if (a[i].classList.contains ("_ACT")) {
                    if (hrHeroDivTabsTop.scrollWidth > hrHeroDivTabsTop.offsetWidth && window.innerWidth < 768) {
                        if (i === 0) {
                            hrHeroDivTabsTop.scrollLeft = 0;
                            hrHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            hrHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === hrHeroATabs.length - 1) {
                            hrHeroDivTabsTop.scrollLeft = hrHeroATabs[hrHeroATabs.length - 1].offsetLeft + hrHeroATabs[hrHeroATabs.length - 1].offsetWidth - hrHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (hrHeroDivTabsTop).paddingLeft);
                            hrHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            hrHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            hrHeroDivTabsTop.scrollLeft = hrHeroATabs[i].offsetLeft - ((hrHeroDivTabsTop.offsetWidth / 2) - (hrHeroATabs[i].offsetWidth / 2));
                            hrHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                            hrHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        }
                        hrHeroDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (hrHeroDivTabsTop).paddingLeft)}px)`;
                        hrHeroDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    } else {
                        hrHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                        hrHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
            
                        hrHeroDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (hrHeroDivTabsTop).paddingLeft)}px)`;
                        hrHeroDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    }
                }
            });
        }
        

        // Функция для обработки кликов

        function hrHeroATabsClick () {
            hrHeroATabs.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.add ("_ACT");
                    a[i].classList.add ("_MARK");
                    hrHeroATabs.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("_ACT");
                        a1[i1].classList.remove ("_MARK");
                    });
        
                    if (hrHeroDivTabsTop.scrollWidth > hrHeroDivTabsTop.offsetWidth && window.innerWidth < 768) {
                        if (i === 0) {
                            hrHeroDivTabsTop.scrollLeft = 0;
                            hrHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            hrHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === hrHeroATabs.length - 1) {
                            hrHeroDivTabsTop.scrollLeft = a[i].offsetLeft + a[i].offsetWidth - hrHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (hrHeroDivTabsTop).paddingLeft);
                            hrHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            hrHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            hrHeroDivTabsTop.scrollLeft = a[i].offsetLeft - ((hrHeroDivTabsTop.offsetWidth / 2) - (a[i].offsetWidth / 2));
                            hrHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            hrHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    
                    hrHeroDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (hrHeroDivTabsTop).paddingLeft)}px)`;
                    hrHeroDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                });
            });
        }

        hrHeroATabsClick ();


        let hrHerotimeout;
        const hrHeroobserver = new ResizeObserver(() => {
            clearTimeout(hrHerotimeout);
            hrHerotimeout = setTimeout(() => {
                hrHeroATabsDefault ();
                hrHeroATabsClick ();
            }, 150);
        });

        hrHeroobserver.observe (hrHeroDivTabs);


        cCommonMedia1920.addEventListener ("change", () => {
            hrHeroATabsDefault ();
            hrHeroATabsClick ();
        });
        

        // Обработка кликов правой и левой кнопок

        hrHeroButtonTabsLeft.addEventListener ("click", () => {
            for (let i = 0; i < hrHeroATabs.length; i++) {
                if (hrHeroATabs[i].classList.contains ("_MARK")) {
                    hrHeroATabs[i].classList.remove ("_MARK");
                    if (hrHeroATabs[i - 1]) {
                        hrHeroATabs[i - 1].classList.add ("_MARK");
                        if (i - 1 === 0) {
                            hrHeroDivTabsTop.scrollLeft = 0;
                            hrHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            hrHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i - 1 === hrHeroATabs.length - 1) {
                            hrHeroDivTabsTop.scrollLeft = hrHeroATabs[i - 1].offsetLeft + hrHeroATabs[i - 1].offsetWidth - hrHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (hrHeroDivTabsTop).paddingLeft);
                            hrHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            hrHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            hrHeroDivTabsTop.scrollLeft = hrHeroATabs[i - 1].offsetLeft - ((hrHeroDivTabsTop.offsetWidth / 2) - (hrHeroATabs[i - 1].offsetWidth / 2));
                            hrHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            hrHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    break;
                }
            }
        });

        hrHeroButtonTabsRight.addEventListener ("click", () => {
            for (let i = 0; i < hrHeroATabs.length; i++) {
                if (hrHeroATabs[i].classList.contains ("_MARK")) {
                    hrHeroATabs[i].classList.remove ("_MARK");
                    if (hrHeroATabs[i + 1]) {
                        hrHeroATabs[i + 1].classList.add ("_MARK");
                        if (i + 1 === 0) {
                            hrHeroDivTabsTop.scrollLeft = 0;
                            hrHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            hrHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i + 1 === hrHeroATabs.length - 1) {
                            hrHeroDivTabsTop.scrollLeft = hrHeroATabs[i + 1].offsetLeft + hrHeroATabs[i + 1].offsetWidth - hrHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (hrHeroDivTabsTop).paddingLeft);
                            hrHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            hrHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            hrHeroDivTabsTop.scrollLeft = hrHeroATabs[i + 1].offsetLeft - ((hrHeroDivTabsTop.offsetWidth / 2) - (hrHeroATabs[i + 1].offsetWidth / 2));
                            hrHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            hrHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    break;
                }
            }
        }); 

    }
});