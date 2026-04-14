
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА МЕДИАЦЕНТР |||||||||| ********** ---------- */


    if (document.querySelector ("#mc")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cdCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cdCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");


        /* ---------- ********** СЕКЦИЯ PK (Пресс-кит) ********** ---------- */


        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ БЛОКОВ

        const mcPkButtonOpen = Array.from (document.querySelectorAll (".mc-pk--button__OPEN"));
        const mcPkDivBody = Array.from (document.querySelectorAll (".mc-pk--div__BODY"));
        const mcPkDivSwiper1 = document.querySelector (".mc-pk--div__SWIPER1");


        mcPkButtonOpen.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!mcPkDivBody[i].classList.contains ("__mc-pk--div__BODY")) {
                    mcPkDivBody[i].classList.add ("__mc-pk--div__BODY");
                    // mcPkDivBody.filter (x => x !== mcPkDivBody[i])[0].classList.remove ("__mc-pk--div__BODY");
                } else {
                    mcPkDivBody[i].classList.remove ("__mc-pk--div__BODY");
                }

            });
        });




        // 2. ГЛАВНЫЙ СЛАЙДЕР

        const mcPkDivSwiper1v = new Swiper (".mc-pk--div__SWIPER1", {
            effect: "fade",
            allowTouchMove: false,
            autoHeight: true,
        });


        // 2.1 Переключение слайдов через радиокнопки

        const mcPkLabelSubmenu = Array.from (document.querySelectorAll (".mc-pk--label__SUBMENU"));

        mcPkLabelSubmenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                mcPkDivSwiper1v.slideTo(i);
            });
        });


        // 2.2 Выбор первой радиокнопки в субменю при загрузке страницы

        mcPkLabelSubmenu[0]?.click ();


        // 2.3 Выбор уже выбранного слайда при ресайзе для избежания бага с обрезанием главного слайдера

        function mcPkDebounce(cB, time) {
            let idTimer;
            return function () {
                clearTimeout(idTimer);
                idTimer = setTimeout(() => {
                    try {
                        cB();
                    } catch (e) {
                        console.log('error')
                    }
                }, time);
            }
        }

        const mcPk1Debounce = mcPkDebounce(() => {
            mcPkDivSwiper1v.slideTo(mcPkDivSwiper1v.activeIndex);
        }, 150);

        window.addEventListener("resize", mcPk1Debounce);



        // 3. ПЕРВЫЙ ТИП КОНТЕНТА - ПРЕСС-РЕЛИЗЫ И ЛОГОТИПЫ

        // 3.1 Раскрытие всех карточек по кнопке "Показать все"

        const mcPkDivPrlMob = Array.from (document.querySelectorAll (".mc-pk--div__PRL_MOB"));
        const mcPkButtonAll = Array.from (document.querySelectorAll (".mc-pk--button__ALL"));


        mcPkButtonAll.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                mcPkDivPrlMob[i].classList.remove ("__mc-pk--div__PRL_MOB");
                mcPkButtonAll[i].classList.add ("__mc-pk--button__ALL");
                mcPkDivSwiper1v.slideTo(i);
            });
        });


        // 3.2 Создание слайдов по числу карточек для десктопа.

        if (mcPkDivPrlMob && mcPkDivPrlMob.length > 0) {


            // 3.2.1 Карточки пресс-релизов и логотипов

            const mcPkDivCards1 = Array.from (mcPkDivPrlMob[0].querySelectorAll(".mc-pk--div__CARD"));
            const mcPkDivCards2 = Array.from (mcPkDivPrlMob[1].querySelectorAll(".mc-pk--div__CARD"));


            // 3.2.2 Число необходимых слайдов

            const mcPkDivSlides1 = Math.ceil (mcPkDivCards1.length / 4);
            const mcPkDivSlides2 = Math.ceil (mcPkDivCards2.length / 4);


            // 3.2.3 Создание слайдов

            const mcPkDivSwiper11Wrapper = Array.from (document.querySelectorAll (".mc-pk--div__SWIPER11 .mc-pk--div__SWIPER11_WRAPPER"));

            for (let i = 0; i < mcPkDivSlides1; i++) {
                mcPkDivSwiper11Wrapper[0].insertAdjacentHTML ("beforeend", `
                <div class="mc-pk--div__SWIPER11_SLIDE swiper-slide"></div>
            `);
            }
            for (let i = 0; i < mcPkDivSlides2; i++) {
                mcPkDivSwiper11Wrapper[1].insertAdjacentHTML ("beforeend", `
                <div class="mc-pk--div__SWIPER11_SLIDE swiper-slide"></div>
            `);
            }


            // 3.2.4 Распределение карточек по слайдам

            const mcPkDivSwiper11Slide1 = Array.from (mcPkDivSwiper11Wrapper[0].querySelectorAll (".mc-pk--div__SWIPER11_SLIDE"));
            const mcPkDivSwiper11Slide2 = Array.from (mcPkDivSwiper11Wrapper[1].querySelectorAll (".mc-pk--div__SWIPER11_SLIDE"));


            // 3.2.4.1 Счетчики нераспределенных карточек

            let mcPkDivCards1Counter = mcPkDivCards1.length;
            let mcPkDivCards2Counter = mcPkDivCards2.length;

            mcPkDivSwiper11Slide1.forEach ((v, i, a) => {
                for (let j = 0; j < 4; j++) {
                    if (mcPkDivCards1Counter && a[i].querySelectorAll (".mc-pk--div__CARD").length < 4) {
                        a[i].append (mcPkDivCards1[mcPkDivCards1.length - mcPkDivCards1Counter].cloneNode (true));
                        mcPkDivCards1Counter--;
                    }
                }
            });
            mcPkDivSwiper11Slide2.forEach ((v, i, a) => {
                for (let j = 0; j < 4; j++) {
                    if (mcPkDivCards2Counter && a[i].querySelectorAll (".mc-pk--div__CARD").length < 4) {
                        a[i].append (mcPkDivCards2[mcPkDivCards2.length - mcPkDivCards2Counter].cloneNode (true));
                        mcPkDivCards2Counter--;
                    }
                }
            });


        }
        // 3.3 Инициализация созданных слайдеров для десктопа

        // 3.3.1 Слайдер пресс-релиза

        const mcPkDivSwiper111 = new Swiper (".mc-pk--div__SWIPER1_SLIDE:first-of-type .mc-pk--div__SWIPER11", {
            spaceBetween: 60,
            navigation: {
                nextEl: '.mc-pk--div__SWIPER1_SLIDE:first-of-type .mc-pk--button__SWIPER11_NEXT',
                prevEl: '.mc-pk--div__SWIPER1_SLIDE:first-of-type .mc-pk--button__SWIPER11_PREV',
            },

        });

        // 3.3.1 Слайдер логотипов

        const mcPkDivSwiper112 = new Swiper (".mc-pk--div__SWIPER1_SLIDE:nth-of-type(2) .mc-pk--div__SWIPER11", {
            spaceBetween: 60,
            navigation: {
                nextEl: '.mc-pk--div__SWIPER1_SLIDE:nth-of-type(2) .mc-pk--button__SWIPER11_NEXT',
                prevEl: '.mc-pk--div__SWIPER1_SLIDE:nth-of-type(2) .mc-pk--button__SWIPER11_PREV',
            },
        });

        // 3.3.2 Принудительный переход к первому слайду основного слайда для перевычисления высоты 
        // после инициализации второстепенных слайдеров

        try {
            mcPkDivSwiper1v.slideTo(0);
        } catch (e) {
            console.log('error');
        }



        // 4. ВТОРОЙ ТИП КОНТЕНТА - ФОТОГАЛЕРЕЯ И ВИДЕОГАЛЕРЕЯ

        // Код взят из файла gallery.js, сам файл не поключен, поскольку логика и интерфейс отличаются 
        // от стандартной галереи
        // (нет модального окна, слайдер состоит не только из картинок, но и текста и т.д.)

        const cCommonDivGlrCont20 = Array.from (document.querySelectorAll (".c-common--div__GLR_CONT2"));

        // 4.1 Слайдеры с картинками

        const cCommonDivGlrCont2 = Array.from (document.querySelectorAll (".c-common--div__GLR_CONT2"), x => {
            return new Swiper (x.querySelector (".c-common--div__GLR_SWIPER"), {
                grabCursor: true,
                navigation: {
                    nextEl: x.querySelector (".c-common--button__GLR_RIGHT"),
                    prevEl: x.querySelector (".c-common--button__GLR_LEFT"),
                },
                pagination: {
                    el: x.querySelector (".c-common--div__GLR_SWIPER_PAGINATION"),
                    type: 'bullets',
                    clickable: true,
                },
            });
        });



        // 4.2 Копирование изображений в кнопки пагинации
        // !!! (Это временное решение. При ИНТЕГРАЦИИ (если, конечно, нужно в превью загружать картинки меньшего разрешения)
        // пройтись по массиву cCommonDivGlrSwiperPagBuls
        // - это массив кнопок пагинации и загрузить изображения меньшего разрешения).



        setTimeout (() => {
            const cCommonImgGlrImages = Array.from (document.querySelectorAll (".c-common--img__GLR_IMAGE"));
            const cCommonDivGlrSwiperPagBuls = Array.from (document.querySelectorAll (".c-common--div__GLR_SWIPER_PAGINATION .swiper-pagination-bullet"));

            cCommonImgGlrImages.forEach ((v, i, a) => {
                let clone = a[i].cloneNode (true);
                cCommonDivGlrSwiperPagBuls[i].append (clone);
            });
        }, 50);





        // 4.3 Автопрокрутка пагинации

        cCommonDivGlrCont2.forEach ((v, i, a) => {
            a[i].on ("slideChange", () => {
                const cCommonDivGlrSwiperPag = cCommonDivGlrCont20[i].querySelector (".c-common--div__GLR_SWIPER_PAGINATION");
                const cCommonGlrSpanActive = cCommonDivGlrCont20[i].querySelector (".c-common--div__GLR_SWIPER_PAGINATION .swiper-pagination-bullet-active");

                if (cCommonGlrSpanActive.getBoundingClientRect().right > cCommonDivGlrSwiperPag.getBoundingClientRect().right) {
                    cCommonDivGlrSwiperPag.scrollLeft = cCommonGlrSpanActive.offsetLeft + cCommonGlrSpanActive.offsetWidth - cCommonDivGlrSwiperPag.offsetWidth;
                } else if (cCommonGlrSpanActive.getBoundingClientRect().left < cCommonDivGlrSwiperPag.getBoundingClientRect().left) {
                    cCommonDivGlrSwiperPag.scrollLeft = cCommonGlrSpanActive.offsetLeft;
                }
            });
        });




        // 4.4 Если картинок больше 1, включить превью

        cCommonDivGlrCont2.forEach ((v, i, a) => {
            if (a[i].slides.length > 1) {
                cCommonDivGlrCont20[i].querySelector (".c-common--div__GLR_SWIPER_PAGINATION").style.display = "flex";
            }
        });








    }
});