
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА МЕДИАЦЕНТР |||||||||| ********** ---------- */


    if (document.querySelector ("#mc")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cdCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cdCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ HERO ********** ---------- */


        // 1. ПЕРЕНОС ОДНОГО ИЗ ИЗОБРАЖЕНИЙ НА БОЛЬШИХ ЭКРАНАХ

        const mcHeroDivImages = document.querySelector (".mc-hero--div__IMAGES");
        const mcHeroDivImages1 = document.querySelector (".mc-hero--div__IMAGES1");
        const mcHeroDivImages2 = document.querySelector (".mc-hero--div__IMAGES2");
        const mcHeroDivImage1 = document.querySelector (".mc-hero--div__IMAGE._1");


        if (cdCommonMedia1440.matches) {
            mcHeroDivImages.append (mcHeroDivImage1);
        }


        cdCommonMedia1440.addEventListener ("change", (e) => {
            if (e.matches && mcHeroDivImages2.nextSibling !== mcHeroDivImage1) {
                mcHeroDivImages.append (mcHeroDivImage1);
            } else if (!e.matches && !mcHeroDivImages1.contains (mcHeroDivImage1)) {
                mcHeroDivImages1.prepend (mcHeroDivImage1);
            }
        });




        // 2. КНОПКИ УПРАВЛЕНИЯ
        
        const mcHeroDivTabs = document.querySelector (".mc-hero .c-common--div__TABS");
        const mcHeroDivTabsTop = document.querySelector (".mc-hero .c-common--div__TABS_TOP");
        const mcHeroATabs = Array.from (document.querySelectorAll (".mc-hero .c-common--a__TABS"));
        const mcHeroDivTabsFrame = document.querySelector (".mc-hero .c-common--div__TABS_FRAME");
        const mcHeroButtonTabsLeft = document.querySelector (".mc-hero .c-common--button__TABS_LEFT");
        const mcHeroButtonTabsRight = document.querySelector (".mc-hero .c-common--button__TABS_RIGHT");


        // Функция для статичного состояния (для обработки ресайза контейнера)

        function mcHeroATabsDefault () {
            mcHeroATabs.forEach ((v, i, a) => { 
                if (a[i].classList.contains ("_ACT")) {
                    if (mcHeroDivTabsTop.scrollWidth > mcHeroDivTabsTop.offsetWidth && window.innerWidth < 768) {
                        if (i === 0) {
                            mcHeroDivTabsTop.scrollLeft = 0;
                            mcHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            mcHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === mcHeroATabs.length - 1) {
                            mcHeroDivTabsTop.scrollLeft = mcHeroATabs[mcHeroATabs.length - 1].offsetLeft + mcHeroATabs[mcHeroATabs.length - 1].offsetWidth - mcHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (mcHeroDivTabsTop).paddingLeft);
                            mcHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            mcHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            mcHeroDivTabsTop.scrollLeft = mcHeroATabs[i].offsetLeft - ((mcHeroDivTabsTop.offsetWidth / 2) - (mcHeroATabs[i].offsetWidth / 2));
                            mcHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                            mcHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        }
                        mcHeroDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (mcHeroDivTabsTop).paddingLeft)}px)`;
                        mcHeroDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    } else {
                        mcHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                        mcHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
            
                        mcHeroDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (mcHeroDivTabsTop).paddingLeft)}px)`;
                        mcHeroDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    }
                }
            });
        }
        

        // Функция для обработки кликов

        function mcHeroATabsClick () {
            mcHeroATabs.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.add ("_ACT");
                    a[i].classList.add ("_MARK");
                    mcHeroATabs.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("_ACT");
                        a1[i1].classList.remove ("_MARK");
                    });
        
                    if (mcHeroDivTabsTop.scrollWidth > mcHeroDivTabsTop.offsetWidth && window.innerWidth < 768) {
                        if (i === 0) {
                            mcHeroDivTabsTop.scrollLeft = 0;
                            mcHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            mcHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === mcHeroATabs.length - 1) {
                            mcHeroDivTabsTop.scrollLeft = a[i].offsetLeft + a[i].offsetWidth - mcHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (mcHeroDivTabsTop).paddingLeft);
                            mcHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            mcHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            mcHeroDivTabsTop.scrollLeft = a[i].offsetLeft - ((mcHeroDivTabsTop.offsetWidth / 2) - (a[i].offsetWidth / 2));
                            mcHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            mcHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    
                    mcHeroDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (mcHeroDivTabsTop).paddingLeft)}px)`;
                    mcHeroDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                });
            });
        }

        mcHeroATabsClick ();


        let mcHerotimeout;
        const mcHeroobserver = new ResizeObserver(() => {
            clearTimeout(mcHerotimeout);
            mcHerotimeout = setTimeout(() => {
                mcHeroATabsDefault ();
                mcHeroATabsClick ();
            }, 150);
        });

        mcHeroobserver.observe (mcHeroDivTabs);


        cdCommonMedia1920.addEventListener ("change", () => {
            mcHeroATabsDefault ();
            mcHeroATabsClick ();
        });
        

        // Обработка кликов правой и левой кнопок

        mcHeroButtonTabsLeft.addEventListener ("click", () => {
            for (let i = 0; i < mcHeroATabs.length; i++) {
                if (mcHeroATabs[i].classList.contains ("_MARK")) {
                    mcHeroATabs[i].classList.remove ("_MARK");
                    if (mcHeroATabs[i - 1]) {
                        mcHeroATabs[i - 1].classList.add ("_MARK");
                        if (i - 1 === 0) {
                            mcHeroDivTabsTop.scrollLeft = 0;
                            mcHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            mcHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i - 1 === mcHeroATabs.length - 1) {
                            mcHeroDivTabsTop.scrollLeft = mcHeroATabs[i - 1].offsetLeft + mcHeroATabs[i - 1].offsetWidth - mcHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (mcHeroDivTabsTop).paddingLeft);
                            mcHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            mcHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            mcHeroDivTabsTop.scrollLeft = mcHeroATabs[i - 1].offsetLeft - ((mcHeroDivTabsTop.offsetWidth / 2) - (mcHeroATabs[i - 1].offsetWidth / 2));
                            mcHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            mcHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    break;
                }
            }
        });

        mcHeroButtonTabsRight.addEventListener ("click", () => {
            for (let i = 0; i < mcHeroATabs.length; i++) {
                if (mcHeroATabs[i].classList.contains ("_MARK")) {
                    mcHeroATabs[i].classList.remove ("_MARK");
                    if (mcHeroATabs[i + 1]) {
                        mcHeroATabs[i + 1].classList.add ("_MARK");
                        if (i + 1 === 0) {
                            mcHeroDivTabsTop.scrollLeft = 0;
                            mcHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            mcHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i + 1 === mcHeroATabs.length - 1) {
                            mcHeroDivTabsTop.scrollLeft = mcHeroATabs[i + 1].offsetLeft + mcHeroATabs[i + 1].offsetWidth - mcHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (mcHeroDivTabsTop).paddingLeft);
                            mcHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            mcHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            mcHeroDivTabsTop.scrollLeft = mcHeroATabs[i + 1].offsetLeft - ((mcHeroDivTabsTop.offsetWidth / 2) - (mcHeroATabs[i + 1].offsetWidth / 2));
                            mcHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            mcHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    break;
                }
            }
        }); 

    }
});