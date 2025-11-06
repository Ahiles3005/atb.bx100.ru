window.addEventListener("load", function () {

    /* ---------- ********** |||||||||| ДОМАШНЯЯ СТРАНИЦА |||||||||| ********** ---------- */

    if (document.querySelector("#home")) {


        /* ---------- ********** СЕКЦИЯ HERO ********** ---------- */

// 1. SWIPER

        const hmHeroDivSwiper0 = document.querySelector(".hm-hero--div__SWIPER");

        const hmHeroDivSwiper = new Swiper(".hm-hero--div__SWIPER", {
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

        function hmHeroCounterHide() {
            const hmHeroSpanCounts = Array.from(document.querySelectorAll(".hm-hero--span__COUNT"));
            hmHeroSpanCounts.forEach((v, i, a) => {
                a[i].textContent = "0 +";
            });
        }

// 2.2 Первый

        function hmHeroCounter1() {
            const hmHeroSpanCount1 = document.querySelector(".swiper-slide-active .hm-hero--div__COUNT:first-of-type .hm-hero--span__COUNT");


            if (!hmHeroSpanCount1) {
                return true;
            }

            let hmHeroSpanNumber1 = 0;
            let localFormat = new Intl.NumberFormat("ru-RU");
            let dS = parseInt(hmHeroSpanCount1.dataset.finl);

            let time;
            let count;

            if (dS <= 100) {
                time = 1000 / dS;
                count = 1;
            } else {
                time = 10;
                count = dS / 100;
            }

            let hmHeroClear1 = setInterval(() => {
                hmHeroSpanNumber1 = hmHeroSpanNumber1 + count;
                hmHeroSpanCount1.textContent = `${localFormat.format(hmHeroSpanNumber1)} +`;
                if (hmHeroSpanNumber1 == dS) {
                    clearInterval(hmHeroClear1);
                }
            }, time);
        }

        hmHeroCounter1();

// 2.3 Второй

        function hmHeroCounter2() {
            const hmHeroSpanCount2 = document.querySelector(".swiper-slide-active .hm-hero--div__COUNT:last-of-type .hm-hero--span__COUNT");

            if (!hmHeroSpanCount2) {
                return true;
            }


            let hmHeroSpanNumber2 = 0;
            let localFormat = new Intl.NumberFormat("ru-RU");
            let dS = parseInt(hmHeroSpanCount2.dataset.finl);

            let time;
            let count;

            if (dS <= 100) {
                time = 1000 / dS;
                count = 1;
            } else {
                time = 10;
                count = dS / 100;
            }

            let hmHeroClear2 = setInterval(() => {
                hmHeroSpanNumber2 = hmHeroSpanNumber2 + count;
                hmHeroSpanCount2.textContent = `${localFormat.format(hmHeroSpanNumber2)} +`;
                if (hmHeroSpanNumber2 == dS) {
                    clearInterval(hmHeroClear2);
                }
            }, time);
        }

        hmHeroCounter2();

// 2.4 Запуск счетчика при пролистывании и обнуление счетчиков на скрытых слайдах

        hmHeroDivSwiper.on("slideChangeTransitionEnd", () => {
            hmHeroCounterHide()
            hmHeroCounter1();
            hmHeroCounter2();
        });

// 3. АНИМАЦИЯ (СДВИГИ С ПРОЯВЛЕНИЯМИ) ЭЛЕМЕНТОВ

// 3.1 При загрузке

        function hmHeroAnimation() {
            if (!hmHeroDivSwiper0) {
                return true;
            }

            hmHeroDivSwiper0.querySelector(".swiper-slide-active").classList.add("__hm-hero--div__SWIPER_SLIDE");
            const freeSlides = Array.from(hmHeroDivSwiper0.querySelectorAll(".hm-hero--div__SWIPER_SLIDE:not(.swiper-slide-active)"));
            freeSlides.forEach((v, i, a) => {
                a[i].classList.remove("__hm-hero--div__SWIPER_SLIDE");
            });
        }

        hmHeroAnimation();

// 3.2 При пролистывании слайдера

        hmHeroDivSwiper.on("slideChangeTransitionStart", () => {
            setTimeout(hmHeroAnimation, 850);
        });

    }
});


