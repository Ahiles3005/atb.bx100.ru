
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА SUP |||||||||| ********** ---------- */


    if (document.querySelector ("#sup")) {

        
        /* ---------- ********** ОБЩИЕ ДЛЯ ВСЕЙ СТРАНИЦЫ ********** ---------- */


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");



        // 1. АНИМАЦИЯ ПРИ СКРОЛЛЕ 

        const scrolls = document.querySelectorAll('.__C-SCRL');

        const callback = (entries, observer) => {
            entries.forEach ((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove ("__C-SCRL");
            
                    observer.unobserve (entry.target);
                }
            });
        }

        const options = {
            rootMargin: '-40px 0px 0px 0px',
            threshold: 0,
        }

        const observer = new IntersectionObserver (callback, options)

        scrolls.forEach ((v) => observer.observe (v));

    }
});