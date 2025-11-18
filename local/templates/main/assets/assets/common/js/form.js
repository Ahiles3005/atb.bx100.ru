
"use strict";



window.addEventListener ("load", function () {

    /* ---------- ********** ОБЩИЕ ДЛЯ ВСЕХ СТРАНИЦ ********** ---------- */
    
    // ФОРМА ОБРАТНОЙ СВЯЗИ


    // 1. Открытие / закрытие модального окна

    const cdnRegButtonRequest = Array.from (document.querySelectorAll (".cdn-reg--button__REQUEST"));
    const cCommonDivFb = document.querySelector (".c-common--div__FB");
    const cCommonButtonFbClose = document.querySelector (".c-common--button__FB_CLOSE");

    cdnRegButtonRequest.forEach ((v, i, a) => {
        a[i].addEventListener ("click", () => {
            cCommonDivFb.classList.add ("__c-common--div__FB");
        });
    });

    cCommonButtonFbClose.addEventListener ("click", () => {
        cCommonDivFb.classList.remove ("__c-common--div__FB");
    });

    cCommonDivFb.addEventListener ("click", (e) => {
        if (e.target === cCommonDivFb) {
            cCommonDivFb.classList.remove ("__c-common--div__FB");
        }
    });


    // 2. Исчезание / появление звездочки или подписей в полях при наборе


    const cCommonLabelFbOrg = document.querySelector (".c-common--label__FB_ORG");
    const cCommonInputFbOrg = document.querySelector (".c-common--input__FB_ORG");

    cCommonInputFbOrg.addEventListener ("input", () => {
        if (cCommonInputFbOrg.value !== "") {
            cCommonLabelFbOrg.classList.add ("__c-common--label__FB_ORG");
        } else {
            cCommonLabelFbOrg.classList.remove ("__c-common--label__FB_ORG");
        }
    });


    const cCommonInputFbName = document.querySelector (".c-common--input__FB_NAME");
    const cCommonSpanFbName = document.querySelector (".c-common--span__FB_NAME");

    cCommonInputFbName.addEventListener ("input", () => {
        if (cCommonInputFbName.value !== "") {
            cCommonSpanFbName.classList.add ("__c-common--span__FB_NAME");
        } else {
            cCommonSpanFbName.classList.remove ("__c-common--span__FB_NAME");
        }
    });


    const cCommonInputFbMail = document.querySelector (".c-common--input__FB_MAIL");
    const cCommonSpanFbMail = document.querySelector (".c-common--span__FB_MAIL");

    cCommonInputFbMail.addEventListener ("input", () => {
        if (cCommonInputFbMail.value !== "") {
            cCommonSpanFbMail.classList.add ("__c-common--span__FB_MAIL");
        } else {
            cCommonSpanFbMail.classList.remove ("__c-common--span__FB_MAIL");
        }
    });


    const cCommonInputFbTel = document.querySelector (".c-common--input__FB_TEL");
    const cCommonSpanFbTel = document.querySelector (".c-common--span__FB_TEL");

    cCommonInputFbTel.addEventListener ("input", () => {
        if (cCommonInputFbTel.value !== "") {
            cCommonSpanFbTel.classList.add ("__c-common--span__FB_TEL");
        } else {
            cCommonSpanFbTel.classList.remove ("__c-common--span__FB_TEL");
        }
    });


    const cCommonTextareaFbTa = document.querySelector (".c-common--textarea__FB_TA");
    const cCommonSpanFbTa = document.querySelector (".c-common--span__FB_TA");

    cCommonTextareaFbTa.addEventListener ("input", () => {
        if (cCommonTextareaFbTa.value !== "") {
            cCommonSpanFbTa.classList.add ("__c-common--span__FB_TA");
        } else {
            cCommonSpanFbTa.classList.remove ("__c-common--span__FB_TA");
        }
    });


    // 3. Выбор оганизации по ИНН    (!!! ДЕМОНСТРАЦИОННЫЙ КОД, при интеграции может быть заменен / удален)

    const cCommonFormFb = document.querySelector (".c-common--form__FB");
    const cCommonLabelFbInn = document.querySelector (".c-common--label__FB_INN");
    const cCommonInputFbInn = document.querySelector (".c-common--input__FB_INN");
    const cCommonUlFbInn = document.querySelector (".c-common--ul__FB_INN");
    const cCommonLiFbInn = Array.from (document.querySelectorAll (".c-common--li__FB_INN"));
    const cCommonSpanFbInnNm = Array.from (document.querySelectorAll (".c-common--span__FB_INN_NM"));
    const cCommonPFbInnAdr = Array.from (document.querySelectorAll (".c-common--p__FB_INN_ADR"));
    const cCommonPFbAdr = document.querySelector (".c-common--p__FB_ADR");


    cCommonInputFbInn.addEventListener ("input", () => {
        if (cCommonInputFbInn.value !== "") {
            cCommonUlFbInn.classList.add ("__c-common--ul__FB_INN");
            cCommonLabelFbInn.classList.add ("__c-common--label__FB_INN");
        } else {
            cCommonUlFbInn.classList.remove ("__c-common--ul__FB_INN");
            cCommonLabelFbInn.classList.remove ("__c-common--label__FB_INN");
        }
    });

    cCommonFormFb.addEventListener ("click", (e) => {
        if (e.target !== cCommonLabelFbInn) {
            cCommonUlFbInn.classList.remove ("__c-common--ul__FB_INN");
            cCommonLabelFbInn.classList.remove ("__c-common--label__FB_INN");
        }
    });

    cCommonLiFbInn.forEach ((v, i, a) => {
        a[i].addEventListener ("click", () => {
            cCommonInputFbOrg.value = cCommonSpanFbInnNm[i].textContent;
            cCommonLabelFbOrg.classList.add ("__c-common--label__FB_ORG");
            cCommonPFbAdr.classList.add ("__c-common--p__FB_ADR");
            cCommonPFbAdr.textContent = cCommonPFbInnAdr[i].textContent;
            cCommonUlFbInn.classList.remove ("__c-common--ul__FB_INN");
            cCommonLabelFbInn.classList.remove ("__c-common--label__FB_INN");
        });
    });

    cCommonInputFbOrg.addEventListener ("input", () => {
        if (cCommonInputFbOrg.value === "") {
            cCommonPFbAdr.classList.remove ("__c-common--p__FB_ADR");
        }
    });


    // 4. Инициализация плагина intlTelInput

    window.intlTelInput(cCommonInputFbTel, {
        loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js"),
        initialCountry: "ru",
    });


    // 5. Валидация, отправка и отбивка    (!!! ПРИ ИНТЕГРАЦИИ ВОЗМОЖНО БУДЕТ НЕОБХОДИМО ИЗМЕНЕНИЕ В ЧАСТИ ОТПРАВКИ)

    const cCommonLabelFbName = document.querySelector (".c-common--label__FB_NAME");
    const cCommonSvgFbName = document.querySelector (".c-common--svg__FB_NAME");
    const cCommonLabelFbMail= document.querySelector (".c-common--label__FB_MAIL");
    const cCommonSvgFbMail = document.querySelector (".c-common--svg__FB_MAIL");
    const cCommonSvgFbTel = document.querySelector (".c-common--svg__FB_TEL");
    const cCommonLabelFbTa = document.querySelector (".c-common--label__FB_TA");
    const cCommonSvgFbTa = document.querySelector (".c-common--svg__FB_TA");
    const cCommonInputFbAppr = document.querySelector (".c-common--input__FB_APPR[required]");
    const cCommonDivFbAppr = document.querySelector (".c-common--div__FB_APPR");
    const cCommonPFbAppr = document.querySelector (".c-common--p__FB_APPR");

    const cCommonDivFbDone = document.querySelector (".c-common--div__FB_DONE");
    const cCommonButtonFbDoneClose = document.querySelector (".c-common--button__FB_DONE_CLOSE");


    
    cCommonFormFb.addEventListener ("submit", (e) => {
        e.preventDefault ();

        if (cCommonInputFbName.checkValidity ()) {
            cCommonLabelFbName.classList.remove ("__c-common--label__FB");
            cCommonSvgFbName.classList.remove ("__c-common--svg__FB");
        } else {
            cCommonLabelFbName.classList.add ("__c-common--label__FB");
            cCommonSvgFbName.classList.add ("__c-common--svg__FB");
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

        if (cCommonTextareaFbTa.checkValidity ()) {
            cCommonLabelFbTa.classList.remove ("__c-common--label__FB");
            cCommonSvgFbTa.classList.remove ("__c-common--svg__FB");
        } else {
            cCommonLabelFbTa.classList.add ("__c-common--label__FB");
            cCommonSvgFbTa.classList.add ("__c-common--svg__FB");
        }

        if (cCommonInputFbAppr.checkValidity ()) {
            cCommonDivFbAppr.classList.remove ("__c-common--div__FB_APPR");
            cCommonPFbAppr.classList.remove ("__c-common--p__FB_APPR");
        } else {
            cCommonDivFbAppr.classList.add ("__c-common--div__FB_APPR");
            cCommonPFbAppr.classList.add ("__c-common--p__FB_APPR");
        }

        setTimeout (() => {
            if (!cCommonFormFb.querySelector (".__c-common--label__FB") && !cCommonFormFb.querySelector (".__c-common--input__FB_TEL") && !cCommonFormFb.querySelector (".__c-common--div__FB_APPR")) {
                cCommonFormFb.reset ();
                cCommonDivFb.classList.remove ("__c-common--div__FB");
                cCommonDivFbDone.classList.add ("__c-common--div__FB_DONE");
            }
        }, 50)
    });


    cCommonButtonFbDoneClose.addEventListener ("click", () => {
        cCommonDivFbDone.classList.remove ("__c-common--div__FB_DONE");
    });

    cCommonDivFbDone.addEventListener ("click", (e) => {
        if (e.target === cCommonDivFbDone) {
            cCommonDivFbDone.classList.remove ("__c-common--div__FB_DONE");
        }
    });
    
});