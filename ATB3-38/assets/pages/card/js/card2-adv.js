
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА КАРТОЧКА СЕРИИ |||||||||| ********** ---------- */


    if (document.querySelector ("#card")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cdCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cdCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ ADV ********** ---------- */


        // 1. ПОДСЧЕТ ВЫСОТЫ ПОДДОНА И ПОЗИЦИОНИРОВАНИЯ ДОПОЛНИТЕЛЬНОГО ТЕКСТА КАРТОЧКИ ПРИ ХОВЕРЕ

        const cdAdvArticle = Array.from (document.querySelectorAll (".cd-adv--article"));
        const cdAdvDivImage = Array.from (document.querySelectorAll (".cd-adv--div__IMAGE"));
        const cdAdvPName = Array.from (document.querySelectorAll (".cd-adv--p__NAME"));
        const cdAdvPText = Array.from (document.querySelectorAll (".cd-adv--p__TEXT"));
        const cdAdvDivBorder = Array.from (document.querySelectorAll (".cd-adv--div__BORDER"));


        function cdAdvFindParams () {
            cdAdvArticle.forEach ((v, i, a) => {
                a[i].addEventListener ("mouseover", () => {
                    a[i].classList.add ("hov");
                    if (window.innerWidth < 1440 && window.innerWidth > 767) {
                        cdAdvPText[i].style.top = `${cdAdvDivImage[i].offsetHeight + cdAdvPName[i].offsetHeight + 63}px`;
                        cdAdvDivBorder[i].style.bottom = `${a[i].offsetHeight - (cdAdvDivImage[i].offsetHeight + cdAdvPName[i].offsetHeight + cdAdvPText[i].scrollHeight + 80)}px`;
                    } else if (window.innerWidth > 1439) {
                        cdAdvPText[i].style.top = `${cdAdvDivImage[i].offsetHeight + cdAdvPName[i].offsetHeight + 84}px`;
                        cdAdvDivBorder[i].style.bottom = `${a[i].offsetHeight - (cdAdvDivImage[i].offsetHeight + cdAdvPName[i].offsetHeight + cdAdvPText[i].scrollHeight + 116)}px`;
                    }
                });
                a[i].addEventListener ("mouseout", () => {
                    cdAdvDivBorder[i].style.bottom = `0px`;
                    a[i].classList.remove ("hov");
                });
            });
        }

        cdAdvFindParams ();
        

        cdCommonMedia1440.addEventListener ("change", cdAdvFindParams);

        cdCommonMedia768.addEventListener ("change", cdAdvFindParams);
    }
});