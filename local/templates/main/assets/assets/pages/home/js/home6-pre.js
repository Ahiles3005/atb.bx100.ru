
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| ДОМАШНЯЯ СТРАНИЦА |||||||||| ********** ---------- */


    if (document.querySelector ("#home")) {

        
        /* ---------- ********** СЕКЦИЯ PRE ********** ---------- */


        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ 

        const hmPreInputSubmenu1 = document.querySelector (".hm-pre--label__SUBMENU1 > input");
        const hmPreDivFormBody = document.querySelector (".hm-pre--div__FORM_BODY");
        const hmPreSvgSubmenu = document.querySelector (".hm-pre--svg__SUBMENU");


        // 1.1 Открытие / закрытие
        hmPreInputSubmenu1.addEventListener ("click", (e) => {
            e.stopPropagation()
            hmPreDivFormBody.classList.toggle ("__hm-pre--div__FORM_BODY");
            hmPreSvgSubmenu.classList.toggle ("__hm-pre--svg__SUBMENU");
        });


        // 1.2 Выбор первого субменю
        hmPreInputSubmenu1.click ();
    }
});