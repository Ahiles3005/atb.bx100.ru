
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА TECH |||||||||| ********** ---------- */


    if (document.querySelector ("#te")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ DEV ********** ---------- */


        // 1. КНОПКИ УПРАВЛЕНИЯ
        
        const teDevDivTabs = document.querySelector (".te-dev .c-common--div__TABS");
        const teDevDivTabsTop = document.querySelector (".te-dev .c-common--div__TABS_TOP");
        const teDevATabs = Array.from (document.querySelectorAll (".te-dev .c-common--a__TABS"));
        const teDevDivTabsFrame = document.querySelector (".te-dev .c-common--div__TABS_FRAME");
        const teDevButtonTabsLeft = document.querySelector (".te-dev .c-common--button__TABS_LEFT");
        const teDevButtonTabsRight = document.querySelector (".te-dev .c-common--button__TABS_RIGHT");


        // Функция для статичного состояния (для обработки ресайза контейнера)

        function teDevATabsDefault () {
            teDevATabs.forEach ((v, i, a) => { 
                if (a[i].classList.contains ("_ACT")) {
                    if (teDevDivTabsTop.scrollWidth > teDevDivTabsTop.offsetWidth && window.innerWidth < 768) {
                        if (i === 0) {
                            teDevDivTabsTop.scrollLeft = 0;
                            teDevButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            teDevButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === teDevATabs.length - 1) {
                            teDevDivTabsTop.scrollLeft = teDevATabs[teDevATabs.length - 1].offsetLeft + teDevATabs[teDevATabs.length - 1].offsetWidth - teDevDivTabsTop.offsetWidth + parseInt (getComputedStyle (teDevDivTabsTop).paddingLeft);
                            teDevButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            teDevButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            teDevDivTabsTop.scrollLeft = teDevATabs[i].offsetLeft - ((teDevDivTabsTop.offsetWidth / 2) - (teDevATabs[i].offsetWidth / 2));
                            teDevButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                            teDevButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        }
                        teDevDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (teDevDivTabsTop).paddingLeft)}px)`;
                        teDevDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    } else {
                        teDevButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                        teDevButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
            
                        teDevDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (teDevDivTabsTop).paddingLeft)}px)`;
                        teDevDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    }
                }
            });
        }
        

        // Функция для обработки кликов

        function teDevATabsClick () {
            teDevATabs.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.add ("_ACT");
                    a[i].classList.add ("_MARK");
                    teDevATabs.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("_ACT");
                        a1[i1].classList.remove ("_MARK");
                    });
        
                    if (teDevDivTabsTop.scrollWidth > teDevDivTabsTop.offsetWidth && window.innerWidth < 768) {
                        if (i === 0) {
                            teDevDivTabsTop.scrollLeft = 0;
                            teDevButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            teDevButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === teDevATabs.length - 1) {
                            teDevDivTabsTop.scrollLeft = a[i].offsetLeft + a[i].offsetWidth - teDevDivTabsTop.offsetWidth + parseInt (getComputedStyle (teDevDivTabsTop).paddingLeft);
                            teDevButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            teDevButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            teDevDivTabsTop.scrollLeft = a[i].offsetLeft - ((teDevDivTabsTop.offsetWidth / 2) - (a[i].offsetWidth / 2));
                            teDevButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            teDevButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    
                    teDevDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (teDevDivTabsTop).paddingLeft)}px)`;
                    teDevDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                });
            });
        }

        teDevATabsClick ();


        let teDevtimeout;
        const teDevobserver = new ResizeObserver(() => {
            clearTimeout(teDevtimeout);
            teDevtimeout = setTimeout(() => {
                teDevATabsDefault ();
                teDevATabsClick ();
            }, 150);
        });

        teDevobserver.observe (teDevDivTabs);


        cCommonMedia1920.addEventListener ("change", () => {
            teDevATabsDefault ();
            teDevATabsClick ();
        });
        

        // Обработка кликов правой и левой кнопок

        teDevButtonTabsLeft.addEventListener ("click", () => {
            for (let i = 0; i < teDevATabs.length; i++) {
                if (teDevATabs[i].classList.contains ("_MARK")) {
                    teDevATabs[i].classList.remove ("_MARK");
                    if (teDevATabs[i - 1]) {
                        teDevATabs[i - 1].classList.add ("_MARK");
                        if (i - 1 === 0) {
                            teDevDivTabsTop.scrollLeft = 0;
                            teDevButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            teDevButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i - 1 === teDevATabs.length - 1) {
                            teDevDivTabsTop.scrollLeft = teDevATabs[i - 1].offsetLeft + teDevATabs[i - 1].offsetWidth - teDevDivTabsTop.offsetWidth + parseInt (getComputedStyle (teDevDivTabsTop).paddingLeft);
                            teDevButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            teDevButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            teDevDivTabsTop.scrollLeft = teDevATabs[i - 1].offsetLeft - ((teDevDivTabsTop.offsetWidth / 2) - (teDevATabs[i - 1].offsetWidth / 2));
                            teDevButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            teDevButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    break;
                }
            }
        });

        teDevButtonTabsRight.addEventListener ("click", () => {
            for (let i = 0; i < teDevATabs.length; i++) {
                if (teDevATabs[i].classList.contains ("_MARK")) {
                    teDevATabs[i].classList.remove ("_MARK");
                    if (teDevATabs[i + 1]) {
                        teDevATabs[i + 1].classList.add ("_MARK");
                        if (i + 1 === 0) {
                            teDevDivTabsTop.scrollLeft = 0;
                            teDevButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            teDevButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i + 1 === teDevATabs.length - 1) {
                            teDevDivTabsTop.scrollLeft = teDevATabs[i + 1].offsetLeft + teDevATabs[i + 1].offsetWidth - teDevDivTabsTop.offsetWidth + parseInt (getComputedStyle (teDevDivTabsTop).paddingLeft);
                            teDevButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            teDevButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            teDevDivTabsTop.scrollLeft = teDevATabs[i + 1].offsetLeft - ((teDevDivTabsTop.offsetWidth / 2) - (teDevATabs[i + 1].offsetWidth / 2));
                            teDevButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            teDevButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    break;
                }
            }
        });
        
    }
});