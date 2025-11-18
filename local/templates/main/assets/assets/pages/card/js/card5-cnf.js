
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

        
        /* ---------- ********** СЕКЦИЯ CNF ********** ---------- */


        // 1. СЕЛЕКТЫ

        // ВЫПАДАЮЩИЙ СПИСОК 1
        
        const cdcnfFieldsetSelectType = document.querySelector (".cd-cnf--fieldset__SELECT._TYPE");
        const cdCnfButtonSelectType = document.querySelector (".cd-cnf--button__SELECT._TYPE");
        const cdCnfSpanSelectType = document.querySelector (".cd-cnf--span__SELECT._TYPE");
        const cdCnfDivSelectType = document.querySelector (".cd-cnf--div__SELECT._TYPE");
        const cdCnfLabelSelectType = Array.from (document.querySelectorAll (".cd-cnf--label__SELECT._TYPE"));


        cdCnfButtonSelectType.addEventListener ("click", () => {
            if (!cdCnfDivSelectType.classList.contains ("__cd-cnf--div__SELECT_TYPE")) {
                cdCnfDivSelectType.classList.add ("__cd-cnf--div__SELECT_TYPE");
            } else {
                cdCnfDivSelectType.classList.remove ("__cd-cnf--div__SELECT_TYPE");
            }
        });


        cdCnfLabelSelectType.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                cdCnfSpanSelectType.textContent = cdCnfLabelSelectType[i].textContent;
                cdCnfSpanSelectType.classList.add ("__cd-cnf--span__SELECT");
                cdCnfDivSelectType.classList.remove ("__cd-cnf--div__SELECT_TYPE");
            });
        });

        document.addEventListener ("click", (e) => {
            if (!cdcnfFieldsetSelectType.contains (e.target)) {
                cdCnfDivSelectType.classList.remove ("__cd-cnf--div__SELECT_TYPE");
            }
        });




        // 2. ПОЛЗУНОК

        const cdCnfSpanRangeNum = document.querySelector (".cd-cnf--span__RANGE_NUM._OM");
        const cdCnfInputRange = document.querySelector (".cd-cnf--input__RANGE._OM");
        
        
        cdCnfSpanRangeNum.textContent = cdCnfInputRange.value;
        

        cdCnfInputRange.addEventListener ("input", () => {
            if (cdCnfInputRange.value == 2) {
                cdCnfInputRange.style.background = `linear-gradient(to right, var(--color-blue) 0%, var(--color-bluegray) 0%)`;
            } else if (cdCnfInputRange.value == 4) {
                cdCnfInputRange.style.background = `linear-gradient(to right, var(--color-blue) 33%, var(--color-bluegray) 33%)`;
            } else if (cdCnfInputRange.value == 6) {
                cdCnfInputRange.style.background = `linear-gradient(to right, var(--color-blue) 66%, var(--color-bluegray) 66%)`;
            } else if (cdCnfInputRange.value == 8) {
                cdCnfInputRange.style.background = `linear-gradient(to right, var(--color-blue) calc(100% - 2px), var(--color-bluegray) calc(100% - 2px))`;
            }
            
            cdCnfSpanRangeNum.textContent = cdCnfInputRange.value;
        });




        // 3. ВЫПАДАЮЩИЙ СПИСОК 2
        
        const cdcnfFieldsetSelectOm = document.querySelector (".cd-cnf--div__SELECT_RIGHT._OM");
        const cdCnfButtonSelectOm = document.querySelector (".cd-cnf--button__SELECT._OM");
        const cdCnfSpanSelectOm = document.querySelector (".cd-cnf--span__SELECT._OM");
        const cdCnfDivSelectOm = document.querySelector (".cd-cnf--div__SELECT._OM");
        const cdCnfLabelSelectOm = Array.from (document.querySelectorAll (".cd-cnf--label__SELECT._OM"));


        cdCnfButtonSelectOm.addEventListener ("click", () => {
            if (!cdCnfDivSelectOm.classList.contains ("__cd-cnf--div__SELECT_OM")) {
                cdCnfDivSelectOm.classList.add ("__cd-cnf--div__SELECT_OM");
            } else {
                cdCnfDivSelectOm.classList.remove ("__cd-cnf--div__SELECT_OM");
            }
        });


        cdCnfLabelSelectOm.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                cdCnfSpanSelectOm.textContent = cdCnfLabelSelectOm[i].textContent;
                cdCnfSpanSelectOm.classList.add ("__cd-cnf--span__SELECT");
                cdCnfDivSelectOm.classList.remove ("__cd-cnf--div__SELECT_OM");
            });
        });

        document.addEventListener ("click", (e) => {
            if (!cdcnfFieldsetSelectOm.contains (e.target)) {
                cdCnfDivSelectOm.classList.remove ("__cd-cnf--div__SELECT_OM");
            }
        });


        

        // 4. СОЗДАНИЕ СЛОТА (ВЫПАДАЮЩЕГО СПИСКА) И ЕГО ПРОГРАММИРОВАНИЕ

        let cdCnfAllFieldsetSlots = null;
        const cdCnfDivBodyContSlot = document.querySelector (".cd-cnf--div__BODY_CONT._SLOT");
        const cdCnfButtonElseSlot = document.querySelector (".cd-cnf--button__ELSE._SLOT");
        let n = 0; // переменная только для технических целей
        let m = 0; // счетчик для контроля количества слотов, удаления / появления кнопки "Добавить" и изменения атрибута name у всех инпутов


        function cdCnfCreateSlot () {
            // 4.1 Добавление слота

            n++; 
            m++;

            cdCnfDivBodyContSlot.insertAdjacentHTML ("beforeend", `<fieldset class="cd-cnf--fieldset__SELECT _SLOT _${n}">
                <button class="cd-cnf--button__SELECT _SLOT _${n}" type="button">
                    <span class="cd-cnf--span__SELECT _SLOT _${n}">СЛОТ ${m}</span>
                    <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.99414 9.51123C7.84848 9.51123 8.30987 10.5129 7.75391 11.1616L4.75879 14.6558C4.35967 15.1213 3.6393 15.1213 3.24023 14.6558L0.245117 11.1616C-0.31058 10.5129 0.150632 9.51123 1.00488 9.51123H6.99414ZM3.24023 0.345215C3.63933 -0.120404 4.35969 -0.120404 4.75879 0.345215L7.75391 3.83936C8.30956 4.48804 7.84838 5.48975 6.99414 5.48975H1.00488C0.150737 5.48975 -0.310264 4.48804 0.245117 3.83936L3.24023 0.345215Z" fill="#005792" fill-opacity="0.2"/>
                    </svg>
                    <svg class="cd-cnf--svg__SELECT_RESET _SLOT _${n}" role="button" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.0498047" y="13.4849" width="18.3284" height="1.4" rx="0.7" transform="rotate(-45 0.0498047 13.4849)" fill="#005792" fill-opacity="0.2"/>
                        <rect width="18.3284" height="1.4" rx="0.7" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 13.9502 13.4849)" fill="#005792" fill-opacity="0.2"/>
                    </svg>
                </button>


                <div class="cd-cnf--div__SELECT _SLOT _${n}">
                    <label class="cd-cnf--label__SELECT _SLOT _${n}">
                        mPCIe: USB 2.0, PCIе x 1, SPI, I2C, SIM1 или SIM2
                        <input class="cd-cnf--input__SELECT _SLOT _${n}" type="radio" name="slot ${m}" value="Intel Apollo Lake E3950">
                    </label>
                    <label class="cd-cnf--label__SELECT _SLOT _${n}">
                        mPCIe: USB 2.0, PCIе x 1, I2C, SIM2
                        <input class="cd-cnf--input__SELECT _SLOT _${n}" type="radio" name="slot ${m}" value="Intel Apollo Lake N4200">
                    </label>
                    <label class="cd-cnf--label__SELECT _SLOT _${n}">
                        M.2 2280: PCIе x 1, SATA, USB 2.0
                        <input class="cd-cnf--input__SELECT _SLOT _${n}" type="radio" name="slot ${m}" value="Intel Apollo Lake J3455">
                    </label>
                </div>
            </fieldset>`);


            // 4.2 Программирование слота

            const cdCnfFieldsetSelectSlot = document.querySelector (`.cd-cnf--fieldset__SELECT._SLOT._${n}`);
            const cdCnfButtonSelectSlot = document.querySelector (`.cd-cnf--button__SELECT._SLOT._${n}`);
            const cdCnfSpanSelectSlot = document.querySelector (`.cd-cnf--span__SELECT._SLOT._${n}`);
            const cdCnfDivSelectSlot = document.querySelector (`.cd-cnf--div__SELECT._SLOT._${n}`);
            const cdCnfLabelSelectSlot = Array.from (document.querySelectorAll (`.cd-cnf--label__SELECT._SLOT._${n}`));
            const cdCnfSvgSelectReset = document.querySelector (`.cd-cnf--svg__SELECT_RESET._SLOT._${n}`);


            cdCnfButtonSelectSlot.addEventListener ("click", () => {
                if (!cdCnfDivSelectSlot.classList.contains ("__cd-cnf--div__SELECT_SLOT")) {
                    cdCnfDivSelectSlot.classList.add ("__cd-cnf--div__SELECT_SLOT");
                } else {
                    cdCnfDivSelectSlot.classList.remove ("__cd-cnf--div__SELECT_SLOT");
                }
            });

            cdCnfLabelSelectSlot.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    cdCnfSpanSelectSlot.textContent = cdCnfLabelSelectSlot[i].textContent;
                    cdCnfSpanSelectSlot.classList.add ("__cd-cnf--span__SELECT");
                    cdCnfDivSelectSlot.classList.remove ("__cd-cnf--div__SELECT_SLOT");
                });
            });
    

            // 4.3 Удаление слота

            cdCnfSvgSelectReset.addEventListener ("click", (e) => {
                e.stopPropagation ();
                cdCnfFieldsetSelectSlot.remove ();

                // 4.3.1 Пересчет порядковых номеров
                const cdCnfAllFieldsetSlots = Array.from (document.querySelectorAll (".cd-cnf--fieldset__SELECT._SLOT"));
                m = cdCnfAllFieldsetSlots.length;

                cdCnfAllFieldsetSlots.forEach ((v, i, a) => {
                    // 4.3.2 Если выбор еще не был произведен, меняем текстовое содержание заголовка
                    if (!a[i].querySelector (".__cd-cnf--span__SELECT")) {
                        a[i].querySelector (".cd-cnf--span__SELECT._SLOT").textContent = `СЛОТ ${i + 1}`;
                    }

                    // 4.3.3 В любом случае меняем name у всех инпутов
                    Array.from (a[i].querySelectorAll (".cd-cnf--input__SELECT._SLOT")).forEach ((v1, i1, a1) => {
                        a1[i1].name = `slot ${i + 1}`;
                        console.log (222);
                    });
                });

                // 4.3.4 Добавление кнопки "Добавить", если удален десятый слот
                if (m === 9) {
                    cdCnfButtonElseSlot.classList.remove ("__cd-cnf--button__ELSE");
                }
            });


            // 4.4 Закрытие селекта по клику вне слота
            
            document.addEventListener ("click", (e) => {
                if (!cdCnfFieldsetSelectSlot.contains (e.target)) {
                    cdCnfDivSelectSlot.classList.remove ("__cd-cnf--div__SELECT_SLOT");
                }
            });
        }


        // 4.5 Создание первых трех слотов при загрузке страницы

        for (let i = 0; i < 3; i++) {
            cdCnfCreateSlot ();
        }


        // 4.6 Добавление слота

        cdCnfButtonElseSlot.addEventListener ("click", () => {
            cdCnfCreateSlot ();
            if (m === 10) {
                cdCnfButtonElseSlot.classList.add ("__cd-cnf--button__ELSE");
            }
        });




        // 5. ЗАПРОС НА РЕЗУЛЬТАТ

        const cdCnfButtonSubmit = document.querySelector(".cd-cnf--button__SUBMIT");
        const cdCnfForm = document.querySelector (".cd-cnf--form");
        const cdCnfDivResult = document.querySelector (".cd-cnf--div__RESULT");


        cdCnfForm.addEventListener ("submit", (e) => {
            e.preventDefault (); // !!! ОТКЛЮЧИТЬ ПРИ ИНТЕГРАЦИИ

            cdCnfDivResult.classList.add ("__cd-cnf--div__RESULT");
            setTimeout (() => {
                cdCnfDivResult.classList.add ("__cd-cnf--div__RESULT2");
            }, 30);

            // 5.1 Выравнивание картинки по высоте текста

            setTimeout (() => {
                const cdCnfPResultImageText = document.querySelector (".cd-cnf--p__RESULT_IMAGE_TEXT");
                const cdCnfDivResultImageCont = document.querySelector (".cd-cnf--div__RESULT_IMAGE_CONT");

                if (cdCommonMedia1440.matches) {
                    cdCnfDivResultImageCont.style.height = `${cdCnfPResultImageText.offsetHeight}px`;
                }

                cdCommonMedia1440.addEventListener ("change", (e) => {
                    if (e.matches) {
                        cdCnfDivResultImageCont.style.height = `${cdCnfPResultImageText.offsetHeight}px`;
                    } else {
                        cdCnfDivResultImageCont.style.height = null;
                    }
                });
            }, 50);
            
        });
    }
});