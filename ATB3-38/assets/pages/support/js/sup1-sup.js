
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА SUP |||||||||| ********** ---------- */


    if (document.querySelector ("#sup")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ SUP ********** ---------- */


        // 1. КНОПКИ УПРАВЛЕНИЯ
        
        const supSupDivTabs = document.querySelector (".sup-sup .c-common--div__TABS");
        const supSupDivTabsTop = document.querySelector (".sup-sup .c-common--div__TABS_TOP");
        const supSupATabs = Array.from (document.querySelectorAll (".sup-sup .c-common--a__TABS"));
        const supSupDivTabsFrame = document.querySelector (".sup-sup .c-common--div__TABS_FRAME");
        const supSupButtonTabsLeft = document.querySelector (".sup-sup .c-common--button__TABS_LEFT");
        const supSupButtonTabsRight = document.querySelector (".sup-sup .c-common--button__TABS_RIGHT");


        // Функция для статичного состояния (для обработки ресайза контейнера)

        function supSupATabsDefault () {
            supSupATabs.forEach ((v, i, a) => { 
                if (a[i].classList.contains ("_ACT")) {
                    if (supSupDivTabsTop.scrollWidth > supSupDivTabsTop.offsetWidth && window.innerWidth < 1440) {
                        if (i === 0) {
                            supSupDivTabsTop.scrollLeft = 0;
                            supSupButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            supSupButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === supSupATabs.length - 1) {
                            supSupDivTabsTop.scrollLeft = supSupATabs[supSupATabs.length - 1].offsetLeft + supSupATabs[supSupATabs.length - 1].offsetWidth - supSupDivTabsTop.offsetWidth + parseInt (getComputedStyle (supSupDivTabsTop).paddingLeft);
                            supSupButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            supSupButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            supSupDivTabsTop.scrollLeft = supSupATabs[i].offsetLeft - ((supSupDivTabsTop.offsetWidth / 2) - (supSupATabs[i].offsetWidth / 2));
                            supSupButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                            supSupButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        }
                        supSupDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (supSupDivTabsTop).paddingLeft)}px)`;
                        supSupDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    } else {
                        supSupButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                        supSupButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
            
                        supSupDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (supSupDivTabsTop).paddingLeft)}px)`;
                        supSupDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    }
                }
            });
        }
        

        // Функция для обработки кликов

        function supSupATabsClick () {
            supSupATabs.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.add ("_ACT");
                    a[i].classList.add ("_MARK");
                    supSupATabs.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("_ACT");
                        a1[i1].classList.remove ("_MARK");
                    });
        
                    if (supSupDivTabsTop.scrollWidth > supSupDivTabsTop.offsetWidth && window.innerWidth < 1440) {
                        if (i === 0) {
                            supSupDivTabsTop.scrollLeft = 0;
                            supSupButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            supSupButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === supSupATabs.length - 1) {
                            supSupDivTabsTop.scrollLeft = a[i].offsetLeft + a[i].offsetWidth - supSupDivTabsTop.offsetWidth + parseInt (getComputedStyle (supSupDivTabsTop).paddingLeft);
                            supSupButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            supSupButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            supSupDivTabsTop.scrollLeft = a[i].offsetLeft - ((supSupDivTabsTop.offsetWidth / 2) - (a[i].offsetWidth / 2));
                            supSupButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            supSupButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    
                    supSupDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (supSupDivTabsTop).paddingLeft)}px)`;
                    supSupDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                });
            });
        }

        supSupATabsClick ();


        let supSuptimeout;
        const supSupobserver = new ResizeObserver(() => {
            clearTimeout(supSuptimeout);
            supSuptimeout = setTimeout(() => {
                supSupATabsDefault ();
                supSupATabsClick ();
            }, 150);
        });

        supSupobserver.observe (supSupDivTabs);


        cCommonMedia1920.addEventListener ("change", () => {
            supSupATabsDefault ();
            supSupATabsClick ();
        });
        

        // Обработка кликов правой и левой кнопок

        supSupButtonTabsLeft.addEventListener ("click", () => {
            for (let i = 0; i < supSupATabs.length; i++) {
                if (supSupATabs[i].classList.contains ("_MARK")) {
                    supSupATabs[i].classList.remove ("_MARK");
                    if (supSupATabs[i - 1]) {
                        supSupATabs[i - 1].classList.add ("_MARK");
                        if (i - 1 === 0) {
                            supSupDivTabsTop.scrollLeft = 0;
                            supSupButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            supSupButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i - 1 === supSupATabs.length - 1) {
                            supSupDivTabsTop.scrollLeft = supSupATabs[i - 1].offsetLeft + supSupATabs[i - 1].offsetWidth - supSupDivTabsTop.offsetWidth + parseInt (getComputedStyle (supSupDivTabsTop).paddingLeft);
                            supSupButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            supSupButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            supSupDivTabsTop.scrollLeft = supSupATabs[i - 1].offsetLeft - ((supSupDivTabsTop.offsetWidth / 2) - (supSupATabs[i - 1].offsetWidth / 2));
                            supSupButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            supSupButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    break;
                }
            }
        });

        supSupButtonTabsRight.addEventListener ("click", () => {
            for (let i = 0; i < supSupATabs.length; i++) {
                if (supSupATabs[i].classList.contains ("_MARK")) {
                    supSupATabs[i].classList.remove ("_MARK");
                    if (supSupATabs[i + 1]) {
                        supSupATabs[i + 1].classList.add ("_MARK");
                        if (i + 1 === 0) {
                            supSupDivTabsTop.scrollLeft = 0;
                            supSupButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            supSupButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i + 1 === supSupATabs.length - 1) {
                            supSupDivTabsTop.scrollLeft = supSupATabs[i + 1].offsetLeft + supSupATabs[i + 1].offsetWidth - supSupDivTabsTop.offsetWidth + parseInt (getComputedStyle (supSupDivTabsTop).paddingLeft);
                            supSupButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            supSupButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            supSupDivTabsTop.scrollLeft = supSupATabs[i + 1].offsetLeft - ((supSupDivTabsTop.offsetWidth / 2) - (supSupATabs[i + 1].offsetWidth / 2));
                            supSupButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            supSupButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    break;
                }
            }
        });







        // 2. АНИМАЦИЯ ПРИ СКРОЛЛЕ С ОБРАТНЫМ СРАБАТЫВАНИЕМ

        function scrollAnim2 () {
            const scrolls2 = Array.from (document.querySelectorAll (".sup-sup--div__SCHEME_MOB_ITEM"));

            const callback2 = (entries, observer) => {
                entries.forEach ((entry) => {                       
                    if (entry.isIntersecting) {
                        entry.target.classList.add ("__C-SCRL3");
                    } else {
                        entry.target.classList.remove ("__C-SCRL3");
                    }
                });
            }
    
            const options2 = {
                rootMargin: `-49% 0px -49%`,
                threshold: 0,
            }
            
    
            const observer2 = new IntersectionObserver (callback2, options2)
    
            scrolls2.forEach ((v) => observer2.observe (v));
        }

        scrollAnim2 ();

        // cCommonMedia1440.addEventListener ("change", scrollAnim2);
        
    }
});