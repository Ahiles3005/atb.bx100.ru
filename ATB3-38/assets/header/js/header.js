
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** HEADER ********** ---------- */


    {
        const body = document.querySelector (".body");


        // 1. ПОЯВЛЕНИЕ / ИСЧЕЗАНИЕ МОБИЛЬНОГО МЕНЮ И АНИМАЦИЯ БУРГЕРА

        const cHeaderButtonBurger = document.querySelector (".c-header--button__BURGER");
        const cHeaderSvgBurger = document.querySelector (".c-header--svg__BURGER");
        const cHeaderRect1 = document.querySelector (".c-header--rect__1");
        const cHeaderRect2 = document.querySelector (".c-header--rect__2");
        const cHeaderRect3 = document.querySelector (".c-header--rect__3");
        const cHeaderUlMenu = document.querySelector (".c-header--ul__MENU");


        cHeaderButtonBurger.addEventListener ("click", () => {
            // body.classList.toggle ("__body__FIXED_MOB");
            cHeaderSvgBurger.classList.toggle ("__c-header--svg__BURGER");
            cHeaderUlMenu.classList.toggle ("__c-header--ul__MENU");
            cHeaderRect1.classList.toggle ("__c-header--rect__1");
            cHeaderRect2.classList.toggle ("__c-header--rect__2");
            cHeaderRect3.classList.toggle ("__c-header--rect__3");
        });




        // 2. ЛИСТАНИЕ СУБМЕНЮ

        const cHeaderAMenu = Array.from (document.querySelectorAll (".c-header--a__MENU"));
        const cHeaderASubmenuBack = Array.from (document.querySelectorAll (".c-header--a__SUBMENU_BACK"));
        const cHeaderASubmenu = Array.from (document.querySelectorAll (".c-header--a__SUBMENU"));



        // 2.1 Выяснение количества уровней субменю и расчет коэффициентов для переменных CSS

        function headerCoeffs () {

            // 2.1.1 Если уровней вложенности субменю от 1 до 3 (как в фигме):

            document.body.style.setProperty ("--k-header-submenu-part", `${document.querySelector (".c-header--nav").offsetWidth / 4}px`);

            // 2.1.2 Если уровней вложенности субменю 5 или 4 
            //(при необходимости код раскомментировать!!!)
            
            // const cHeaderLiMenu = Array.from (document.querySelectorAll (".c-header--li__MENU"));
            
            // for (let v of cHeaderLiMenu) {
            //     // на случай 5
            //     if (v.querySelector (".c-header--div__SUBMENU .c-header--div__SUBMENU .c-header--div__SUBMENU .c-header--div__SUBMENU .c-header--div__SUBMENU")) {
            //         document.body.style.setProperty("--k-header-submenu-part", `${document.querySelector (".c-header--nav").offsetWidth / 6}px`);
            //         document.body.style.setProperty("--k-header-submenu-width1", "calc(16.6% - 20px)");
            //         document.body.style.setProperty("--k-header-submenu-width2", "83.4%");
            //         document.body.style.setProperty("--k-header-submenu-width3", "175px");
            //         break;
            //     // на случай 4
            //     } else if (v.querySelector (".c-header--div__SUBMENU .c-header--div__SUBMENU .c-header--div__SUBMENU .c-header--div__SUBMENU")) {
            //         document.body.style.setProperty("--k-header-submenu-part", `${document.querySelector (".c-header--nav").offsetWidth / 5}px`);
            //         document.body.style.setProperty("--k-header-submenu-width1", "calc(20% - 20px)");
            //         document.body.style.setProperty("--k-header-submenu-width2", "80%");
            //         document.body.style.setProperty("--k-header-submenu-width3", "215px");
            //         break;
            //     }
            // }

        }

        headerCoeffs ();



        // 2.1.3 Пересчет коэффициентов при ресайзе окна

        function headerDebounce (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const headerCoeffsDebounce = headerDebounce (headerCoeffs, 100);

        window.addEventListener ("resize", headerCoeffsDebounce);



        // 2.2 Открытие / закрытие субменю первого уровня

        cHeaderAMenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (a[i].nextElementSibling) {

                    if (!a[i].nextElementSibling.classList.contains ("__c-header--div__SUBMENU1")) {

                        // 2.2.1 Открытие субменю первого уровня

                        a[i].classList.add ("__c-header--a__MENU");
                        a[i].nextElementSibling.classList.add ("__c-header--div__SUBMENU1");
                        setTimeout (() => {
                            a[i].nextElementSibling.classList.add ("__c-header--div__SUBMENU2");
                        }, 30);
                        
                        // 2.2.1.1 Обрезка текста для айфонов
                        // if (isIOS()) {
                        //     truncateElements('.c-header--p__SUBMENU_BOTTOM');
                        // }

                        cHeaderAMenu.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                            if (a1[i1].nextElementSibling) {

                                // 2.2.2 Закрытие всех субменю у соседних пунктов меню при открытии своего субменю первого уровня
                                
                                Array.from (a1[i1].nextElementSibling.querySelectorAll (".c-header--div__SUBMENU")).forEach ((v2, i2, a2) => {
                                    a2[i2].classList.remove ("__c-header--div__SUBMENU2", "__c-header--div__SUBMENU_HID");
                                    setTimeout (() => {
                                        a2[i2].classList.remove ("__c-header--div__SUBMENU1");
                                    }, 700);
                                });

                                // 2.2.3 Закрытие всех соседних пунктов меню при открытии своего субменю первого уровня

                                a1[i1].classList.remove ("__c-header--a__MENU");
                                a1[i1].nextElementSibling.classList.remove ("__c-header--div__SUBMENU2", "__c-header--div__SUBMENU_HID");
                                setTimeout (() => {
                                    a1[i1].nextElementSibling.classList.remove ("__c-header--div__SUBMENU1");
                                }, 700);
                            }
                        });

                    } else {

                        // 2.2.4 Закрытие субменю первого уровня

                        a[i].classList.remove ("__c-header--a__MENU");
                        a[i].nextElementSibling.classList.remove ("__c-header--div__SUBMENU2", "__c-header--div__SUBMENU_HID");
                        setTimeout (() => {
                            a[i].nextElementSibling.classList.remove ("__c-header--div__SUBMENU1");
                        }, 700);
                        
                        // 2.2.5 Закрытие всех своих последующих субменю при закрытии первого

                        Array.from (a[i].nextElementSibling.querySelectorAll (".c-header--div__SUBMENU")).forEach ((v, i, a) => {
                            a[i].classList.remove ("__c-header--div__SUBMENU2", "__c-header--div__SUBMENU_HID");
                            setTimeout (() => {
                                a[i].classList.remove ("__c-header--div__SUBMENU1");
                            }, 700);
                        });

                    } 
                }
            });
        });



        // 2.3 Открытие / закрытие субменю второго и последующих уровней

        cHeaderASubmenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (a[i].nextElementSibling) {

                    if (!a[i].nextElementSibling.classList.contains ("__c-header--div__SUBMENU1")) {

                        // 2.3.1 Открытие дочернего субменю

                        a[i].nextElementSibling.classList.add ("__c-header--div__SUBMENU1");
                        setTimeout (() => {
                            a[i].nextElementSibling.classList.add ("__c-header--div__SUBMENU2");
                        }, 30);
                        a[i].closest(".c-header--div__SUBMENU").classList.add ("__c-header--div__SUBMENU_HID");

                        // 2.3.1.1 Обрезка текста для айфонов
                        // if (isIOS()) {
                        //     truncateElements('.c-header--p__SUBMENU_BOTTOM');
                        // }
                        
                        const cHeaderASubmenuNeighbors = Array.from (a[i].parentNode.parentNode.querySelectorAll (":scope > .c-header--li__SUBMENU > .c-header--a__SUBMENU"));

                        cHeaderASubmenuNeighbors.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                            if (a1[i1].nextElementSibling) {

                                // 2.3.2 Закрытие всех последующих субменю у соседних пунктов субменю при открытии своего дочернего субменю

                                Array.from (a1[i1].nextElementSibling.querySelectorAll (".c-header--div__SUBMENU")).forEach ((v2, i2, a2) => {
                                    a2[i2].classList.remove ("__c-header--div__SUBMENU2", "__c-header--div__SUBMENU_HID");
                                    setTimeout (() => {
                                        a2[i2].classList.remove ("__c-header--div__SUBMENU1");
                                    }, 700);
                                    
                                });

                                // 2.3.2 Закрытие всех соседних субменю при открытии своего дочернего субменю

                                a1[i1].nextElementSibling.classList.remove ("__c-header--div__SUBMENU2");
                                setTimeout (() => {
                                    a1[i1].nextElementSibling.classList.remove ("__c-header--div__SUBMENU1");
                                }, 700);
                                
                            }
                        });

                    } else {

                        // 2.3.4 Закрытие дочернего субменю

                        a[i].nextElementSibling.classList.remove ("__c-header--div__SUBMENU2");
                        setTimeout (() => {
                            a[i].nextElementSibling.classList.remove ("__c-header--div__SUBMENU1");
                        }, 700);
                        a[i].closest(".c-header--div__SUBMENU").classList.remove ("__c-header--div__SUBMENU_HID");
                        
                        // 2.3.5 Закрытие всех своих последующих субменю

                        Array.from (a[i].nextElementSibling.querySelectorAll (".c-header--div__SUBMENU")).forEach ((v, i, a) => {
                            a[i].classList.remove ("__c-header--div__SUBMENU2", "__c-header--div__SUBMENU_HID");
                            setTimeout (() => {
                                a[i].classList.remove ("__c-header--div__SUBMENU1");
                            }, 700);
                        });

                    }
                }
            });
        });



        // 2.4 Закрытие любого субменю в мобильном варианте

        cHeaderASubmenuBack.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                a[i].parentElement.classList.remove ("__c-header--div__SUBMENU2");
                if (a[i].closest (".__c-header--div__SUBMENU_HID")) {
                    a[i].closest (".__c-header--div__SUBMENU_HID").classList.remove ("__c-header--div__SUBMENU_HID");
                }
                setTimeout (() => {
                    a[i].parentElement.classList.remove ("__c-header--div__SUBMENU1");
                }, 700);
            });
        });



        // 2.5 Закрытие мобильного меню в мобильном варинате при клике 
        // по области, отличной от субменю и кнопок (ссылок) header

        const cHeaderCloseMobMenu = Array.from (document.querySelectorAll (".c-header--div__SUBMENU_BACK2_MOB, .c-header--div__SHADOW, .c-header--nav"));


        cHeaderCloseMobMenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                if (window.innerWidth < 1440) {
                    if (e.target !== e.currentTarget) return;
                    body.classList.remove ("__body__FIXED_MOB");
                    cHeaderSvgBurger.classList.remove ("__c-header--svg__BURGER");
                    cHeaderUlMenu.classList.remove ("__c-header--ul__MENU");
                    cHeaderRect1.classList.remove ("__c-header--rect__1");
                    cHeaderRect2.classList.remove ("__c-header--rect__2");
                    cHeaderRect3.classList.remove ("__c-header--rect__3");
                }
            });
        });



        // 2.6 Закрытие всех субменю в десктопном варинате при клике 
        // по области, отличной от субменю и кнопок (ссылок) header

        const cHeaderCloseDescMenu = Array.from (document.querySelectorAll (".c-header--div__SUBMENU_BACK2_DESC, .c-header--div__SHADOW, .c-header--nav"));
        

        cHeaderCloseDescMenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                if (window.innerWidth > 1439) {
                    if (e.target !== e.currentTarget) return;
                    cHeaderAMenu.forEach ((v, i, a) => {
                        if (a[i].nextElementSibling) {
                            if (a[i].nextElementSibling.classList.contains ("__c-header--div__SUBMENU1")) {
                                
                                // 2.6.1 Закрытие субменю первого уровня
        
                                a[i].classList.remove ("__c-header--a__MENU");
                                a[i].nextElementSibling.classList.remove ("__c-header--div__SUBMENU2", "__c-header--div__SUBMENU_HID");
                                setTimeout (() => {
                                    a[i].nextElementSibling.classList.remove ("__c-header--div__SUBMENU1");
                                }, 700);
                                
                                // 2.6.2 Закрытие всех своих последующих субменю при закрытии первого
        
                                Array.from (a[i].nextElementSibling.querySelectorAll (".c-header--div__SUBMENU")).forEach ((v, i, a) => {
                                    a[i].classList.remove ("__c-header--div__SUBMENU2", "__c-header--div__SUBMENU_HID");
                                    setTimeout (() => {
                                        a[i].classList.remove ("__c-header--div__SUBMENU1");
                                    }, 700);
                                });
                            } 
                        }
                    });
                }
                
            });
        });
        



        // 3. ПОЯВЛЕНИЕ / ИСЧЕЗАНИЕ ПОИСКОВОЙ СТРОКИ

        const cHeaderButtonSearchOpen = document.querySelector (".c-header--button__SEARCH_OPEN");
        const cHeaderButtonSearchSvg = document.querySelector (".c-header--button__SEARCH_OPEN svg");
        const cHeaderFormSearch = document.querySelector (".c-header--form__SEARCH");
        const cHeaderInputSearch = document.querySelector (".c-header--input__SEARCH");
        const cHeaderButtonSearchClose = document.querySelector (".c-header--button__SEARCH_CLOSE");
        const cHeaderDivSearchBack = document.querySelector (".c-header--div__SEARCH_BACK");



        // 3.1 Открытие кнопкой

        cHeaderButtonSearchOpen.addEventListener ("click", () => {
            cHeaderFormSearch.classList.add ("__c-header--form__SEARCH");
            cHeaderInputSearch.focus ();
            cHeaderDivSearchBack.classList.add ("__c-header--div__SEARCH_BACK1");
            setTimeout (() => {
                cHeaderDivSearchBack.classList.add ("__c-header--div__SEARCH_BACK2");
            }, 30);
        });



        // 3.2 Закрытие кнопкой

        cHeaderButtonSearchClose.addEventListener ("click", () => {
            cHeaderFormSearch.classList.remove ("__c-header--form__SEARCH");
            cHeaderDivSearchBack.classList.remove ("__c-header--div__SEARCH_BACK2");
            setTimeout (() => {
                if (!cHeaderDivSearchBack.classList.contains ("__c-header--div__SEARCH_BACK2")) {
                    cHeaderDivSearchBack.classList.remove ("__c-header--div__SEARCH_BACK1");
                }
            }, 500);
        });



        // 3.3 Закрытие кликом вне формы

        cHeaderDivSearchBack.addEventListener ("click", (e) => {
            cHeaderFormSearch.classList.remove ("__c-header--form__SEARCH");
            cHeaderDivSearchBack.classList.remove ("__c-header--div__SEARCH_BACK2");
            setTimeout (() => {
                if (!cHeaderDivSearchBack.classList.contains ("__c-header--div__SEARCH_BACK2")) {
                    cHeaderDivSearchBack.classList.remove ("__c-header--div__SEARCH_BACK1");
                }
            }, 500);
        });
    }
});