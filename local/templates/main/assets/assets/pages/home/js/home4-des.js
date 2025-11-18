
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| ДОМАШНЯЯ СТРАНИЦА |||||||||| ********** ---------- */


    if (document.querySelector ("#home")) {



        const menuItems = Array.from(document.querySelectorAll(".hm-des--label__SUBMENU"));

        menuItems.forEach((v) => {
            v.addEventListener("click", (event) => {
                if (event.target.classList.contains('hm-des--label__SUBMENU') || event.target.classList.contains('hm-des--span__SUBMENU')) {
                    let sectionId = v.dataset.sectionid;
                    let url = '/local/templates/main/include/home/ajax/solutions.php?SECTION_ID=' + sectionId

                    fetch(url)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText);
                            }
                            return response.text();
                        })
                        .then(html => {
                            document.querySelector('#des-html').innerHTML = html
                            observeScrollElements();
                        })
                        .catch(error => {
                            console.error('Fetch error:', error);
                        });
                }
            });
        });


        /* ---------- ********** СЕКЦИЯ DES ********** ---------- */


        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ 


        const hmDesDivHead = document.querySelector (".hm-des--div__HEAD");
        const hmDesSvgSubmenu = document.querySelector (".hm-des--svg__SUBMENU");
        const hmDesFormSubmenu = document.querySelector (".hm-des--form__SUBMENU");
        const hmDesDivContent = document.querySelector (".hm-des--div__CONTENT");


        // 1.1 Выбор первой радиокнопки в субменю при загрузке страницы

        hmDesFormSubmenu.querySelector (".hm-des--label__SUBMENU:first-of-type").click ();


        hmDesDivHead.addEventListener ("click", () => {
        
            // 1.2 Открытие / закрытие субменю

            if (!hmDesFormSubmenu.classList.contains ("__hm-des--form__SUBMENU")) {
                hmDesFormSubmenu.classList.add ("__hm-des--form__SUBMENU");
                hmDesSvgSubmenu.classList.add ("__hm-des--svg__SUBMENU");
            } else {
                hmDesFormSubmenu.classList.remove ("__hm-des--form__SUBMENU");
                hmDesSvgSubmenu.classList.remove ("__hm-des--svg__SUBMENU");
            }
        });


        // 1.2 Выравнивание высоты form для десктопов по блоку с контентом

        function hmDesFormHeight () {
            if (window.innerWidth > 1439) {
                setTimeout (() => {
                    hmDesFormSubmenu.style.maxHeight = getComputedStyle (hmDesDivContent).height;
                }, 800);
            } else {
                setTimeout (() => {
                    hmDesFormSubmenu.style.maxHeight = null;
                }, 50);
            }
        }

        // !!! 

        // Если возникнет вероятность того, что боковое меню в десктопе в Решениях может превысить
        // по высоте основной блок - раскомментировать до пункта 1.3
        // и содержимое пункта 1.3:

        // hmDesFormHeight ();

        // function hmDesDebounce (cB, time) {
        //     let idTimer;
        //     return function () {
        //         clearTimeout (idTimer);
        //         idTimer = setTimeout (() => {
        //             cB();
        //         }, time);
        //     }
        // }

        // const hmDesFormDebounce = hmDesDebounce (hmDesFormHeight, 100);

        // window.addEventListener ("resize", hmDesFormDebounce);


        // 1.3 Скролл элементов субменю до видимой части
        
        // const hmDesLabelSubmenu = Array.from (document.querySelectorAll (".hm-des--label__SUBMENU"));

        // hmDesLabelSubmenu.forEach ((v, i, a) => {
        //     a[i].addEventListener ("click", () => {
                
        //         if (a[i].parentNode.scrollHeight > a[i].parentNode.offsetHeight) {

        //             let k = a[i].offsetTop - a[i].parentNode.scrollTop;
        //             let k1 = a[i].offsetTop + a[i].offsetHeight - a[i].parentNode.scrollTop;


        //             if (k < 0 && k1 > 0) {
        //                 a[i].parentNode.scrollTop = a[i].offsetTop;
        //             } else if (k < a[i].parentNode.offsetHeight && k1 > a[i].parentNode.offsetHeight) {
        //                 a[i].parentNode.scrollTop = a[i].parentNode.scrollTop + k1 - a[i].parentNode.offsetHeight;
        //             }
        //         }
        //     });
        // });
    }
});