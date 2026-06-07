
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА CONTACTS |||||||||| ********** ---------- */


    if (document.querySelector ("#conts")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ HERO ********** ---------- */


        // 1. ГЛАВНЫЙ СЛАЙДЕР
        
        const contsMainDivSwiper1v = new Swiper (".conts-main--div__SWIPER1", {
            effect: "fade",
            allowTouchMove: false,
            autoHeight: true,
        });


        // 1.1 Переключение слайдов через радиокнопки

        const contsMainLabelSubmenu = Array.from (document.querySelectorAll (".conts-main--label__SUBMENU"));

        contsMainLabelSubmenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                contsMainDivSwiper1v.slideTo(i);
            });
        });


        // 1.2 Выбор первой радиокнопки в субменю при загрузке страницы

        contsMainLabelSubmenu[0].click ();


        // 1.3 Выбор уже выбранного слайда при ресайзе для избежания бага с обрезанием главного слайдера

        function contsMainDebounce (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const contsMain1Debounce = contsMainDebounce (() => {
            contsMainDivSwiper1v.slideTo (contsMainDivSwiper1v.activeIndex);
        }, 150);

        window.addEventListener ("resize", contsMain1Debounce);

        

        
        // 2. ПОПАП К ПИНУ НА КАРТЕ ДЛЯ МОБИЛЬНОЙ ВЕРСИИ

        const contsMainButtonItemPinBodyMob = Array.from (document.querySelectorAll (".conts-main--button__ITEM_PIN_BODY._MOB"));
        const contsMainDivItemPopupMob = Array.from (document.querySelectorAll (".conts-main--div__ITEM_POPUP_MOB"));
        const contsMainButtonItemPopupMobClose = Array.from (document.querySelectorAll (".conts-main--button__ITEM_POPUP_MOB_CLOSE"));

        contsMainButtonItemPinBodyMob.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                contsMainDivItemPopupMob[i].classList.toggle ("__conts-main--div__ITEM_POPUP_MOB");
                setTimeout (() => {
                    contsMainDivSwiper1v.slideTo (contsMainDivSwiper1v.activeIndex);
                }, 100);
            });
        });

        contsMainButtonItemPopupMobClose.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                contsMainDivItemPopupMob[i].classList.remove ("__conts-main--div__ITEM_POPUP_MOB");
                setTimeout (() => {
                    contsMainDivSwiper1v.slideTo (contsMainDivSwiper1v.activeIndex);
                }, 100);
            });
        });




        // 3. СЛАЙДЕРЫ ДЛЯ ДЕСКТОПНОЙ ВЕРСИИ (СМЕНА БЛОКА С ТЕЛЕФОНОМ И КАРТ В ПРАВОЙ ЧАСТИ ЭКРАНА
        // ПРИ ВЗАИМОДЕЙСТВИИ С АККОРДЕОНОМ СЛЕВА)

        // Для каждого города - отдельный слайдер 

        const contsMainDivSwiper2v = Array.from (document.querySelectorAll (".conts-main--div__RIGHT"), x => {
            return new Swiper (x.querySelector (".conts-main--div__SWIPER2"), {
                effect: "fade",
                allowTouchMove: false,
                autoHeight: true,
            });
        });



        // 3.1 Выбор уже выбранного слайда при ресайзе для избежания бага с обрезанием главного слайдера

        const contsMain2Debounce = contsMainDebounce (() => {
            contsMainDivSwiper2v.forEach ((v, i, a) => {
                a[i].slideTo (a[i].activeIndex);
            });
        }, 150);

        window.addEventListener ("resize", contsMain2Debounce);




        // 4. ОТКРЫТИЕ / ЗАКРЫТИЕ АДРЕСОВ В ДЕСКТОПНОЙ ВЕРСИИ

        // Для того, чтобы первый в ряду адрес был открыт при загрузке, вручную добавил класс
        // __conts-main--div__ITEM к первым адресам для каждого города в html-файле. 
        // Добавление через js приводит к дополнительной ненужной анимации при загрузке

        // Следующий код должен работать и при появлении других адресов
        // в том числе в других городах:
    

        const contsMainDivLeft = Array.from (document.querySelectorAll (".conts-main--div__LEFT"));
    
        contsMainDivLeft.forEach ((v, i, a) => {
            const contsMainDivItemTop = Array.from (a[i].querySelectorAll (".conts-main--div__ITEM_TOP"));
            const contsMainDivItem = Array.from (a[i].querySelectorAll (".conts-main--div__ITEM"));

            contsMainDivItemTop.forEach ((v1, i1, a1) => {
                a1[i1].addEventListener ("click", () => {
                    contsMainDivItem[i1].classList.toggle ("__conts-main--div__ITEM");
                    contsMainDivItem.filter (x => x !== contsMainDivItem[i1]).forEach ((v2, i2, a2) => {
                        a2[i2].classList.remove ("__conts-main--div__ITEM");
                    });
                    setTimeout (() => {
                        contsMainDivSwiper1v.slideTo (contsMainDivSwiper1v.activeIndex);
                    }, 100);

                    // Переключение правого слайдера в десктопной версии
                    contsMainDivSwiper2v[i].slideTo (i1);
                });
            });
        });




        // 5. ПОПАП К ПИНУ НА КАРТЕ ДЛЯ ДЕСКТОПНОЙ ВЕРСИИ

        const contsMainButtonItemPinBodyDesk = Array.from (document.querySelectorAll (".conts-main--button__ITEM_PIN_BODY._DESK"));
        const contsMainSvgItemPinBodyDesk = Array.from (document.querySelectorAll (".conts-main--button__ITEM_PIN_BODY._DESK svg"));
        const contsMainDivItemPopupDesk = Array.from (document.querySelectorAll (".conts-main--div__ITEM_POPUP_DESK"));
        const contsMainButtonItemPopupDeskClose = Array.from (document.querySelectorAll (".conts-main--button__ITEM_POPUP_DESK_CLOSE"));

        contsMainButtonItemPinBodyDesk.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                contsMainDivItemPopupDesk[i].classList.add ("__conts-main--div__ITEM_POPUP_DESK");
            });
        });

        contsMainButtonItemPopupDeskClose.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                contsMainDivItemPopupDesk[i].classList.remove ("__conts-main--div__ITEM_POPUP_DESK");
            });
            document.addEventListener ("click", (e) => {
                if (e.target !== contsMainDivItemPopupDesk[i] && e.target !== contsMainButtonItemPinBodyDesk[i] && e.target !== contsMainSvgItemPinBodyDesk[i]) {
                    contsMainDivItemPopupDesk[i].classList.remove ("__conts-main--div__ITEM_POPUP_DESK");
                }
            });
        });




        // 1. ФОРМА

        const cCommonDivFbCom = document.querySelector (".conts-main--div__FORM");
        const cCommonFormFb = cCommonDivFbCom.querySelector (".c-common--form__FB");




        // 2. ИСЧЕЗАНИЕ / ПОЯВЛЕНИЕ ЗВЕЗДОЧКИ И/ИЛИ ПОДПИСЕЙ В ПОЛЯХ ПРИ НАБОРЕ

        
        // 2.1 Поля имени и фамилии

        const cCommonInputFbName = cCommonDivFbCom.querySelector (".c-common--input__FB_NAME");
        const cCommonLabelFbName = cCommonDivFbCom.querySelector (".c-common--label__FB_NAME");
        const cCommonSvgFbName = cCommonDivFbCom.querySelector (".c-common--svg__FB_NAME");
        const cCommonSpanFbName = cCommonDivFbCom.querySelector (".c-common--span__FB_NAME");
        const cCommonInputFbSurName = cCommonDivFbCom.querySelector (".c-common--input__FB_SURNAME");
        const cCommonLabelFbSurName = cCommonDivFbCom.querySelector (".c-common--label__FB_SURNAME");
        const cCommonSvgFbSurName = cCommonDivFbCom.querySelector (".c-common--svg__FB_SURNAME");
        const cCommonSpanFbSurName = cCommonDivFbCom.querySelector (".c-common--span__FB_SURNAME");

        cCommonInputFbName.addEventListener ("input", () => {
            if (cCommonInputFbName.value !== "") {
                cCommonSpanFbName.classList.add ("__c-common--span__FB_NAME");
            } else {
                cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
            }
        });
        
        
        cCommonInputFbSurName.addEventListener ("input", () => {
            if (cCommonInputFbSurName.value !== "") {
                cCommonSpanFbSurName.classList.add ("__c-common--span__FB_SURNAME");
            } else {
                cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
            }
        });
        


        // 2.2 Поле электронной почты

        const cCommonInputFbMail = cCommonDivFbCom.querySelector (".c-common--input__FB_MAIL");
        const cCommonLabelFbMail = cCommonDivFbCom.querySelector (".c-common--label__FB_MAIL");
        const cCommonSvgFbMail = cCommonDivFbCom.querySelector (".c-common--svg__FB_MAIL");
        const cCommonSpanFbMail = cCommonDivFbCom.querySelector (".c-common--span__FB_MAIL");

        
        cCommonInputFbMail.addEventListener ("input", () => {
            if (cCommonInputFbMail.value !== "") {
                cCommonSpanFbMail.classList.add ("__c-common--span__FB_MAIL");
            } else {
                cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
            }
        });



        // 2.3 Поле телефона

        const cCommonInputFbTel = cCommonDivFbCom.querySelector (".c-common--input__FB_TEL");
        const cCommonSvgFbTel = cCommonDivFbCom.querySelector (".c-common--svg__FB_TEL");
        const cCommonSpanFbTel = cCommonDivFbCom.querySelector (".c-common--span__FB_TEL");

        
        cCommonInputFbTel.addEventListener ("input", () => {
            if (cCommonInputFbTel.value !== "") {
                cCommonSpanFbTel.classList.add ("__c-common--span__FB_TEL");
            } else {
                cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
            }
        });
                    



        // 3. ИНИЦИАЛИЗАЦИЯ ПЛАГИНА intlTelInput

        // window.intlTelInput(cCommonInputFbTel, {
        //     loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js"),
        //     initialCountry: "ru",
        // });

        window.intlTelInput(cCommonInputFbTel, {
            loadUtils: () => import ("/local/templates/main/assets/libs/intlTelInput/js/utils.js"),
            initialCountry: "ru",
        });




        // 5. ВАЛИДАЦИЯ, ОТПРАВКА И ОТБИВКА (!!! ПРИ ИНТЕГРАЦИИ ВОЗМОЖНО БУДЕТ НЕОБХОДИМО ИЗМЕНЕНИЕ В ЧАСТИ ОТПРАВКИ)

        const cCommonDivFbDoneCom = document.querySelector (".c-common--div__FB_DONE._FORM_COMMON");
        const cCommonButtonFbDoneClose = cCommonDivFbDoneCom.querySelector (".c-common--button__FB_DONE_CLOSE");

        
        cCommonFormFb.addEventListener ("submit", (e) => {
            e.preventDefault ();


            if (cCommonInputFbName.checkValidity ()) {
                cCommonLabelFbName.classList.remove ("__c-common--label__FB");
                cCommonSvgFbName.classList.remove ("__c-common--svg__FB");
            } else {
                cCommonLabelFbName.classList.add ("__c-common--label__FB");
                cCommonSvgFbName.classList.add ("__c-common--svg__FB");
            }
            
            
            
            if (cCommonInputFbSurName.checkValidity ()) {
                cCommonLabelFbSurName.classList.remove ("__c-common--label__FB");
                cCommonSvgFbSurName.classList.remove ("__c-common--svg__FB");
            } else {
                cCommonLabelFbSurName.classList.add ("__c-common--label__FB");
                cCommonSvgFbSurName.classList.add ("__c-common--svg__FB");
            }
            
    
            
            if (cCommonInputFbMail.checkValidity ()) {
                cCommonLabelFbMail.classList.remove ("__c-common--label__FB");
                cCommonSvgFbMail.classList.remove ("__c-common--svg__FB");
            } else {
                cCommonLabelFbMail.classList.add ("__c-common--label__FB");
                cCommonSvgFbMail.classList.add ("__c-common--svg__FB");
            }
            
            
            
            if (cCommonInputFbTel.checkValidity ()) {
                cCommonInputFbTel.classList.remove ("__c-common--input__FB_TEL");
                cCommonSvgFbTel.classList.remove ("__c-common--svg__FB");
            } else {
                cCommonInputFbTel.classList.add ("__c-common--input__FB_TEL");
                cCommonSvgFbTel.classList.add ("__c-common--svg__FB");
            }

            
            
            if (cCommonDivFbCom.querySelector (".c-common--input__FB_APPR").checkValidity ()) {
                cCommonDivFbCom.querySelector (".c-common--div__FB_APPR").classList.remove ("__c-common--div__FB_APPR");
                cCommonDivFbCom.querySelector (".c-common--p__FB_APPR").classList.remove ("__c-common--p__FB_APPR");
            } else {
                cCommonDivFbCom.querySelector (".c-common--div__FB_APPR").classList.add ("__c-common--div__FB_APPR");
                cCommonDivFbCom.querySelector (".c-common--p__FB_APPR").classList.add ("__c-common--p__FB_APPR");
            }
            

    
            setTimeout (() => {
                if (!cCommonDivFbCom.querySelector (".__c-common--label__FB") && !cCommonDivFbCom.querySelector (".__c-common--input__FB_TEL") && !cCommonDivFbCom.querySelector (".__c-common--div__FB_APPR")) {
                    cCommonFormFb.reset ();
                    cCommonDivFbDoneCom.classList.add ("__c-common--div__FB_DONE");
                }
            }, 50)
        });


        
        cCommonButtonFbDoneClose.addEventListener ("click", () => {
            cCommonDivFbDoneCom.classList.remove ("__c-common--div__FB_DONE");
            cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
            cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
            cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
            cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
        });
        
        
        
        cCommonDivFbDoneCom.addEventListener ("click", (e) => {
            if (e.target === cCommonDivFbDoneCom) {
                cCommonDivFbDoneCom.classList.remove ("__c-common--div__FB_DONE");
                cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
            }
        });
    }
});