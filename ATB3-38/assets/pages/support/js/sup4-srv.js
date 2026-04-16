
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

        
        /* ---------- ********** СЕКЦИЯ SRV ********** ---------- */


        // 1. АНИМАЦИЯ ПРИ СКРОЛЛЕ С ОБРАТНЫМ СРАБАТЫВАНИЕМ

        function scrollAnim3 () {
            const scrolls3 = Array.from (document.querySelectorAll (".st-main--div__IMAGE7_IMAGE_SMALL"));

            const callback3 = (entries, observer) => {
                entries.forEach ((entry) => {                       
                    if (entry.isIntersecting) {
                        entry.target.classList.add ("__C-SCRL3");
                    } else {
                        entry.target.classList.remove ("__C-SCRL3");
                    }
                });
            }
    
            const options3 = {
                rootMargin: `-49% 0px -49%`,
                threshold: 0,
            }
            
    
            const observer3 = new IntersectionObserver (callback3, options3)
    
            scrolls3.forEach ((v) => observer3.observe (v));
        }

        scrollAnim3 ();

    }
});