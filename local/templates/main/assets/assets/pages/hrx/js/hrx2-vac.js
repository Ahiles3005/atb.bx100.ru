
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА HRX |||||||||| ********** ---------- */


    if (document.querySelector ("#hrx")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ VAC ********** ---------- */

        
        // 1. СЕЛЕКТЫ ФИЛЬТРА

        const hrxVacFieldsetSelect = Array.from (document.querySelectorAll (".hrx-vac--fieldset__SELECT"));
        const hrxVacButtonSelect = Array.from (document.querySelectorAll (".hrx-vac--button__SELECT"));
        const hrxVacDivSelect = Array.from (document.querySelectorAll (".hrx-vac--div__SELECT"));
        const hrxVacButtonReset = document.querySelector (".hrx-vac--button__FILTER_RESET");


        // 1.1 Открытие / закрытие выпадающих списков по клику

        hrxVacButtonSelect.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                hrxVacDivSelect[i].classList.toggle ("__hrx-vac--div__SELECT");
            });
        });


        hrxVacFieldsetSelect.forEach ((v, i, a) => {

            // 1.2 Выбор из списка

            const hrxVacLabelSelect = Array.from (a[i].querySelectorAll (".hrx-vac--label__SELECT"));
            const hrxVacSpanSelect = a[i].querySelector (".hrx-vac--span__SELECT");

            hrxVacLabelSelect.forEach ((v1, i1, a1) => {
                a1[i1].addEventListener ("click", () => {
                    hrxVacSpanSelect.textContent = a1[i1].textContent;
                    hrxVacSpanSelect.classList.add ("__hrx-vac--span__SELECT");
                    hrxVacDivSelect[i].classList.remove ("__hrx-vac--div__SELECT");
                });
            });
        });


        // 1.3 Обнуление списков при ресете

        // 1.3.1 Список названий списков

        const hrxVacSpanSelectText = [];
        const hrxVacSpanSelect = Array.from (document.querySelectorAll (".hrx-vac--span__SELECT"));

        hrxVacSpanSelect.forEach ((v, i, a) => {
            hrxVacSpanSelectText.push (a[i].textContent);
        });
            
        hrxVacButtonReset.addEventListener ("click", () => {
            hrxVacSpanSelect.forEach ((v, i, a) => {
                a[i].textContent = hrxVacSpanSelectText[i];
                a[i].classList.remove ("__hrx-vac--span__SELECT");
            });
        });



    }
});