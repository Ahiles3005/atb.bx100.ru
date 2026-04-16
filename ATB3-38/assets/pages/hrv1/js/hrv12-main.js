
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА HRV1 |||||||||| ********** ---------- */


    if (document.querySelector ("#hrv1")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ MAIN ********** ---------- */


        // 1. ФОРМА

        const cCommonDivFbVac = document.querySelector (".hrv1-main--div__FORM");
        const cCommonFormFb = cCommonDivFbVac.querySelector (".c-common--form__FB");




        // 2. ИСЧЕЗАНИЕ / ПОЯВЛЕНИЕ ЗВЕЗДОЧКИ И/ИЛИ ПОДПИСЕЙ В ПОЛЯХ ПРИ НАБОРЕ

        
        // 2.1 Поля имени и фамилии

        const cCommonInputFbName = cCommonDivFbVac.querySelector (".c-common--input__FB_NAME");
        const cCommonLabelFbName = cCommonDivFbVac.querySelector (".c-common--label__FB_NAME");
        const cCommonSvgFbName = cCommonDivFbVac.querySelector (".c-common--svg__FB_NAME");
        const cCommonSpanFbName = cCommonDivFbVac.querySelector (".c-common--span__FB_NAME");
        const cCommonInputFbSurName = cCommonDivFbVac.querySelector (".c-common--input__FB_SURNAME");
        const cCommonLabelFbSurName = cCommonDivFbVac.querySelector (".c-common--label__FB_SURNAME");
        const cCommonSvgFbSurName = cCommonDivFbVac.querySelector (".c-common--svg__FB_SURNAME");
        const cCommonSpanFbSurName = cCommonDivFbVac.querySelector (".c-common--span__FB_SURNAME");

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

        const cCommonInputFbMail = cCommonDivFbVac.querySelector (".c-common--input__FB_MAIL");
        const cCommonLabelFbMail = cCommonDivFbVac.querySelector (".c-common--label__FB_MAIL");
        const cCommonSvgFbMail = cCommonDivFbVac.querySelector (".c-common--svg__FB_MAIL");
        const cCommonSpanFbMail = cCommonDivFbVac.querySelector (".c-common--span__FB_MAIL");

        
        cCommonInputFbMail.addEventListener ("input", () => {
            if (cCommonInputFbMail.value !== "") {
                cCommonSpanFbMail.classList.add ("__c-common--span__FB_MAIL");
            } else {
                cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
            }
        });



        // 2.3 Поле телефона

        const cCommonInputFbTel = cCommonDivFbVac.querySelector (".c-common--input__FB_TEL");
        const cCommonSvgFbTel = cCommonDivFbVac.querySelector (".c-common--svg__FB_TEL");
        const cCommonSpanFbTel = cCommonDivFbVac.querySelector (".c-common--span__FB_TEL");

        
        cCommonInputFbTel.addEventListener ("input", () => {
            if (cCommonInputFbTel.value !== "") {
                cCommonSpanFbTel.classList.add ("__c-common--span__FB_TEL");
            } else {
                cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
            }
        });
                    



        // 3. ИНИЦИАЛИЗАЦИЯ ПЛАГИНА intlTelInput

        window.intlTelInput(cCommonInputFbTel, {
            loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js"),
            initialCountry: "ru",
        });




        // 4. ОГРАНИЧЕНИЕ РАЗМЕРА ЗАГРУЖАЕМОГО ФАЙЛА (!!! ЖЕЛАТЕЛЬНО СДЕЛАТЬ ПРОВЕРКУ И НА СТОРОНЕ СЕРВЕРА)

        const cCommonInputFbResm = document.querySelector (".c-common--input__FB_RESM");
        const cCommonSvgFbResm1 = document.querySelector (".c-common--svg__FB_RESM1");

        cCommonInputFbResm.addEventListener ("change", () => {
            if (cCommonInputFbResm.files[0].size > 10485760) {
                cCommonInputFbResm.setCustomValidity ("Превышен допустимый размер файла");
            }
        });




        // 5. ВАЛИДАЦИЯ, ОТПРАВКА И ОТБИВКА (!!! ПРИ ИНТЕГРАЦИИ ВОЗМОЖНО БУДЕТ НЕОБХОДИМО ИЗМЕНЕНИЕ В ЧАСТИ ОТПРАВКИ)

        const cCommonDivFbDoneVac = document.querySelector (".c-common--div__FB_DONE._FORM_VACANCY");
        const cCommonButtonFbDoneClose = cCommonDivFbDoneVac.querySelector (".c-common--button__FB_DONE_CLOSE");

        
        cCommonFormFb.addEventListener ("submit", (e) => {
            e.preventDefault ();


            
            if (cCommonDivFbVac.querySelector (".c-common--input__FB_RESM").checkValidity ()) {
                cCommonDivFbVac.querySelector (".c-common--label__FB_RESM").classList.remove ("__c-common--label__FB");
                cCommonDivFbVac.querySelector (".c-common--svg__FB_RESM").classList.remove ("__c-common--svg__FB");
                cCommonDivFbVac.querySelector (".c-common--svg__FB_RESM1").classList.remove ("__c-common--svg__FB_RESM1");
            } else {
                cCommonDivFbVac.querySelector (".c-common--label__FB_RESM").classList.add ("__c-common--label__FB");
                cCommonDivFbVac.querySelector (".c-common--svg__FB_RESM").classList.add ("__c-common--svg__FB");
                cCommonDivFbVac.querySelector (".c-common--svg__FB_RESM1").classList.add ("__c-common--svg__FB_RESM1");
            }
            
            

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

            
            
            if (cCommonDivFbVac.querySelector (".c-common--input__FB_APPR").checkValidity ()) {
                cCommonDivFbVac.querySelector (".c-common--div__FB_APPR").classList.remove ("__c-common--div__FB_APPR");
                cCommonDivFbVac.querySelector (".c-common--p__FB_APPR").classList.remove ("__c-common--p__FB_APPR");
            } else {
                cCommonDivFbVac.querySelector (".c-common--div__FB_APPR").classList.add ("__c-common--div__FB_APPR");
                cCommonDivFbVac.querySelector (".c-common--p__FB_APPR").classList.add ("__c-common--p__FB_APPR");
            }
            

    
            setTimeout (() => {
                if (!cCommonDivFbVac.querySelector (".__c-common--label__FB") && !cCommonDivFbVac.querySelector (".__c-common--input__FB_TEL") && !cCommonDivFbVac.querySelector (".__c-common--div__FB_APPR")) {
                    cCommonFormFb.reset ();
                    cCommonDivFbDoneVac.classList.add ("__c-common--div__FB_DONE");
                }
            }, 50)
        });


        
        cCommonButtonFbDoneClose.addEventListener ("click", () => {
            cCommonDivFbDoneVac.classList.remove ("__c-common--div__FB_DONE");
            cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
            cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
            cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
            cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
        });
        
        
        
        cCommonDivFbDoneVac.addEventListener ("click", (e) => {
            if (e.target === cCommonDivFbDoneVac) {
                cCommonDivFbDoneVac.classList.remove ("__c-common--div__FB_DONE");
                cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
                cCommonSpanFbSurName.classList.remove ("__c-common--span__FB_SURNAME");
                cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
                cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
            }
        });

    }
});