
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА COMPARISON |||||||||| ********** ---------- */


    if (document.querySelector ("#comp")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ MAIN ********** ---------- */


        // 1. ТЕГИ - ЧЕКБОКСЫ ДЛЯ ВЫБОРА КАТЕГОРИЙ

        function compMainTags () {
            const compMainFormCompCleanCat = document.querySelector (".comp-main--form__COMP_CLEAN_CAT");
            const compMainLabelTags = Array.from (document.querySelectorAll (".comp-main--label__TAG"));


            // Клик по одной из категорий - появление / скрытие кнопки очистки категорий

            compMainLabelTags.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    if (compMainLabelTags.find (x => x.querySelector (".comp-main--input__TAG").checked == true)) {
                        compMainFormCompCleanCat.classList.add ("__comp-main--form__COMP_CLEAN_CAT");
                    } else {
                        compMainFormCompCleanCat.classList.remove ("__comp-main--form__COMP_CLEAN_CAT");
                    }
                });
                
            });


            // Клик по кнопке "Очистить категорию" - снятие выбора со всех категорий

            compMainFormCompCleanCat.addEventListener ("submit", (e) => {
                e.preventDefault ();
                compMainLabelTags.forEach ((v, i, a) => {
                    a[i].querySelector (".comp-main--input__TAG").checked = false;
                    compMainFormCompCleanCat.classList.remove ("__comp-main--form__COMP_CLEAN_CAT");
                });
            });
        }

        compMainTags ();
        

        


        
                
        // 2. СЛАЙДЕР КАРТОЧЕК + СЛАЙДЕР КАРТОЧЕК ФИКСИРОВАННЫЙ + СЛАЙДЕРЫ ХАРАКТЕРИСТИК
        // + ЗАМЕНА ИКОНОК В КНОПКЕ ДОБАВЛЕНИЯ / УДАЛЕНИЯ ТОВАРА В СРАВНЕНИЕ + ДОБАВЛЕНИЕ / 
        // УДАЛЕНИЕ ХАРАКТЕРИСТИК В ВЫБРАННЫЕ 

        function compMainAllSliders () {
            const compMainDivSwiperNavStat = document.querySelector (".comp-main--div__SWIPER_NAV._STAT");
            const compMainDivSwiperNavFix = document.querySelector (".comp-main--div__SWIPER_NAV._FIX");
            const compMainDivSwiperStat0 = document.querySelector (".comp-main--div__SWIPER._STAT");
            const compMainDivSwiperFix0 = document.querySelector (".comp-main--div__SWIPER._FIX");
            

            // Главный слайдер

            const compMainDivSwiperStat = new Swiper (".comp-main--div__SWIPER._STAT", {
                init: true,
                navigation: {
                    nextEl: ".comp-main--button__SWIPER_NEXT._STAT",
                    prevEl: ".comp-main--button__SWIPER_PREV._STAT",
                },
                breakpoints: {
                    200: {
                        spaceBetween: 20,
                        slidesPerView: 2,
                    },
                
                    768: {
                        spaceBetween: 40,
                        slidesPerView: 2,
                    },
    
                    1200: {
                        spaceBetween: 40,
                        slidesPerView: 3,
                    },
    
                    1440: {
                        spaceBetween: 40,
                        slidesPerView: 3,
                    },
    
                    1920: {
                        spaceBetween: 40,
                        slidesPerView: 4,
                    },
                },
                on: {
                    init: function () {

                        // скрытие кнопок навигации при недостаточном количестве слайдов
                        if (this.slides.length <= this.params.slidesPerView) {
                            compMainDivSwiperNavStat.classList.add ("__comp-main--div__SWIPER_NAV");
                        } else {
                            compMainDivSwiperNavStat.classList.remove ("__comp-main--div__SWIPER_NAV");
                        }

                        // замена иконок добавления в сравнение на иконки удаления
                        // + добавление попапа для них
                        const hmCatSvgCardComparisonStat = Array.from (compMainDivSwiperStat0.querySelectorAll (".hm-cat--button__CARD_COMPARISON svg"));

                        hmCatSvgCardComparisonStat.forEach ((v, i, a) => {
                            a[i].insertAdjacentHTML ("afterend", `
                                <svg class="comp-main--svg__CARD_DELETE" width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.73643 23C3.09714 23 2.55262 22.7705 2.10286 22.3116C1.65333 21.8524 1.42857 21.2964 1.42857 20.6437V2.58051H0V1.12198H5.71429V0H14.2857V1.12198H20V2.58051H18.5714V20.6437C18.5714 21.3151 18.3512 21.8757 17.9107 22.3254C17.4702 22.7751 16.9212 23 16.2636 23H3.73643ZM17.1429 2.58051H2.85714V20.6437C2.85714 20.9055 2.93952 21.1207 3.10429 21.2891C3.26929 21.4574 3.48 21.5415 3.73643 21.5415H16.2636C16.4836 21.5415 16.6851 21.448 16.8682 21.2611C17.0513 21.0741 17.1429 20.8684 17.1429 20.6437V2.58051ZM6.86821 18.6244H8.29679V5.49758H6.86821V18.6244ZM11.7032 18.6244H13.1318V5.49758H11.7032V18.6244Z" fill="#BFBFBF"/>
                                </svg>
                                <p class="comp-main--p__CARD_DELETE_POPUP">
                                    Удалить из сравнения
                                </p>
                            `)
                            a[i].remove ();
                        });
                    }
                }
            });
            

            // Копия главного слайдера для всплывающей шапки

            const compMainDivSwiperFix = new Swiper (".comp-main--div__SWIPER._FIX", {
                init: true,
                navigation: {
                    nextEl: ".comp-main--button__SWIPER_NEXT._FIX",
                    prevEl: ".comp-main--button__SWIPER_PREV._FIX",
                },
                breakpoints: {
                    200: {
                        spaceBetween: 20,
                        slidesPerView: 2,
                    },
                
                    768: {
                        spaceBetween: 40,
                        slidesPerView: 2,
                    },
    
                    1200: {
                        spaceBetween: 40,
                        slidesPerView: 3,
                    },
    
                    1440: {
                        spaceBetween: 40,
                        slidesPerView: 3,
                    },
    
                    1920: {
                        spaceBetween: 40,
                        slidesPerView: 4,
                    },
                },
                on: {
                    init: function () {

                        // скрытие кнопок навигации при недостаточном количестве слайдов
                        if (this.slides.length <= this.params.slidesPerView) {
                            compMainDivSwiperNavFix.classList.add ("__comp-main--div__SWIPER_NAV");
                        } else {
                            compMainDivSwiperNavFix.classList.remove ("__comp-main--div__SWIPER_NAV");
                        }

                        // замена иконок добавления в сравнение на иконки удаления
                        // + добавление попапа для них
                        const hmCatSvgCardComparisonFix = Array.from (compMainDivSwiperFix0.querySelectorAll (".hm-cat--button__CARD_COMPARISON svg"));

                        hmCatSvgCardComparisonFix.forEach ((v, i, a) => {
                            a[i].insertAdjacentHTML ("afterend", `
                                <svg class="comp-main--svg__CARD_DELETE" width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.73643 23C3.09714 23 2.55262 22.7705 2.10286 22.3116C1.65333 21.8524 1.42857 21.2964 1.42857 20.6437V2.58051H0V1.12198H5.71429V0H14.2857V1.12198H20V2.58051H18.5714V20.6437C18.5714 21.3151 18.3512 21.8757 17.9107 22.3254C17.4702 22.7751 16.9212 23 16.2636 23H3.73643ZM17.1429 2.58051H2.85714V20.6437C2.85714 20.9055 2.93952 21.1207 3.10429 21.2891C3.26929 21.4574 3.48 21.5415 3.73643 21.5415H16.2636C16.4836 21.5415 16.6851 21.448 16.8682 21.2611C17.0513 21.0741 17.1429 20.8684 17.1429 20.6437V2.58051ZM6.86821 18.6244H8.29679V5.49758H6.86821V18.6244ZM11.7032 18.6244H13.1318V5.49758H11.7032V18.6244Z" fill="#BFBFBF"/>
                                </svg>
                                <p class="comp-main--p__CARD_DELETE_POPUP">
                                    Удалить из сравнения
                                </p>
                            `)
                            a[i].remove ();
                        });
                    }
                }
            });


            // Слайдеры характеристик

            function compMainDivSubitemMain1F () {
                const compMainDivSubitemMain1 = Array.from (document.querySelectorAll (".comp-main--div__WRAP1"), x => {
                    return new Swiper (x.querySelector (".comp-main--div__SUBITEM_MAIN1"), {
                        loop: false,
                        watchOverflow: true,
                        simulateTouch: false,
                        allowTouchMove: false,
                        breakpoints: {
                            200: {
                                spaceBetween: 20,
                                slidesPerView: 2,
                            },
                        
                            768: {
                                spaceBetween: 40,
                                slidesPerView: 2,
                            },
            
                            1200: {
                                spaceBetween: 40,
                                slidesPerView: 3,
                            },
            
                            1440: {
                                spaceBetween: 40,
                                slidesPerView: 3,
                            },
            
                            1920: {
                                spaceBetween: 40,
                                slidesPerView: 4,
                            },
                        },
                    });
                });

                compMainDivSwiperStat.controller.control = [compMainDivSwiperFix, ...compMainDivSubitemMain1];
                compMainDivSwiperFix.controller.control = [compMainDivSwiperStat, ...compMainDivSubitemMain1];
            }
            
            compMainDivSubitemMain1F ();


            // добавление / удаление характеристик в выбранные

            const compMainDivChosen = document.querySelector (".comp-main--div__ITEM_MAIN.CHOSEN")
            const compMainDivSubitem = Array.from (document.querySelectorAll (".comp-main--div__SUBITEM"));
            const compMainButtonName = Array.from (document.querySelectorAll (".comp-main--button__NAME"));
            const compMainDivRect = Array.from (document.querySelectorAll (".comp-main--div__RECT"));
    
    
            //клик по кнопкам не в отделе "Выбранные"

            compMainButtonName.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    if (!compMainDivRect[i].classList.contains ("__comp-main--div__RECT")) {
                        compMainDivRect[i].classList.add ("__comp-main--div__RECT");
                        let subitemClone = compMainDivSubitem[i].cloneNode (true);
                        subitemClone.classList.remove ("comp-main--div__SUBITEM");
                        subitemClone.classList.add ("comp-main--div__SUBITEM_CLONE");
                        subitemClone.setAttribute ("featnumber", i);
                        compMainDivChosen.append (subitemClone);
    
                        let sortResult = Array.from (compMainDivChosen.children);
                        sortResult.sort ((a, b) => {
                            return (+a.getAttribute("featnumber")) - (+b.getAttribute("featnumber"));
                        });
    
                        sortResult.forEach (v => {
                            compMainDivChosen.append (v);
                        });
    
                    } else {
                        compMainDivRect[i].classList.remove ("__comp-main--div__RECT");
                        let arr = Array.from (compMainDivChosen.children);
                        let findResult = arr.find (x => +x.getAttribute ("featnumber") === i);
                        findResult.remove ();
                    }
                    compMainDivSubitemMain1F ();
                    compMainNamePopup ();
                });
            });
    
    
            //клик по кнопкам в отделе "Выбранные"

            compMainDivChosen.addEventListener ("click", (e) => {
                let targ = e.target.closest (".comp-main--button__NAME");
                if (!targ) return;
                let ind = +targ.closest (".comp-main--div__SUBITEM_CLONE").getAttribute ("featnumber");
                compMainDivRect[ind].classList.remove ("__comp-main--div__RECT");
                targ.closest (".comp-main--div__SUBITEM_CLONE").remove ();

                compMainDivSubitemMain1F ();
                compMainNamePopup ();
            });

        }

        compMainAllSliders ();

        





        // 3. СЛАЙДЕР ИЗОБРАЖЕНИЙ ТОВАРОВ

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

        function hmCatPriceSplit () {
            const localFormat = new Intl.NumberFormat("ru-RU");

            const hmCatPrices = Array.from (document.querySelectorAll (".hm-cat--span__CARD_PRICE_CUR:first-of-type, .hm-cat--span__CARD_PRICE_OLD:first-of-type"));
            hmCatPrices.forEach ((v, i, a) => {
                a[i].textContent = `${localFormat.format (a[i].textContent)}`;
            });
        }

        hmCatPriceSplit ();







        // 6. ФИКСИРОВАННОЕ ПОЗИЦИОНИРОВАНИЕ ВЕРХНЕГО СЛАЙДЕРА ПРИ ПРОКРУТКЕ

        const compMainDivSwiperMark = document.querySelector (".comp-main--div__SWIPER_MARK");
        const cFooter = document.querySelector (".c-footer");
        const compMainDivCompTop = document.querySelector (".comp-main--div__COMP_TOP");
        const compMainDivCompTopFixed = document.querySelector (".comp-main--div__COMP_TOP_FIXED");

        function compMainDivCompTopChange () {
            const markRect = compMainDivSwiperMark.getBoundingClientRect ();
            const footerRect = cFooter.getBoundingClientRect ();

            if (markRect.top < 250 && footerRect.top > 250) {
                compMainDivCompTop.classList.add ("__comp-main--div__COMP_TOP");
                compMainDivCompTopFixed.classList.add ("__comp-main--div__COMP_TOP_FIXED");
            } else {
                compMainDivCompTop.classList.remove ("__comp-main--div__COMP_TOP");
                compMainDivCompTopFixed.classList.remove ("__comp-main--div__COMP_TOP_FIXED");
            }
        }

        compMainDivCompTopChange ();

        window.addEventListener ("scroll", compMainDivCompTopChange);
        window.addEventListener ("resize", compMainDivCompTopChange);






        // 7. ОТКРЫТИЕ / ЗАКРЫТИЕ РАЗДЕЛОВ ТАБЛИЦЫ

        function compMainItemOpen () {
            const compMainButtonItemTop = Array.from (document.querySelectorAll (".comp-main--button__ITEM_TOP"));
            const compMainSvgItemTop = Array.from (document.querySelectorAll (".comp-main--svg__ITEM_TOP"));
            const compMainDivItemMain = Array.from (document.querySelectorAll (".comp-main--div__ITEM_MAIN"));
    
    
            compMainButtonItemTop.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    compMainSvgItemTop[i].classList.toggle ("__comp-main--svg__ITEM_TOP");
                    compMainDivItemMain[i].classList.toggle ("__comp-main--div__ITEM_MAIN");
                });
            });
        }

        compMainItemOpen ();
        






        // 8 ПОЯВЛЕНИЕ / ИСЧЕЗАНИЕ ПОЯСНЯЮЩИХ ПОПАПОВ

        function compMainNamePopup () {
            const compMainSvgName = Array.from (document.querySelectorAll (".comp-main--svg__NAME"));
            const compMainPNamePopup = Array.from (document.querySelectorAll (".comp-main--p__NAME_POPUP"));

            compMainSvgName.forEach ((v, i, a) => {
                a[i].onclick = (e) => {
                    e.stopPropagation ();
                    compMainPNamePopup[i].classList.toggle ("__comp-main--p__NAME_POPUP");
                    compMainPNamePopup.filter (x => x !== compMainPNamePopup[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__comp-main--p__NAME_POPUP");
                    });
                };
            });

            document.onclick = (e) => {
                compMainPNamePopup.forEach ((v, i, a) => {
                    if (!a[i].contains (e.target)) {
                        a[i].classList.remove ("__comp-main--p__NAME_POPUP");
                    }
                });
            };
        }

        compMainNamePopup ();
    }
});