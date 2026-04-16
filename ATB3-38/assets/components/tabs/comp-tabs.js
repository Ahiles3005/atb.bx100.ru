
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** КОМПОНЕНТ TABS ********** ---------- */


    if (document.querySelector (".c-common--div__TABS")) {


        // ОБЪЕКТ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");


        // 1. КНОПКИ УПРАВЛЕНИЯ
        
        const cCommonDivTabs = document.querySelector (".c-common--div__TABS");
        const cCommonDivTabsTop = document.querySelector (".c-common--div__TABS_TOP");
        const cCommonATabs = Array.from (document.querySelectorAll (".c-common--a__TABS"));
        const cCommonDivTabsFrame = document.querySelector (".c-common--div__TABS_FRAME");
        const cCommonButtonTabsLeft = document.querySelector (".c-common--button__TABS_LEFT");
        const cCommonButtonTabsRight = document.querySelector (".c-common--button__TABS_RIGHT");


        // Функция для статичного состояния (для обработки ресайза контейнера)

        function cCommonATabsDefault () {
            cCommonATabs.forEach ((v, i, a) => { 
                if (a[i].classList.contains ("_ACT")) {
                    if (cCommonDivTabsTop.scrollWidth > cCommonDivTabsTop.offsetWidth && window.innerWidth < 1440) {
                        if (i === 0) {
                            cCommonDivTabsTop.scrollLeft = 0;
                            cCommonButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            cCommonButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === cCommonATabs.length - 1) {
                            cCommonDivTabsTop.scrollLeft = cCommonATabs[cCommonATabs.length - 1].offsetLeft + cCommonATabs[cCommonATabs.length - 1].offsetWidth - cCommonDivTabsTop.offsetWidth + parseInt (getComputedStyle (cCommonDivTabsTop).paddingLeft);
                            cCommonButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            cCommonButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            cCommonDivTabsTop.scrollLeft = cCommonATabs[i].offsetLeft - ((cCommonDivTabsTop.offsetWidth / 2) - (cCommonATabs[i].offsetWidth / 2));
                            cCommonButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                            cCommonButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        }
                        cCommonDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (cCommonDivTabsTop).paddingLeft)}px)`;
                        cCommonDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    } else {
                        cCommonButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                        cCommonButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
            
                        cCommonDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (cCommonDivTabsTop).paddingLeft)}px)`;
                        cCommonDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    }
                }
            });
        }
        

        // Функция для обработки кликов

        function cCommonATabsClick () {
            cCommonATabs.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.add ("_ACT");
                    a[i].classList.add ("_MARK");
                    cCommonATabs.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("_ACT");
                        a1[i1].classList.remove ("_MARK");
                    });
        
                    if (cCommonDivTabsTop.scrollWidth > cCommonDivTabsTop.offsetWidth && window.innerWidth < 1440) {
                        if (i === 0) {
                            cCommonDivTabsTop.scrollLeft = 0;
                            cCommonButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            cCommonButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === cCommonATabs.length - 1) {
                            cCommonDivTabsTop.scrollLeft = a[i].offsetLeft + a[i].offsetWidth - cCommonDivTabsTop.offsetWidth + parseInt (getComputedStyle (cCommonDivTabsTop).paddingLeft);
                            cCommonButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            cCommonButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            cCommonDivTabsTop.scrollLeft = a[i].offsetLeft - ((cCommonDivTabsTop.offsetWidth / 2) - (a[i].offsetWidth / 2));
                            cCommonButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            cCommonButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    
                    cCommonDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (cCommonDivTabsTop).paddingLeft)}px)`;
                    cCommonDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                });
            });
        }

        cCommonATabsClick ();


        let cCommonTabstimeout;
        const cCommonTabsobserver = new ResizeObserver(() => {
            clearTimeout(cCommonTabstimeout);
            cCommonTabstimeout = setTimeout(() => {
                cCommonATabsDefault ();
                cCommonATabsClick ();
            }, 150);
        });

        cCommonTabsobserver.observe (cCommonDivTabs);


        cCommonMedia1920.addEventListener ("change", () => {
            cCommonATabsDefault ();
            cCommonATabsClick ();
        });
        

        // Обработка кликов правой и левой кнопок

        cCommonButtonTabsLeft.addEventListener ("click", () => {
            for (let i = 0; i < cCommonATabs.length; i++) {
                if (cCommonATabs[i].classList.contains ("_MARK")) {
                    cCommonATabs[i].classList.remove ("_MARK");
                    if (cCommonATabs[i - 1]) {
                        cCommonATabs[i - 1].classList.add ("_MARK");
                        if (i - 1 === 0) {
                            cCommonDivTabsTop.scrollLeft = 0;
                            cCommonButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            cCommonButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i - 1 === cCommonATabs.length - 1) {
                            cCommonDivTabsTop.scrollLeft = cCommonATabs[i - 1].offsetLeft + cCommonATabs[i - 1].offsetWidth - cCommonDivTabsTop.offsetWidth + parseInt (getComputedStyle (cCommonDivTabsTop).paddingLeft);
                            cCommonButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            cCommonButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            cCommonDivTabsTop.scrollLeft = cCommonATabs[i - 1].offsetLeft - ((cCommonDivTabsTop.offsetWidth / 2) - (cCommonATabs[i - 1].offsetWidth / 2));
                            cCommonButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            cCommonButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    break;
                }
            }
        });

        cCommonButtonTabsRight.addEventListener ("click", () => {
            for (let i = 0; i < cCommonATabs.length; i++) {
                if (cCommonATabs[i].classList.contains ("_MARK")) {
                    cCommonATabs[i].classList.remove ("_MARK");
                    if (cCommonATabs[i + 1]) {
                        cCommonATabs[i + 1].classList.add ("_MARK");
                        if (i + 1 === 0) {
                            cCommonDivTabsTop.scrollLeft = 0;
                            cCommonButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            cCommonButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i + 1 === cCommonATabs.length - 1) {
                            cCommonDivTabsTop.scrollLeft = cCommonATabs[i + 1].offsetLeft + cCommonATabs[i + 1].offsetWidth - cCommonDivTabsTop.offsetWidth + parseInt (getComputedStyle (cCommonDivTabsTop).paddingLeft);
                            cCommonButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            cCommonButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            cCommonDivTabsTop.scrollLeft = cCommonATabs[i + 1].offsetLeft - ((cCommonDivTabsTop.offsetWidth / 2) - (cCommonATabs[i + 1].offsetWidth / 2));
                            cCommonButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            cCommonButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    break;
                }
            }
        });
    }
});