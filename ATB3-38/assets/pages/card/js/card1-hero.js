
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА КАРТОЧКА СЕРИИ |||||||||| ********** ---------- */


    if (document.querySelector ("#card")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cdCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cdCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");





        
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

        cdHeroDivSwiper.on ("slideChange", () => {
            if (cdHeroDivSwiper.activeIndex === cdHeroDivSwiper.slides.length - 1) {
                cdHeroDivSwiper.allowTouchMove = false;
            } else {
                cdHeroDivSwiper.allowTouchMove = true;
            }
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
        const cdHeroDivSwiperSlide = Array.from (document.querySelectorAll (".cd-hero--div__SWIPER_SLIDE"));
        const cdHeroButtonPlus = document.querySelector (".cd-hero--button__PLUS");
        const cdHeroButtonMinus = document.querySelector (".cd-hero--button__MINUS");


        cdHeroButtonPlus.addEventListener ("click", () => {
            const activeSlide = cdHeroDivSwiper0.querySelector (".swiper-slide-active");
            const activeImage = cdHeroDivSwiper0.querySelector (".swiper-slide-active img");
            cdHeroDivSwiper.allowTouchMove = false;
            activeSlide.classList.add ("__cd-hero--div__SWIPER_SLIDE");
            
            if (activeImage.classList.contains ("__cd-hero--img__SWIPER_IMAGE")) {
                activeImage.classList.add ("__cd-hero--img__SWIPER_IMAGE2");
            } else {
                activeImage.classList.add ("__cd-hero--img__SWIPER_IMAGE");
            }

            activeSlide.scrollTop = (activeSlide.scrollHeight - activeSlide.offsetHeight) / 2;
            activeSlide.scrollLeft = (activeSlide.scrollWidth - activeSlide.offsetWidth) / 2;
        });

        cdHeroButtonMinus.addEventListener ("click", () => {
            const activeSlide = cdHeroDivSwiper0.querySelector (".swiper-slide-active");
            const activeImage = cdHeroDivSwiper0.querySelector (".swiper-slide-active img");
            
            if (activeImage.classList.contains ("__cd-hero--img__SWIPER_IMAGE2")) {
                activeImage.classList.remove ("__cd-hero--img__SWIPER_IMAGE2");
                activeSlide.scrollTop = (activeSlide.scrollHeight - activeSlide.offsetHeight) / 2;
                activeSlide.scrollLeft = (activeSlide.scrollWidth - activeSlide.offsetWidth) / 2;
            } else {
                activeSlide.classList.remove ("__cd-hero--div__SWIPER_SLIDE");
                activeImage.classList.remove ("__cd-hero--img__SWIPER_IMAGE");
                cdHeroDivSwiper.allowTouchMove = true;
            }
        });


        // 3.2.4.1 Сброс при перелистывании
        
        cdHeroDivSwiper.on ("slideChange", function () {
            const zoomImages = Array.from (cdHeroDivSwiper0.querySelectorAll (".__cd-hero--img__SWIPER_IMAGE"));
            zoomImages.forEach ((v, i, a) => {
                a[i].classList.remove ("__cd-hero--img__SWIPER_IMAGE");
                a[i].classList.remove ("__cd-hero--img__SWIPER_IMAGE2");
                cdHeroDivSwiper.allowTouchMove = true;
            });
            cdHeroDivSwiperSlide.forEach ((v, i, a) => {
                a[i].classList.remove ("__cd-hero--div__SWIPER_SLIDE");
            });
        });


        // 3.2.4.2 Перетаскивание увеличенных картинок с помощью библиотеки dragscroll 

        cdHeroDivSwiperSlide.forEach ((v, i, a) => {
            a[i].classList.add ("dragscroll");
        });

    


        // 3.2.5 Включение 3d-обзора

        cdHeroDivSwiper.on ("slideChange", () => {
            if (cdHeroDivSwiper.activeIndex == cdHeroDivSwiperPagBuls.length - 1) {
                if (!document.querySelector ("script[src='3d/canvas3d.js']")) {
                    // const myScriptMap = document.createElement ("script");
                    // myScriptMap.setAttribute ("type", "importmap");
                    // myScriptMap.innerHTML = `
                    // {
                    //     "imports": {
                    //         "three": "./3d/build/three.module.js",
                    //         "orbitcontrolls": "./3d/build/OrbitControls.js",
                    //         "objectloader": "./3d/build/OBJLoader.js",
                    //         "gltfloader": "./3d/build/GLTFLoader.js"
                    //     }
                    // }`
                    // document.head.append (myScriptMap);
                    
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




        // 4. НАСТРОЙКИ БЛОКА С НАВИГАЦИЕЙ СЛЕВА

        const cdHeroDivLeft = document.querySelector (".cd-hero--div__LEFT");
        const cdCommonDivLeft = document.querySelector (".cd-common--div__LEFT");
        const cdHeroDivLeftCont = document.querySelector (".cd-hero--div__LEFT_CONT");
        const cdHeroAAnchsSpecs = document.querySelector (".cd-hero--a__ANCHS._SPECS");
        const cdHeroAAnchsAbt = document.querySelector (".cd-hero--a__ANCHS._ABT");


        if (cdCommonMedia1440.matches) {
            cdCommonDivLeft.append (cdHeroDivLeftCont);
        }

        cdCommonMedia1440.addEventListener ("change", (e) => {
            if (e.matches) {
                cdCommonDivLeft.append (cdHeroDivLeftCont);
            } else {
                cdHeroDivLeft.append (cdHeroDivLeftCont);
            }
        });



    }
});