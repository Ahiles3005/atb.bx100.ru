
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| ДОМАШНЯЯ СТРАНИЦА |||||||||| ********** ---------- */


    if (document.querySelector ("#home")) {


        //загрузка товара
        const subMenuItems = Array.from(document.querySelectorAll(".hm-hst--label__SUBMENU"));

        subMenuItems.forEach((v) => {
            v.addEventListener("click", (event) => {
                if (event.target.classList.contains('hm-hst--label__SUBMENU') || event.target.classList.contains('hm-hst--span__SUBMENU')) {
                    let sectionId = v.dataset.sectionid;
                    let url = '/local/templates/main/include/home/ajax/history.php?SECTION_ID=' + sectionId

                    fetch(url)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText);
                            }
                            return response.text();
                        })
                        .then(html => {
                            document.querySelector('#history-html').innerHTML = html
                        })
                        .catch(error => {
                            console.error('Fetch error:', error);
                        });
                    hmHstFormHeight();
                }
            });
        });
        
        /* ---------- ********** СЕКЦИЯ HST ********** ---------- */


        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ, 
        // ВЫБОР ПЕРВОЙ РАДИОКНОПКИ В ОТКРЫВШЕМСЯ СУБМЕНЮ,
        // СНЯТИЕ ВЫБОРА СО ВСЕХ РАДИОКНОПОК В ЗАКРЫВАЮЩИХСЯ СУБМЕНЮ

        const hmHstLiMenuItem = Array.from (document.querySelectorAll (".hm-hst--li__MENU_ITEM"));
        const hmHstButtonMenuItem = Array.from (document.querySelectorAll (".hm-hst--button__MENU_ITEM"));
        const hmHstFormSubmenu = Array.from (document.querySelectorAll (".hm-hst--form__SUBMENU"));
        const hmHstDivContent = document.querySelector (".hm-hst--div__CONTENT");
        const hmHstDivSubmenuBack = document.querySelector (".hm-hst--div__SUBMENU_BACK");
        
    

        hmHstButtonMenuItem.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                
                // 1.1 Открытие субменю

                if (!hmHstLiMenuItem[i].classList.contains ("__hm-hst--li__MENU_ITEM")) {

                    if (window.innerWidth < 1440) {
                        hmHstLiMenuItem[i].classList.add ("__hm-hst--li__MENU_ITEM");
                        hmHstFormSubmenu[i].classList.add ("__hm-hst--form__SUBMENU");
                    } else {
                        hmHstLiMenuItem[i].classList.add ("__hm-hst--li__MENU_ITEM");
                        hmHstFormSubmenu[i].classList.add ("__hm-hst--form__SUBMENU");
                    }
                    

                    // 1.2 Выбор первой радиокнопки в открывшемся субменю

                    if (hmHstLiMenuItem[i].querySelector (".hm-hst--label__SUBMENU:first-of-type > .hm-hst--input__SUBMENU")) {
                        hmHstLiMenuItem[i].querySelector (".hm-hst--label__SUBMENU:first-of-type").click ();
                    }
                    
                    // 1.3 Закрытие остальных субменю

                    hmHstLiMenuItem.filter (x => x !== hmHstLiMenuItem[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__hm-hst--li__MENU_ITEM");

                        // 1.4 Снятие выбора с радиокнопки в закрывающемся меню

                        if (a1[i1].querySelector (".hm-hst--input__SUBMENU:checked")) {
                            const a = a1[i1].querySelector (".hm-hst--input__SUBMENU:checked");
                            a.checked = false;
                        }
                    });

                } else {
                    if (window.innerWidth < 1440) {
                        hmHstLiMenuItem[i].classList.remove ("__hm-hst--li__MENU_ITEM");
                        hmHstFormSubmenu[i].classList.remove ("__hm-hst--form__SUBMENU");
                    }
                }
            });
        });


        // 1.5 Открытие первого субменю при загрузке страницы

        hmHstButtonMenuItem[0].click ();


        // 1.6 Выравнивание высоты form для десктопов по блоку с контентом

        function hmHstFormHeight () {
            if (window.innerWidth > 1439) {
                hmHstFormSubmenu.forEach ((v, i, a) => {
                    setTimeout (() => {
                        a[i].style.maxHeight = getComputedStyle (hmHstDivContent).height;
                        hmHstDivSubmenuBack.style.top = `${parseInt (getComputedStyle (hmHstDivContent).height) + 115}px`;
                    }, 800);
                });
            } else {
                hmHstFormSubmenu.forEach ((v, i, a) => {
                    setTimeout (() => {
                        a[i].style.maxHeight = null;
                    }, 50);
                });
            }
        }

        hmHstFormHeight ();

        function hmHstDebounce (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const hmHstFormDebounce = hmHstDebounce (hmHstFormHeight, 100);

        window.addEventListener ("resize", hmHstFormDebounce);


        // 1.7 Скролл элементов субменю до видимой части
        
        const hmHstLabelSubmenu = Array.from (document.querySelectorAll (".hm-hst--label__SUBMENU"));


        hmHstLabelSubmenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {    
                if (a[i].parentNode.scrollHeight > a[i].parentNode.offsetHeight) {

                    let k = a[i].offsetTop - a[i].parentNode.scrollTop;
                    let k1 = a[i].offsetTop + a[i].offsetHeight - a[i].parentNode.scrollTop;


                    if (k < 0 && k1 > 0) {
                        a[i].parentNode.scrollTop = a[i].offsetTop;
                    } else if (k < a[i].parentNode.offsetHeight && k1 > a[i].parentNode.offsetHeight) {
                        a[i].parentNode.scrollTop = a[i].parentNode.scrollTop + k1 - a[i].parentNode.offsetHeight;
                    }
                }
            });
        });
    }
});