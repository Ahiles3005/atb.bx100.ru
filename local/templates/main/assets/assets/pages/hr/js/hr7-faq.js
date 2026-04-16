
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

        
        /* ---------- ********** СЕКЦИЯ FAQ ********** ---------- */


        // 1. АККОРДЕОН

        const hrFaqLiList = Array.from (document.querySelectorAll (".hr-faq--li__LIST"));
        const hrFaqButtonListTop = Array.from (document.querySelectorAll (".hr-faq--button__LIST_TOP"));


        function hrFaqAcc () {
            if (!cCommonMedia1440.matches) {
                hrFaqButtonListTop.forEach ((v, i, a) => {
                    a[i].onclick = function () {
                        hrFaqLiList[i].classList.toggle ("__hr-faq--li__LIST");
                        hrFaqLiList.filter (x => x !== hrFaqLiList[i]).forEach ((v1, i1, a1) => {
                            a1[i1].classList.remove ("__hr-faq--li__LIST");
                        });
                    }
                });
            } else {
                hrFaqButtonListTop.forEach ((v, i, a) => {
                    a[i].onclick = function () {
                        hrFaqLiList[i].classList.toggle ("__hr-faq--li__LIST");
                    }
                });
            }
        }

        hrFaqAcc ();

        cCommonMedia1440.addEventListener ("change", hrFaqAcc);
    }
});