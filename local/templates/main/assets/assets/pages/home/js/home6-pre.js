
"use strict";

function getArticlesPress(sectionId){
    let url = '/local/templates/main/include/home/ajax/press.php?SECTION_ID=' + sectionId

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.text();
        })
        .then(html => {
            document.querySelector('#press_html').innerHTML = html
        })
        .catch(error => {
            console.error('Fetch error:', error);
        });
}

window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| ДОМАШНЯЯ СТРАНИЦА |||||||||| ********** ---------- */


    if (document.querySelector ("#home")) {

        
        /* ---------- ********** СЕКЦИЯ PRE ********** ---------- */


        // // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ
        //
        // const hmPreInputSubmenu1 = document.querySelector (".hm-pre--label__SUBMENU1 > input");
        // const hmPreDivFormBody = document.querySelector (".hm-pre--div__FORM_BODY");
        // const hmPreSvgSubmenu = document.querySelector (".hm-pre--svg__SUBMENU");
        //
        //
        // // 1.1 Открытие / закрытие
        // hmPreInputSubmenu1.addEventListener ("click", (e) => {
        //     e.stopPropagation()
        //     hmPreDivFormBody.classList.toggle ("__hm-pre--div__FORM_BODY");
        //     hmPreSvgSubmenu.classList.toggle ("__hm-pre--svg__SUBMENU");
        // });
        //
        //
        // // 1.2 Выбор первого субменю
        // hmPreInputSubmenu1.click ();


        const menuItem = Array.from(document.querySelectorAll(".hm-pre--label__SUBMENU1"));

        menuItem.forEach((v) => {
            v.addEventListener("click", (event) => {
                if (event.target.classList.contains('hm-pre--label__SUBMENU1') || event.target.classList.contains('hm-pre--span__SUBMENU')) {
                    let sectionId = v.dataset.sectionid;
                    getArticlesPress(sectionId)
                }
            });
        });
        menuItem[0].click()

        const menuItems = Array.from(document.querySelectorAll(".hm-pre--label__SUBMENU"));
        menuItems.forEach((v) => {
            v.addEventListener("click", (event) => {
                if (event.target.classList.contains('hm-pre--label__SUBMENU') || event.target.classList.contains('hm-pre--span__SUBMENU')) {
                    let sectionId = v.dataset.sectionid;
                    getArticlesPress(sectionId)
                }
            });
        });

    }
});