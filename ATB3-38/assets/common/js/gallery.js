
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** ГАЛЕРЕЯ (ГАЛЕРЕИ) ********** ---------- */
    

    // 1.1 Открытие галереи (галерей)

    const galleryOpen = Array.from (document.querySelectorAll ("._GLR_OPEN"));
    const cCommonDivGlr = Array.from (document.querySelectorAll (".c-common--div__GLR")); 
    
    galleryOpen.forEach ((v, i, a) => {
        a[i].addEventListener ("click", () => {
            cCommonDivGlr[i].classList.add ("__c-common--div__GLR");
        });
    });




    // 1.2 Закрытие галереи (галерей)

    const cCommonButtonGlrClose = Array.from (document.querySelectorAll (".c-common--button__GLR_CLOSE"));

    cCommonButtonGlrClose.forEach ((v, i, a) => {
        a[i].addEventListener ("click", () => {
            cCommonDivGlr[i].classList.remove ("__c-common--div__GLR");
        });
    });

    cCommonDivGlr.forEach ((v, i, a) => {
        a[i].addEventListener ("click", (e) => {
            if (a[i].classList.contains ("__c-common--div__GLR") && e.target === a[i]) {
                a[i].classList.remove ("__c-common--div__GLR");
            }
        });
    });




    // 1.3 Слайдер

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

    


    // 1.4 Копирование изображений в кнопки пагинации 
    // !!! (Это временное решение. При ИНТЕГРАЦИИ (если, конечно, нужно в превью загружать картинки меньшего разрешения)
    // пройтись по массиву cCommonDivGlrSwiperPagBuls
    // - это массив кнопок пагинации и загрузить изображения меньшего разрешения).

    const cCommonImgGlrImages = Array.from (document.querySelectorAll (".c-common--img__GLR_IMAGE"));
    const cCommonDivGlrSwiperPagBuls = Array.from (document.querySelectorAll(".c-common--div__GLR_SWIPER_PAGINATION .swiper-pagination-bullet"));

    cCommonImgGlrImages.forEach ((v, i, a) => {
        let clone = a[i].cloneNode (true);
        cCommonDivGlrSwiperPagBuls[i].append (clone);
    });




    // 1.5 Автопрокрутка пагинации

    cCommonDivGlrCont2.forEach ((v, i, a) => {
        a[i].on ("slideChange", () => {
            const cCommonDivGlrSwiperPag = cCommonDivGlr[i].querySelector (".c-common--div__GLR_SWIPER_PAGINATION");
            const cCommonGlrSpanActive = cCommonDivGlr[i].querySelector (".c-common--div__GLR_SWIPER_PAGINATION .swiper-pagination-bullet-active");

            if (cCommonGlrSpanActive.getBoundingClientRect().right > cCommonDivGlrSwiperPag.getBoundingClientRect().right) {
                cCommonDivGlrSwiperPag.scrollLeft = cCommonGlrSpanActive.offsetLeft + cCommonGlrSpanActive.offsetWidth - cCommonDivGlrSwiperPag.offsetWidth;
            } else if (cCommonGlrSpanActive.getBoundingClientRect().left < cCommonDivGlrSwiperPag.getBoundingClientRect().left) {
                cCommonDivGlrSwiperPag.scrollLeft = cCommonGlrSpanActive.offsetLeft;
            }
        });
    });


    

    // 1.6 Если картинок больше 1, включить превью

    cCommonDivGlrCont2.forEach ((v, i, a) => {
        if (a[i].slides.length > 1) {
            cCommonDivGlr[i].querySelector (".c-common--div__GLR_SWIPER_PAGINATION").style.display = "flex";
        }
    });
    
});