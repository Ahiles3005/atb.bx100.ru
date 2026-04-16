
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА HR |||||||||| ********** ---------- */


    if (document.querySelector ("#hr")) {

        
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







        // 2. АНИМАЦИЯ ПРИ СКРОЛЛЕ С ОБРАТНЫМ СРАБАТЫВАНИЕМ (ДЛЯ СЕКЦИИ HERO)

        function scrollAnim2 () {
            const scrolls2 = Array.from (document.querySelectorAll (".__C-SCRL2"));

            const callback2 = (entries, observer) => {
                entries.forEach ((entry) => {
                    if (!cCommonMedia1440.matches) {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove ("__C-SCRL2");
                        } else {
                            entry.target.classList.add ("__C-SCRL2");
                        }
                    } else {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove ("__C-SCRL2");
                            observer.unobserve (entry.target);
                        }                       
                    }
                    
                });
            }
    
            if (!cCommonMedia1440.matches) {
                var options2 = {
                    rootMargin: '-170px 0px -140px',
                    threshold: 0,
                }
            } else {
                var options2 = {
                    rootMargin: '0px 0px 200px',
                    threshold: 0,
                }
            }
            
    
            const observer2 = new IntersectionObserver (callback2, options2)
    
            scrolls2.forEach ((v) => observer2.observe (v));
        }

        scrollAnim2 ();

        cCommonMedia1440.addEventListener ("change", scrollAnim2);
    }
});