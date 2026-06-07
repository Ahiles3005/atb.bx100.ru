
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА SERVICES3 |||||||||| ********** ---------- */


    if (document.querySelector ("#srv3")) {

        
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
                    if (entry.target.classList.contains ("hm-cat--article__CARD")) {
                        setTimeout (() => {
                            entry.target.classList.add ("__hm-cat--article__CARD");
                        }, 700);
                    }
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







        // 2. АНИМАЦИЯ ПРИ СКРОЛЛЕ С ОБРАТНЫМ СРАБАТЫВАНИЕМ ДЛЯ МОБИЛОК

        function scrollAnim2 () {
            const scrolls2 = Array.from (document.querySelectorAll (".srv3-hero .st-main--div__GRID2_ITEM"));

            const callback2 = (entries, observer) => {
                entries.forEach ((entry) => {                       
                    if (entry.isIntersecting) {
                        entry.target.classList.add ("__st-main--div__GRID2_ITEM");
                    } else {
                        entry.target.classList.remove ("__st-main--div__GRID2_ITEM");
                    }
                });
            }
    
            const options2 = {
                rootMargin: `-49% 0px -48%`,
                threshold: 0,
            }
            
    
            const observer2 = new IntersectionObserver (callback2, options2)
    
            scrolls2.forEach ((v) => observer2.observe (v));
        }

        scrollAnim2 ();
    }
});