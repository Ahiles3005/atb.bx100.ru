
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА ABOUT |||||||||| ********** ---------- */


    if (document.querySelector ("#ab")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ MED ********** ---------- */


        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ БЛОКОВ ГАЛЕРЕИ (код взят со страницы Медиацентр)

        const mcPkButtonOpen = Array.from (document.querySelectorAll (".mc-pk--button__OPEN"));
        const mcPkDivBody = Array.from (document.querySelectorAll (".mc-pk--div__BODY"));
        const mcPkDivSwiper1 = document.querySelector (".mc-pk--div__SWIPER1");


        // mcPkButtonOpen.forEach ((v, i, a) => {
        //     a[i].addEventListener ("click", () => {
        //         if (!mcPkDivBody[i].classList.contains ("__mc-pk--div__BODY")) {
        //             mcPkDivBody[i].classList.add ("__mc-pk--div__BODY");
        //             // mcPkDivBody.filter (x => x !== mcPkDivBody[i])[0].classList.remove ("__mc-pk--div__BODY");
        //         } else {
        //             mcPkDivBody[i].classList.remove ("__mc-pk--div__BODY");
        //         }
                
        //     });
        // });




        // 2. ГЛАВНЫЙ СЛАЙДЕР ГАЛЕРЕИ
        
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

        mcPkLabelSubmenu[0].click ();


        /// 2.3 Выбор уже выбранного слайда при ресайзе для избежания бага с обрезанием главного слайдера

        function mcPkDebounce (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const mcPk1Debounce = mcPkDebounce (() => {
            mcPkDivSwiper1v.slideTo (mcPkDivSwiper1v.activeIndex);
        }, 150);

        window.addEventListener ("resize", mcPk1Debounce);






        // 3. ВТОРОЙ ТИП КОНТЕНТА - ФОТОГАЛЕРЕЯ И ВИДЕОГАЛЕРЕЯ

        // Код взят из файла gallery.js, сам файл не поключен, поскольку логика и интерфейс отличаются 
        // от стандартной галереи
        // (нет модального окна, слайдер состоит не только из картинок, но и текста и т.д.)

        const cCommonDivGlrCont20 = Array.from (document.querySelectorAll (".c-common--div__GLR_CONT2"));

        // 3.1 Слайдеры с картинками

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



        // 3.2 Копирование изображений в кнопки пагинации 
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
        




        // 3.3 Автопрокрутка пагинации

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


        

        // 3.4 Если картинок больше 1, включить превью

        cCommonDivGlrCont2.forEach ((v, i, a) => {
            if (a[i].slides.length > 1) {
                cCommonDivGlrCont20[i].querySelector (".c-common--div__GLR_SWIPER_PAGINATION").style.display = "flex";
            }
        }); 

    }
});