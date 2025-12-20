
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА ИСТОРИИ УСПЕХА |||||||||| ********** ---------- */


    if (document.querySelector ("#hst")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cdCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cdCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ HERO ********** ---------- */


        // 1. КНОПКИ УПРАВЛЕНИЯ
        
        const hsHeroDivTabs = document.querySelector (".hs-hero .c-common--div__TABS");
        const hsHeroDivTabsTop = document.querySelector (".hs-hero .c-common--div__TABS_TOP");
        const hsHeroATabs = Array.from (document.querySelectorAll (".hs-hero .c-common--a__TABS"));
        const hsHeroDivTabsFrame = document.querySelector (".hs-hero .c-common--div__TABS_FRAME");
        const hsHeroButtonTabsLeft = document.querySelector (".hs-hero .c-common--button__TABS_LEFT");
        const hsHeroButtonTabsRight = document.querySelector (".hs-hero .c-common--button__TABS_RIGHT");


        // Функция для статичного состояния (для обработки ресайза контейнера)

        function hsHeroATabsDefault () {
            hsHeroATabs.forEach ((v, i, a) => { 
                if (a[i].classList.contains ("_ACT")) {
                    if (hsHeroDivTabsTop.scrollWidth > hsHeroDivTabsTop.offsetWidth && window.innerWidth < 768) {
                        if (i === 0) {
                            hsHeroDivTabsTop.scrollLeft = 0;
                            hsHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            hsHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === hsHeroATabs.length - 1) {
                            hsHeroDivTabsTop.scrollLeft = hsHeroATabs[hsHeroATabs.length - 1].offsetLeft + hsHeroATabs[hsHeroATabs.length - 1].offsetWidth - hsHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (hsHeroDivTabsTop).paddingLeft);
                            hsHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            hsHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            hsHeroDivTabsTop.scrollLeft = hsHeroATabs[i].offsetLeft - ((hsHeroDivTabsTop.offsetWidth / 2) - (hsHeroATabs[i].offsetWidth / 2));
                            hsHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                            hsHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        }
                        hsHeroDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (hsHeroDivTabsTop).paddingLeft)}px)`;
                        hsHeroDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    } else {
                        hsHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                        hsHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
            
                        hsHeroDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (hsHeroDivTabsTop).paddingLeft)}px)`;
                        hsHeroDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    }
                }
            });
        }
        

        // Функция для обработки кликов

        function hsHeroATabsClick () {
            hsHeroATabs.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.add ("_ACT");
                    a[i].classList.add ("_MARK");
                    hsHeroATabs.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("_ACT");
                        a1[i1].classList.remove ("_MARK");
                    });
        
                    if (hsHeroDivTabsTop.scrollWidth > hsHeroDivTabsTop.offsetWidth && window.innerWidth < 768) {
                        if (i === 0) {
                            hsHeroDivTabsTop.scrollLeft = 0;
                            hsHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            hsHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === hsHeroATabs.length - 1) {
                            hsHeroDivTabsTop.scrollLeft = a[i].offsetLeft + a[i].offsetWidth - hsHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (hsHeroDivTabsTop).paddingLeft);
                            hsHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            hsHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            hsHeroDivTabsTop.scrollLeft = a[i].offsetLeft - ((hsHeroDivTabsTop.offsetWidth / 2) - (a[i].offsetWidth / 2));
                            hsHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            hsHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    
                    hsHeroDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (hsHeroDivTabsTop).paddingLeft)}px)`;
                    hsHeroDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                });
            });
        }

        hsHeroATabsClick ();


        let hsHerotimeout;
        const hsHeroobserver = new ResizeObserver(() => {
            clearTimeout(hsHerotimeout);
            hsHerotimeout = setTimeout(() => {
                hsHeroATabsDefault ();
                hsHeroATabsClick ();
            }, 150);
        });

        hsHeroobserver.observe (hsHeroDivTabs);


        cdCommonMedia1920.addEventListener ("change", () => {
            hsHeroATabsDefault ();
            hsHeroATabsClick ();
        });
        

        // Обработка кликов правой и левой кнопок

        hsHeroButtonTabsLeft.addEventListener ("click", () => {
            for (let i = 0; i < hsHeroATabs.length; i++) {
                if (hsHeroATabs[i].classList.contains ("_MARK")) {
                    hsHeroATabs[i].classList.remove ("_MARK");
                    if (hsHeroATabs[i - 1]) {
                        hsHeroATabs[i - 1].classList.add ("_MARK");
                        if (i - 1 === 0) {
                            hsHeroDivTabsTop.scrollLeft = 0;
                            hsHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            hsHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i - 1 === hsHeroATabs.length - 1) {
                            hsHeroDivTabsTop.scrollLeft = hsHeroATabs[i - 1].offsetLeft + hsHeroATabs[i - 1].offsetWidth - hsHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (hsHeroDivTabsTop).paddingLeft);
                            hsHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            hsHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            hsHeroDivTabsTop.scrollLeft = hsHeroATabs[i - 1].offsetLeft - ((hsHeroDivTabsTop.offsetWidth / 2) - (hsHeroATabs[i - 1].offsetWidth / 2));
                            hsHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            hsHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    break;
                }
            }
        });

        hsHeroButtonTabsRight.addEventListener ("click", () => {
            for (let i = 0; i < hsHeroATabs.length; i++) {
                if (hsHeroATabs[i].classList.contains ("_MARK")) {
                    hsHeroATabs[i].classList.remove ("_MARK");
                    if (hsHeroATabs[i + 1]) {
                        hsHeroATabs[i + 1].classList.add ("_MARK");
                        if (i + 1 === 0) {
                            hsHeroDivTabsTop.scrollLeft = 0;
                            hsHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            hsHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i + 1 === hsHeroATabs.length - 1) {
                            hsHeroDivTabsTop.scrollLeft = hsHeroATabs[i + 1].offsetLeft + hsHeroATabs[i + 1].offsetWidth - hsHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (hsHeroDivTabsTop).paddingLeft);
                            hsHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            hsHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            hsHeroDivTabsTop.scrollLeft = hsHeroATabs[i + 1].offsetLeft - ((hsHeroDivTabsTop.offsetWidth / 2) - (hsHeroATabs[i + 1].offsetWidth / 2));
                            hsHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            hsHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    break;
                }
            }
        }); 

    }
});