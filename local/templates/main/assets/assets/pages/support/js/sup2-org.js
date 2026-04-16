
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

        
        /* ---------- ********** СЕКЦИЯ ORG ********** ---------- */


        // 1. АККОРДЕОН

        const supOrgUlList = Array.from (document.querySelectorAll (".sup-org--ul__LIST"));

        function supOrgAcc () {
            if (cCommonMedia1440.matches) {
                supOrgUlList.forEach ((v, i, a) => {
                    const supOrgLiList = Array.from (a[i].querySelectorAll (".sup-org--li__LIST"));
                    const supOrgButtonListTop = Array.from (a[i].querySelectorAll (".sup-org--button__LIST_TOP"));
        
                    supOrgButtonListTop.forEach ((v1, i1, a1) => {
                        a1[i1].onclick = function () {
                            supOrgLiList[i1].classList.toggle ("__sup-org--li__LIST");
                        };
                    });
                });
            } else {
                supOrgUlList.forEach ((v, i, a) => {
                    const supOrgLiList = Array.from (a[i].querySelectorAll (".sup-org--li__LIST"));
                    const supOrgButtonListTop = Array.from (a[i].querySelectorAll (".sup-org--button__LIST_TOP"));
        
                    supOrgButtonListTop.forEach ((v1, i1, a1) => {
                        a1[i1].onclick = function () {
                            supOrgLiList[i1].classList.toggle ("__sup-org--li__LIST");
                            supOrgLiList.filter (x => x !== supOrgLiList[i1]).forEach ((v2, i2, a2) => {
                                a2[i2].classList.remove ("__sup-org--li__LIST");
                            });
                        };
                    });
                });
            }
        }

        supOrgAcc ();

        cCommonMedia1440.addEventListener ("change", supOrgAcc); 
    }
});