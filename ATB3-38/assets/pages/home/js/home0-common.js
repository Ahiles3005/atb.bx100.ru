
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| ДОМАШНЯЯ СТРАНИЦА |||||||||| ********** ---------- */


    if (document.querySelector ("#home")) {

        
        /* ---------- ********** ОБЩИЕ ДЛЯ ВСЕЙ СТРАНИЦЫ ********** ---------- */


        // 1. АНИМАЦИЯ ПРИ СКРОЛЛЕ 

        const scrolls = document.querySelectorAll('.__C-SCRL');

        const callback = (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove ("__C-SCRL");
                    if (entry.target.classList.contains ("hm-cat--article__CARD")) {
                        setTimeout (() => {
                            entry.target.classList.add ("__hm-cat--article__CARD");
                        }, 700);
                    }
                    observer.unobserve(entry.target);
                }
            });
        }

        const options = {
            rootMargin: '-10px 0px 0px 0px',
            threshold: 0,
        }

        const observer = new IntersectionObserver(callback, options)

        scrolls.forEach((v) => observer.observe(v));
    }
});