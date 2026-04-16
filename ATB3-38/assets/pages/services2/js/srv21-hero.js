
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА SERVICES2 |||||||||| ********** ---------- */


    if (document.querySelector ("#srv2")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ HERO ********** ---------- */


        // 1. АНИМАЦИЯ ПРИ СКРОЛЛЕ С ОБРАТНЫМ СРАБАТЫВАНИЕМ ДЛЯ МОБИЛОК

        function scrollAnim2 () {
            const scrolls2 = Array.from (document.querySelectorAll (".srv2-hero--div__SCHEME_MOB_ITEM"));

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
                rootMargin: `-49% 0px -50%`,
                threshold: 0,
            }
            
    
            const observer2 = new IntersectionObserver (callback2, options2)
    
            scrolls2.forEach ((v) => observer2.observe (v));
        }

        scrollAnim2 ();







        // 2. ШИРИНА ПОСЛЕДНЕГО БЛОКА

        const hrAdvDivMain = document.querySelector (".srv2-hero .hr-adv--div__MAIN");

        function hrAdvDivMainWidth () {
            hrAdvDivMain.style.width = `${document.documentElement.clientWidth}px`;
        }

        hrAdvDivMainWidth ();

        function hrAdvDivMainWidthDebounce0 (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const hrAdvDivMainWidthDebounce1 = hrAdvDivMainWidthDebounce0 (hrAdvDivMainWidth, 150);

        window.addEventListener ("resize", hrAdvDivMainWidthDebounce1);




        // 3. АККОРДЕОН В ПОСЛЕДНЕМ БЛОКЕ

        const hrAdvLiList = Array.from (document.querySelectorAll (".srv2-hero .hr-adv--li__LIST"));
        const hrAdvButtonListTop = Array.from (document.querySelectorAll (".srv2-hero .hr-adv--button__LIST_TOP"));


        function hrAdvAcc () {
            if (!cCommonMedia1440.matches) {
                hrAdvButtonListTop.forEach ((v, i, a) => {
                    a[i].onclick = function () {
                        hrAdvLiList[i].classList.toggle ("__hr-adv--li__LIST");
                        hrAdvLiList.filter (x => x !== hrAdvLiList[i]).forEach ((v1, i1, a1) => {
                            a1[i1].classList.remove ("__hr-adv--li__LIST");
                        });
                    }
                });
            } else {
                hrAdvButtonListTop.forEach ((v, i, a) => {
                    a[i].onclick = function () {
                        hrAdvLiList[i].classList.toggle ("__hr-adv--li__LIST");
                    }
                });
            }
        }

        hrAdvAcc ();

        cCommonMedia1440.addEventListener ("change", hrAdvAcc);
    }
});