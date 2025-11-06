"use strict";

window.addEventListener ("load", function () {

    /* ---------- ********** HEADER ********** ---------- */

    {
        // 1. ПОЯВЛЕНИЕ / ИСЧЕЗАНИЕ МОБИЛЬНОГО МЕНЮ И АНИМАЦИЯ БУРГЕРА

        const cHeaderButtonBurger = document.querySelector (".c-header--button__BURGER");
        const cHeaderSvgBurger = document.querySelector (".c-header--svg__BURGER");
        const cHeaderRect1 = document.querySelector (".c-header--rect__1");
        const cHeaderRect2 = document.querySelector (".c-header--rect__2");
        const cHeaderRect3 = document.querySelector (".c-header--rect__3");
        const cHeaderUlMenu = document.querySelector (".c-header--ul__MENU");

        if (cHeaderButtonBurger && cHeaderSvgBurger && cHeaderRect1 && cHeaderRect2 && cHeaderRect3 && cHeaderUlMenu) {
            cHeaderButtonBurger.addEventListener ("click", () => {
                // body.classList.toggle ("__body__FIXED_MOB");
                cHeaderSvgBurger.classList.toggle ("__c-header--svg__BURGER");
                cHeaderUlMenu.classList.toggle ("__c-header--ul__MENU");
                cHeaderRect1.classList.toggle ("__c-header--rect__1");
                cHeaderRect2.classList.toggle ("__c-header--rect__2");
                cHeaderRect3.classList.toggle ("__c-header--rect__3");
            });
        }


        // 2. ЛИСТАНИЕ СУБМЕНЮ

        const cHeaderAMenu = Array.from (document.querySelectorAll (".c-header--a__MENU"));
        const cHeaderASubmenuBack = Array.from (document.querySelectorAll (".c-header--a__SUBMENU_BACK"));
        const cHeaderASubmenu = Array.from (document.querySelectorAll (".c-header--a__SUBMENU"));

        function headerCoeffs () {
            document.body.style.setProperty ("--k-header-submenu-part", `${document.querySelector (".c-header--nav").offsetWidth / 4}px`);
        }

        if (document.querySelector (".c-header--nav")) {
            headerCoeffs ();
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
        }

        // 2.2 Открытие / закрытие субменю первого уровня

        cHeaderAMenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (a[i].nextElementSibling) {
                    if (!a[i].nextElementSibling.classList.contains ("__c-header--div__SUBMENU1")) {
                        a[i].classList.add ("__c-header--a__MENU");
                        a[i].nextElementSibling.classList.add ("__c-header--div__SUBMENU1");
                        setTimeout (() => {
                            a[i].nextElementSibling.classList.add ("__c-header--div__SUBMENU2");
                        }, 30);
                        cHeaderAMenu.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                            if (a1[i1].nextElementSibling) {
                                Array.from (a1[i1].nextElementSibling.querySelectorAll (".c-header--div__SUBMENU")).forEach ((v2, i2, a2) => {
                                    a2[i2].classList.remove ("__c-header--div__SUBMENU2", "__c-header--div__SUBMENU_HID");
                                    setTimeout (() => {
                                        a2[i2].classList.remove ("__c-header--div__SUBMENU1");
                                    }, 700);
                                });
                                a1[i1].classList.remove ("__c-header--a__MENU");
                                a1[i1].nextElementSibling.classList.remove ("__c-header--div__SUBMENU2", "__c-header--div__SUBMENU_HID");
                                setTimeout (() => {
                                    a1[i1].nextElementSibling.classList.remove ("__c-header--div__SUBMENU1");
                                }, 700);
                            }
                        });
                    } else {
                        a[i].classList.remove ("__c-header--a__MENU");
                        a[i].nextElementSibling.classList.remove ("__c-header--div__SUBMENU2", "__c-header--div__SUBMENU_HID");
                        setTimeout (() => {
                            a[i].nextElementSibling.classList.remove ("__c-header--div__SUBMENU1");
                        }, 700);
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
                        a[i].nextElementSibling.classList.add ("__c-header--div__SUBMENU1");
                        setTimeout (() => {
                            a[i].nextElementSibling.classList.add ("__c-header--div__SUBMENU2");
                        }, 30);
                        a[i].closest(".c-header--div__SUBMENU").classList.add ("__c-header--div__SUBMENU_HID");
                        const cHeaderASubmenuNeighbors = Array.from (a[i].parentNode.parentNode.querySelectorAll (":scope > .c-header--li__SUBMENU > .c-header--a__SUBMENU"));
                        cHeaderASubmenuNeighbors.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                            if (a1[i1].nextElementSibling) {
                                Array.from (a1[i1].nextElementSibling.querySelectorAll (".c-header--div__SUBMENU")).forEach ((v2, i2, a2) => {
                                    a2[i2].classList.remove ("__c-header--div__SUBMENU2", "__c-header--div__SUBMENU_HID");
                                    setTimeout (() => {
                                        a2[i2].classList.remove ("__c-header--div__SUBMENU1");
                                    }, 700);
                                });
                                a1[i1].nextElementSibling.classList.remove ("__c-header--div__SUBMENU2");
                                setTimeout (() => {
                                    a1[i1].nextElementSibling.classList.remove ("__c-header--div__SUBMENU1");
                                }, 700);
                            }
                        });
                    } else {
                        a[i].nextElementSibling.classList.remove ("__c-header--div__SUBMENU2");
                        setTimeout (() => {
                            a[i].nextElementSibling.classList.remove ("__c-header--div__SUBMENU1");
                        }, 700);
                        a[i].closest(".c-header--div__SUBMENU").classList.remove ("__c-header--div__SUBMENU_HID");
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
        const body = document.querySelector (".body");

        cHeaderCloseMobMenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                if (window.innerWidth < 1440) {
                    if (e.target !== e.currentTarget) return;
                    if (body) body.classList.remove ("__body__FIXED_MOB");
                    cHeaderSvgBurger?.classList.remove ("__c-header--svg__BURGER");
                    cHeaderUlMenu?.classList.remove ("__c-header--ul__MENU");
                    cHeaderRect1?.classList.remove ("__c-header--rect__1");
                    cHeaderRect2?.classList.remove ("__c-header--rect__2");
                    cHeaderRect3?.classList.remove ("__c-header--rect__3");
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
                                a[i].classList.remove ("__c-header--a__MENU");
                                a[i].nextElementSibling.classList.remove ("__c-header--div__SUBMENU2", "__c-header--div__SUBMENU_HID");
                                setTimeout (() => {
                                    a[i].nextElementSibling.classList.remove ("__c-header--div__SUBMENU1");
                                }, 700);
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

        if (cHeaderButtonSearchOpen && cHeaderFormSearch && cHeaderInputSearch && cHeaderDivSearchBack && cHeaderButtonSearchClose) {
            cHeaderButtonSearchOpen.addEventListener ("click", () => {
                cHeaderFormSearch.classList.add ("__c-header--form__SEARCH");
                cHeaderInputSearch.focus ();
                cHeaderDivSearchBack.classList.add ("__c-header--div__SEARCH_BACK1");
                setTimeout (() => {
                    cHeaderDivSearchBack.classList.add ("__c-header--div__SEARCH_BACK2");
                }, 30);
            });

            cHeaderButtonSearchClose.addEventListener ("click", () => {
                cHeaderFormSearch.classList.remove ("__c-header--form__SEARCH");
                cHeaderDivSearchBack.classList.remove ("__c-header--div__SEARCH_BACK2");
                setTimeout (() => {
                    if (!cHeaderDivSearchBack.classList.contains ("__c-header--div__SEARCH_BACK2")) {
                        cHeaderDivSearchBack.classList.remove ("__c-header--div__SEARCH_BACK1");
                    }
                }, 500);
            });

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
    }

});


