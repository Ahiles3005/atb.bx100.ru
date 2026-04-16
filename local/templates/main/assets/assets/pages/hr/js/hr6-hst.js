
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

        
        /* ---------- ********** СЕКЦИЯ HST ********** ---------- */


        // 1. SWIPER

        const hrHstDivSwiper = new Swiper (".hr-hst--div__SWIPER", {
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                700: {
                    slidesPerView: 2,
                },
                1050: {
                    slidesPerView: 3,
                },
                1300: {
                    slidesPerView: 4,
                },
                1760: {
                    slidesPerView: 5,
                }
            },
            spaceBetween: 20,
            autoHeight: true,
            grabCursor: true,
            navigation: {
                nextEl: '.hr-hst--button__SWIPER_NEXT',
                prevEl: '.hr-hst--button__SWIPER_PREV',
            },
        });




        // 2. ПОПАПЫ

        const hrHstButtonCard = Array.from (document.querySelectorAll (".hr-hst--button__CARD"));
        const hrHstDivPopup = Array.from (document.querySelectorAll (".hr-hst--div__POPUP"));
        const hrHstButtonPopupClose = Array.from (document.querySelectorAll (".hr-hst--button__POPUP_CLOSE"));


        hrHstButtonCard.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                hrHstDivPopup[i].classList.add ("__hr-hst--div__POPUP");
                hrHstDivPopup.filter (x => x !== hrHstDivPopup[i]).forEach ((v1, i1, a1) => {
                    a1[i1].classList.remove ("__hr-hst--div__POPUP");
                });
            });
        });

        hrHstButtonPopupClose.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                hrHstDivPopup[i].classList.remove ("__hr-hst--div__POPUP");
            });
        });

        hrHstDivPopup.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                if (e.target === a[i]) {
                    a[i].classList.remove ("__hr-hst--div__POPUP");
                }
            });
        });
    }
});