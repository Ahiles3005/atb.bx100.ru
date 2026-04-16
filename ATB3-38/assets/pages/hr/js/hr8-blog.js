
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА HR |||||||||| ********** ---------- */


    if (document.querySelector ("#hr")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ BLOG ********** ---------- */


        // 1. РАСКРЫТИЕ КАРТОЧЕК НА МОБИЛКАХ
 

        // Функция для любой из секций. Первым аргументом (строка) должен быть класс секции, 
        // вторым (число) - тип выдачи карточек - 
        // по 3 и 6 (для мобилок и десктопа соответственно) - 1 
        // или по 2 и 3 - 2.

        function hrBlogCardOpener (x, y) {

            const hrBlogArticles = Array.from (document.querySelectorAll (`${x} article`));
            const hrBlogSpanInd1 = document.querySelector (`${x} .hr-blog--span__IND1`);
            const hrBlogSpanInd2 = document.querySelector (`${x} .hr-blog--span__IND2`);
            const hrBlogDivLine1 = document.querySelector (`${x} .hr-blog--div__LINE1`);
            const hrBlogButtonElse = document.querySelector (`${x} .hr-blog--button__ELSE`);


            // 1.1 Счетчик показанных порций карточек

            let hrBlogCounter = 1;


            // 1.2 Счетчик показанных карточек

            function hrBlogVisCounter () {

                // 1.2.1 Числа

                const hrBlogArticlesVis = hrBlogArticles.filter (x => {
                    return getComputedStyle (x).display == "grid";
                });
                hrBlogSpanInd1.textContent = hrBlogArticlesVis.length;
                hrBlogSpanInd2.textContent = hrBlogArticles.length;

                // 1.2.2 Линия

                hrBlogDivLine1.style.width = `${(parseFloat (hrBlogSpanInd1.textContent) / parseFloat (hrBlogSpanInd2.textContent)) * 100}%`;

                // 1.2.3 Уборка кнопки "Показать еще", если все карточки показаны

                if (hrBlogArticlesVis.length === hrBlogArticles.length) {
                    hrBlogButtonElse.classList.add ("__hr-blog--button__ELSE");
                } else {
                    hrBlogButtonElse.classList.remove ("__hr-blog--button__ELSE");
                }
            }



            // 1.3 Начальное / текущее количество видимых карточек (для начальной загрузки и изменения количества при ресайзе или переключении видов)

            function hrBlogCardsCur () {
                if (y === 1) {
                    if (window.innerWidth < 1440) {
                        hrBlogArticles.forEach ((v, i, a) => {
                            if (i < hrBlogCounter * 3) {
                                a[i]?.classList.add ("__hr-blog--article__CARD");
                            } else {
                                a[i]?.classList.remove ("__hr-blog--article__CARD");
                            }
                        });
                    } else {
                        hrBlogArticles.forEach ((v, i, a) => {
                            if (i < hrBlogCounter * 6) {
                                a[i]?.classList.add ("__hr-blog--article__CARD");
                            } else {
                                a[i]?.classList.remove ("__hr-blog--article__CARD");
                            }
                        });
                    }
                } else if (y === 2) {
                    if (window.innerWidth < 1200) {
                        hrBlogArticles.forEach ((v, i, a) => {
                            if (i < hrBlogCounter * 2) {
                                a[i]?.classList.add ("__hr-blog--article__CARD");
                            } else {
                                a[i]?.classList.remove ("__hr-blog--article__CARD");
                            }
                        });
                    } else {
                        hrBlogArticles.forEach ((v, i, a) => {
                            if (i < hrBlogCounter * 3) {
                                a[i]?.classList.add ("__hr-blog--article__CARD");
                            } else {
                                a[i]?.classList.remove ("__hr-blog--article__CARD");
                            }
                        });
                    }
                }
                
                
                hrBlogVisCounter ();
            }

            hrBlogCardsCur ();



            // 1.4 Добавление карточек по клику по кнопке

            function hrBlogCardsAdd () {
                
                hrBlogCounter++;

                if (y === 1) {
                    if (window.innerWidth < 1440) {
                        hrBlogArticles.forEach ((v, i, a) => {
                            if (i < hrBlogCounter * 3) {
                                a[i]?.classList.add ("__hr-blog--article__CARD");
                            } else {
                                a[i]?.classList.remove ("__hr-blog--article__CARD");
                            }
                        });
                    } else {
                        hrBlogArticles.forEach ((v, i, a) => {
                            if (i < hrBlogCounter * 3) {
                                a[i]?.classList.add ("__hr-blog--article__CARD");
                            } else {
                                a[i]?.classList.remove ("__hr-blog--article__CARD");
                            }
                        });
                    }
                } else if (y === 2) {
                    if (window.innerWidth < 1200) {
                        hrBlogArticles.forEach ((v, i, a) => {
                            if (i < hrBlogCounter * 2) {
                                a[i]?.classList.add ("__hr-blog--article__CARD");
                            } else {
                                a[i]?.classList.remove ("__hr-blog--article__CARD");
                            }
                        });
                    } else {
                        hrBlogArticles.forEach ((v, i, a) => {
                            if (i < hrBlogCounter * 3) {
                                a[i]?.classList.add ("__hr-blog--article__CARD");
                            } else {
                                a[i]?.classList.remove ("__hr-blog--article__CARD");
                            }
                        });
                    }
                }

                hrBlogVisCounter ();
            }

            hrBlogButtonElse.addEventListener ("click", hrBlogCardsAdd);



            // 1.5 Пересчет при резайзе

            cCommonMedia768.addEventListener ("change", hrBlogCardsCur);
            cCommonMedia1200.addEventListener ("change", hrBlogCardsCur);
            cCommonMedia1440.addEventListener ("change", hrBlogCardsCur);
            cCommonMedia1920.addEventListener ("change", hrBlogCardsCur);
        }
        
        
        // Вызов функции для секции "HR-блог"

        hrBlogCardOpener (".hr-blog", 1);




        // 2. СЛАЙДЕР ДЛЯ ДЕСКТОПА (С РАСПРЕДЕЛЕНИЕМ ПО НЕМУ КАРТОЧЕК ИЗ МОБИЛЬНОЙ ВЕРСИИ)


        // 2.1 Создание слайдов по числу карточек для десктопа.

        // 2.1.1 Карточки

        const hrBlogArticles = Array.from (document.querySelectorAll (".hr-blog--article__CARD"));


        // 2.1.2 Число необходимых слайдов

        const hrBlogDivSlides1 = hrBlogArticles.length;


        // 2.1.3 Создание слайдов

        const hrBlogDivSwiperWrapper = document.querySelector (".hr-blog--div__SWIPER_WRAPPER");

        for (let i = 0; i < hrBlogDivSlides1; i++) {
            hrBlogDivSwiperWrapper.insertAdjacentHTML ("beforeend", `
                <div class="hr-blog--div__SWIPER_SLIDE swiper-slide"></div>
            `);
        }


        // 2.1.4 Распределение карточек по слайдам

        const hrBlogDivSwiperSlide = Array.from (hrBlogDivSwiperWrapper.querySelectorAll (".hr-blog--div__SWIPER_SLIDE"));


        hrBlogDivSwiperSlide.forEach ((v, i, a) => {
            a[i].append (hrBlogArticles[i].cloneNode (true));  
        });


        // 2.2 Инициализация cлайдера

        const hrBlogDivSwiper = new Swiper (".hr-blog--div__SWIPER", {
            slidesPerView: 3,
            spaceBetween: 60,
            navigation: {
                nextEl: '.hr-blog--button__SWIPER_NEXT',
                prevEl: '.hr-blog--button__SWIPER_PREV',
            },
        });




        // 3. ПОПАПЫ


        // 3.1 Открытие / закрытие

        const hrBlogButtonCardMob = Array.from (document.querySelectorAll (".hr-blog--div__MOB .hr-blog--button__CARD"));
        const hrBlogButtonCardDesc = Array.from (document.querySelectorAll (".hr-blog--div__SWIPER .hr-blog--button__CARD"));
        const hrBlogDivPopup = Array.from (document.querySelectorAll (".hr-blog--div__POPUP"));
        const hrBlogButtonPopupClose = Array.from (document.querySelectorAll (".hr-blog--button__POPUP_CLOSE"));


        hrBlogButtonCardMob.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                hrBlogDivPopup[i].classList.add ("__hr-blog--div__POPUP");
                hrBlogDivPopup.filter (x => x !== hrBlogDivPopup[i]).forEach ((v1, i1, a1) => {
                    a1[i1].classList.remove ("__hr-blog--div__POPUP");
                });
            });
        });

        hrBlogButtonCardDesc.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                hrBlogDivPopup[i].classList.add ("__hr-blog--div__POPUP");
                hrBlogDivPopup.filter (x => x !== hrBlogDivPopup[i]).forEach ((v1, i1, a1) => {
                    a1[i1].classList.remove ("__hr-blog--div__POPUP");
                });
            });
        });

        hrBlogDivPopup.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                if (e.target === a[i]) {
                    hrBlogDivPopup[i].classList.remove ("__hr-blog--div__POPUP");
                }
            });
        });

        hrBlogButtonPopupClose.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                hrBlogDivPopup[i].classList.remove ("__hr-blog--div__POPUP");
            });
        });




        // 4. ОТКРЫТИЕ / ЗАКРЫТИЕ БЛОКОВ ГАЛЕРЕИ В ПОПАПЕ (код взят со страницы Медиацентр)

        const mcPkButtonOpen = Array.from (document.querySelectorAll (".mc-pk--button__OPEN"));
        const mcPkDivBody = Array.from (document.querySelectorAll (".mc-pk--div__BODY"));


        mcPkButtonOpen.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!mcPkDivBody[i].classList.contains ("__mc-pk--div__BODY")) {
                    mcPkDivBody[i].classList.add ("__mc-pk--div__BODY");
                } else {
                    mcPkDivBody[i].classList.remove ("__mc-pk--div__BODY");
                }
                
            });
        });




        // 5. ГЛАВНЫЙ СЛАЙДЕР ГАЛЕРЕИ

        const mcPkDivSwiper1v = Array.from (document.querySelectorAll (".hr-blog--div__POPUP"), x => {
            return new Swiper (x.querySelector (".mc-pk--div__SWIPER1"), {
                effect: "fade",
                allowTouchMove: false,
                autoHeight: true,
            });
        });


        // 5.1 Переключение слайдов через радиокнопки

        hrBlogDivPopup.forEach ((v, i, a) => {
            const mcPkLabelSubmenu = Array.from (a[i].querySelectorAll (".mc-pk--label__SUBMENU"));

            mcPkLabelSubmenu.forEach ((v1, i1, a1) => {
                a1[i1].addEventListener ("click", () => {
                    mcPkDivSwiper1v[i].slideTo(i1);
                });
            });
            
            // 5.2 Выбор первой радиокнопки в субменю при загрузке страницы
            mcPkLabelSubmenu[0].click ();
        });

        



        // 5.3 Выбор уже выбранного слайда при ресайзе для избежания бага с обрезанием главного слайдера

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
            mcPkDivSwiper1v.forEach ((v, i, a) => {
                a[i].slideTo (mcPkDivSwiper1v[i].activeIndex);
            })
            
        }, 150);

        window.addEventListener ("resize", mcPk1Debounce);






        // 6. СЛАЙДЕРЫ ФОТОГАЛЕРЕИ И ВИДЕОГАЛЕРЕИ


        // Код взят из файла gallery.js, сам файл не поключен, поскольку логика и интерфейс отличаются 
        // от стандартной галереи

        const cCommonDivGlrCont20 = Array.from (document.querySelectorAll (".c-common--div__GLR_CONT2"));

        // 6.1 Слайдеры с картинками

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



        // 6.2 Копирование изображений в кнопки пагинации 
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
        




        // 6.3 Автопрокрутка пагинации

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


        

        // 6.4 Если картинок больше 1, включить превью

        cCommonDivGlrCont2.forEach ((v, i, a) => {
            if (a[i].slides.length > 1) {
                cCommonDivGlrCont20[i].querySelector (".c-common--div__GLR_SWIPER_PAGINATION").style.display = "flex";
            }
        });

    }
});