
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА КАРТОЧКА ТОВАРА |||||||||| ********** ---------- */


    if (document.querySelector ("#card-n")) {

        
        /* ---------- ********** СЕКЦИЯ MAT ********** ---------- */


        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ 


        const cdMatDivHead = document.querySelector (".cd-mat--div__HEAD");
        const cdMatSvgSubmenu = document.querySelector (".cd-mat--svg__SUBMENU");
        const cdMatFormSubmenu = document.querySelector (".cd-mat--form__SUBMENU");


        // 1.1 Выбор первой радиокнопки в субменю при загрузке страницы

        cdMatFormSubmenu.querySelector (".cd-mat--label__SUBMENU:first-of-type").click ();
        

        cdMatDivHead.addEventListener ("click", () => {
        
            // 1.2 Открытие / закрытие субменю

            if (!cdMatFormSubmenu.classList.contains ("__cd-mat--form__SUBMENU")) {
                cdMatFormSubmenu.classList.add ("__cd-mat--form__SUBMENU");
                cdMatSvgSubmenu.classList.add ("__cd-mat--svg__SUBMENU");
            } else {
                cdMatFormSubmenu.classList.remove ("__cd-mat--form__SUBMENU");
                cdMatSvgSubmenu.classList.remove ("__cd-mat--svg__SUBMENU");
            }
        });
    }
});