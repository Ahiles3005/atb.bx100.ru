
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

        
        /* ---------- ********** СЕКЦИЯ ADV ********** ---------- */


        // 1. ШИРИНА БЛОКА

        const hrAdvDivMain = document.querySelector (".hr-adv--div__MAIN");

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




        // 2. АККОРДЕОН

        const hrAdvLiList = Array.from (document.querySelectorAll (".hr-adv--li__LIST"));
        const hrAdvButtonListTop = Array.from (document.querySelectorAll (".hr-adv--button__LIST_TOP"));


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