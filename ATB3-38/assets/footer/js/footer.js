
"use strict";



window.addEventListener ("load", function () {

    
    /* ---------- ********** FOOTER ********** ---------- */


    {
        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ 1 УРОВНЯ

        const cFooterButton1 = Array.from (document.querySelectorAll (".c-footer--button__1"));
        const cFooterDiv01 = Array.from (document.querySelectorAll (".c-footer--div__01"));



        cFooterButton1.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!a[i].classList.contains ("__c-footer--button__1")) {
                    a[i].classList.add ("__c-footer--button__1");
                    cFooterDiv01[i].classList.add ("__c-footer--div__01");
                    
                    cFooterButton1.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__c-footer--button__1");
                    });
                    cFooterDiv01.filter (x => x !== cFooterDiv01[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__c-footer--div__01");
                    });
                } else {
                    a[i].classList.remove ("__c-footer--button__1");
                    cFooterDiv01[i].classList.remove ("__c-footer--div__01");
                }
                
            });
        });




        // 2. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ 2 УРОВНЯ

        const cFooterDiv0 = document.querySelector (".c-footer--div__0");
        const cFooterButton2 = Array.from (document.querySelectorAll (".c-footer--button__2"));
        const cFooterLi2 = Array.from (document.querySelectorAll (".c-footer--li__2:has(.c-footer--ul__3)"));



        cFooterButton2.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!a[i].classList.contains ("__c-footer--button__2")) {
                    
                    cFooterButton2.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__c-footer--button__2");
                    });
                    cFooterLi2.filter (x => x !== cFooterLi2[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__c-footer--li__2");
                    });

                    a[i].classList.add ("__c-footer--button__2");
                    cFooterLi2[i].classList.add ("__c-footer--li__2");
                } else {
                    a[i].classList.remove ("__c-footer--button__2");
                    cFooterLi2[i].classList.remove ("__c-footer--li__2");
                }
                cFooterDiv0.classList.add ("__c-footer--div__0");
            });
        });
    }
});