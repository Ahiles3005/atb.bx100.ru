"use strict";

window.addEventListener ("load", function () {

    /* ---------- ********** |||||||||| СТРАНИЦА КАТАЛОГ |||||||||| ********** ---------- */

    if (document.querySelector ("#catalog")) {
        // Алиасы брейкпоинтов
        const cdCommonMedia400 = window.cdCommonMedia400 || window.matchMedia ("(min-width: 400px)");
        const cdCommonMedia511 = window.cdCommonMedia511 || window.matchMedia ("(min-width: 511px)");
        const cdCommonMedia768 = window.cdCommonMedia768 || window.matchMedia ("(min-width: 768px)");
        const cdCommonMedia1200 = window.cdCommonMedia1200 || window.matchMedia ("(min-width: 1200px)");
        const cdCommonMedia1440 = window.cdCommonMedia1440 || window.matchMedia ("(min-width: 1440px)");
        const cdCommonMedia1920 = window.cdCommonMedia1920 || window.matchMedia ("(min-width: 1920px)");

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
        const options = { rootMargin: '-10px 0px 0px 0px', threshold: 0 }
        const observer = new IntersectionObserver(callback, options)
        scrolls.forEach((v) => observer.observe(v));

        /* ---------- ********** СЕКЦИЯ CAT ********** ---------- */

        // 1. РАСЧЕТ ПОЗИЦИОНИРОВАНИЯ ФОРМ С РАДИОКНОПКАМИ В ДЕСКТОПЕ
        const ctCatUlTags = document.querySelector (".ct-cat--ul__TAGS");
        const ctCatUlMenu = document.querySelector (".ct-cat .hm-cat--ul__MENU");
        const ctCatDivLeft = document.querySelector (".ct-cat--div__LEFT");
        const ctCatFormSubmenu = Array.from (document.querySelectorAll (".ct-cat .hm-cat--form__SUBMENU"));

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
        const hmCatFormSubmenu2 = Array.from (document.querySelectorAll (".hm-cat--form__SUBMENU"));
        const ctCatDivContent = document.querySelector (".ct-cat--div__CONTENT");

        hmCatButtonMenuItem.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!hmCatLiMenuItem[i].classList.contains ("__hm-cat--li__MENU_ITEM")) {
                    if (window.innerWidth < 1440) {
                        hmCatLiMenuItem[i].classList.add ("__hm-cat--li__MENU_ITEM");
                    } else {
                        hmCatLiMenuItem[i].classList.add ("__hm-cat--li__MENU_ITEM");
                    }
                    if (hmCatLiMenuItem[i].querySelector (".hm-cat--label__SUBMENU:first-of-type > .hm-cat--input__SUBMENU")) {
                        hmCatLiMenuItem[i].querySelector (".hm-cat--label__SUBMENU:first-of-type").click ();
                    }
                    hmCatLiMenuItem.filter (x => x !== hmCatLiMenuItem[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__hm-cat--li__MENU_ITEM");
                        if (a1[i1].querySelector (".hm-cat--input__SUBMENU:checked")) {
                            const a = a1[i1].querySelector (".hm-cat--input__SUBMENU:checked");
                            a.checked = false;
                        } 
                    });
                } else {
                    if (window.innerWidth < 1440) {
                        hmCatLiMenuItem[i].classList.remove ("__hm-cat--li__MENU_ITEM");
                    }
                }
            });
        });
        hmCatButtonMenuItem[0]?.click ();

        function hmCatFormHeight () {
            if (window.innerWidth > 1439) {
                hmCatFormSubmenu2.forEach ((v, i, a) => {
                    setTimeout (() => {
                        a[i].style.maxHeight = getComputedStyle (ctCatDivContent).height;
                    }, 800);
                });
            } else {
                hmCatFormSubmenu2.forEach ((v, i, a) => {
                    setTimeout (() => {
                        a[i].style.maxHeight = null;
                    }, 50);
                });
            }
        }
        // (оставлено закомментированным как в исходнике)

        // 3. СЛАЙДЕР КАРТОЧЕК ТОВАРОВ
        function hmCatImageSwiper () {
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
        function findItemsInLine(items, containerTop, itemHeight, gap, targetLineIndex) {
            return items.filter(item => {
                const itemRect = item.getBoundingClientRect();
                const itemLineIndex = Math.floor((itemRect.top - containerTop) / (itemHeight + gap));
                return itemLineIndex === targetLineIndex;
            });
        }
        function updateContainerState() {
            container = document.querySelector(`.${containerClass}`);
            if (!container) {
                console.warn(`Container with class '${containerClass}' not found.`);
                return;
            }
            if (showAllTagsMode) {
                const existingAdditionalItem = container.querySelector(`.${additionalItemClass}`);
                if (existingAdditionalItem) {
                    existingAdditionalItem.remove();
                }
                return;
            }
            const existingAdditionalItem = container.querySelector(`.${additionalItemClass}`);
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
            const firstItemRect = currentItems[0].getBoundingClientRect();
            const itemHeight = firstItemRect.height;
            const containerRect = container.getBoundingClientRect();
            const containerTop = containerRect.top;
            const maxVisibleHeight = itemHeight * maxLines + gap * (maxLines - 1);

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
                const itemsInLine2 = findItemsInLine(currentVisibleItems, containerTop, itemHeight, gap, 1);
                let placementFound = false;
                let realAdditionalItem = null;
                for (let i = itemsInLine2.length - 1; i >= 0; i--) {
                    const itemToInsertAfter = itemsInLine2[i];
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
                    realButton.addEventListener('click', function(event) {
                        event.stopPropagation();
                        showAllTagsMode = true;
                        if (realAdditionalItem.parentNode) {
                            realAdditionalItem.remove();
                        }
                    });
                    itemToInsertAfter.after(realAdditionalItem);
                    const additionalItemRect = realAdditionalItem.getBoundingClientRect();
                    const additionalItemTopRelativeToContainer = additionalItemRect.top - containerTop;
                    const additionalItemLineIndex = Math.floor((additionalItemTopRelativeToContainer) / (itemHeight + gap));
                    let isSuitable = false;
                    if (additionalItemTopRelativeToContainer < maxVisibleHeight) {
                        const allContainerItems = Array.from(container.children).filter(child => child.matches(`.${itemClass}:not(.${additionalItemClass})`) || child === realAdditionalItem);
                        const itemsInSameLine = allContainerItems.filter(child => {
                            const rect = child.getBoundingClientRect();
                            const lineIdx = Math.floor((rect.top - containerTop) / (itemHeight + gap));
                            return lineIdx === additionalItemLineIndex;
                        });
                        let rightmostItem = null;
                        let maxRight = -Infinity;
                        for (const item of itemsInSameLine) {
                            const itemRect = item.getBoundingClientRect();
                            if (itemRect.right > maxRight) {
                                maxRight = itemRect.right;
                                rightmostItem = item;
                            }
                        }
                        isSuitable = (rightmostItem === realAdditionalItem);
                    }
                    if (isSuitable) {
                        placementFound = true;
                        if (existingAdditionalItem && existingAdditionalItem !== realAdditionalItem) {
                            existingAdditionalItem.remove();
                        }
                        break;
                    } else {
                        realAdditionalItem.remove();
                        realAdditionalItem = null;
                    }
                }
                if (!placementFound) {
                    if (existingAdditionalItem && existingAdditionalItem !== realAdditionalItem) {
                        existingAdditionalItem.remove();
                    }
                }
            } else {
                if (existingAdditionalItem) {
                    existingAdditionalItem.remove();
                }
            }
        }
        let showAllTagsMode = false;
        if (isWrapActive()) {
            requestAnimationFrame(updateContainerState);
        }
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
        ctCatButtonSelect?.addEventListener ("click", () => {
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
        ctCatButtonFilter?.addEventListener ("click", () => {
            ctCatDivFilterBack.classList.add ("__ct-cat--div__FILTER_BACK");
        });
        ctCatButtonFilterClose?.addEventListener ("click", () => {
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
                ctCatButtonFilterItemElse2[i].classList.remove ("__ct-cat--button__FILTER_ITEM_ELЕ");
            });
        });

        // 8.4 Ползунок
        const ctCatButtonFilterItemTopR = document.querySelector (".ct-cat--button__FILTER_ITEM_TOP_R");
        const ctCatfieldsetFilterItemBodyR = document.querySelector (".ct-cat--fieldset__FILTER_ITEM_BODY_R");
        const ctCatSvgFilterItemTopR = document.querySelector (".ct-cat--svg__FILTER_ITEM_TOP_R");
        ctCatButtonFilterItemTopR?.addEventListener ("click", () => {
            ctCatfieldsetFilterItemBodyR.classList.toggle ("__ct-cat--fieldset__FILTER_ITEM_BODY_R");
            ctCatSvgFilterItemTopR.classList.toggle ("__ct-cat--svg__FILTER_ITEM_TOP_R");
        });

        const selPriceMin = document.querySelector (".ct-cat--input__FILTER_INPUT_R.min");
        const selRangeMin = document.querySelector (".ct-cat--input__FILTER_RANGE.min");
        const selPriceMax = document.querySelector (".ct-cat--input__FILTER_INPUT_R.max");
        const selRangeMax = document.querySelector (".ct-cat--input__FILTER_RANGE.max");

        selPriceMin?.addEventListener ("change", (e) => {
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
        selPriceMin?.addEventListener ("keydown", (e) => {
            if (e.key === "Enter") {
                selPriceMin.blur ();
            }
        });
        selPriceMax?.addEventListener ("change", (e) => {
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
        selPriceMax?.addEventListener ("keydown", (e) => {
            if (e.key === "Enter") {
                selPriceMax.blur ();
            }
        });
        selPriceMin && (selPriceMin.value = "0");
        selRangeMin?.addEventListener ("input", () => {
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
        selPriceMax && (selPriceMax.value = "550000");
        selRangeMax?.addEventListener ("input", () => {
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
        ctCatFormFilter?.addEventListener ("keydown", (e) => {
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
        ctCatFormFilter && ctCatFormFilterMarginTop ();
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
            const ctCatArticlesVis = ctCatArticles.filter (x => {
                return getComputedStyle (x).display == "grid";
            });
            ctCatSpanInd1.textContent = ctCatArticlesVis.length;
            ctCatSpanInd2.textContent = ctCatArticles.length;
            ctCatDivLine1.style.width = `${(parseFloat (ctCatSpanInd1.textContent) / parseFloat (ctCatSpanInd2.textContent)) * 100}%`;
            if (ctCatArticlesVis.length === ctCatArticles.length) {
                ctCatButtonElse.classList.add ("__ct-cat--button__ELSE");
            } else {
                ctCatButtonElse.classList.remove ("__ct-cat--button__ELSE");
            }
        }
        ctCatCounter ();
        cdCommonMedia768.addEventListener ("change", ctCatCounter);
        cdCommonMedia1200.addEventListener ("change", ctCatCounter);
        cdCommonMedia1440.addEventListener ("change", ctCatCounter);
        cdCommonMedia1920.addEventListener ("change", ctCatCounter);

        // 8. ПЕРЕКЛЮЧЕНИЕ ВИДОВ
        const ctCatButtonViewsStr = document.querySelector (".ct-cat--button__VIEWS._STR");
        const ctCatButtonViewsGrd = document.querySelector (".ct-cat--button__VIEWS._GRD");
        ctCatButtonViewsStr?.addEventListener ("click", () => {
            ctCatDivContent.classList.add ("_STR");
            ctCatCounter ();
        });
        ctCatButtonViewsGrd?.addEventListener ("click", () => {
            ctCatDivContent.classList.remove ("_STR");
            ctCatCounter ();
        });

        // 9. РАСКРЫТИЕ ВСЕХ КАРТОЧЕК
        ctCatButtonElse?.addEventListener ("click", () => {
            ctCatDivContent.classList.add ("__ct-cat--div__CONTENT");
            ctCatButtonElse.classList.add ("__ct-cat--button__ELSE");
            ctCatCounter ();
        });
    }

});


