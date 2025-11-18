
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА КАРТОЧКА ТОВАРА |||||||||| ********** ---------- */


    if (document.querySelector ("#card-n")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cdCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cdCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");




        // ССЫЛКИ НАВИГАЦИИ ПО СТРАНИЦЕ

        const cdHeroAAnchsSpecs = document.querySelector (".cd-hero--a__ANCHS._SPECS");
        const cdHeroAAnchsAbt = document.querySelector (".cd-hero--a__ANCHS._ABT");


        



        
        /* ---------- ********** СЕКЦИЯ ABT ********** ---------- */


        // 1. СЛАЙДЕР С КОНТЕНТОМ
        
        const cdAbtDivSwiper2 = new Swiper (".cd-abt--div__SWIPER2", {
            autoHeight: true,
            effect: "fade",
            allowTouchMove: false,
        });




        // 2. КНОПКИ УПРАВЛЕНИЯ
        
        const cdAbtDivTabs = document.querySelector (".cd-abt .c-common--div__TABS");
        const cdAbtDivTabsTop = document.querySelector (".cd-abt .c-common--div__TABS_TOP");
        const cdAbtButtonTabs = Array.from (document.querySelectorAll (".cd-abt .c-common--button__TABS"));
        const cdAbtDivTabsFrame = document.querySelector (".cd-abt .c-common--div__TABS_FRAME");
        const cdAbtButtonTabsLeft = document.querySelector (".cd-abt .c-common--button__TABS_LEFT");
        const cdAbtButtonTabsRight = document.querySelector (".cd-abt .c-common--button__TABS_RIGHT");


        // Функция для статичного состояния (для обработки ресайза контейнера)

        function cdAbtButtonTabsDefault () {
            cdAbtButtonTabs.forEach ((v, i, a) => { 
                if (a[i].classList.contains ("_ACT")) {
                    if (cdAbtDivTabsTop.scrollWidth > cdAbtDivTabsTop.offsetWidth && window.innerWidth < 768) {
                        if (i === 0) {
                            cdAbtDivTabsTop.scrollLeft = 0;
                            cdAbtButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            cdAbtButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === cdAbtButtonTabs.length - 1) {
                            cdAbtDivTabsTop.scrollLeft = cdAbtButtonTabs[cdAbtButtonTabs.length - 1].offsetLeft + cdAbtButtonTabs[cdAbtButtonTabs.length - 1].offsetWidth - cdAbtDivTabsTop.offsetWidth + parseInt (getComputedStyle (cdAbtDivTabsTop).paddingLeft);
                            cdAbtButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            cdAbtButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            cdAbtDivTabsTop.scrollLeft = cdAbtButtonTabs[i].offsetLeft - ((cdAbtDivTabsTop.offsetWidth / 2) - (cdAbtButtonTabs[i].offsetWidth / 2));
                            cdAbtButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                            cdAbtButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        }
                        cdAbtDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (cdAbtDivTabsTop).paddingLeft)}px)`;
                        cdAbtDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    } else {
                        cdAbtButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                        cdAbtButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
            
                        cdAbtDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (cdAbtDivTabsTop).paddingLeft)}px)`;
                        cdAbtDivTabsFrame.style.width = getComputedStyle (a[i]).width;
                    }
                }
            });
        }
        

        // Функция для обработки кликов

        function cdAbtButtonTabsClick () {
            cdAbtButtonTabs.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.add ("_ACT");
                    cdAbtButtonTabs.filter (x => x !== a[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("_ACT");
                    });
        
                    if (cdAbtDivTabsTop.scrollWidth > cdAbtDivTabsTop.offsetWidth && window.innerWidth < 768) {
                        if (i === 0) {
                            cdAbtDivTabsTop.scrollLeft = 0;
                            cdAbtButtonTabsLeft.classList.remove ("__c-common--button__TABS_LEFT");
                            cdAbtButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        } else if (i === cdAbtButtonTabs.length - 1) {
                            cdAbtDivTabsTop.scrollLeft = a[i].offsetLeft + a[i].offsetWidth - cdAbtDivTabsTop.offsetWidth + parseInt (getComputedStyle (cdAbtDivTabsTop).paddingLeft);
                            cdAbtButtonTabsRight.classList.remove ("__c-common--button__TABS_RIGHT");
                            cdAbtButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                        } else {
                            cdAbtDivTabsTop.scrollLeft = a[i].offsetLeft - ((cdAbtDivTabsTop.offsetWidth / 2) - (a[i].offsetWidth / 2));
                            cdAbtButtonTabsLeft.classList.add ("__c-common--button__TABS_LEFT");
                            cdAbtButtonTabsRight.classList.add ("__c-common--button__TABS_RIGHT");
                        }
                    }
                    
                    cdAbtDivTabsFrame.style.transform = `translateX(${a[i].offsetLeft - parseInt (getComputedStyle (cdAbtDivTabsTop).paddingLeft)}px)`;
                    cdAbtDivTabsFrame.style.width = getComputedStyle (a[i]).width;

                    cdAbtDivSwiper2.slideTo (i);
                });
            });
        }

        cdAbtButtonTabsClick ();

        cdAbtButtonTabs[0].click ();


        let cdAbttimeout;
        const cdAbtobserver = new ResizeObserver(() => {
            clearTimeout(cdAbttimeout);
            cdAbttimeout = setTimeout(() => {
                cdAbtButtonTabsDefault ();
                cdAbtButtonTabsClick ();
            }, 150);
        });

        cdAbtobserver.observe (cdAbtDivTabs);


        cdCommonMedia1920.addEventListener ("change", () => {
            cdAbtButtonTabsDefault ();
            cdAbtButtonTabsClick ();
        });
        

        // Обработка кликов правой и левой кнопок

        cdAbtButtonTabsLeft.addEventListener ("click", () => {
            for (let i = 0; i < cdAbtButtonTabs.length; i++) {
                if (cdAbtButtonTabs[i].classList.contains ("_ACT")) {
                    cdAbtButtonTabs[i - 1].click ();
                    break;
                }
            }
        });

        cdAbtButtonTabsRight.addEventListener ("click", () => {
            for (let i = 0; i < cdAbtButtonTabs.length; i++) {
                if (cdAbtButtonTabs[i].classList.contains ("_ACT")) {
                    cdAbtButtonTabs[i + 1].click ();
                    break;
                }
            }
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
                        cdAbtButtonTabs[1].click ();
                    }, 50);
                } else {
                    cdAbtdivTableBody[i].classList.remove ("__cd-abt--div__TABLE_BODY");
                    cdAbtSvgTableHead[i].classList.remove ("__cd-abt--svg__TABLE_HEAD");
                    setTimeout (() => {
                        cdAbtButtonTabs[1].click ();
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
                    // enabled: false,
                    // slidesPerView: "auto",
                },
            
                1440: {
                    enabled: true,
                    centeredSlides: true,
                    slidesPerView: "auto",
                    spaceBetween: 180,
                },
                1660: {
                    enabled: true,
                    centeredSlides: true,
                    slidesPerView: "auto",
                    spaceBetween: 240,
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

        // 7.1 При загрузке страницы

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

                // setTimeout (() => {
                //     if (cdAbtDivSwiper3.isBeginning) {
                //         cdAbtDivSwiper3Wrapper.style.transform = `translate3d(0px, 0px, 0px)`;
                //     } else if (cdAbtDivSwiper3.isEnd) {
                //         const k = parseInt(cdAbtDivSwiper3Wrapper.scrollWidth) - parseInt (cdAbtDivSwiper30.offsetWidth) + 6;
                //         if (k > 0 || 1) {
                //             cdAbtDivSwiper3Wrapper.style.transform = `translate3d(-${k}px, 0px, 0px)`;
                //         }
                //     }
                // }, 100);

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
    }
});