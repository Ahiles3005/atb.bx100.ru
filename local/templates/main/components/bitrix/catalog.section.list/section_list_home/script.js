window.addEventListener("load", function () {

    /* ---------- ********** |||||||||| ДОМАШНЯЯ СТРАНИЦА |||||||||| ********** ---------- */

    if (document.querySelector("#home")) {



        //загрузка товара
        const subMenuItems = Array.from(document.querySelectorAll(".hm-cat--label__SUBMENU"));

        subMenuItems.forEach((v) => {
            v.addEventListener("click", (event) => {
                if (event.target.classList.contains('hm-cat--label__SUBMENU') || event.target.classList.contains('hm-cat--span__SUBMENU')) {
                    let sectionId = v.dataset.sectionid;
                    let url = '/local/templates/main/include/home/ajax/products.php?SECTION_ID=' + sectionId

                    fetch(url)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText);
                            }
                            return response.text();
                        })
                        .then(html => {
                            document.querySelector('#products-html').innerHTML = html

                            hmCatImageSwiper()
                            observeScrollElements();
                        })
                        .catch(error => {
                            console.error('Fetch error:', error);
                        });
                }
            });
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

        hmCatButtonMenuItem[0]?.click ();





        // 2. СЛАЙДЕР КАРТОЧЕК ТОВАРОВ
        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

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

        // hmCatImageSwiper ();

        // 3. КНОПКИ ВЫБОРА ТОВАРА ДЛЯ СРАВНЕНИЯ ИЛИ В ИЗБРАННОЕ
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
        function hmCatPriceSplit () {
            const localFormat = new Intl.NumberFormat("ru-RU");
            const hmCatPrices = Array.from (document.querySelectorAll (".hm-cat--span__CARD_PRICE_CUR:first-of-type, .hm-cat--span__CARD_PRICE_OLD:first-of-type"));
            hmCatPrices.forEach ((v, i, a) => {
                a[i].textContent = `${localFormat.format (a[i].textContent)}`;
            });
        }

        hmCatPriceSplit ();

    }
});


