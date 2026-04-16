
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА ABOUT |||||||||| ********** ---------- */


    if (document.querySelector ("#ab")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ CERT ********** ---------- */


        // 1. СЛАЙДЕР

        const abCertDivSwiper = new Swiper (".ab-cert--div__SWIPER", {
            grabCursor: true,
            breakpoints: {
                200: {
                    spaceBetween: 20,
                    slidesPerView: 1,
                },
            
                500: {
                    spaceBetween: 20,
                    slidesPerView: 2,
                },

                768: {
                    spaceBetween: 20,
                    slidesPerView: 3,
                },

                992: {
                    spaceBetween: 20,
                    slidesPerView: 4,
                },

                1200: {
                    spaceBetween: 20,
                    slidesPerView: 5,
                },

                1440: {
                    spaceBetween: 44,
                    slidesPerView: 5,
                },
            },
            navigation: {
                nextEl: '.ab-cert--button__SWIPER_NEXT',
                prevEl: '.ab-cert--button__SWIPER_PREV',
            },
        });






        // 2. ПОПАПЫ

        const abCertButtonItem = Array.from (document.querySelectorAll (".ab-cert--button__ITEM"));
        const abCertDivPopup = Array.from (document.querySelectorAll (".ab-cert--div__POPUP"));
        const abCertButtonPopupClose = Array.from (document.querySelectorAll (".ab-cert--button__POPUP_CLOSE"));


        abCertButtonItem.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                abCertDivPopup[i].classList.add ("__ab-cert--div__POPUP");
                abCertDivPopup.filter (x => x !== abCertDivPopup[i]).forEach ((v1, i1, a1) => {
                    a1[i1].classList.remove ("__ab-cert--div__POPUP");
                });
            });
        });

        abCertButtonPopupClose.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                abCertDivPopup[i].classList.remove ("__ab-cert--div__POPUP");
            });
        });

        abCertDivPopup.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                if (e.target === a[i]) {
                    a[i].classList.remove ("__ab-cert--div__POPUP");
                }
            });
        });
    }
});