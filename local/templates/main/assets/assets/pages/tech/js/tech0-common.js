
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА TECH |||||||||| ********** ---------- */


    if (document.querySelector ("#te")) {

        
        /* ---------- ********** ОБЩИЕ ДЛЯ ВСЕЙ СТРАНИЦЫ ********** ---------- */


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");



        // 1. АНИМАЦИЯ ПРИ СКРОЛЛЕ 

        const scrolls = document.querySelectorAll('.__C-SCRL');

        const callback = (entries, observer) => {
            entries.forEach ((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove ("__C-SCRL");

                    // УСЛОВИЕ ПО ЗАПУСКУ СЧЕТЧИКОВ
                    if (entry.target.classList.contains ("st-main--div__THESIS")) {
                        entry.target.querySelector (".st-main--span__COUNT").stMainCounter ();
                    }
                    //
                    
                    if (entry.target.classList.contains ("hm-cat--article__CARD")) {
                        setTimeout (() => {
                            entry.target.classList.add ("__hm-cat--article__CARD");
                        }, 700);
                    }
                    observer.unobserve (entry.target);
                }
            });
        }

        const options = {
            rootMargin: '-40px 0px 0px 0px',
            threshold: 0,
        }

        const observer = new IntersectionObserver (callback, options)

        scrolls.forEach ((v) => observer.observe (v));






        // 2. АККОРДЕОНЫ ДЛЯ ВСЕЙ СТРАНИЦЫ

        const teCommonUlList = Array.from (document.querySelectorAll (".te-common--ul__LIST"));

        function teCommonAcc () {
            if (cCommonMedia1440.matches) {
                teCommonUlList.forEach ((v, i, a) => {
                    const teCommonLiList = Array.from (a[i].querySelectorAll (".te-common--li__LIST"));
                    const teCommonButtonListTop = Array.from (a[i].querySelectorAll (".te-common--button__LIST_TOP"));
        
                    teCommonButtonListTop.forEach ((v1, i1, a1) => {
                        a1[i1].onclick = function () {
                            teCommonLiList[i1].classList.toggle ("__te-common--li__LIST");
                        };
                    });
                });
            } else {
                teCommonUlList.forEach ((v, i, a) => {
                    const teCommonLiList = Array.from (a[i].querySelectorAll (".te-common--li__LIST"));
                    const teCommonButtonListTop = Array.from (a[i].querySelectorAll (".te-common--button__LIST_TOP"));
                    
                    teCommonButtonListTop.forEach ((v1, i1, a1) => {
                        a1[i1].onclick = function () {
                            teCommonLiList[i1].classList.toggle ("__te-common--li__LIST");
                        };
                    });
                    // teCommonButtonListTop.forEach ((v1, i1, a1) => {
                    //     a1[i1].onclick = function () {
                    //         teCommonLiList[i1].classList.toggle ("__te-common--li__LIST");
                    //         teCommonLiList.filter (x => x !== teCommonLiList[i1]).forEach ((v2, i2, a2) => {
                    //             a2[i2].classList.remove ("__te-common--li__LIST");
                    //         });
                    //     };
                    // });
                });
            }
        }

        teCommonAcc ();

        cCommonMedia1440.addEventListener ("change", teCommonAcc);







        // 3. ГАЛЕРЕЯ

        const teCommonDivGallery = Array.from (document.querySelectorAll (".te-common--div__GALLERY"));


        // 3.1 Главный слайдер

        const mcPkDivSwiper1v = Array.from (document.querySelectorAll (".te-common--div__GALLERY"), x => {
            return new Swiper (x.querySelector (".mc-pk--div__SWIPER1"), {
                effect: "fade",
                allowTouchMove: false,
                autoHeight: true,
            });
        });

        teCommonDivGallery.forEach ((v0, i0, a0) => {

            // 3.2 Переключение слайдов через радиокнопки

            const mcPkLabelSubmenu = Array.from (a0[i0].querySelectorAll (".mc-pk--label__SUBMENU"));

            mcPkLabelSubmenu.forEach ((v, i, a) => {
                a[i].addEventListener ("click", (e) => {
                    mcPkDivSwiper1v[i0].slideTo(i);
                });
            });


            // 3.3 Выбор первой радиокнопки в субменю при загрузке страницы

            mcPkLabelSubmenu[0].click ();


            /// 3.4 Выбор уже выбранного слайда при ресайзе для избежания бага с обрезанием главного слайдера

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
                mcPkDivSwiper1v[i0].slideTo (mcPkDivSwiper1v[i0].activeIndex);
            }, 150);

            window.addEventListener ("resize", mcPk1Debounce);






            // 3.5 Фотогалерея и видеогалерея

            // Код взят из файла gallery.js, сам файл не подключен, поскольку логика и интерфейс отличаются 
            // от стандартной галереи
            // (нет модального окна и т.д.)

            const cCommonDivGlrCont20 = Array.from (a0[i0].querySelectorAll (".c-common--div__GLR_CONT2"));

            // 3.6 Слайдеры с картинками

            const cCommonDivGlrCont2 = Array.from (a0[i0].querySelectorAll (".c-common--div__GLR_CONT2"), x => {
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



            // 3.7 Копирование изображений в кнопки пагинации 
            // !!! (Это временное решение. При ИНТЕГРАЦИИ (если, конечно, нужно в превью загружать картинки меньшего разрешения)
            // пройтись по массиву cCommonDivGlrSwiperPagBuls
            // - это массив кнопок пагинации и загрузить изображения меньшего разрешения).

            
            
            setTimeout (() => {
                const cCommonImgGlrImages = Array.from (a0[i0].querySelectorAll (".c-common--img__GLR_IMAGE"));
                const cCommonDivGlrSwiperPagBuls = Array.from (a0[i0].querySelectorAll (".c-common--div__GLR_SWIPER_PAGINATION .swiper-pagination-bullet"));

                cCommonImgGlrImages.forEach ((v, i, a) => {
                    let clone = a[i].cloneNode (true);
                    cCommonDivGlrSwiperPagBuls[i].append (clone);
                });
            }, 50);
            




            // 3.8 Автопрокрутка пагинации

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


            

            // 3.9 Если картинок больше 1, включить превью

            cCommonDivGlrCont2.forEach ((v, i, a) => {
                if (a[i].slides.length > 1) {
                    cCommonDivGlrCont20[i].querySelector (".c-common--div__GLR_SWIPER_PAGINATION").style.display = "flex";
                }
            }); 

        });

    }
});