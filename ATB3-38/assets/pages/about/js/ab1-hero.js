
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА ABOUT |||||||||| ********** ---------- */


    if (document.querySelector ("#ab")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ HERO ********** ---------- */


        // 1. КНОПКИ УПРАВЛЕНИЯ
        
        const abHeroDivTabs = document.querySelector (".ab-hero .c-common--div__TABS");
        const abHeroDivTabsTop = document.querySelector (".ab-hero .c-common--div__TABS_TOP");
        const abHeroATabs = Array.from (document.querySelectorAll (".ab-hero .c-common--a__TABS"));
        const abHeroDivTabsFrame = document.querySelector (".ab-hero .c-common--div__TABS_FRAME");
        const abHeroButtonTabsLeft = document.querySelector (".ab-hero .c-common--button__TABS_LEFT");
        const abHeroButtonTabsRight = document.querySelector (".ab-hero .c-common--button__TABS_RIGHT");


        // Функция для статичного состояния (для обработки ресайза контейнера)

        function abHeroATabsDefault () {
            abHeroATabs.forEach ((v, i, a) => { 
                if (a[i].classList.contains ("_ACT")) {
                    if (abHeroDivTabsTop.scrollWidth > abHeroDivTabsTop.offsetWidth && window.innerWidth < 768) {
                        if (i === 0) {
                            abHeroDivTabsTop.scrollLeft = 0;
                            abHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            abHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === abHeroATabs.length - 1) {
                            abHeroDivTabsTop.scrollLeft = abHeroATabs[abHeroATabs.length - 1].offsetLeft + abHeroATabs[abHeroATabs.length - 1].offsetWidth - abHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (abHeroDivTabsTop).paddingLeft);
                            abHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            abHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            abHeroDivTabsTop.scrollLeft = abHeroATabs[i].offsetLeft - ((abHeroDivTabsTop.offsetWidth / 2) - (abHeroATabs[i].offsetWidth / 2));
                            abHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                            abHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        }
                        abHeroDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (abHeroDivTabsTop).paddingLeft)}px)`;
                        abHeroDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    } else {
                        abHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                        abHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
            
                        abHeroDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (abHeroDivTabsTop).paddingLeft)}px)`;
                        abHeroDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    }
                }
            });
        }
        

        // Функция для обработки кликов

        function abHeroATabsClick () {
            abHeroATabs.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.add ("_ACT");
                    a[i].classList.add ("_MARK");
                    abHeroATabs.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("_ACT");
                        a1[i1].classList.remove ("_MARK");
                    });
        
                    if (abHeroDivTabsTop.scrollWidth > abHeroDivTabsTop.offsetWidth && window.innerWidth < 768) {
                        if (i === 0) {
                            abHeroDivTabsTop.scrollLeft = 0;
                            abHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            abHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === abHeroATabs.length - 1) {
                            abHeroDivTabsTop.scrollLeft = a[i].offsetLeft + a[i].offsetWidth - abHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (abHeroDivTabsTop).paddingLeft);
                            abHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            abHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            abHeroDivTabsTop.scrollLeft = a[i].offsetLeft - ((abHeroDivTabsTop.offsetWidth / 2) - (a[i].offsetWidth / 2));
                            abHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            abHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    
                    abHeroDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (abHeroDivTabsTop).paddingLeft)}px)`;
                    abHeroDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                });
            });
        }

        abHeroATabsClick ();


        let abHerotimeout;
        const abHeroobserver = new ResizeObserver(() => {
            clearTimeout(abHerotimeout);
            abHerotimeout = setTimeout(() => {
                abHeroATabsDefault ();
                abHeroATabsClick ();
            }, 150);
        });

        abHeroobserver.observe (abHeroDivTabs);


        cCommonMedia1920.addEventListener ("change", () => {
            abHeroATabsDefault ();
            abHeroATabsClick ();
        });
        

        // Обработка кликов правой и левой кнопок

        abHeroButtonTabsLeft.addEventListener ("click", () => {
            for (let i = 0; i < abHeroATabs.length; i++) {
                if (abHeroATabs[i].classList.contains ("_MARK")) {
                    abHeroATabs[i].classList.remove ("_MARK");
                    if (abHeroATabs[i - 1]) {
                        abHeroATabs[i - 1].classList.add ("_MARK");
                        if (i - 1 === 0) {
                            abHeroDivTabsTop.scrollLeft = 0;
                            abHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            abHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i - 1 === abHeroATabs.length - 1) {
                            abHeroDivTabsTop.scrollLeft = abHeroATabs[i - 1].offsetLeft + abHeroATabs[i - 1].offsetWidth - abHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (abHeroDivTabsTop).paddingLeft);
                            abHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            abHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            abHeroDivTabsTop.scrollLeft = abHeroATabs[i - 1].offsetLeft - ((abHeroDivTabsTop.offsetWidth / 2) - (abHeroATabs[i - 1].offsetWidth / 2));
                            abHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            abHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    break;
                }
            }
        });

        abHeroButtonTabsRight.addEventListener ("click", () => {
            for (let i = 0; i < abHeroATabs.length; i++) {
                if (abHeroATabs[i].classList.contains ("_MARK")) {
                    abHeroATabs[i].classList.remove ("_MARK");
                    if (abHeroATabs[i + 1]) {
                        abHeroATabs[i + 1].classList.add ("_MARK");
                        if (i + 1 === 0) {
                            abHeroDivTabsTop.scrollLeft = 0;
                            abHeroButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            abHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i + 1 === abHeroATabs.length - 1) {
                            abHeroDivTabsTop.scrollLeft = abHeroATabs[i + 1].offsetLeft + abHeroATabs[i + 1].offsetWidth - abHeroDivTabsTop.offsetWidth + parseInt (getComputedStyle (abHeroDivTabsTop).paddingLeft);
                            abHeroButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            abHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            abHeroDivTabsTop.scrollLeft = abHeroATabs[i + 1].offsetLeft - ((abHeroDivTabsTop.offsetWidth / 2) - (abHeroATabs[i + 1].offsetWidth / 2));
                            abHeroButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            abHeroButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    break;
                }
            }
        }); 

    }
});