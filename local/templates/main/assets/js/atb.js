
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** ОБЩИЕ ДЛЯ ВСЕХ СТРАНИЦ ********** ---------- */


    const body = document.querySelector (".body");




    // 1. ОПРЕДЕЛЕНИЕ ВЕЛИЧИНЫ CSS-ПЕРЕМЕННОЙ --VH ДЛЯ ЕЕ ПРИМЕНЕНИЯ ВМЕСТО
    // ЕДИНИЦЫ ИЗМЕРЕНИЯ VH

    function cCommonUserVh () {
        let userVh = window.innerHeight / 100;
        document.documentElement.style.setProperty ("--uservh", `${userVh}px`);
    }

    cCommonUserVh ();
    
    function cCommonUserVhDebounce0 (cB, time) {
        let idTimer;
        return function () {
            clearTimeout (idTimer);
            idTimer = setTimeout (() => {
                cB();
            }, time);
        }
    }

    const cCommonUserVhDebounce1 = cCommonUserVhDebounce0 (cCommonUserVh, 1000);

    window.addEventListener ("resize", cCommonUserVhDebounce1);




    // 2. КНОПКА UP

    const cCommonButtonUp = document.querySelector (".c-common--button__UP");

    if (window.scrollY > 100) {
        cCommonButtonUp.classList.add ("__c-common--button__UP");
    } else {
        cCommonButtonUp.classList.remove ("__c-common--button__UP");
    }

    window.addEventListener ("scroll", () => {
        if (window.scrollY > 100) {
            cCommonButtonUp.classList.add ("__c-common--button__UP");
        } else {
            cCommonButtonUp.classList.remove ("__c-common--button__UP");
        }
    });

    cCommonButtonUp.addEventListener ("click", () => {
        window.scrollTo (0, 0);
    });




    // 3. ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

    const cdCommonMedia400 = window.matchMedia ("(min-width: 400px)");
    const cdCommonMedia511 = window.matchMedia ("(min-width: 511px)");
    const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
    const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
    const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
    const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");




    // 4. ОБРЕЗКА АБЗАЦЕВ ПО КОЛИЧЕСТВУ СТРОК НА АЙФОНАХ

    // --- Проверка на iOS ---
    // Функция для определения, является ли устройство iOS
    // function isIOS() {
    //     return true;
    //     // Проверяем, содержит ли userAgent 'iPad', 'iPhone', 'iPod'
    //     // Также проверяем, что это не macOS на Apple Silicon (где может быть 'Mac' и 'Safari')
    //     // navigator.standalone проверяет, запущено ли приложение как PWA
    //     const userAgent = navigator.userAgent || navigator.vendor || window.opera;
    //     const isIOSDevice = /iPad|iPhone|iPod/.test(userAgent);
    //     // Дополнительная проверка для исключения macOS на Apple Silicon в обычном Safari
    //     // window.MSStream проверяет Internet Explorer, которого нет на iOS, но его иногда используют как проверку
    //     // Более надёжная проверка - отсутствие 'Mac OS X' или проверка touch-устройств:
    //     const isLikelyIOS = isIOSDevice && !window.MSStream && !userAgent.includes('Mac OS X');
    //     // Или альтернативно: проверить, что это touch-устройство и содержит iOS
    //     // const isLikelyIOS = isIOSDevice && 'ontouchstart' in window && /WebKit/i.test(navigator.userAgent) && !/Edge/i.test(navigator.userAgent);

    //     // Для простоты используем базовую проверку isIOSDevice
    //     // Более сложные проверки могут быть нужны, если есть ложные срабатывания
    //     return isIOSDevice;
    // }

    // --- Объект настроек ---
    // const CONFIG = {
    //     '.c-header--p__SUBMENU_BOTTOM': {
    //         mobile: { maxLines: 3, lineHeight: 22 },
    //         desktop: { maxLines: 3, lineHeight: 22 }, 
    //         desktopWide: { maxLines: 3, lineHeight: 22 }
    //     },
    //     '.hm-cat--p__CARD_TEXT': {
    //         mobile: { maxLines: 0, lineHeight: 20 },
    //         desktop: { maxLines: 2, lineHeight: 20 }, 
    //         desktopWide: { maxLines: 3, lineHeight: 20 }
    //     },
    //     '.hm-ind--p__CARD_TEXT': {
    //         mobile: { maxLines: 2, lineHeight: 20 }, // Обрезать 2 строки на мобильных
    //         desktop: { maxLines: 2, lineHeight: 26 }, // Обрезать 2 строки на десктопе до 1920px
    //         desktopWide: { maxLines: 4, lineHeight: 26 } // Обрезать 4 строки на 1920px+
    //     },
    //     '.hm-hst--p__CARD_TEXT': {
    //         mobile: { maxLines: 2, lineHeight: 20 },
    //         desktop: { maxLines: 0, lineHeight: 26 }, 
    //         desktopWide: { maxLines: 4, lineHeight: 26 }
    //     },
    //     '.cd-use--div__SWIPER21_SLIDE .hm-ind--p__CARD_TEXT': {
    //         mobile: { maxLines: 0, lineHeight: 20 },
    //         desktop: { maxLines: 0, lineHeight: 26 }, 
    //         desktopWide: { maxLines: 2, lineHeight: 26 }
    //     },
    //     '.cd-use--div__SWIPER22_SLIDE .hm-des--p__CARD_TEXT': {
    //         mobile: { maxLines: 0, lineHeight: 20 },
    //         desktop: { maxLines: 4, lineHeight: 26 }, 
    //         desktopWide: { maxLines: 0, lineHeight: 26 }
    //     },
        
    //     // Можно добавить другие классы по аналогии
    // };

    // const ELLIPSIS = '...';

    /*
     * Определяет максимальную высоту и высоту строки для заданного селектора на основе медиа-запросов
     * @param {string} selector - CSS селектор элемента
     * @returns {Object} Объект с maxHeight и lineHeight, или {maxHeight: null, lineHeight: null}, если отключено
     */
    // function getMaxDimensionsForSelector(selector) {
    //     const settings = CONFIG[selector];
    //     if (!settings) {
    //         console.warn(`Конфигурация для селектора "${selector}" не найдена.`);
    //         return { maxHeight: null, lineHeight: null };
    //     }

    //     let currentConfig = settings.mobile; // по умолчанию мобильная версия

    //     if (window.matchMedia('(min-width: 1920px)').matches) {
    //         currentConfig = settings.desktopWide;
    //     } else if (window.matchMedia('(min-width: 1440px)').matches) {
    //         currentConfig = settings.desktop;
    //     }

    //     // Проверяем, отключена ли обрезка для текущего разрешения
    //     if (!currentConfig || currentConfig.maxLines == null || currentConfig.maxLines <= 0) {
    //         return { maxHeight: null, lineHeight: null };
    //     }

    //     return {
    //         maxHeight: currentConfig.lineHeight * currentConfig.maxLines,
    //         lineHeight: currentConfig.lineHeight
    //     };
    // }

    /*
     * Обрезает текст в указанных элементах по селектору
     * @param {string} selector - CSS селектор для элементов
     */
    // function truncateElements(selector) {
    //     const elements = document.querySelectorAll(selector);
    //     if (elements.length === 0) {
    //         return;
    //     }

    //     const { maxHeight, lineHeight } = getMaxDimensionsForSelector(selector);

    //     // Если обрезка отключена для текущего разрешения, просто восстанавливаем оригинальный текст
    //     if (maxHeight === null) {
    //         elements.forEach(element => {
    //             if (element.dataset.originalText) {
    //                 element.textContent = element.dataset.originalText;
    //             }
    //             element.style.overflow = '';
    //             element.style.maxHeight = '';
    //             element.style.lineHeight = '';
    //             element.style.wordBreak = '';
    //             element.style.overflowWrap = '';
    //             element.style.whiteSpace = '';
    //         });
    //         return;
    //     }

    //     elements.forEach(function(element) {
    //         if (!element.dataset.originalText) {
    //             element.dataset.originalText = (element.textContent || element.innerText).trim();
    //         }
    //         const originalText = element.dataset.originalText;

    //         element.style.overflow = '';
    //         element.style.display = '';
    //         element.style.webkitLineClamp = '';
    //         element.style.webkitBoxOrient = '';

    //         element.style.overflow = 'hidden';
    //         element.style.maxHeight = maxHeight + 'px';
    //         element.style.lineHeight = lineHeight + 'px';
    //         element.style.wordBreak = 'normal';
    //         element.style.overflowWrap = 'break-word';
    //         element.style.whiteSpace = 'normal';

    //         element.textContent = originalText;

    //         if (element.scrollHeight > element.clientHeight) {
    //             let text = originalText;
    //             let lower = 0;
    //             let upper = text.length;
    //             let bestFit = '';

    //             while (lower < upper) {
    //                 const middle = Math.floor((lower + upper) / 2);
    //                 element.textContent = text.substr(0, middle) + ELLIPSIS;
    //                 element.offsetHeight;

    //                 if (element.scrollHeight <= element.clientHeight) {
    //                     bestFit = element.textContent;
    //                     lower = middle + 1;
    //                 } else {
    //                     upper = middle;
    //                 }
    //             }

    //             let truncatedText = bestFit;
    //             const ellipsisIndex = truncatedText.lastIndexOf(ELLIPSIS);

    //             if (ellipsisIndex > 0) {
    //                 const textBeforeEllipsis = truncatedText.substring(0, ellipsisIndex);
    //                 const lastSpaceIndex = textBeforeEllipsis.lastIndexOf(' ');

    //                 if (lastSpaceIndex > 0) {
    //                     truncatedText = textBeforeEllipsis.substring(0, lastSpaceIndex).trim() + ELLIPSIS;
    //                 }
    //             }

    //             element.textContent = truncatedText;
    //         }
    //     });
    // }

    /*
     * Обрезает текст для ВСЕХ селекторов, определенных в CONFIG
     */
    // function truncateAllElements() {
    //     Object.keys(CONFIG).forEach(selector => {
    //         truncateElements(selector);
    //     });
    // }

    // --- ЗАПУСК СКРИПТА ТОЛЬКО НА iOS ---
    // if (isIOS()) {
    //     // console.log('iOS detected, running truncation script.');
    //     requestAnimationFrame(truncateAllElements);

    //     let resizeTimer;
    //     window.addEventListener('resize', function() {
    //         if (isIOS()) { // Проверяем снова при ресайзе, хотя обычно не меняется
    //             clearTimeout(resizeTimer);
    //             resizeTimer = setTimeout(() => {
    //                 requestAnimationFrame(truncateAllElements);
    //             }, 250);
    //         }
    //     });
    // }



    
    

    







    /* ---------- ********** HEADER ********** ---------- */


    {
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







    /* ---------- ********** FOOTER ********** ---------- */


    {
        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ 1 УРОВНЯ

        const cFooterButton1 = Array.from (document.querySelectorAll (".c-footer--button__1"));
        const cFooterDiv01 = Array.from (document.querySelectorAll (".c-footer--div__01"));



        cFooterButton1.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!a[i].classList.contains ("__c-footer--button__1")) {
                    a[i].classList.add ("__c-footer--button__1");
                    cFooterDiv01[i].classList.add ("__c-footer--div__01");
                    
                    cFooterButton1.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__c-footer--button__1");
                    });
                    cFooterDiv01.filter (x => x !== cFooterDiv01[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__c-footer--div__01");
                    });
                } else {
                    a[i].classList.remove ("__c-footer--button__1");
                    cFooterDiv01[i].classList.remove ("__c-footer--div__01");
                }
                
            });
        });




        // 2. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ 2 УРОВНЯ

        const cFooterDiv0 = document.querySelector (".c-footer--div__0");
        const cFooterButton2 = Array.from (document.querySelectorAll (".c-footer--button__2"));
        const cFooterLi2 = Array.from (document.querySelectorAll (".c-footer--li__2:has(.c-footer--ul__3)"));



        cFooterButton2.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!a[i].classList.contains ("__c-footer--button__2")) {
                    
                    cFooterButton2.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__c-footer--button__2");
                    });
                    cFooterLi2.filter (x => x !== cFooterLi2[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__c-footer--li__2");
                    });

                    a[i].classList.add ("__c-footer--button__2");
                    cFooterLi2[i].classList.add ("__c-footer--li__2");
                } else {
                    a[i].classList.remove ("__c-footer--button__2");
                    cFooterLi2[i].classList.remove ("__c-footer--li__2");
                }
                cFooterDiv0.classList.add ("__c-footer--div__0");
            });
        });
    }














    /* ---------- ********** |||||||||| ДОМАШНЯЯ СТРАНИЦА |||||||||| ********** ---------- */


    if (document.querySelector ("#home")) {

        /* ---------- ********** ОБЩИЕ ДЛЯ ВСЕЙ СТРАНИЦЫ ********** ---------- */


        // 1. АНИМАЦИЯ ПРИ СКРОЛЛЕ 

        const scrolls = document.querySelectorAll('.__C-SCRL');

        const callback = (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove ("__C-SCRL");
                    if (entry.target.classList.contains ("hm-cat--article__CARD")) {
                        setTimeout (() => {
                            entry.target.classList.add ("__hm-cat--article__CARD");
                        }, 700);
                    }
                    observer.unobserve(entry.target);
                }
            });
        }

        const options = {
            rootMargin: '-10px 0px 0px 0px',
            threshold: 0,
        }

        const observer = new IntersectionObserver(callback, options)

        scrolls.forEach((v) => observer.observe(v));

        
        




        /* ---------- ********** СЕКЦИЯ HERO ********** ---------- */


        // 1. SWIPER

        const hmHeroDivSwiper0 = document.querySelector (".hm-hero--div__SWIPER");

        const hmHeroDivSwiper = new Swiper (".hm-hero--div__SWIPER", {
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 7000
            },
            breakpoints: {
                320: {
                    speed: 1050
                },
                1440: {
                    speed: 1050
                }
            },
            navigation: {
                nextEl: '.hm-hero--button__NEXT',
                prevEl: '.hm-hero--button__PREV',
            },
            pagination: {
                el: '.hm-hero--div__SWIPER_PAGINATION',
                type: 'bullets',
                clickable: true,
            },
            on: {
                init() {
                    this.el.addEventListener('mouseenter', () => {
                        this.autoplay.stop();
                    });

                    this.el.addEventListener('mouseleave', () => {
                        this.autoplay.start();
                    });
                }
            },
        });




        // 2. СЧЕТЧИКИ

        // 2.1 Обнуление для скрытых слайдов

        function hmHeroCounterHide () {
            const hmHeroSpanCounts = Array.from (document.querySelectorAll (".hm-hero--span__COUNT"));
            hmHeroSpanCounts.forEach ((v, i, a) => {
                a[i].textContent = "0 +";
            });
        }


        // 2.2 Первый

        function hmHeroCounter1 () {
            const hmHeroSpanCount1 = document.querySelector (".swiper-slide-active .hm-hero--div__COUNT:first-of-type .hm-hero--span__COUNT");
            
            let hmHeroSpanNumber1 = 0;
            let localFormat = new Intl.NumberFormat("ru-RU");
            let dS = parseInt (hmHeroSpanCount1.dataset.finl);

            let time;
            let count;
            
            if (dS <= 100) {
                time = 1000 / dS;
                count = 1;
            } else {
                time = 10;
                count = dS / 100;
            }

            let hmHeroClear1 = setInterval (() => {
                hmHeroSpanNumber1 = hmHeroSpanNumber1 + count;
                hmHeroSpanCount1.textContent = `${localFormat.format (hmHeroSpanNumber1)} +`;
                if (hmHeroSpanNumber1 == dS) {
                    clearInterval (hmHeroClear1);
                }
            }, time);
        }

        hmHeroCounter1 ();

        
        // 2.3 Второй

        function hmHeroCounter2 () {
            const hmHeroSpanCount2 = document.querySelector (".swiper-slide-active .hm-hero--div__COUNT:last-of-type .hm-hero--span__COUNT");

            let hmHeroSpanNumber2 = 0;
            let localFormat = new Intl.NumberFormat("ru-RU");
            let dS = parseInt (hmHeroSpanCount2.dataset.finl);

            let time;
            let count;

            if (dS <= 100) {
                time = 1000 / dS;
                count = 1;
            } else {
                time = 10;
                count = dS / 100;
            }

            let hmHeroClear2 = setInterval (() => {
                hmHeroSpanNumber2 = hmHeroSpanNumber2 + count;
                hmHeroSpanCount2.textContent = `${localFormat.format (hmHeroSpanNumber2)} +`;
                if (hmHeroSpanNumber2 == dS) {
                    clearInterval (hmHeroClear2);
                }
            }, time);
        }

        hmHeroCounter2 ();


        // 2.4 Запуск счетчика при пролистывании и обнуление счетчиков на скрытых слайдах

        hmHeroDivSwiper.on ("slideChangeTransitionEnd", () => {
            hmHeroCounterHide ()
            hmHeroCounter1 ();
            hmHeroCounter2 ();
        });




        // 3. АНИМАЦИЯ (СДВИГИ С ПРОЯВЛЕНИЯМИ) ЭЛЕМЕНТОВ

        // 3.1 При загрузке

        function hmHeroAnimation () {
            hmHeroDivSwiper0.querySelector (".swiper-slide-active").classList.add ("__hm-hero--div__SWIPER_SLIDE");
            const freeSlides = Array.from (hmHeroDivSwiper0.querySelectorAll (".hm-hero--div__SWIPER_SLIDE:not(.swiper-slide-active)"));
            freeSlides.forEach ((v, i, a) => {
                a[i].classList.remove ("__hm-hero--div__SWIPER_SLIDE");
            });
        }

        hmHeroAnimation ();


        // 3.2 При пролистывании слайдера

        hmHeroDivSwiper.on ("slideChangeTransitionStart", () => {
            setTimeout (hmHeroAnimation, 850);
        });


        






        /* ---------- ********** СЕКЦИЯ CAT ********** ---------- */


        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ, 
        // ВЫБОР ПЕРВОЙ РАДИОКНОПКИ В ОТКРЫВШЕМСЯ СУБМЕНЮ,
        // СНЯТИЕ ВЫБОРА СО ВСЕХ РАДИОКНОПОК В ЗАКРЫВАЮЩИХСЯ СУБМЕНЮ

        const hmCatLiMenuItem = Array.from (document.querySelectorAll (".hm-cat--li__MENU_ITEM"));
        const hmCatButtonMenuItem = Array.from (document.querySelectorAll (".hm-cat--button__MENU_ITEM"));
        const hmCatFormSubmenu = Array.from (document.querySelectorAll (".hm-cat--form__SUBMENU"));
        const hmCatDivContent = document.querySelector (".hm-cat--div__CONTENT");
        
    

        hmCatButtonMenuItem.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                
                // 1.1 Открытие субменю

                if (!hmCatLiMenuItem[i].classList.contains ("__hm-cat--li__MENU_ITEM")) {
                    if (window.innerWidth < 1440) {
                        hmCatLiMenuItem[i].classList.add ("__hm-cat--li__MENU_ITEM");
                    } else {
                        hmCatLiMenuItem[i].classList.add ("__hm-cat--li__MENU_ITEM");
                    }
                    
                    

                    // 1.2 Выбор первой радиокнопки в открывшемся субменю

                    if (hmCatLiMenuItem[i].querySelector (".hm-cat--label__SUBMENU:first-of-type > .hm-cat--input__SUBMENU")) {
                        hmCatLiMenuItem[i].querySelector (".hm-cat--label__SUBMENU:first-of-type").click ();
                    }
                    
                    // 1.3 Закрытие остальных субменю

                    hmCatLiMenuItem.filter (x => x !== hmCatLiMenuItem[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__hm-cat--li__MENU_ITEM");

                        // 1.4 Снятие выбора с радиокнопки в закрывающемся меню

                        if (a1[i1].querySelector (".hm-cat--input__SUBMENU:checked")) {
                            const a = a1[i1].querySelector (".hm-cat--input__SUBMENU:checked");
                            a.checked = false;
                        } 
                    });
                } else {
                    // 1.5 Закрытие субменю
                    if (window.innerWidth < 1440) {
                        hmCatLiMenuItem[i].classList.remove ("__hm-cat--li__MENU_ITEM");
                    }
                }
            });
        });


        // 1.6 Открытие первого субменю при загрузке страницы

        hmCatButtonMenuItem[0].click ();


        // 1.7 Выравнивание высоты form для десктопов по блоку с контентом

        function hmCatFormHeight () {
            if (window.innerWidth > 1439) {
                hmCatFormSubmenu.forEach ((v, i, a) => {
                    setTimeout (() => {
                        a[i].style.maxHeight = getComputedStyle (hmCatDivContent).height;
                    }, 800);
                    
                });
            } else {
                hmCatFormSubmenu.forEach ((v, i, a) => {
                    setTimeout (() => {
                        a[i].style.maxHeight = null;
                    }, 50);
                });
            }
        }

        // !!! 

        // Если возникнет вероятность того, что боковое меню в десктопе в Каталоге может превысить
        // по высоте основной блок - раскомментировать далее до 1.8 
        // и содержимое пункта 1.8:

        // hmCatFormHeight ();

        // function hmCatDebounce (cB, time) {
        //     let idTimer;
        //     return function () {
        //         clearTimeout (idTimer);
        //         idTimer = setTimeout (() => {
        //             cB();
        //         }, time);
        //     }
        // }

        // const hmCatFormDebounce = hmCatDebounce (hmCatFormHeight, 100);

        // window.addEventListener ("resize", hmCatFormDebounce);


        // 1.8 Скролл элементов субменю до видимой части
        
        // const hmCatLabelSubmenu = Array.from (document.querySelectorAll (".hm-cat--label__SUBMENU"));

        // hmCatLabelSubmenu.forEach ((v, i, a) => {
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




        // 2. СЛАЙДЕР КАРТОЧЕК ТОВАРОВ

        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

        function hmCatImageSwiper () {

            // Слайдер для изображений товара (один скрипт для всего перечня товаров)

            const hmCatDivCardImage = Array.from (document.querySelectorAll (".hm-cat--div__CARD_IMAGE"), x => {
                return new Swiper (x.querySelector (".hm-cat--div__SWIPER"), {
                    loop: true,
                    speed: 700,
                    grabCursor: true,
                    pagination: {
                        el: x.querySelector (".hm-cat--div__SWIPER_PAGINATION"),
                        type: 'bullets',
                        clickable: true,
                    },
                });
            });


            const hmCatDivCardImage0 = Array.from (document.querySelectorAll (".hm-cat--div__CARD_IMAGE"));

            hmCatDivCardImage0.forEach ((v, i, a) => {
                const num = Array.from (a[i].querySelectorAll (".hm-cat--div__SWIPER_SLIDE"));

                num.forEach ((v1, i1, a1) => {
                    let div = document.createElement ("div");
                    div.className = "hm-cat--div__CARD_SENSOR_ITEM";
                    a[i].querySelector (".hm-cat--div__CARD_SENSOR").append (div);
                    
                    div.addEventListener ("mouseover", () => {
                        hmCatDivCardImage[i].slideTo (i1);
                    });
                });
            });
        
        }

        hmCatImageSwiper ();




        // 3. КНОПКИ ВЫБОРА ТОВАРА ДЛЯ СРАВНЕНИЯ ИЛИ В ИЗБРАННОЕ

        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

        function hmCatCardButtons () {
            const hmCatButtonCardCom = Array.from (document.querySelectorAll (".hm-cat--button__CARD_COMPARISON"));
            const hmCatButtonCardFav = Array.from (document.querySelectorAll (".hm-cat--button__CARD_FAVOURITES"));

            hmCatButtonCardCom.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.toggle ("__hm-cat--button__CARD_COMPARISON");
                });
            });
            hmCatButtonCardFav.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.toggle ("__hm-cat--button__CARD_FAVOURITES");
                });
            });
        }

        hmCatCardButtons ();




        // 4. РАЗБИВКА ЧИСЕЛ В ЦЕННИКАХ ПО ТЫСЯЧАМ

        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

        function hmCatPriceSplit () {
            const localFormat = new Intl.NumberFormat("ru-RU");

            const hmCatPrices = Array.from (document.querySelectorAll (".hm-cat--span__CARD_PRICE_CUR:first-of-type, .hm-cat--span__CARD_PRICE_OLD:first-of-type"));
            hmCatPrices.forEach ((v, i, a) => {
                a[i].textContent = `${localFormat.format (a[i].textContent)}`;
            });
        }

        hmCatPriceSplit ();







        /* ---------- ********** СЕКЦИЯ IND ********** ---------- */


        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ 
        // (на самом деле - меню, но, поскольку оно конечное, 
        // во избежание путаницы, назвал "субменю", как и другие конечные списки для выбора,
        // состоящие из радиокнопок)


        const hmIndDivHead = document.querySelector (".hm-ind--div__HEAD");
        const hmIndSvgSubmenu = document.querySelector (".hm-ind--svg__SUBMENU");
        const hmIndFormSubmenu = document.querySelector (".hm-ind--form__SUBMENU");
        const hmIndDivContent = document.querySelector (".hm-ind--div__CONTENT");
        const hmIndDivSubmenuBack = document.querySelector (".hm-ind--div__SUBMENU_BACK");


        // 1.1 Выбор первой радиокнопки в субменю при загрузке страницы

        hmIndFormSubmenu.querySelector (".hm-ind--label__SUBMENU:first-of-type").click ();
        

        hmIndDivHead.addEventListener ("click", () => {
        
            // 1.2 Открытие / закрытие субменю

            if (!hmIndFormSubmenu.classList.contains ("__hm-ind--form__SUBMENU")) {
                hmIndFormSubmenu.classList.add ("__hm-ind--form__SUBMENU");
                hmIndSvgSubmenu.classList.add ("__hm-ind--svg__SUBMENU");
            } else {
                hmIndFormSubmenu.classList.remove ("__hm-ind--form__SUBMENU");
                hmIndSvgSubmenu.classList.remove ("__hm-ind--svg__SUBMENU");
            }
        });


        // 1.3 Выравнивание высоты form для десктопов по блоку с контентом
        
        function hmIndFormHeight () {
            if (window.innerWidth > 1439) {
                setTimeout (() => {
                    hmIndFormSubmenu.style.maxHeight = getComputedStyle (hmIndDivContent).height;
                    hmIndDivSubmenuBack.style.top = `${parseInt (getComputedStyle (hmIndDivContent).height) + 108}px`;
                }, 800);
            } else {
                setTimeout (() => {
                    hmIndFormSubmenu.style.maxHeight = null;
                }, 50);
            }
        }

        hmIndFormHeight ();


        function hmIndDebounce (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const hmIndFormDebounce = hmIndDebounce (hmIndFormHeight, 100);

        window.addEventListener ("resize", hmIndFormDebounce);


        // 1.4 Скролл элементов субменю до видимой части
        
        const hmIndLabelSubmenu = Array.from (document.querySelectorAll (".hm-ind--label__SUBMENU"));


        hmIndLabelSubmenu.forEach ((v, i, a) => {
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














    /* ---------- ********** |||||||||| СТРАНИЦА КАРТОЧКА СЕРИИ |||||||||| ********** ---------- */


    if (document.querySelector ("#card")) {
        
        /* ---------- ********** ОБЩИЕ ДЛЯ ВСЕЙ СТРАНИЦЫ ********** ---------- */


        // 1. АНИМАЦИЯ ПРИ СКРОЛЛЕ 

        const scrolls = document.querySelectorAll('.__C-SCRL');

        const callback = (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove ("__C-SCRL");
                    if (entry.target.classList.contains ("hm-cat--article__CARD")) {
                        setTimeout (() => {
                            entry.target.classList.add ("__hm-cat--article__CARD");
                        }, 700);
                    }
                    observer.unobserve(entry.target);
                }
            });
        }

        const options = {
            rootMargin: '-40px 0px 0px 0px',
            threshold: 0,
        }

        const observer = new IntersectionObserver(callback, options)

        scrolls.forEach((v) => observer.observe(v));




        // 2. НАСТРОЙКИ БЛОКА С НАВИГАЦИЕЙ СЛЕВА

        const cdHeroDivLeftCont = document.querySelector (".cd-hero--div__LEFT_CONT");
        const cdHeroAAnchsSpecs = document.querySelector (".cd-hero--a__ANCHS._SPECS");
        const cdHeroAAnchsAbt = document.querySelector (".cd-hero--a__ANCHS._ABT");

        
        function showCdHeroDivTop2 () {
            if (window.scrollY > 125 && window.scrollY < document.body.scrollHeight - 1700) {
                cdHeroDivLeftCont.classList.add ("__cd-hero--div__LEFT_CONT");
                cdHeroDivLeftCont.classList.remove ("__cd-hero--div__LEFT_CONT1");
            } else if (window.scrollY > document.body.scrollHeight - 1699) {
                cdHeroDivLeftCont.classList.add ("__cd-hero--div__LEFT_CONT1");
            } else {
                cdHeroDivLeftCont.classList.remove ("__cd-hero--div__LEFT_CONT");
                cdHeroDivLeftCont.classList.remove ("__cd-hero--div__LEFT_CONT1");
            }
        }

        showCdHeroDivTop2 ();

        window.addEventListener ("scroll", showCdHeroDivTop2);







        /* ---------- ********** СЕКЦИЯ HERO ********** ---------- */


        // 1. КНОПКИ ВЫБОРА ТОВАРА ДЛЯ СРАВНЕНИЯ ИЛИ В ИЗБРАННОЕ

        function cdHeroCardButtons () {
            const cdHeroButtonCardCom = Array.from (document.querySelectorAll (".cd-hero--button__CARD_COMPARISON"));
            const cdHeroButtonCardFav = Array.from (document.querySelectorAll (".cd-hero--button__CARD_FAVOURITES"));

            cdHeroButtonCardCom.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.toggle ("__cd-hero--button__CARD_COMPARISON");
                });
            });
            cdHeroButtonCardFav.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.toggle ("__cd-hero--button__CARD_FAVOURITES");
                });
            });
        }

        cdHeroCardButtons ();
        



        // 2. ПЕРЕНОС ИЗОБРАЖЕНИЙ В ДЕСКТОПНОЙ ВЕРСИИ В ПРАВЫЙ БЛОК

        const cdHeroDivParams = document.querySelector (".cd-hero--div__PARAMS");
        const cdHeroDivImages = document.querySelector (".cd-hero--div__IMAGES");
        const cdHeroDivRight = document.querySelector (".cd-hero--div__RIGHT");


        if (cdCommonMedia1440.matches && !cdHeroDivRight.contains (cdHeroDivImages)) {
            cdHeroDivRight.append (cdHeroDivImages);
        }

        cdCommonMedia1440.addEventListener ("change", function (e) {
            if (e.matches && !cdHeroDivRight.contains (cdHeroDivImages)) {
                cdHeroDivRight.append (cdHeroDivImages);
            } else if (!e.matches && !cdHeroDivLeftCont.contains (cdHeroDivImages)) {
                cdHeroDivParams.after (cdHeroDivImages);
            }
        });




        // 3. ПОПАП

        // 3.1 Копирование содержимого h1 в верх попапа

        const cdHeroH1 = document.querySelector (".cd-hero--h1");
        const cdHeroPPopupTop = document.querySelector (".cd-hero--p__POPUP_TOP");


        cdHeroPPopupTop.textContent = cdHeroH1.textContent;




        // 3.2 Слайдер

        const cdHeroDivSwiper = new Swiper (".cd-hero--div__SWIPER", {
            loop: false,
            grabCursor: true,
            navigation: {
                nextEl: '.cd-hero--button__NEXT',
                prevEl: '.cd-hero--button__PREV',
            },
            pagination: {
                el: '.cd-hero--div__SWIPER_PAGINATION',
                type: 'bullets',
                clickable: true,
            },
        });


        // 3.2.1 Копирование изображений в кнопки пагинации 
        // !!! (Это временное решение. При ИНТЕГРАЦИИ пройтись по массиву cdHeroDivSwiperPagBuls
        // - это массив кнопок пагинации и загрузить изображения меньшего разрешения (если нужно)).

        const cdHeroImgSwiperImages = Array.from (document.querySelectorAll (".cd-hero--img__SWIPER_IMAGE"));
        const cdHeroVideo = Array.from (document.querySelectorAll (".cd-hero--video"));
        const cdHeroDivSwiperPagBuls = Array.from (document.querySelectorAll(".cd-hero--div__SWIPER_PAGINATION .swiper-pagination-bullet"));


        cdHeroImgSwiperImages.forEach ((v, i, a) => {
            let clone = a[i].cloneNode (true);
            cdHeroDivSwiperPagBuls[i].append (clone);
        });

        cdHeroDivSwiperPagBuls.forEach ((v, i, a) => {
            if (!a[i].hasChildNodes() && i < (a.length - 1)) {
                a[i].classList.add ("cd-hero__VID");
            } else if (!a[i].hasChildNodes() && i == (a.length - 1)) {
                a[i].classList.add ("cd-hero__3D");
            }
        });



        // 3.2.2 Раскрытие полного списка кнопок

        const cdHeroDivSwiperPag = document.querySelector (".cd-hero--div__SWIPER_PAGINATION");
        const cdHeroButtonPopupMore = document.querySelector (".cd-hero--button__POPUP_MORE");
        const cdHeroButtonPopupLess = document.querySelector (".cd-hero--button__POPUP_LESS");


        // 3.2.2.1 Скрытие лишних кнопок при их наличии

        cdHeroDivSwiperPagBuls.forEach ((v, i, a) => {
            if (i > 7 && a[i].querySelector ("img")) {
                a[i].classList.add ("__cd-hero__OVER");
            }
        });


        // 3.2.2.2 Появление кнопки "Показать больше"

        function cdHeroPag () {
            if (cdHeroDivSwiperPagBuls.length > 14) {
                cdHeroButtonPopupMore.classList.add ("__cd-hero--button__POPUP_MORE");
                cdHeroDivSwiperPagBuls[cdHeroDivSwiperPagBuls.length - 1].classList.add ("__cd-hero__3D");
                cdHeroDivSwiperPagBuls[cdHeroDivSwiperPagBuls.length - 1].append (cdHeroButtonPopupMore);
            }
        }

        cdHeroPag ();


        // 3.2.2.3 Программирование кнопки "Показать больше"

        cdHeroButtonPopupMore.addEventListener ("click", (e) => {
            e.stopPropagation ();
            cdHeroDivSwiperPagBuls.forEach ((v, i, a) => {
                a[i].classList.remove ("__cd-hero__OVER");
            });
            cdHeroButtonPopupMore.classList.remove ("__cd-hero--button__POPUP_MORE");
            cdHeroDivSwiperPagBuls[cdHeroDivSwiperPagBuls.length - 1].append (cdHeroButtonPopupLess);
            cdHeroButtonPopupLess.classList.add ("__cd-hero--button__POPUP_LESS");
        });


        // 3.2.2.4 Раскрытие допменю при листании слайдера

        cdHeroDivSwiper.on ("slideChange", () => {
            if (cdHeroDivSwiper.activeIndex > 7 && cdHeroDivSwiperPagBuls.length > 14 && cdHeroDivSwiper.activeIndex < cdHeroDivSwiperPagBuls.length - 3) {
                cdHeroButtonPopupMore.click ();
            }
        });


        // 3.2.2.5 Программирование кнопки "Показать меньше"

        cdHeroButtonPopupLess.addEventListener ("click", (e) => {
            e.stopPropagation ();
            cdHeroDivSwiperPagBuls.forEach ((v, i, a) => {
                if (i > 7 && a[i].querySelector ("img")) {
                    a[i].classList.add ("__cd-hero__OVER");
                }
            });
            cdHeroButtonPopupMore.classList.add ("__cd-hero--button__POPUP_MORE");
            cdHeroButtonPopupLess.classList.remove ("__cd-hero--button__POPUP_LESS");
        });



        // 3.2.3 Автопрокрутка пагинации

        // 3.2.3.1 Горизонтальной (до 1440)

        function cdHeroDivSwiperPagScroll () {
            const cdHeroSpanActive = document.querySelector (".cd-hero--div__SWIPER_PAGINATION .swiper-pagination-bullet-active");

            if (cdHeroSpanActive.getBoundingClientRect().right > cdHeroDivSwiperPag.getBoundingClientRect().right) {
                cdHeroDivSwiperPag.scrollLeft = cdHeroSpanActive.offsetLeft + cdHeroSpanActive.offsetWidth - cdHeroDivSwiperPag.offsetWidth;
            } else if (cdHeroSpanActive.getBoundingClientRect().left < cdHeroDivSwiperPag.getBoundingClientRect().left) {
                cdHeroDivSwiperPag.scrollLeft = cdHeroSpanActive.offsetLeft;
            }
        }

        cdHeroDivSwiper.on ("slideChange", cdHeroDivSwiperPagScroll);

        // 3.2.3.2 Вертикальной (от 1440)

        function cdHeroDivSwiperPagScroll1 () {
            const cdHeroSpanActive = document.querySelector (".cd-hero--div__SWIPER_PAGINATION .swiper-pagination-bullet-active");

            if (cdHeroSpanActive.getBoundingClientRect().top < cdHeroDivSwiperPag.getBoundingClientRect().top) {
                cdHeroDivSwiperPag.scrollTop = cdHeroSpanActive.offsetTop;

            } else if (cdHeroSpanActive.getBoundingClientRect().bottom > cdHeroDivSwiperPag.getBoundingClientRect().bottom) {
                cdHeroDivSwiperPag.scrollTop = cdHeroSpanActive.offsetTop + cdHeroSpanActive.offsetHeight - cdHeroDivSwiperPag.offsetHeight;
            }
        }

        cdHeroDivSwiper.on ("slideChange", cdHeroDivSwiperPagScroll1);



        // 3.2.4 Кнопки увеличения / уменьшения изображений

        const cdHeroDivSwiper0 = document.querySelector (".cd-hero--div__SWIPER");
        const cdHeroButtonPlus = document.querySelector (".cd-hero--button__PLUS");
        const cdHeroButtonMinus = document.querySelector (".cd-hero--button__MINUS");


        cdHeroButtonPlus.addEventListener ("click", () => {
            const activeImage = cdHeroDivSwiper0.querySelector (".swiper-slide-active img");
            activeImage.classList.add ("__cd-hero--img__SWIPER_IMAGE");
        });
        cdHeroButtonMinus.addEventListener ("click", () => {
            const activeImage = cdHeroDivSwiper0.querySelector (".swiper-slide-active img");
            activeImage.classList.remove ("__cd-hero--img__SWIPER_IMAGE");
        });

        // 3.2.4.1 Сброс при перелистывании
        
        cdHeroDivSwiper.on ("slideChange", function () {
            const zoomImages = Array.from (cdHeroDivSwiper0.querySelectorAll (".__cd-hero--img__SWIPER_IMAGE"));
            zoomImages.forEach ((v, i, a) => {
                a[i].classList.remove ("__cd-hero--img__SWIPER_IMAGE");
            });
        });

    


        // 3.2.5 Включение 3d-обзора

        cdHeroDivSwiper.on ("slideChange", () => {
            if (cdHeroDivSwiper.activeIndex == cdHeroDivSwiperPagBuls.length - 1) {
                if (!document.querySelector ("script[type='importmap']")) {
                    const myScriptMap = document.createElement ("script");
                    myScriptMap.setAttribute ("type", "importmap");
                    myScriptMap.innerHTML = `
                    {
                        "imports": {
                            "three": "./3d/build/three.module.js",
                            "orbitcontrolls": "./3d/build/OrbitControls.js",
                            "objectloader": "./3d/build/OBJLoader.js",
                            "gltfloader": "./3d/build/GLTFLoader.js"
                        }
                    }`
                    document.head.append (myScriptMap);
                    
                    const myScript = document.createElement ("script");
                    myScript.setAttribute ("src", "3d/canvas3d.js");
                    myScript.setAttribute ("type", "module");
                    document.body.append (myScript);
                }
            }
        });



        // 3.3 Открытие и закрытие попапа

        const cdHeroButtonImagesTopCont = document.querySelector (".cd-hero--button__IMAGES_TOP_CONT");
        const cdHeroDivPopup = document.querySelector (".cd-hero--div__POPUP");
        const cdHeroButtonImagescdHeroImg1 = document.querySelector (".cd-hero--button__IMAGES.cd-hero__IMG:first-of-type");
        const cdHeroButtonImagescdHeroImg2 = document.querySelector (".cd-hero--button__IMAGES.cd-hero__IMG:nth-of-type(2)");
        const cdHeroButtonImagescdHeroVid = document.querySelector (".cd-hero--button__IMAGES.cd-hero__VID");
        const cdHeroButtonImagescdHero3d = document.querySelector (".cd-hero--button__IMAGES.cd-hero__3D");
        const cdHeroButtonImagescdHeroMore = document.querySelector (".cd-hero--button__IMAGES.cd-hero__MORE");
        const cdHeroButtonPopupClose = document.querySelector (".cd-hero--button__POPUP_CLOSE");
        const cdHeroDivPopupBody = document.querySelector (".cd-hero--div__POPUP_BODY");


        cdHeroButtonImagesTopCont.addEventListener ("click", (e) => {
            e.stopPropagation ();
            cdHeroDivPopup.classList.add ("__cd-hero--div__POPUP");
            cdHeroDivSwiper.slideTo (0);
        });

        cdHeroButtonImagescdHeroImg1.addEventListener ("click", (e) => {
            e.stopPropagation ();
            cdHeroDivPopup.classList.add ("__cd-hero--div__POPUP");
            cdHeroDivSwiper.slideTo (0);
        });

        cdHeroButtonImagescdHeroImg2.addEventListener ("click", (e) => {
            e.stopPropagation ();
            cdHeroDivPopup.classList.add ("__cd-hero--div__POPUP");
            cdHeroDivSwiper.slideTo (1);
        });

        cdHeroButtonImagescdHeroVid.addEventListener ("click", (e) => {
            e.stopPropagation ();
            cdHeroDivPopup.classList.add ("__cd-hero--div__POPUP");
            cdHeroDivSwiper.slideTo (cdHeroDivSwiper.slides.length - 2);
        });

        cdHeroButtonImagescdHero3d.addEventListener ("click", (e) => {
            e.stopPropagation ();
            cdHeroDivPopup.classList.add ("__cd-hero--div__POPUP");
            cdHeroDivSwiperPagBuls[cdHeroDivSwiperPagBuls.length - 1].click ();
        });

        cdHeroButtonImagescdHeroMore.addEventListener ("click", (e) => {
            e.stopPropagation ();
            cdHeroDivPopup.classList.add ("__cd-hero--div__POPUP");
        });

        cdHeroButtonPopupClose.addEventListener ("click", () => {
            cdHeroDivPopup.classList.remove ("__cd-hero--div__POPUP");
        });

        cdHeroDivPopup.addEventListener ("click", (e) => {
            if (cdHeroDivPopup.classList.contains ("__cd-hero--div__POPUP") && e.target === cdHeroDivPopup) {
                cdHeroDivPopup.classList.remove ("__cd-hero--div__POPUP");
            }
        });



        // 3.4 Указание на оставшееся количество картинок, видео и 3d в правой кнопке

        const cdHeroSpanMore = document.querySelector (".cd-hero--button__IMAGES.cd-hero__MORE > span:first-of-type");

        cdHeroSpanMore.textContent = `+ ${cdHeroDivSwiperPagBuls.length - 4}`;







        /* ---------- ********** СЕКЦИЯ ADV ********** ---------- */


        // 1. ПОДСЧЕТ ВЫСОТЫ ПОДДОНА И ПОЗИЦИОНИРОВАНИЯ ДОПОЛНИТЕЛЬНОГО ТЕКСТА КАРТОЧКИ ПРИ ХОВЕРЕ

        const cdAdvArticle = Array.from (document.querySelectorAll (".cd-adv--article"));
        const cdAdvDivImage = Array.from (document.querySelectorAll (".cd-adv--div__IMAGE"));
        const cdAdvPName = Array.from (document.querySelectorAll (".cd-adv--p__NAME"));
        const cdAdvPText = Array.from (document.querySelectorAll (".cd-adv--p__TEXT"));
        const cdAdvDivBorder = Array.from (document.querySelectorAll (".cd-adv--div__BORDER"));


        function cdAdvFindParams () {
            cdAdvArticle.forEach ((v, i, a) => {
                a[i].addEventListener ("mouseover", () => {
                    a[i].classList.add ("hov");
                    if (window.innerWidth < 1440 && window.innerWidth > 767) {
                        cdAdvPText[i].style.top = `${cdAdvDivImage[i].offsetHeight + cdAdvPName[i].offsetHeight + 63}px`;
                        cdAdvDivBorder[i].style.bottom = `${a[i].offsetHeight - (cdAdvDivImage[i].offsetHeight + cdAdvPName[i].offsetHeight + cdAdvPText[i].scrollHeight + 80)}px`;
                    } else if (window.innerWidth > 1439) {
                        cdAdvPText[i].style.top = `${cdAdvDivImage[i].offsetHeight + cdAdvPName[i].offsetHeight + 84}px`;
                        cdAdvDivBorder[i].style.bottom = `${a[i].offsetHeight - (cdAdvDivImage[i].offsetHeight + cdAdvPName[i].offsetHeight + cdAdvPText[i].scrollHeight + 116)}px`;
                    }
                });
                a[i].addEventListener ("mouseout", () => {
                    cdAdvDivBorder[i].style.bottom = `0px`;
                    a[i].classList.remove ("hov");
                });
            });
        }

        cdAdvFindParams ();
        

        cdCommonMedia1440.addEventListener ("change", cdAdvFindParams);

        cdCommonMedia768.addEventListener ("change", cdAdvFindParams);







        /* ---------- ********** СЕКЦИЯ MOD ********** ---------- */


        // 1. СЛАЙДЕР КАРТОЧЕК ТОВАРОВ

        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

        function hmCatImageSwiper () {

            // Слайдер для изображений товара (один скрипт для всего перечня товаров)

            const hmCatDivCardImage = Array.from (document.querySelectorAll (".hm-cat--div__CARD_IMAGE"), x => {
                return new Swiper (x.querySelector (".hm-cat--div__SWIPER"), {
                    loop: true,
                    speed: 700,
                    grabCursor: true,
                    pagination: {
                        el: x.querySelector (".hm-cat--div__SWIPER_PAGINATION"),
                        type: 'bullets',
                        clickable: true,
                    },
                });
            });


            const hmCatDivCardImage0 = Array.from (document.querySelectorAll (".hm-cat--div__CARD_IMAGE"));

            hmCatDivCardImage0.forEach ((v, i, a) => {
                const num = Array.from (a[i].querySelectorAll (".hm-cat--div__SWIPER_SLIDE"));

                num.forEach ((v1, i1, a1) => {
                    let div = document.createElement ("div");
                    div.className = "hm-cat--div__CARD_SENSOR_ITEM";
                    a[i].querySelector (".hm-cat--div__CARD_SENSOR").append (div);
                    
                    div.addEventListener ("mouseover", () => {
                        hmCatDivCardImage[i].slideTo (i1);
                    });
                });
            });
        
        }

        hmCatImageSwiper ();




        // 2. КНОПКИ ВЫБОРА ТОВАРА ДЛЯ СРАВНЕНИЯ ИЛИ В ИЗБРАННОЕ

        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

        function hmCatCardButtons () {
            const hmCatButtonCardCom = Array.from (document.querySelectorAll (".hm-cat--button__CARD_COMPARISON"));
            const hmCatButtonCardFav = Array.from (document.querySelectorAll (".hm-cat--button__CARD_FAVOURITES"));

            hmCatButtonCardCom.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.toggle ("__hm-cat--button__CARD_COMPARISON");
                });
            });
            hmCatButtonCardFav.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.toggle ("__hm-cat--button__CARD_FAVOURITES");
                });
            });
        }

        hmCatCardButtons ();




        // 3. РАЗБИВКА ЧИСЕЛ В ЦЕННИКАХ ПО ТЫСЯЧАМ

        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

        function hmCatPriceSplit () {
            const localFormat = new Intl.NumberFormat("ru-RU");

            const hmCatPrices = Array.from (document.querySelectorAll (".hm-cat--span__CARD_PRICE_CUR:first-of-type, .hm-cat--span__CARD_PRICE_OLD:first-of-type"));
            hmCatPrices.forEach ((v, i, a) => {
                a[i].textContent = `${localFormat.format (a[i].textContent)}`;
            });
        }

        hmCatPriceSplit ();




        
        // 4. РАСКРЫТИЕ КАРТОЧЕК

        const cdModArticles = Array.from (document.querySelectorAll (".cd-mod--div__CARDS .hm-cat--article__CARD"));
        const cdModSpanInd1 = document.querySelector (".cd-mod--span__IND1");
        const cdModSpanInd2 = document.querySelector (".cd-mod--span__IND2");
        const cdModDivLine1 = document.querySelector (".cd-mod--div__LINE1");
        const cdModButtonElse = document.querySelector (".cd-mod--button__ELSE");
        const cdModDivCards = document.querySelector (".cd-mod--div__CARDS");



        // 4.1 Счетчик показанных порций карточек

        let cdModCounter = 1;



        // 4.2 Счетчик показанных карточек

        function cdModVisCounter () {
            // 4.2.1 Числа

            const cdModArticlesVis = cdModArticles.filter (x => {
                return getComputedStyle (x).display == "grid";
            });
            cdModSpanInd1.textContent = cdModArticlesVis.length;
            cdModSpanInd2.textContent = cdModArticles.length;

            // 4.2.2 Линия

            cdModDivLine1.style.width = `${(parseFloat (cdModSpanInd1.textContent) / parseFloat (cdModSpanInd2.textContent)) * 100}%`;

            // 4.2.3 Уборка кнопки "Показать еще", если все карточки показаны

            if (cdModArticlesVis.length === cdModArticles.length) {
                cdModButtonElse.classList.add ("__cd-mod--button__ELSE");
            } else {
                cdModButtonElse.classList.remove ("__cd-mod--button__ELSE");
            }
        }



        // 4.3 Начальное / текущее количество видимых карточек (для начальной загрузки и изменения количества при ресайзе)

        function cdModCardsCur () {
            if (window.innerWidth < 768 || (window.innerWidth > 1199 && window.innerWidth < 1440) || window.innerWidth > 1919) {
                cdModArticles.forEach ((v, i, a) => {
                    if (i < cdModCounter * 3) {
                        a[i]?.classList.add ("__hm-cat--article__CARD");
                    }
                });
            } else if ((window.innerWidth > 767 && window.innerWidth < 1200) || window.innerWidth > 1439 && window.innerWidth < 1920) {
                cdModArticles.forEach ((v, i, a) => {
                    if (i < cdModCounter * 2) {
                        a[i]?.classList.add ("__hm-cat--article__CARD");
                    } else {
                        a[i]?.classList.remove ("__hm-cat--article__CARD");
                    }
                });
            }
            
            cdModVisCounter ();
        }

        cdModCardsCur ();



        // 4.4 Добавление карточек по клику по кнопке

        function cdModCardsAdd () {

            cdModCounter++;

            if (window.innerWidth < 768 || (window.innerWidth > 1199 && window.innerWidth < 1440) || window.innerWidth > 1919) {
                cdModArticles.forEach ((v, i, a) => {
                    if (i < cdModCounter * 3) {
                        a[i]?.classList.add ("__hm-cat--article__CARD");
                    }
                });
            } else if ((window.innerWidth > 767 && window.innerWidth < 1200) || window.innerWidth > 1439 && window.innerWidth < 1920) {
                cdModArticles.forEach ((v, i, a) => {
                    if (i < cdModCounter * 2) {
                        a[i]?.classList.add ("__hm-cat--article__CARD");
                    } else {
                        a[i]?.classList.remove ("__hm-cat--article__CARD");
                    }
                });
            }

            cdModVisCounter ();
        }

        cdModButtonElse.addEventListener ("click", cdModCardsAdd);



        // 4.5 Пересчет при резайзе

        cdCommonMedia768.addEventListener ("change", cdModCardsCur);
        cdCommonMedia1200.addEventListener ("change", cdModCardsCur);
        cdCommonMedia1440.addEventListener ("change", cdModCardsCur);
        cdCommonMedia1920.addEventListener ("change", cdModCardsCur);







        /* ---------- ********** СЕКЦИЯ ABT ********** ---------- */


        // 1. СЛАЙДЕР С КОНТЕНТОМ
        
        const cdAbtDivSwiper2 = new Swiper (".cd-abt--div__SWIPER2", {
            autoHeight: true,
            effect: "fade",
            allowTouchMove: false,
        });




        // 2. СЛАЙДЕР С КНОПКАМИ 
        
        const cdAbtDivSwiper0 = document.querySelector (".cd-abt--div__SWIPER");
        const cdAbtDivSwiperWrapper = document.querySelector (".cd-abt--div__SWIPER_WRAPPER");
        const cdAbtDivSwiperSlides = Array.from (document.querySelectorAll(".cd-abt--div__SWIPER_SLIDE"));


        const cdAbtDivSwiper = new Swiper (".cd-abt--div__SWIPER", {
            navigation: {
                nextEl: '.cd-abt--button__TOP_NEXT',
                prevEl: '.cd-abt--button__TOP_PREV',
            },
            spaceBetween: 14,
            slideToClickedSlide: true,
            breakpoints: {
                200: {
                    centeredSlides: true,
                    slidesPerView: "auto",
                },
            
                511: {
                    centeredSlides: false,
                    slidesPerView: 4,
                },
            },
            grabCursor: false,
            allowTouchMove: false,
            on: {
                slideChange () {
                    cdAbtDivSwiper2.slideTo (cdAbtDivSwiper.activeIndex);
                    if (cdAbtDivSwiper.isBeginning) {
                        cdAbtDivSwiperWrapper.style.transform = `translate3d(0px, 0px, 0px)`;
                    } else if (cdAbtDivSwiper.isEnd) {
                        const k = parseInt(cdAbtDivSwiperWrapper.scrollWidth) - parseInt (cdAbtDivSwiper0.offsetWidth) + 6;
                        if (k > 0 || 1) {
                            cdAbtDivSwiperWrapper.style.transform = `translate3d(-${k}px, 0px, 0px)`;
                        }
                    }
                },
            },
        });




        // 3. ДОПОЛНИТЕЛЬНЫЕ НАСТРОЙКИ СЛАЙДЕРОВ 

        if (cdCommonMedia511.matches) {
            cdAbtDivSwiper.disable ();
            setTimeout (() => {
                cdAbtDivSwiperSlides.forEach ((v, i, a) => {
                    a[i].style.width = "auto";
                });
            }, 300)
            
            cdAbtDivSwiperSlides.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.add ("swiper-slide-active");
                    cdAbtDivSwiperSlides.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("swiper-slide-active");
                    });
                    cdAbtDivSwiper2.slideTo (i);
                });
            });
        }

        
        setTimeout (() => {
            if (cdAbtDivSwiper.isBeginning) {
                cdAbtDivSwiperWrapper.style.transform = `translate3d(0px, 0px, 0px)`;
            } else if (cdAbtDivSwiper.isEnd) {
                const k = parseInt(cdAbtDivSwiperWrapper.scrollWidth) - parseInt (cdAbtDivSwiper0.offsetWidth) + 6;
                if (k > 0 || 1) {
                    cdAbtDivSwiperWrapper.style.transform = `translate3d(-${k}px, 0px, 0px)`;
                }
            }
        }, 200);

        
        cdCommonMedia511.addEventListener ("change", (e) => {
            if (e.matches) {
                cdAbtDivSwiper.disable ();
                cdAbtDivSwiperSlides.forEach ((v, i, a) => {
                    a[i].style.width = "auto";
                });
                cdAbtDivSwiperSlides.forEach ((v, i, a) => {
                    a[i].addEventListener ("click", () => {
                        a[i].classList.add ("swiper-slide-active");
                        cdAbtDivSwiperSlides.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                            a1[i1].classList.remove ("swiper-slide-active");
                        });
                        cdAbtDivSwiper2.slideTo (i);
                    });
                });
            } else if (!e.matches) {
                cdAbtDivSwiper.enable ();
                cdAbtDivSwiper2.slideTo (0);
                if (cdAbtDivSwiper.isBeginning) {
                    cdAbtDivSwiperWrapper.style.transform = `translate3d(0px, 0px, 0px)`;
                } else if (cdAbtDivSwiper.isEnd) {
                    const k = parseInt(cdAbtDivSwiperWrapper.scrollWidth) - parseInt (cdAbtDivSwiper0.offsetWidth) + 6;
                    if (k > 0 || 1) {
                        cdAbtDivSwiperWrapper.style.transform = `translate3d(-${k}px, 0px, 0px)`;
                    }
                }
            }
        });


        function cdAbtDebounce0 (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const cdAbtResize = cdAbtDebounce0 (() => {
            if (cdAbtDivSwiper.isBeginning) {
                cdAbtDivSwiperWrapper.style.transform = `translate3d(0px, 0px, 0px)`;
            } else if (cdAbtDivSwiper.isEnd) {
                const k = parseInt(cdAbtDivSwiperWrapper.scrollWidth) - parseInt (cdAbtDivSwiper0.offsetWidth) + 6;
                if (k > 0 || 1) {
                    cdAbtDivSwiperWrapper.style.transform = `translate3d(-${k}px, 0px, 0px)`;
                }
            }
            setTimeout (() => {
                if (window.innerWidth < 511) {
                    cdAbtDivSwiper.slideTo (0);
                } else {
                    cdAbtDivSwiperSlides.forEach ((v, i, a) => {
                        a[0].classList.add ("swiper-slide-active");
                        cdAbtDivSwiperSlides.filter (x => x !== a[0]).forEach ((v1, i1, a1) => {
                            a1[i1].classList.remove ("swiper-slide-active");
                        });
                    });
                }
                cdAbtDivSwiper2.slideTo (0);
            }, 150);
            cdAbtDivSwiperSlides.forEach ((v, i, a) => {
                a[i].style.width = "auto";
            });
        }, 100);

        window.addEventListener ("resize", cdAbtResize);


        // 3.2 Открытие пунктов меню "Описание" "Характеристики" при выборе соответствующего пункта в левом меню

        cdHeroAAnchsAbt.addEventListener ("click", (e) => {
            setTimeout (() => {
                if (window.innerWidth < 511) {
                    cdAbtDivSwiper.slideTo (0);
                } else {
                    cdAbtDivSwiperSlides[0].click ();
                }
            }, 150);
        });
        cdHeroAAnchsSpecs.addEventListener ("click", (e) => {
            setTimeout (() => {
                if (window.innerWidth < 511) {
                    cdAbtDivSwiper.slideTo (1);
                } else {
                    cdAbtDivSwiperSlides[1].click ();
                }
            }, 150);
        });




        // 4. ЗАКРЫТИЕ / РАСКРЫТИЕ ТАБЛИЦ

        const cdAbtButtonTableHead = Array.from (document.querySelectorAll (".cd-abt--button__TABLE_HEAD"));
        const cdAbtdivTableBody = Array.from (document.querySelectorAll (".cd-abt--div__TABLE_BODY"));
        const cdAbtSvgTableHead = Array.from (document.querySelectorAll (".cd-abt--svg__TABLE_HEAD"));


        cdAbtButtonTableHead.forEach((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!cdAbtdivTableBody[i].classList.contains ("__cd-abt--div__TABLE_BODY")) {
                    cdAbtdivTableBody[i].classList.add ("__cd-abt--div__TABLE_BODY");
                    cdAbtSvgTableHead[i].classList.add ("__cd-abt--svg__TABLE_HEAD");
                    // cdAbtDivSwiper.slideTo(1);
                    // cdAbtDivSwiper2.slideTo(1);
                    setTimeout (() => {
                        cdAbtDivSwiper.slideTo(1);
                        cdAbtDivSwiper2.slideTo(1);
                    }, 50);
                } else {
                    cdAbtdivTableBody[i].classList.remove ("__cd-abt--div__TABLE_BODY");
                    cdAbtSvgTableHead[i].classList.remove ("__cd-abt--svg__TABLE_HEAD");
                    // cdAbtDivSwiper.slideTo(1);
                    // cdAbtDivSwiper2.slideTo(1);
                    setTimeout (() => {
                        cdAbtDivSwiper.slideTo(1);
                        cdAbtDivSwiper2.slideTo(1);
                    }, 50);
                }
            });
        });




        // 5. СЛАЙДЕР С КОНТЕНТОМ (СХЕМЫ)
        
        const cdAbtDivSwiper4 = new Swiper (".cd-abt--div__SWIPER4", {
            grabCursor: true,
        });




        // 6. СЛАЙДЕР С КНОПКАМИ (СХЕМЫ)
        
        const cdAbtDivSwiper30 = document.querySelector (".cd-abt--div__SWIPER3");
        const cdAbtDivSwiper3Wrapper = document.querySelector (".cd-abt--div__SWIPER3_WRAPPER");
        const cdAbtDivSwiper3Slides = Array.from (document.querySelectorAll(".cd-abt--div__SWIPER3_SLIDE"));


        const cdAbtDivSwiper3 = new Swiper (".cd-abt--div__SWIPER3", {
            navigation: {
                nextEl: '.cd-abt--button__SWIPER3_NEXT',
                prevEl: '.cd-abt--button__SWIPER3_PREV',
            },
            spaceBetween: 14,
            slideToClickedSlide: true,
            effect: 'slide',
            breakpoints: {
                200: {
                    // enabled: false,
                    // slidesPerView: "auto",
                },
            
                1440: {
                    enabled: true,
                    centeredSlides: true,
                    slidesPerView: "auto",
                },
            },
            on: {
                slideChange () {
                    cdAbtDivSwiper4.slideTo (cdAbtDivSwiper3.activeIndex);
                    if (cdAbtDivSwiper3.isBeginning) {
                        cdAbtDivSwiper3Wrapper.style.transform = `translate3d(0px, 0px, 0px)`;
                    } else if (cdAbtDivSwiper3.isEnd) {
                        const k = parseInt (cdAbtDivSwiper3Wrapper.scrollWidth) - parseInt (cdAbtDivSwiper30.offsetWidth) + 6;
                        if (k > 0 || 1) {
                            cdAbtDivSwiper3Wrapper.style.transform = `translate3d(-${k}px, 0px, 0px)`;
                        }
                    }
                }
            },
        });




        // 7. ДОПОЛНИТЕЛЬНЫЕ НАСТРОЙКИ СЛАЙДЕРОВ (СХЕМЫ)

        // 7.1 При загрузке страницы

        if (!cdCommonMedia1440.matches) {
            cdAbtDivSwiper3.disable ();

            setTimeout (() => {
                cdAbtDivSwiper3Slides.forEach ((v, i, a) => {
                    a[i].style.width = "auto";
                });
            }, 200)
            
            cdAbtDivSwiper3Slides.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.add ("swiper-slide-active");
                    cdAbtDivSwiper3Slides.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("swiper-slide-active");
                    });
                    cdAbtDivSwiper4.slideTo (i);
                });
            });

            cdAbtDivSwiper4.on ("slideChange", () => {
                cdAbtDivSwiper3Slides[cdAbtDivSwiper4.activeIndex].click();
            });
        } else {
            setTimeout (() => {
                if (cdAbtDivSwiper3.isBeginning) {
                    cdAbtDivSwiper3Wrapper.style.transform = `translate3d(0px, 0px, 0px)`;
                } else if (cdAbtDivSwiper3.isEnd) {
                    const k = parseInt(cdAbtDivSwiper3Wrapper.scrollWidth) - parseInt (cdAbtDivSwiper30.offsetWidth) + 6;
                    if (k > 0 || 1) {
                        cdAbtDivSwiper3Wrapper.style.transform = `translate3d(-${k}px, 0px, 0px)`;
                    }
                }
            }, 100);
            
            setTimeout (() => {
                cdAbtDivSwiper3Slides.forEach ((v, i, a) => {
                    a[i].style.width = "auto";
                });
            }, 200);

            cdAbtDivSwiper4.on ("slideChange", () => {
                cdAbtDivSwiper3.slideTo (cdAbtDivSwiper4.activeIndex);
            });
        }



        // 7.2 При пересечении брейкпоинта 1440

        cdCommonMedia1440.addEventListener ("change", (e) => {
            if (!e.matches) {
                if (cdAbtDivSwiper3.isBeginning) {
                    cdAbtDivSwiper3Wrapper.style.transform = `translate3d(0px, 0px, 0px)`;
                } else if (cdAbtDivSwiper3.isEnd) {
                    const k = parseInt(cdAbtDivSwiper3Wrapper.scrollWidth) - parseInt (cdAbtDivSwiper30.offsetWidth) + 6;
                    if (k > 0 || 1) {
                        cdAbtDivSwiper3Wrapper.style.transform = `translate3d(-${k}px, 0px, 0px)`;
                    }
                }
                

                setTimeout (() => {
                    cdAbtDivSwiper3.disable ();
                    cdAbtDivSwiper3Wrapper.style.transform = `translate3d(0px, 0px, 0px)`;
                }, 500);

                

                cdAbtDivSwiper3Slides.forEach ((v, i, a) => {
                    a[i].style.width = "auto";
                });

                cdAbtDivSwiper3Slides.forEach ((v, i, a) => {
                    a[i].addEventListener ("click", () => {
                        a[i].classList.add ("swiper-slide-active");
                        cdAbtDivSwiper3Slides.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                            a1[i1].classList.remove ("swiper-slide-active");
                        });
                        cdAbtDivSwiper4.slideTo (i);
                    });
                });

                cdAbtDivSwiper4.on ("slideChange", () => {
                    cdAbtDivSwiper3Slides[cdAbtDivSwiper4.activeIndex].click();
                });
            } else if (e.matches) {
                cdAbtDivSwiper3.enable ();
                cdAbtDivSwiper4.slideTo (0);

                // setTimeout (() => {
                //     if (cdAbtDivSwiper3.isBeginning) {
                //         cdAbtDivSwiper3Wrapper.style.transform = `translate3d(0px, 0px, 0px)`;
                //     } else if (cdAbtDivSwiper3.isEnd) {
                //         const k = parseInt(cdAbtDivSwiper3Wrapper.scrollWidth) - parseInt (cdAbtDivSwiper30.offsetWidth) + 6;
                //         if (k > 0 || 1) {
                //             cdAbtDivSwiper3Wrapper.style.transform = `translate3d(-${k}px, 0px, 0px)`;
                //         }
                //     }
                // }, 100);

                cdAbtDivSwiper4.on ("slideChange", () => {
                    cdAbtDivSwiper3.slideTo (cdAbtDivSwiper4.activeIndex);
                });
            }
        });



        // 7.3 При любом ресайзе

        function cdAbtDebounce30 (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const cdAbtResize3 = cdAbtDebounce30 (() => {
            if (cdAbtDivSwiper3.isBeginning) {
                cdAbtDivSwiper3Wrapper.style.transform = `translate3d(0px, 0px, 0px)`;
            } else if (cdAbtDivSwiper3.isEnd) {
                const k = parseInt(cdAbtDivSwiper3Wrapper.scrollWidth) - parseInt (cdAbtDivSwiper30.offsetWidth) + 6;
                if (k > 0 || 1) {
                    cdAbtDivSwiper3Wrapper.style.transform = `translate3d(-${k}px, 0px, 0px)`;
                }
            }
            setTimeout (() => {
                cdAbtDivSwiper3.slideTo (0);
                cdAbtDivSwiper4.slideTo (0);
            }, 100);
            cdAbtDivSwiper3Slides.forEach ((v, i, a) => {
                a[i].style.width = "auto";
            });
        }, 150);

        window.addEventListener ("resize", cdAbtResize3);







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







        /* ---------- ********** СЕКЦИЯ REC ********** ---------- */


        // 1. СЛАЙДЕР

        const cdRecDivSwiper = new Swiper (".cd-rec--div__SWIPER", {
            navigation: {
                nextEl: '.cd-rec--button__SWIPER_NEXT',
                prevEl: '.cd-rec--button__SWIPER_PREV',
            },
            breakpoints: {
                200: {
                    spaceBetween: 10,
                    slidesPerView: 1,
                },
            
                768: {
                    spaceBetween: 44,
                    slidesPerView: 2,
                },

                1200: {
                    spaceBetween: 44,
                    slidesPerView: 3,
                },

                1440: {
                    spaceBetween: 44,
                    slidesPerView: 2,
                },

                1920: {
                    spaceBetween: 44,
                    slidesPerView: 3,
                },
            },
        });




        // 2. НАСТРОЙКИ ДЛЯ ВНУТРЕННИХ СЛАЙДЕРОВ - В СЕКЦИИ MOD







        /* ---------- ********** СЕКЦИЯ USE ********** ---------- */


        // 1. СЛАЙДЕР С КОНТЕНТОМ
        
        const cdUseDivSwiper2 = new Swiper (".cd-use--div__SWIPER2", {
            autoHeight: true,
            effect: "fade",
            allowTouchMove: false,
        });




        // 2. СЛАЙДЕР С КНОПКАМИ 
        
        const cdUseDivSwiper0 = document.querySelector (".cd-use--div__SWIPER");
        const cdUseDivSwiperWrapper = document.querySelector (".cd-use--div__SWIPER_WRAPPER");
        const cdUseDivSwiperSlides = Array.from (document.querySelectorAll(".cd-use--div__SWIPER_SLIDE"));


        const cdUseDivSwiper = new Swiper (".cd-use--div__SWIPER", {
            navigation: {
                nextEl: '.cd-use--button__TOP_NEXT',
                prevEl: '.cd-use--button__TOP_PREV',
            },
            spaceBetween: 14,
            slideToClickedSlide: true,
            breakpoints: {
                200: {
                    centeredSlides: true,
                    slidesPerView: "auto",
                },
            
                400: {
                    centeredSlides: false,
                    slidesPerView: 4,
                },
            },
            grabCursor: false,
            allowTouchMove: false,
            on: {
                slideChange () {
                    cdUseDivSwiper2.slideTo (cdUseDivSwiper.activeIndex);
                    if (cdUseDivSwiper.isBeginning) {
                        cdUseDivSwiperWrapper.style.transform = `translate3d(0px, 0px, 0px)`;
                    } else if (cdUseDivSwiper.isEnd) {
                        const k = parseInt(cdUseDivSwiperWrapper.scrollWidth) - parseInt (cdUseDivSwiper0.offsetWidth) + 6;
                        if (k > 0 || 1) {
                            cdUseDivSwiperWrapper.style.transform = `translate3d(-${k}px, 0px, 0px)`;
                        }
                    }
                }
            },
        });




        // 3. ДОПОЛНИТЕЛЬНЫЕ НАСТРОЙКИ СЛАЙДЕРОВ 

        if (cdCommonMedia400.matches) {
            cdUseDivSwiper.disable ();
            setTimeout (() => {
                cdUseDivSwiperSlides.forEach ((v, i, a) => {
                    a[i].style.width = "auto";
                });
            }, 300)
            
            cdUseDivSwiperSlides.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.add ("swiper-slide-active");
                    cdUseDivSwiperSlides.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("swiper-slide-active");
                    });
                    cdUseDivSwiper2.slideTo (i);
                });
            });
        }

        
        setTimeout (() => {
            if (cdUseDivSwiper.isBeginning) {
                cdUseDivSwiperWrapper.style.transform = `translate3d(0px, 0px, 0px)`;
            } else if (cdUseDivSwiper.isEnd) {
                const k = parseInt(cdUseDivSwiperWrapper.scrollWidth) - parseInt (cdUseDivSwiper0.offsetWidth) + 6;
                if (k > 0 || 1) {
                    cdUseDivSwiperWrapper.style.transform = `translate3d(-${k}px, 0px, 0px)`;
                }
            }
        }, 100);
        
        
        cdCommonMedia400.addEventListener ("change", (e) => {
            if (e.matches) {
                cdUseDivSwiper.disable ();
                cdUseDivSwiperSlides.forEach ((v, i, a) => {
                    a[i].style.width = "auto";
                });
                cdUseDivSwiperSlides.forEach ((v, i, a) => {
                    a[i].addEventListener ("click", () => {
                        a[i].classList.add ("swiper-slide-active");
                        cdUseDivSwiperSlides.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                            a1[i1].classList.remove ("swiper-slide-active");
                        });
                        cdUseDivSwiper2.slideTo (i);
                    });
                });
            } else if (!e.matches) {
                cdUseDivSwiper.enable ();
                cdUseDivSwiper2.slideTo (0);
                if (cdUseDivSwiper.isBeginning) {
                    cdUseDivSwiperWrapper.style.transform = `translate3d(0px, 0px, 0px)`;
                } else if (cdUseDivSwiper.isEnd) {
                    const k = parseInt(cdUseDivSwiperWrapper.scrollWidth) - parseInt (cdUseDivSwiper0.offsetWidth) + 6;
                    if (k > 0 || 1) {
                        cdUseDivSwiperWrapper.style.transform = `translate3d(-${k}px, 0px, 0px)`;
                    }
                }
            }
        });


        function cdUseDebounce0 (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const cdUseResize = cdUseDebounce0 (() => {
            if (cdUseDivSwiper.isBeginning) {
                cdUseDivSwiperWrapper.style.transform = `translate3d(0px, 0px, 0px)`;
            } else if (cdUseDivSwiper.isEnd) {
                const k = parseInt(cdUseDivSwiperWrapper.scrollWidth) - parseInt (cdUseDivSwiper0.offsetWidth) + 6;
                if (k > 0 || 1) {
                    cdUseDivSwiperWrapper.style.transform = `translate3d(-${k}px, 0px, 0px)`;
                }
            }
            setTimeout (() => {
                if (window.innerWidth < 400) {
                    cdUseDivSwiper.slideTo (0);
                } else {
                    cdUseDivSwiperSlides.forEach ((v, i, a) => {
                        a[0].classList.add ("swiper-slide-active");
                        cdUseDivSwiperSlides.filter (x => x !== a[0]).forEach ((v1, i1, a1) => {
                            a1[i1].classList.remove ("swiper-slide-active");
                        });
                    });
                }
                cdUseDivSwiper2.slideTo (0);
            }, 150);
            cdUseDivSwiperSlides.forEach ((v, i, a) => {
                a[i].style.width = "auto";
            });
        }, 100);

        window.addEventListener ("resize", cdUseResize);





        // 4. СЛАЙДЕР ОТРАСЛИ
        
        const cdUseDivSwiper21 = new Swiper (".cd-use--div__SWIPER21", {
            navigation: {
                nextEl: '.cd-use--button__SWIPER21_NEXT',
                prevEl: '.cd-use--button__SWIPER21_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: "auto",
                },
            
                1440: {
                    slidesPerView: 2,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },

                1920: {
                    slidesPerView: 3,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },
            },
        });




        // 5. СЛАЙДЕР РЕШЕНИЯ
        
        const cdUseDivSwiper22 = new Swiper (".cd-use--div__SWIPER22", {
            navigation: {
                nextEl: '.cd-use--button__SWIPER22_NEXT',
                prevEl: '.cd-use--button__SWIPER22_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: "auto",
                },
            
                1440: {
                    slidesPerView: 1,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },

                1920: {
                    slidesPerView: 1,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },
            },
        });




        // 6. СЛАЙДЕР ИСТОРИЯ
        
        const cdUseDivSwiper23 = new Swiper (".cd-use--div__SWIPER23", {
            navigation: {
                nextEl: '.cd-use--button__SWIPER23_NEXT',
                prevEl: '.cd-use--button__SWIPER23_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: "auto",
                },
            
                1440: {
                    slidesPerView: 2,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                }
            },
        });




        // 7. ДОПОЛНИТЕЛЬНЫЕ НАСТРОЙКИ СЛАЙДЕРОВ ОТРАСЛЕЙ, РЕШЕНИЙ, ИСТОРИЙ

        if (cdCommonMedia1440.matches) {
            cdUseDivSwiper21.enable ();
            cdUseDivSwiper22.enable ();
            cdUseDivSwiper23.enable ();
        } else {
            cdUseDivSwiper21.disable ();
            cdUseDivSwiper22.disable ();
            cdUseDivSwiper23.disable ();
        }


        cdCommonMedia1440.addEventListener ("change", (e) => {
            if (e.matches) {
                cdUseDivSwiper21.enable ();
                cdUseDivSwiper22.enable ();
                cdUseDivSwiper23.enable ();
            } else {
                cdUseDivSwiper21.disable ();
                cdUseDivSwiper22.disable ();
                cdUseDivSwiper23.disable ();
            }
        });







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







        /* ---------- ********** СЕКЦИЯ MED ********** ---------- */


        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ 


        const cdMedDivHead = document.querySelector (".cd-med--div__HEAD");
        const cdMedSvgSubmenu = document.querySelector (".cd-med--svg__SUBMENU");
        const cdMedFormSubmenu = document.querySelector (".cd-med--form__SUBMENU");


        // 1.1 Выбор первой радиокнопки в субменю при загрузке страницы

        cdMedFormSubmenu.querySelector (".cd-med--label__SUBMENU:first-of-type").click ();
        

        cdMedDivHead.addEventListener ("click", () => {
        
            // 1.2 Открытие / закрытие субменю

            if (!cdMedFormSubmenu.classList.contains ("__cd-med--form__SUBMENU")) {
                cdMedFormSubmenu.classList.add ("__cd-med--form__SUBMENU");
                cdMedSvgSubmenu.classList.add ("__cd-med--svg__SUBMENU");
            } else {
                cdMedFormSubmenu.classList.remove ("__cd-med--form__SUBMENU");
                cdMedSvgSubmenu.classList.remove ("__cd-med--svg__SUBMENU");
            }
        });




        // 2. СЛАЙДЕР С КОНТЕНТОМ
        
        const cdMedDivSwiper2 = new Swiper (".cd-med--div__SWIPER2", {
            autoHeight: true,
            effect: "fade",
            allowTouchMove: false,
        });


        const cdMedLabelSubmenu = Array.from (document.querySelectorAll (".cd-med--label__SUBMENU"));

        cdMedLabelSubmenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                cdMedDivSwiper2.slideTo(i);
            });
        });







        // 4. СЛАЙДЕР ВИДЕО
        
        const cdMedDivSwiper21 = new Swiper (".cd-med--div__SWIPER21", {
            navigation: {
                nextEl: '.cd-med--button__SWIPER21_NEXT',
                prevEl: '.cd-med--button__SWIPER21_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: "auto",
                },
            
                1440: {
                    slidesPerView: 2,
                    spaceBetween: 60,
                    slidesPerGroup: 1,
                }
            },
        });




        // 4. СЛАЙДЕР СТАТЬИ
        
        const cdMedDivSwiper22 = new Swiper (".cd-med--div__SWIPER22", {
            navigation: {
                nextEl: '.cd-med--button__SWIPER22_NEXT',
                prevEl: '.cd-med--button__SWIPER22_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: "auto",
                },
            
                1440: {
                    slidesPerView: 2,
                    spaceBetween: 60,
                    slidesPerGroup: 1,
                }
            },
        });




        // 4. СЛАЙДЕР НОВОСТИ

        const cdMedDivSwiper23 = new Swiper (".cd-med--div__SWIPER23", {
            navigation: {
                nextEl: '.cd-med--button__SWIPER23_NEXT',
                prevEl: '.cd-med--button__SWIPER23_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: "auto",
                },
            
                1440: {
                    slidesPerView: 2,
                    spaceBetween: 60,
                    slidesPerGroup: 1,
                }
            },
        });




        // 4. СЛАЙДЕР МЕРОПРИЯТИЯ

        const cdMedDivSwiper24 = new Swiper (".cd-med--div__SWIPER24", {
            navigation: {
                nextEl: '.cd-med--button__SWIPER24_NEXT',
                prevEl: '.cd-med--button__SWIPER24_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: "auto",
                },
            
                1440: {
                    slidesPerView: 2,
                    spaceBetween: 60,
                    slidesPerGroup: 1,
                }
            },
        });




        // 5. ДОПОЛНИТЕЛЬНЫЕ НАСТРОЙКИ СЛАЙДЕРОВ ВИДЕО, СТАТЕЙ, НОВОСТЕЙ, МЕРОПРИЯТИЙ

        if (cdCommonMedia1440.matches) {
            cdMedDivSwiper21.enable ();
            cdMedDivSwiper22.enable ();
            cdMedDivSwiper23.enable ();
            cdMedDivSwiper24.enable ();
        } else {
            cdMedDivSwiper21.disable ();
            cdMedDivSwiper22.disable ();
            cdMedDivSwiper23.disable ();
            cdMedDivSwiper24.disable ();
        }


        cdCommonMedia1440.addEventListener ("change", (e) => {
            if (e.matches) {
                cdMedDivSwiper21.enable ();
                cdMedDivSwiper22.enable ();
                cdMedDivSwiper23.enable ();
                cdMedDivSwiper24.enable ();
            } else {
                cdMedDivSwiper21.disable ();
                cdMedDivSwiper22.disable ();
                cdMedDivSwiper23.disable ();
                cdMedDivSwiper24.disable ();
            }
        });
    }














    /* ---------- ********** |||||||||| СТРАНИЦА КАТАЛОГ |||||||||| ********** ---------- */


    if (document.querySelector ("#catalog")) {


        /* ---------- ********** ОБЩИЕ ДЛЯ ВСЕЙ СТРАНИЦЫ ********** ---------- */


        // 1. АНИМАЦИЯ ПРИ СКРОЛЛЕ 

        const scrolls = document.querySelectorAll('.__C-SCRL');

        const callback = (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove ("__C-SCRL");
                    if (entry.target.classList.contains ("hm-cat--article__CARD")) {
                        setTimeout (() => {
                            entry.target.classList.add ("__hm-cat--article__CARD");
                        }, 700);
                    }
                    observer.unobserve(entry.target);
                }
            });
        }

        const options = {
            rootMargin: '-10px 0px 0px 0px',
            threshold: 0,
        }

        const observer = new IntersectionObserver(callback, options)

        scrolls.forEach((v) => observer.observe(v));
        
        





        /* ---------- ********** СЕКЦИЯ CAT ********** ---------- */

        // 1. РАСЧЕТ ПОЗИЦИОНИРОВАНИЯ ФОРМ С РАДИОКНОПКАМИ В ДЕСКТОПЕ

        const ctCatUlTags = document.querySelector (".ct-cat--ul__TAGS");
        const ctCatUlMenu = document.querySelector (".ct-cat .hm-cat--ul__MENU");
        const ctCatDivLeft = document.querySelector (".ct-cat--div__LEFT");
        const ctCatFormSubmenu = Array.from (document.querySelectorAll (".ct-cat .hm-cat--form__SUBMENU"));


        // 1.2 Функция расчета top для form

        function ctCatFormSubmenuTop () {
            if (cdCommonMedia1440.matches) {
                ctCatFormSubmenu.forEach ((v, i, a) => {
                    a[i].style.top = `${ctCatUlMenu.offsetHeight + 50 + ctCatUlTags.offsetHeight + 50}px`;
                });
            }
        }

        ctCatFormSubmenuTop ();

        cdCommonMedia1440.addEventListener ("change", (e) => {
            if (e.matches) {
                setTimeout (() => {
                    ctCatFormSubmenu.forEach ((v, i, a) => {
                        a[i].style.top = `${ctCatUlMenu.offsetHeight + 50 + ctCatUlTags.offsetHeight + 50}px`;
                    });
                }, 400);  
            }
        });



        // 2. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ, 
        // ВЫБОР ПЕРВОЙ РАДИОКНОПКИ В ОТКРЫВШЕМСЯ СУБМЕНЮ,
        // СНЯТИЕ ВЫБОРА СО ВСЕХ РАДИОКНОПОК В ЗАКРЫВАЮЩИХСЯ СУБМЕНЮ

        const hmCatLiMenuItem = Array.from (document.querySelectorAll (".hm-cat--li__MENU_ITEM"));
        const hmCatButtonMenuItem = Array.from (document.querySelectorAll (".hm-cat--button__MENU_ITEM"));
        const hmCatFormSubmenu = Array.from (document.querySelectorAll (".hm-cat--form__SUBMENU"));
        const ctCatDivContent = document.querySelector (".ct-cat--div__CONTENT");
        
    

        hmCatButtonMenuItem.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                
                // 2.1 Открытие субменю

                if (!hmCatLiMenuItem[i].classList.contains ("__hm-cat--li__MENU_ITEM")) {
                    if (window.innerWidth < 1440) {
                        hmCatLiMenuItem[i].classList.add ("__hm-cat--li__MENU_ITEM");
                    } else {
                        hmCatLiMenuItem[i].classList.add ("__hm-cat--li__MENU_ITEM");
                    }
                    
                    

                    // 2.2 Выбор первой радиокнопки в открывшемся субменю

                    if (hmCatLiMenuItem[i].querySelector (".hm-cat--label__SUBMENU:first-of-type > .hm-cat--input__SUBMENU")) {
                        hmCatLiMenuItem[i].querySelector (".hm-cat--label__SUBMENU:first-of-type").click ();
                    }
                    
                    // 2.3 Закрытие остальных субменю

                    hmCatLiMenuItem.filter (x => x !== hmCatLiMenuItem[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__hm-cat--li__MENU_ITEM");

                        // 2.4 Снятие выбора с радиокнопки в закрывающемся меню

                        if (a1[i1].querySelector (".hm-cat--input__SUBMENU:checked")) {
                            const a = a1[i1].querySelector (".hm-cat--input__SUBMENU:checked");
                            a.checked = false;
                        } 
                    });
                } else {
                    // 2.5 Закрытие субменю

                    if (window.innerWidth < 1440) {
                        hmCatLiMenuItem[i].classList.remove ("__hm-cat--li__MENU_ITEM");
                    }
                }
            });
        });


        // 2.6 Открытие первого субменю при загрузке страницы

        hmCatButtonMenuItem[0].click ();


        // 2.7 Выравнивание высоты form для десктопов по блоку с контентом

        function hmCatFormHeight () {
            if (window.innerWidth > 1439) {
                hmCatFormSubmenu.forEach ((v, i, a) => {
                    setTimeout (() => {
                        a[i].style.maxHeight = getComputedStyle (ctCatDivContent).height;
                    }, 800);
                    
                });
            } else {
                hmCatFormSubmenu.forEach ((v, i, a) => {
                    setTimeout (() => {
                        a[i].style.maxHeight = null;
                    }, 50);
                });
            }
        }

        // !!! 

        // Если возникнет вероятность того, что боковое меню в десктопе в Каталоге может превысить
        // по высоте основной блок - раскомментировать далее до 1.8 
        // и содержимое пункта 1.8:

        // hmCatFormHeight ();

        // function hmCatDebounce (cB, time) {
        //     let idTimer;
        //     return function () {
        //         clearTimeout (idTimer);
        //         idTimer = setTimeout (() => {
        //             cB();
        //         }, time);
        //     }
        // }

        // const hmCatFormDebounce = hmCatDebounce (hmCatFormHeight, 100);

        // window.addEventListener ("resize", hmCatFormDebounce);


        // 2.8 Скролл элементов субменю до видимой части
        
        // const hmCatLabelSubmenu = Array.from (document.querySelectorAll (".hm-cat--label__SUBMENU"));

        // hmCatLabelSubmenu.forEach ((v, i, a) => {
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




        // 3. СЛАЙДЕР КАРТОЧЕК ТОВАРОВ

        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

        function hmCatImageSwiper () {

            // Слайдер для изображений товара (один скрипт для всего перечня товаров)

            const hmCatDivCardImage = Array.from (document.querySelectorAll (".hm-cat--div__CARD_IMAGE"), x => {
                return new Swiper (x.querySelector (".hm-cat--div__SWIPER"), {
                    loop: true,
                    speed: 700,
                    grabCursor: true,
                    pagination: {
                        el: x.querySelector (".hm-cat--div__SWIPER_PAGINATION"),
                        type: 'bullets',
                        clickable: true,
                    },
                });
            });


            const hmCatDivCardImage0 = Array.from (document.querySelectorAll (".hm-cat--div__CARD_IMAGE"));

            hmCatDivCardImage0.forEach ((v, i, a) => {
                const num = Array.from (a[i].querySelectorAll (".hm-cat--div__SWIPER_SLIDE"));

                num.forEach ((v1, i1, a1) => {
                    let div = document.createElement ("div");
                    div.className = "hm-cat--div__CARD_SENSOR_ITEM";
                    a[i].querySelector (".hm-cat--div__CARD_SENSOR").append (div);
                    
                    div.addEventListener ("mouseover", () => {
                        hmCatDivCardImage[i].slideTo (i1);
                    });
                });
            });
        
        }

        hmCatImageSwiper ();




        // 4. КНОПКИ ВЫБОРА ТОВАРА ДЛЯ СРАВНЕНИЯ ИЛИ В ИЗБРАННОЕ

        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

        function hmCatCardButtons () {
            const hmCatButtonCardCom = Array.from (document.querySelectorAll (".hm-cat--button__CARD_COMPARISON"));
            const hmCatButtonCardFav = Array.from (document.querySelectorAll (".hm-cat--button__CARD_FAVOURITES"));

            hmCatButtonCardCom.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.toggle ("__hm-cat--button__CARD_COMPARISON");
                });
            });
            hmCatButtonCardFav.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.toggle ("__hm-cat--button__CARD_FAVOURITES");
                });
            });
        }

        hmCatCardButtons ();




        // 5. РАЗБИВКА ЧИСЕЛ В ЦЕННИКАХ ПО ТЫСЯЧАМ

        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

        function hmCatPriceSplit () {
            const localFormat = new Intl.NumberFormat("ru-RU");

            const hmCatPrices = Array.from (document.querySelectorAll (".hm-cat--span__CARD_PRICE_CUR:first-of-type, .hm-cat--span__CARD_PRICE_OLD:first-of-type"));
            hmCatPrices.forEach ((v, i, a) => {
                a[i].textContent = `${localFormat.format (a[i].textContent)}`;
            });
        }

        hmCatPriceSplit ();



    
        // 6. ТЭГИ

        const containerClass = 'ct-cat--ul__TAGS';
        const itemClass = 'ct-cat--li__TAGS';
        const additionalItemClass = '_0';
        const buttonClass = 'ct-cat--a__TAGS';
        const breakpoint = 1439;
        const maxLines = 2;
        const gap = 16; 

        let container = null;
        let resizeObserver = null;
        let resizeTimeout = null;
        const resizeDebounceDelay = 400;

        function isWrapActive() {
            return window.innerWidth > breakpoint;
        }

        // --- ВСПОМОГАТЕЛЬНАЯ ФУНКЦИЯ: Найти элементы в строке ---
        function findItemsInLine(items, containerTop, itemHeight, gap, targetLineIndex) {
            return items.filter(item => {
                const itemRect = item.getBoundingClientRect();
                const itemLineIndex = Math.floor((itemRect.top - containerTop) / (itemHeight + gap));
                return itemLineIndex === targetLineIndex;
            });
        }

        // --- ОСНОВНАЯ ФУНКЦИЯ ОБНОВЛЕНИЯ СОСТОЯНИЯ ---
        function updateContainerState() {
            container = document.querySelector(`.${containerClass}`);
            if (!container) {
                console.warn(`Container with class '${containerClass}' not found.`);
                return;
            }

            if (showAllTagsMode) {
                // В этом режиме мы не пытаемся создавать или размещать элемент "Еще n"
                // Но мы можем проверить, есть ли он в DOM (например, если был вставлен до установки флага)
                // и удалить его, если он есть.
                const existingAdditionalItem = container.querySelector(`.${additionalItemClass}`);
                if (existingAdditionalItem) {
                    existingAdditionalItem.remove();
                }
                // В остальном, выходим из функции, не выполняя основную логику
                return;
            }

            // Найдем существующий элемент "Еще n" (если есть) - до проверки showAllTagsMode
            const existingAdditionalItem = container.querySelector(`.${additionalItemClass}`);

            // Получим список обычных элементов (без "Еще n", если он был)
            const currentItems = Array.from(container.querySelectorAll(`.${itemClass}:not(.${additionalItemClass})`));

            if (!isWrapActive()) {
                if (existingAdditionalItem) {
                    existingAdditionalItem.remove();
                }
                return;
            }

            if (currentItems.length === 0) {
                if (existingAdditionalItem) {
                    existingAdditionalItem.remove();
                }
                return;
            }

            // Определим высоту строки и maxVisibleHeight

            const firstItemRect = currentItems[0].getBoundingClientRect();
            const itemHeight = firstItemRect.height;
            const containerRect = container.getBoundingClientRect();
            const containerTop = containerRect.top;
            const maxVisibleHeight = itemHeight * maxLines + gap * (maxLines - 1);

            // Найдем текущие видимые элементы (до maxVisibleHeight)
            let currentVisibleItems = [];
            let currentHiddenItems = [];
            for (let i = 0; i < currentItems.length; i++) {
                const item = currentItems[i];
                const itemRect = item.getBoundingClientRect();
                const itemTopRelativeToContainer = itemRect.top - containerTop;

                if (itemTopRelativeToContainer < maxVisibleHeight) {
                    currentVisibleItems.push(item);
                } else {
                    currentHiddenItems.push(item);
                }
            }

            const hasOverflow = currentHiddenItems.length > 0;

            if (hasOverflow) {
                const n = currentHiddenItems.length;

                // 5. Найдем элементы, которые находятся во ВТОРОЙ строке (index 1)
                const itemsInLine2 = findItemsInLine(currentVisibleItems, containerTop, itemHeight, gap, 1);

                let placementFound = false;
                let realAdditionalItem = null;

                // 6. Попробуем вставить "Еще n" после каждого элемента второй строки, начиная с последнего
                for (let i = itemsInLine2.length - 1; i >= 0; i--) {
                    const itemToInsertAfter = itemsInLine2[i];

                    // Создадим реальный элемент "Еще n" для этой попытки
                    realAdditionalItem = document.createElement('li');
                    realAdditionalItem.className = `${itemClass} ${additionalItemClass}`;
                    const realButton = document.createElement('button');
                    realButton.className = buttonClass;
                    realButton.textContent = `Еще ${n}`;
                    realButton.insertAdjacentHTML ("beforeend", `<svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.25 10.25L4.95588 5.25L0.25 0.25" stroke="#0C0C0C" stroke-width="0.5" stroke-linecap="round"/>
                    </svg>`);
                    realAdditionalItem.appendChild(realButton);

                    realButton.addEventListener ("click", () => {
                        ctCatUlTags.classList.add ("__ct-cat--ul__TAGS");
                        setTimeout (() => {
                            ctCatFormSubmenuTop ();
                        }, 0);
                    });

                    // --- Добавляем обработчик клика (итерация 14) ---
                    realButton.addEventListener('click', function(event) {
                        event.stopPropagation();

                        // Установить флаг режима "после клика удален"
                        showAllTagsMode = true; // Переиспользуем имя переменной, смысл теперь "после клика удален"

                        // 2. Удалить сам элемент "Еще n"
                        if (realAdditionalItem.parentNode) {
                            realAdditionalItem.remove();
                        }
                        // Больше ничего не делаем в обработчике клика. updateContainerState не вызываем.
                    });

                    // Вставим его после текущего элемента второй строки
                    itemToInsertAfter.after(realAdditionalItem);

                    // --- ПРОВЕРКА ПОСЛЕ ВСТАВКИ ---
                    const additionalItemRect = realAdditionalItem.getBoundingClientRect();
                    const additionalItemTopRelativeToContainer = additionalItemRect.top - containerTop;
                    const additionalItemLineIndex = Math.floor((additionalItemTopRelativeToContainer) / (itemHeight + gap));

                    let isSuitable = false;
                    if (additionalItemTopRelativeToContainer < maxVisibleHeight) {
                        // Он в нужной области. Проверим, самый ли он правый в строке.
                        const allContainerItems = Array.from(container.children).filter(child => child.matches(`.${itemClass}:not(.${additionalItemClass})`) || child === realAdditionalItem);
                        const itemsInSameLine = allContainerItems.filter(child => {
                            const rect = child.getBoundingClientRect();
                            const lineIdx = Math.floor((rect.top - containerTop) / (itemHeight + gap));
                            return lineIdx === additionalItemLineIndex;
                        });

                        // Найдем элемент с максимальным 'right' в строке
                        let rightmostItem = null;
                        let maxRight = -Infinity;
                        for (const item of itemsInSameLine) {
                            const itemRect = item.getBoundingClientRect();
                            if (itemRect.right > maxRight) {
                                maxRight = itemRect.right;
                                rightmostItem = item;
                            }
                        }

                        // Если самый правый элемент - это наш "Еще n", он последний
                        isSuitable = (rightmostItem === realAdditionalItem);
                    }
                    // --- КОНЕЦ ПРОВЕРКИ ---

                    if (isSuitable) {
                        // Успех! Он в пределах высоты и самый правый в строке.
                        placementFound = true;
                        // Не удаляем элемент, оставляем его в DOM на найденном месте.
                        // Обновим существующий элемент, если он был и отличается
                        if (existingAdditionalItem && existingAdditionalItem !== realAdditionalItem) {
                            existingAdditionalItem.remove();
                        }
                        break; // Выходим из цикла
                    } else {
                        // Не подошло (не в пределах высоты или не самый правый). Удалим временный элемент и пробуем следующий.
                        realAdditionalItem.remove();
                        realAdditionalItem = null; // Сбрасываем переменную
                    }
                }

                // Если не нашли подходящего места, удаляем существующий элемент "Еще n", если он есть и не был создан сейчас
                if (!placementFound) {
                    if (existingAdditionalItem && existingAdditionalItem !== realAdditionalItem) {
                        existingAdditionalItem.remove();
                    }
                }

            } else {
                // Переполнения нет, удаляем элемент "Еще n", если он есть
                if (existingAdditionalItem) {
                    existingAdditionalItem.remove();
                }
            }
        }

        // Объявляем переменную вне updateContainerState, чтобы она сохранялась между вызовами
        let showAllTagsMode = false; // Инициализируем как false
        // --- КОНЕЦ НОВОГО ---

        // --- ИНИЦИАЛИЗАЦИЯ ---
        if (isWrapActive()) {
            // Используем requestAnimationFrame для инициализации
            requestAnimationFrame(updateContainerState);
        }

        // --- НАСТРОЙКА ResizeObserver (Предпочтительно) ---
        if (window.ResizeObserver) {
            resizeObserver = new ResizeObserver(entries => {
                for (let entry of entries) {
                    if (resizeTimeout) {
                        clearTimeout(resizeTimeout);
                        resizeTimeout = null;
                    }
                    resizeTimeout = setTimeout(updateContainerState, resizeDebounceDelay);
                    break;
                }
            });

            const foundContainer = document.querySelector(`.${containerClass}`);
            if (foundContainer) {
                resizeObserver.observe(foundContainer);
            }
        } else {
            window.addEventListener('resize', function() {
                if (resizeTimeout) {
                    clearTimeout(resizeTimeout);
                }
                resizeTimeout = setTimeout(updateContainerState, resizeDebounceDelay);
            });
        }




        // 7. ФОРМА С СОРТИРОВКОЙ

        const ctCatButtonSelect = document.querySelector (".ct-cat--button__SELECT");
        const ctCatSpanSelect = document.querySelector (".ct-cat--span__SELECT");
        const ctCatDivSelect = document.querySelector (".ct-cat--div__SELECT");
        const ctCatLabelSelect = Array.from (document.querySelectorAll (".ct-cat--label__SELECT"));
        const ctCatFormSelect = document.querySelector (".ct-cat--form__SELECT");



        ctCatButtonSelect.addEventListener ("click", () => {
            if (!ctCatDivSelect.classList.contains ("__ct-cat--div__SELECT")) {
                ctCatDivSelect.classList.add ("__ct-cat--div__SELECT");
            } else {
                ctCatDivSelect.classList.remove ("__ct-cat--div__SELECT");
            }
        });

        ctCatLabelSelect.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                ctCatSpanSelect.textContent = ctCatLabelSelect[i].textContent;
                ctCatDivSelect.classList.remove ("__ct-cat--div__SELECT");
            });
        });

        document.addEventListener ("click", (e) => {
            if (!ctCatFormSelect.contains (e.target)) {
                ctCatDivSelect.classList.remove ("__ct-cat--div__SELECT");
            }
        });




        // 8. ФИЛЬТРЫ

        // 8.1 Открытие / закрытие мобильных фильтров

        const ctCatButtonFilter = document.querySelector (".ct-cat--button__FILTER");
        const ctCatButtonFilterClose = document.querySelector (".ct-cat--button__FILTER_CLOSE");
        const ctCatDivFilterBack = document.querySelector (".ct-cat--div__FILTER_BACK");


        ctCatButtonFilter.addEventListener ("click", () => {
            ctCatDivFilterBack.classList.add ("__ct-cat--div__FILTER_BACK");
            
        });

        ctCatButtonFilterClose.addEventListener ("click", () => {
            ctCatDivFilterBack.classList.remove ("__ct-cat--div__FILTER_BACK");
        });



        // 8.2 Появление / исчезание поясняющего попапа

        const ctCatPFilterItemPopupOpen = Array.from (document.querySelectorAll (".ct-cat--svg__FILTER_ITEM_POPUP_OPEN"));
        const ctCatDivFilterItemPopup = Array.from (document.querySelectorAll (".ct-cat--div__FILTER_ITEM_POPUP"));
        const ctCatSvgFilterItemPopupClose = Array.from (document.querySelectorAll (".ct-cat--svg__FILTER_ITEM_POPUP_CLOSE"));

        ctCatPFilterItemPopupOpen.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                e.stopPropagation ();
                ctCatDivFilterItemPopup[i].classList.toggle ("__ct-cat--div__FILTER_ITEM_POPUP");
            });
        });

        ctCatSvgFilterItemPopupClose.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                e.stopPropagation ();
                ctCatDivFilterItemPopup[i].classList.remove ("__ct-cat--div__FILTER_ITEM_POPUP");
            });
        });

        ctCatDivFilterItemPopup.forEach ((v, i, a) => {
            document.addEventListener ("click", (e) => {
                if (!a[i].contains (e.target)) {
                    a[i].classList.remove ("__ct-cat--div__FILTER_ITEM_POPUP");
                }
            });
        });



        // 8.3 Разворачивание до 6 чекбоксов
        
        const ctCatButtonFilterItemTop = Array.from (document.querySelectorAll (".ct-cat--button__FILTER_ITEM_TOP"));
        const ctCatSvgFilterItemTop = Array.from (document.querySelectorAll (".ct-cat--svg__FILTER_ITEM_TOP"));
        const ctCatFieldsetFilterItemBody = Array.from (document.querySelectorAll (".ct-cat--fieldset__FILTER_ITEM_BODY"));


        // 8.3.1 Установление высоты для первых 6 элементов каждого fieldset и корректировка при ресайзе

        function findCtCatFieldsetFilterMaxHeights () {
            const ctCatFieldsetFilterItemBodyMaxHeight = [];

            ctCatFieldsetFilterItemBody.forEach ((v, i, a) => {
                const items = Array.from (a[i].querySelectorAll (".ct-cat--label__FILTER_ITEM"));
                
                let sixItemsHeight = 0;
                for (let j = 0; j < 6; j++) {
                    if (!items[j]) break;
                    sixItemsHeight += items[j].offsetHeight;
                };
                
                if (items.length > 5) {
                    sixItemsHeight += parseInt (getComputedStyle (a[i]).gap) * 5;
                } else {
                    sixItemsHeight += parseInt (getComputedStyle (a[i]).gap) * (items.length - 1);
                }
                
                ctCatFieldsetFilterItemBodyMaxHeight.push (sixItemsHeight);
            });

            ctCatButtonFilterItemTop.forEach ((v, i, a) => {
                if (!ctCatSvgFilterItemTop[i].classList.contains ("__ct-cat--svg__FILTER_ITEM_TOP")) {
                    ctCatFieldsetFilterItemBody[i].style.maxHeight = "0px";
                } else {
                    ctCatFieldsetFilterItemBody[i].style.maxHeight = `${ctCatFieldsetFilterItemBodyMaxHeight[i]}px`;
                }
            });
            

            return ctCatFieldsetFilterItemBodyMaxHeight;
        }

        const ctCatFieldsetFilterItemBodyMaxHeight = findCtCatFieldsetFilterMaxHeights ();

        function ctCatDebounce (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const ctCatDebounce1 = ctCatDebounce (findCtCatFieldsetFilterMaxHeights, 150);

        window.addEventListener ("resize", ctCatDebounce1);

        
        // 8.3.2 Разворачивание / сворачивание

        ctCatButtonFilterItemTop.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!ctCatSvgFilterItemTop[i].classList.contains ("__ct-cat--svg__FILTER_ITEM_TOP")) {
                    ctCatSvgFilterItemTop[i].classList.add ("__ct-cat--svg__FILTER_ITEM_TOP");
                    ctCatFieldsetFilterItemBody[i].classList.add ("__ct-cat--fieldset__FILTER_ITEM_BODY");
                    ctCatFieldsetFilterItemBody[i].style.maxHeight = `${ctCatFieldsetFilterItemBodyMaxHeight[i]}px`;
                } else {
                    ctCatSvgFilterItemTop[i].classList.remove ("__ct-cat--svg__FILTER_ITEM_TOP");
                    ctCatFieldsetFilterItemBody[i].classList.remove ("__ct-cat--fieldset__FILTER_ITEM_BODY");
                    ctCatFieldsetFilterItemBody[i].style.maxHeight = "0px";
                }
            });
        });


        // 8.3.3 Кнопки "Показать еще" и "Свернуть"

        const ctCatButtonFilterItemElse1 = Array.from (document.querySelectorAll (".ct-cat--button__FILTER_ITEM_ELSE._1"));
        const ctCatButtonFilterItemElse2 = Array.from (document.querySelectorAll (".ct-cat--button__FILTER_ITEM_ELSE._2"));
        const ctCatSpanFilterItemElse = Array.from (document.querySelectorAll (".ct-cat--span__FILTER_ITEM_ELSE"));



        ctCatFieldsetFilterItemBody.forEach ((v, i, a) => {
            const items = Array.from (a[i].querySelectorAll (".ct-cat--label__FILTER_ITEM"));

            if (items.length > 6) {
                ctCatButtonFilterItemElse1[i].classList.add ("__ct-cat--button__FILTER_ITEM_ELSE");
            }

            ctCatSpanFilterItemElse[i].textContent = `${items.length - 6}`;

            ctCatButtonFilterItemElse1[i].addEventListener ("click", () => {
                a[i].classList.add ("__ct-cat--fieldset__FILTER_ITEM_BODY2");
                ctCatButtonFilterItemElse1[i].classList.remove ("__ct-cat--button__FILTER_ITEM_ELSE");
                ctCatButtonFilterItemElse2[i].classList.add ("__ct-cat--button__FILTER_ITEM_ELSE");
            });

            ctCatButtonFilterItemElse2[i].addEventListener ("click", () => {
                a[i].scrollTop = "0px";
                a[i].classList.remove ("__ct-cat--fieldset__FILTER_ITEM_BODY2");
                ctCatButtonFilterItemElse1[i].classList.add ("__ct-cat--button__FILTER_ITEM_ELSE");
                ctCatButtonFilterItemElse2[i].classList.remove ("__ct-cat--button__FILTER_ITEM_ELSE");
            });
        });


        // 8.4 Ползунок

        const ctCatButtonFilterItemTopR = document.querySelector (".ct-cat--button__FILTER_ITEM_TOP_R");
        const ctCatfieldsetFilterItemBodyR = document.querySelector (".ct-cat--fieldset__FILTER_ITEM_BODY_R");
        const ctCatSvgFilterItemTopR = document.querySelector (".ct-cat--svg__FILTER_ITEM_TOP_R");


        ctCatButtonFilterItemTopR.addEventListener ("click", () => {
            ctCatfieldsetFilterItemBodyR.classList.toggle ("__ct-cat--fieldset__FILTER_ITEM_BODY_R");
            ctCatSvgFilterItemTopR.classList.toggle ("__ct-cat--svg__FILTER_ITEM_TOP_R");
        });


        const selPriceMin = document.querySelector (".ct-cat--input__FILTER_INPUT_R.min");
        const selRangeMin = document.querySelector (".ct-cat--input__FILTER_RANGE.min");

        const selPriceMax = document.querySelector (".ct-cat--input__FILTER_INPUT_R.max");
        const selRangeMax = document.querySelector (".ct-cat--input__FILTER_RANGE.max");

        selPriceMin.addEventListener ("change", (e) => {
            if (+selPriceMin.value < 0 || +selPriceMin.value > 550000 || isNaN (selPriceMin.value) || +selPriceMin.value > +selPriceMax.value || selPriceMin.value == "") {
                selPriceMin.value = "0";
            }
            selRangeMin.value = selPriceMin.value;
            selRangeMin.style.background = `linear-gradient(to right, 
                var(--color-bluegray) ${selRangeMin.value / 5500}%, 
                var(--color-blue) ${selRangeMin.value / 5500}%,
                var(--color-blue) ${selRangeMax.value / 5500}%,
                var(--color-bluegray) ${selRangeMax.value / 5500}%)`;
        });

        selPriceMin.addEventListener ("keydown", (e) => {
            if (e.key === "Enter") {
                selPriceMin.blur ();
            }
        });

        selPriceMax.addEventListener ("change", (e) => {
            if (+selPriceMax.value < 0 || +selPriceMax.value > 550000 || isNaN (selPriceMax.value) || +selPriceMax.value < +selPriceMin.value || selPriceMax.value == "") {
                selPriceMax.value = "550000";
            }
            selRangeMax.value = selPriceMax.value;
            selRangeMin.style.background = `linear-gradient(to right, 
                var(--color-bluegray) ${selRangeMin.value / 5500}%, 
                var(--color-blue) ${selRangeMin.value / 5500}%,
                var(--color-blue) ${selRangeMax.value / 5500}%,
                var(--color-bluegray) ${selRangeMax.value / 5500}%)`;
        });

        selPriceMax.addEventListener ("keydown", (e) => {
            if (e.key === "Enter") {
                selPriceMax.blur ();
            }
        });
        
        
        selPriceMin.value = "0";
        
        
        selRangeMin.addEventListener ("input", () => {
            if (+selRangeMin.value > +selRangeMax.value) {
                selRangeMin.value = "0";
                selRangeMax.value = "550000";
                selPriceMin.value = "0";
                selPriceMax.value = "550000";
            }
            selRangeMin.style.background = `linear-gradient(to right, 
                var(--color-bluegray) ${selRangeMin.value / 5500}%, 
                var(--color-blue) ${selRangeMin.value / 5500}%,
                var(--color-blue) ${selRangeMax.value / 5500}%,
                var(--color-bluegray) ${selRangeMax.value / 5500}%)`;

            selPriceMin.value = selRangeMin.value;
        });

        
        selPriceMax.value = "550000";
        
        
        selRangeMax.addEventListener ("input", () => {
            if (+selRangeMax.value < +selRangeMin.value) {
                selRangeMin.value = "0";
                selRangeMax.value = "550000";
                selPriceMin.value = "0";
                selPriceMax.value = "550000";
            }
            selRangeMin.style.background = `linear-gradient(to right, 
                var(--color-bluegray) ${selRangeMin.value / 5500}%, 
                var(--color-blue) ${selRangeMin.value / 5500}%, 
                var(--color-blue) ${selRangeMax.value / 5500}%, 
                var(--color-bluegray) ${selRangeMax.value / 5500}%)`;            
            selPriceMax.value = selRangeMax.value;
        });


        // 8.5 Сброс дорожки ползунка при ресете

        const ctCatButtonFilterReset = Array.from (document.querySelectorAll (".ct-cat--button__FILTER_RESET"));

        ctCatButtonFilterReset.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                selPriceMin.value = "0";
                selRangeMin.value = "0";
                selPriceMax.value = "550000";
                selRangeMax.value = "550000";
                selRangeMin.style.background = `linear-gradient(to right, 
                    var(--color-bluegray) ${selRangeMin.value / 5500}%, 
                    var(--color-blue) ${selRangeMin.value / 5500}%,
                    var(--color-blue) ${selRangeMax.value / 5500}%,
                    var(--color-bluegray) ${selRangeMax.value / 5500}%)`;
            });
        });

        const ctCatFormFilter = document.querySelector (".ct-cat--form__FILTER");

        ctCatFormFilter.addEventListener ("keydown", (e) => {
            if (e.key === "Enter") {
                e.preventDefault();
                return false;
            }
        });


        // 8.6 Установление верхнего поля фильтров на десктопе

        function ctCatFormFilterMarginTop () {
            if (cdCommonMedia1440.matches) {
                const ctCatActiveForm = document.querySelector (".__hm-cat--li__MENU_ITEM .hm-cat--form__SUBMENU");
                if (ctCatActiveForm) {
                    ctCatFormFilter.style.marginTop = `${ctCatActiveForm.offsetHeight + 100}px`;
                } else {
                    ctCatFormFilter.style.marginTop = "0px";
                }
            } else {
                ctCatFormFilter.style.marginTop = "0px";
            }
        }

        ctCatFormFilterMarginTop ();

        cdCommonMedia1440.addEventListener ("change", ctCatFormFilterMarginTop);
        
        hmCatButtonMenuItem.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                ctCatFormFilterMarginTop ();
            });
        });


        

        // 7. СЧЕТЧИК ПОКАЗАННЫХ КАРТОЧЕК

        const ctCatButtonElse = document.querySelector (".ct-cat--button__ELSE");
        const ctCatArticles = Array.from (document.querySelectorAll (".ct-cat--div__CONTENT .hm-cat--article__CARD"));
        const ctCatSpanInd1 = document.querySelector (".ct-cat--span__IND1");
        const ctCatSpanInd2 = document.querySelector (".ct-cat--span__IND2");
        const ctCatDivLine1 = document.querySelector (".ct-cat--div__LINE1");

        
        function ctCatCounter () {
            // 7.1 Числа

            const ctCatArticlesVis = ctCatArticles.filter (x => {
                return getComputedStyle (x).display == "grid";
            });
            ctCatSpanInd1.textContent = ctCatArticlesVis.length;
            ctCatSpanInd2.textContent = ctCatArticles.length;

            // 7.2 Линия

            ctCatDivLine1.style.width = `${(parseFloat (ctCatSpanInd1.textContent) / parseFloat (ctCatSpanInd2.textContent)) * 100}%`;

            // 7.3 Уборка кнопки "Показать еще", если все карточки показаны

            if (ctCatArticlesVis.length === ctCatArticles.length) {
                ctCatButtonElse.classList.add ("__ct-cat--button__ELSE");
            } else {
                ctCatButtonElse.classList.remove ("__ct-cat--button__ELSE");
            }
        }

        ctCatCounter ();



        // 7.4 Пересчет при резайзе

        cdCommonMedia768.addEventListener ("change", ctCatCounter);
        cdCommonMedia1200.addEventListener ("change", ctCatCounter);
        cdCommonMedia1440.addEventListener ("change", ctCatCounter);
        cdCommonMedia1920.addEventListener ("change", ctCatCounter);




        // 8. ПЕРЕКЛЮЧЕНИЕ ВИДОВ

        const ctCatButtonViewsStr = document.querySelector (".ct-cat--button__VIEWS._STR");
        const ctCatButtonViewsGrd = document.querySelector (".ct-cat--button__VIEWS._GRD");


        ctCatButtonViewsStr.addEventListener ("click", () => {
            ctCatDivContent.classList.add ("_STR");
            ctCatCounter ();
        });

        ctCatButtonViewsGrd.addEventListener ("click", () => {
            ctCatDivContent.classList.remove ("_STR");
            ctCatCounter ();
        });




        // 9. РАСКРЫТИЕ ВСЕХ КАРТОЧЕК


        ctCatButtonElse.addEventListener ("click", () => {
            ctCatDivContent.classList.add ("__ct-cat--div__CONTENT");
            ctCatButtonElse.classList.add ("__ct-cat--button__ELSE");

            ctCatCounter ();
        });


    
    
    
    
    
    }
});