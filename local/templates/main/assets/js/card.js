"use strict";

window.addEventListener ("load", function () {

    /* ---------- ********** |||||||||| СТРАНИЦА КАРТОЧКА СЕРИИ |||||||||| ********** ---------- */

    if (document.querySelector ("#card")) {
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

        window.addEventListener ("scroll", showCdHeroDivTop2, { passive: true });

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
        cdHeroButtonPlus?.addEventListener ("click", () => {
            const activeImage = cdHeroDivSwiper0.querySelector (".swiper-slide-active img");
            activeImage.classList.add ("__cd-hero--img__SWIPER_IMAGE");
        });
        cdHeroButtonMinus?.addEventListener ("click", () => {
            const activeImage = cdHeroDivSwiper0.querySelector (".swiper-slide-active img");
            activeImage.classList.remove ("__cd-hero--img__SWIPER_IMAGE");
        });
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

        cdHeroButtonImagesTopCont?.addEventListener ("click", (e) => {
            e.stopPropagation ();
            cdHeroDivPopup.classList.add ("__cd-hero--div__POPUP");
            cdHeroDivSwiper.slideTo (0);
        });
        cdHeroButtonImagescdHeroImg1?.addEventListener ("click", (e) => {
            e.stopPropagation ();
            cdHeroDivPopup.classList.add ("__cd-hero--div__POPUP");
            cdHeroDivSwiper.slideTo (0);
        });
        cdHeroButtonImagescdHeroImg2?.addEventListener ("click", (e) => {
            e.stopPropagation ();
            cdHeroDivPopup.classList.add ("__cd-hero--div__POPUP");
            cdHeroDivSwiper.slideTo (1);
        });
        cdHeroButtonImagescdHeroVid?.addEventListener ("click", (e) => {
            e.stopPropagation ();
            cdHeroDivPopup.classList.add ("__cd-hero--div__POPUP");
            cdHeroDivSwiper.slideTo (cdHeroDivSwiper.slides.length - 2);
        });
        cdHeroButtonImagescdHero3d?.addEventListener ("click", (e) => {
            e.stopPropagation ();
            cdHeroDivPopup.classList.add ("__cd-hero--div__POPUP");
            cdHeroDivSwiperPagBuls[cdHeroDivSwiperPagBuls.length - 1].click ();
        });
        cdHeroButtonImagescdHeroMore?.addEventListener ("click", (e) => {
            e.stopPropagation ();
            cdHeroDivPopup.classList.add ("__cd-hero--div__POPUP");
        });
        cdHeroButtonPopupClose?.addEventListener ("click", () => {
            cdHeroDivPopup.classList.remove ("__cd-hero--div__POPUP");
        });
        cdHeroDivPopup?.addEventListener ("click", (e) => {
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

        // 2. КНОПКИ ВЫБОРА ТОВАРА ДЛЯ СРАВНЕНИЯ ИЛИ В ИЗБРАННОЕ
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

        let cdModCounter = 1;

        function cdModVisCounter () {
            const cdModArticlesVis = cdModArticles.filter (x => {
                return getComputedStyle (x).display == "grid";
            });
            cdModSpanInd1.textContent = cdModArticlesVis.length;
            cdModSpanInd2.textContent = cdModArticles.length;
            cdModDivLine1.style.width = `${(parseFloat (cdModSpanInd1.textContent) / parseFloat (cdModSpanInd2.textContent)) * 100}%`;
            if (cdModArticlesVis.length === cdModArticles.length) {
                cdModButtonElse.classList.add ("__cd-mod--button__ELSE");
            } else {
                cdModButtonElse.classList.remove ("__cd-mod--button__ELSE");
            }
        }

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
        cdModButtonElse?.addEventListener ("click", cdModCardsAdd);

        cdCommonMedia768.addEventListener ("change", cdModCardsCur);
        cdCommonMedia1200.addEventListener ("change", cdModCardsCur);
        cdCommonMedia1440.addEventListener ("change", cdModCardsCur);
        cdCommonMedia1920.addEventListener ("change", cdModCardsCur);

        /* ---------- ********** СЕКЦИЯ ABT ********** ---------- */

        const cdAbtDivSwiper2 = new Swiper (".cd-abt--div__SWIPER2", {
            autoHeight: true,
            effect: "fade",
            allowTouchMove: false,
        });

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
        cdHeroAAnchsAbt?.addEventListener ("click", (e) => {
            setTimeout (() => {
                if (window.innerWidth < 511) {
                    cdAbtDivSwiper.slideTo (0);
                } else {
                    cdAbtDivSwiperSlides[0].click ();
                }
            }, 150);
        });
        cdHeroAAnchsSpecs?.addEventListener ("click", (e) => {
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
                    setTimeout (() => {
                        cdAbtDivSwiper.slideTo(1);
                        cdAbtDivSwiper2.slideTo(1);
                    }, 50);
                } else {
                    cdAbtdivTableBody[i].classList.remove ("__cd-abt--div__TABLE_BODY");
                    cdAbtSvgTableHead[i].classList.remove ("__cd-abt--svg__TABLE_HEAD");
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
        const cdMatDivHead = document.querySelector (".cd-mat--div__HEAD");
        const cdMatSvgSubmenu = document.querySelector (".cd-mat--svg__SUBMENU");
        const cdMatFormSubmenu = document.querySelector (".cd-mat--form__SUBMENU");
        cdMatFormSubmenu?.querySelector (".cd-mat--label__SUBMENU:first-of-type")?.click ();
        cdMatDivHead?.addEventListener ("click", () => {
            if (!cdMatFormSubmenu.classList.contains ("__cd-mat--form__SUBMENU")) {
                cdMatFormSubmenu.classList.add ("__cd-mat--form__SUBMENU");
                cdMatSvgSubmenu.classList.add ("__cd-mat--svg__SUBMENU");
            } else {
                cdMatFormSubmenu.classList.remove ("__cd-mat--form__SUBMENU");
                cdMatSvgSubmenu.classList.remove ("__cd-mat--svg__SUBMENU");
            }
        });

        /* ---------- ********** СЕКЦИЯ MED ********** ---------- */
        const cdMedDivHead = document.querySelector (".cd-med--div__HEAD");
        const cdMedSvgSubmenu = document.querySelector (".cd-med--svg__SUBMENU");
        const cdMedFormSubmenu = document.querySelector (".cd-med--form__SUBMENU");
        cdMedFormSubmenu?.querySelector (".cd-med--label__SUBMENU:first-of-type")?.click ();
        cdMedDivHead?.addEventListener ("click", () => {
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

});


