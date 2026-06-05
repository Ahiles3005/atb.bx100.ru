
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА SEARCH |||||||||| ********** ---------- */


    if (document.querySelector ("#sr")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ MAIN ********** ---------- */


        // 1. ПОИСКОВОЕ ПОЛЕ ВВОДА

        const srMainFormSearch = document.querySelector (".sr-main--form__SEARCH");
        const srMainInputSearch = document.querySelector (".sr-main--input__SEARCH");


        srMainInputSearch.addEventListener ("input", () => {
            if (srMainInputSearch.value.length > 0) {
                srMainFormSearch.classList.add ("__sr-main--form__SEARCH");
            } else {
                srMainFormSearch.classList.remove ("__sr-main--form__SEARCH");
            }
        });

        srMainFormSearch.addEventListener ("reset", () => {
            srMainFormSearch.classList.remove ("__sr-main--form__SEARCH");
            srMainInputSearch.focus ();
        });







        // 2. КНОПКИ ВЫБОРА КАТЕГОРИЙ - СНЯТИЕ ВЫБОРА С ЧЕКБОКСА ПРИ ПЕРЕКЛЮЧЕНИИ НА ДРУГОЙ ЧЕКБОКС

        function srMainCategChange () {
            const srMainFormCateg = Array.from (document.querySelectorAll (".sr-main--form__CATEG"));

            srMainFormCateg.forEach ((v, i, a) => {
                const srMainLabelCateg = Array.from (a[i].querySelectorAll (".sr-main--label__CATEG"));
    
                srMainLabelCateg.forEach ((v1, i1, a1) => {
                    a1[i1].addEventListener ("click", () => {
                        srMainLabelCateg.filter (x => x !== a1[i1]).forEach ((v2, i2, a2) => {
                            a2[i2].querySelector ("input").checked = false;
                        });
                    });
                });
            });  
        }

        srMainCategChange ();







        // 3. РАСКРЫТИЕ КАТЕГОРИЙ В МОБИЛЬНОМ ВАРИАНТЕ

        function srMainCategOpen () {
            const srMainDivMainCommon = Array.from (document.querySelectorAll (".sr-main--div__MAIN.COMMON"));

            srMainDivMainCommon.forEach ((v, i, a) => {
                const srMainDivColumn = Array.from (a[i].querySelectorAll (".sr-main--div__COLUMN"));
                const srMainDivColumnTopTop = Array.from (a[i].querySelectorAll (".sr-main--div__COLUMN_TOP_TOP"));

                srMainDivColumnTopTop.forEach ((v1, i1, a1) => {{
                    a1[i1].addEventListener ("click", () => {
                        srMainDivColumn[i1].classList.toggle ("__sr-main--div__COLUMN");
                    });
                }});
            });
        }

        srMainCategOpen ();







        // 4. АКТИВАЦИЯ ПОЛНЫХ КАРТОЧЕК ПРИ ПРОКРУТКЕ В МОБИЛЬНОМ ВАРИАНТЕ 

        function srMainCardAct () {
            const srMainArticleFull = Array.from (document.querySelectorAll (".sr-main--article__FULL"));

            function srMainCardScroll () {
                srMainArticleFull.forEach ((v, i, a) => {
                    const cardRect = a[i].getBoundingClientRect ();

                    if (cardRect.top < 250 && cardRect.top > -350) {
                        a[i].classList.add ("__sr-main--article__FULL");
                    } else {
                        a[i].classList.remove ("__sr-main--article__FULL");
                    }
                });
            }

            window.addEventListener ("scroll", srMainCardScroll);
            window.addEventListener ("resize", srMainCardScroll);
        }

        srMainCardAct ();







        // 5. РАСКРЫТИЕ ДОПОЛНИТЕЛЬНЫХ КАРТОЧЕК

        function mcCommonCardOpener () {

            // Выбор всех разделов (колонок) кроме тех, что содержат сокращенные карточки

            const srMainDivColumnFull = Array.from (document.querySelectorAll (".sr-main--div__MAIN:not(.BRIEF) .sr-main--div__COLUMN"));


            // Перебор всех разделов (колонок) с программированием раскрытия доп. карточек
            // при их наличии в каждом из разделов

            srMainDivColumnFull.forEach ((v, i, a) => {

                const ctCatArticles = Array.from (a[i].querySelectorAll (".sr-main--article__FULL"));
                const ctCatDivBottom = a[i].querySelector (".ct-cat--div__BOTTOM");
                const ctCatSpanInd1 = a[i].querySelector (".ct-cat--span__IND1");
                const ctCatSpanInd2 = a[i].querySelector (".ct-cat--span__IND2");
                const ctCatDivLine1 = a[i].querySelector (".ct-cat--div__LINE1");
                const ctCatButtonElse = a[i].querySelector (".ct-cat--button__ELSE");

                // 3.1 Счетчик показанных порций карточек

                let ctCatCounter = 1;


                // 3.2 Счетчик показанных карточек

                function ctCatVisCounter () {

                    // 3.2.1 Числа

                    const ctCatArticlesVis = ctCatArticles.filter (x => {
                        return getComputedStyle (x).display == "flex";
                    });
                    ctCatSpanInd1.textContent = ctCatArticlesVis.length;
                    ctCatSpanInd2.textContent = ctCatArticles.length;

                    // 3.2.2 Линия

                    ctCatDivLine1.style.width = `${(parseFloat (ctCatSpanInd1.textContent) / parseFloat (ctCatSpanInd2.textContent)) * 100}%`;

                    // 3.2.3 Уборка всего блока "Показать еще", если все карточки показаны

                    if (ctCatArticlesVis.length === ctCatArticles.length) {
                        ctCatDivBottom.classList.add ("__ct-cat--div__BOTTOM");
                    } else {
                        ctCatButtonElse.classList.remove ("__ct-cat--div__BOTTOM");
                    }
                }



                // 3.3 Начальное / текущее количество видимых карточек (для начальной загрузки и изменения количества при ресайзе или переключении видов)

                function ctCatCardsCur () {
                    
                    ctCatArticles.forEach ((v, i, a) => {
                        if (i < ctCatCounter * 3) {
                            a[i]?.classList.add ("__SHOW");
                        } else {
                            a[i]?.classList.remove ("__SHOW");
                        }
                    });
        
                    ctCatVisCounter ();
                }

                ctCatCardsCur ();



                // 3.4 Добавление карточек по клику по кнопке

                function ctCatCardsAdd () {
                    
                    ctCatCounter++;

                    ctCatArticles.forEach ((v, i, a) => {
                        if (i < ctCatCounter * 3) {
                            a[i]?.classList.add ("__SHOW");
                        } else {
                            a[i]?.classList.remove ("__SHOW");
                        }
                    });

                    ctCatVisCounter ();
                }

                ctCatButtonElse.addEventListener ("click", ctCatCardsAdd);



                // 3.5 Пересчет при резайзе

                cCommonMedia768.addEventListener ("change", ctCatCardsCur);
                cCommonMedia1200.addEventListener ("change", ctCatCardsCur);
                cCommonMedia1440.addEventListener ("change", ctCatCardsCur);
                cCommonMedia1920.addEventListener ("change", ctCatCardsCur);
            });
        }
        
        mcCommonCardOpener ();
    }
});