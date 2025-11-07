"use strict";


function observeScrollElements() {
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
        rootMargin: '-10px 0px 0px 0px',
        threshold: 0,
    }

    const observer = new IntersectionObserver(callback, options)
    scrolls.forEach((v) => observer.observe(v));
}

window.addEventListener ("load", function () {

    /* ---------- ********** |||||||||| ДОМАШНЯЯ СТРАНИЦА |||||||||| ********** ---------- */

    if (document.querySelector ("#home")) {

        /* ---------- ********** ОБЩИЕ ДЛЯ ВСЕЙ СТРАНИЦЫ ********** ---------- */

        // 1. АНИМАЦИЯ ПРИ СКРОЛЛЕ 




        observeScrollElements();





        /* ---------- ********** СЕКЦИЯ DES ********** ---------- */

        const hmDesDivHead = document.querySelector (".hm-des--div__HEAD");
        const hmDesSvgSubmenu = document.querySelector (".hm-des--svg__SUBMENU");
        const hmDesFormSubmenu = document.querySelector (".hm-des--form__SUBMENU");
        const hmDesDivContent = document.querySelector (".hm-des--div__CONTENT");

        hmDesFormSubmenu?.querySelector (".hm-des--label__SUBMENU:first-of-type")?.click ();

        hmDesDivHead?.addEventListener ("click", () => {
            if (!hmDesFormSubmenu.classList.contains ("__hm-des--form__SUBMENU")) {
                hmDesFormSubmenu.classList.add ("__hm-des--form__SUBMENU");
                hmDesSvgSubmenu.classList.add ("__hm-des--svg__SUBMENU");
            } else {
                hmDesFormSubmenu.classList.remove ("__hm-des--form__SUBMENU");
                hmDesSvgSubmenu.classList.remove ("__hm-des--svg__SUBMENU");
            }
        });

        /* ---------- ********** СЕКЦИЯ HST ********** ---------- */

        const hmHstLiMenuItem = Array.from (document.querySelectorAll (".hm-hst--li__MENU_ITEM"));
        const hmHstButtonMenuItem = Array.from (document.querySelectorAll (".hm-hst--button__MENU_ITEM"));
        const hmHstFormSubmenu = Array.from (document.querySelectorAll (".hm-hst--form__SUBMENU"));
        const hmHstDivContent = document.querySelector (".hm-hst--div__CONTENT");
        const hmHstDivSubmenuBack = document.querySelector (".hm-hst--div__SUBMENU_BACK");
        
        hmHstButtonMenuItem.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!hmHstLiMenuItem[i].classList.contains ("__hm-hst--li__MENU_ITEM")) {
                    if (window.innerWidth < 1440) {
                        hmHstLiMenuItem[i].classList.add ("__hm-hst--li__MENU_ITEM");
                        hmHstFormSubmenu[i].classList.add ("__hm-hst--form__SUBMENU");
                    } else {
                        hmHstLiMenuItem[i].classList.add ("__hm-hst--li__MENU_ITEM");
                        hmHstFormSubmenu[i].classList.add ("__hm-hst--form__SUBMENU");
                    }
                    if (hmHstLiMenuItem[i].querySelector (".hm-hst--label__SUBMENU:first-of-type > .hm-hst--input__SUBMENU")) {
                        hmHstLiMenuItem[i].querySelector (".hm-hst--label__SUBMENU:first-of-type").click ();
                    }
                    hmHstLiMenuItem.filter (x => x !== hmHstLiMenuItem[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__hm-hst--li__MENU_ITEM");
                        if (a1[i1].querySelector (".hm-hst--input__SUBMENU:checked")) {
                            const a = a1[i1].querySelector (".hm-hst--input__SUBMENU:checked");
                            a.checked = false;
                        }
                    });
                } else {
                    if (window.innerWidth < 1440) {
                        hmHstLiMenuItem[i].classList.remove ("__hm-hst--li__MENU_ITEM");
                        hmHstFormSubmenu[i].classList.remove ("__hm-hst--form__SUBMENU");
                    }
                }
            });
        });

        hmHstButtonMenuItem[0]?.click ();

        function hmHstFormHeight () {
            if (window.innerWidth > 1439) {
                hmHstFormSubmenu.forEach ((v, i, a) => {
                    setTimeout (() => {
                        a[i].style.maxHeight = getComputedStyle (hmHstDivContent).height;
                        hmHstDivSubmenuBack.style.top = `${parseInt (getComputedStyle (hmHstDivContent).height) + 115}px`;
                    }, 800);
                });
            } else {
                hmHstFormSubmenu.forEach ((v, i, a) => {
                    setTimeout (() => {
                        a[i].style.maxHeight = null;
                    }, 50);
                });
            }
        }

        if (hmHstDivContent && hmHstDivSubmenuBack) {
            hmHstFormHeight ();
            function hmHstDebounce (cB, time) {
                let idTimer;
                return function () {
                    clearTimeout (idTimer);
                    idTimer = setTimeout (() => {
                        cB();
                    }, time);
                }
            }
            const hmHstFormDebounce = hmHstDebounce (hmHstFormHeight, 100);
            window.addEventListener ("resize", hmHstFormDebounce);
        }

        const hmHstLabelSubmenu = Array.from (document.querySelectorAll (".hm-hst--label__SUBMENU"));
        hmHstLabelSubmenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {    
                if (a[i].parentNode.scrollHeight > a[i].parentNode.offsetHeight) {
                    let k = a[i].offsetTop - a[i].parentNode.scrollTop;
                    let k1 = a[i].offsetTop + a[i].offsetHeight - a[i].parentNode.scrollTop;
                    if (k < 0 && k1 > 0) {
                        a[i].parentNode.scrollTop = a[i].offsetTop;
                    } else if (k < a[i].parentNode.offsetHeight && k1 > a[i].parentNode.offsetHeight) {
                        a[i].parentNode.scrollTop = a[i].parentNode.scrollTop + k1 - a[i].parentNode.offsetHeight;
                    }
                }
            });
        });

        /* ---------- ********** СЕКЦИЯ PRE ********** ---------- */

        const hmPreInputSubmenu1 = document.querySelector (".hm-pre--label__SUBMENU1 > input");
        const hmPreDivFormBody = document.querySelector (".hm-pre--div__FORM_BODY");
        const hmPreSvgSubmenu = document.querySelector (".hm-pre--svg__SUBMENU");

        hmPreInputSubmenu1?.addEventListener ("click", (e) => {
            e.stopPropagation()
            hmPreDivFormBody?.classList.toggle ("__hm-pre--div__FORM_BODY");
            hmPreSvgSubmenu?.classList.toggle ("__hm-pre--svg__SUBMENU");
        });

        hmPreInputSubmenu1?.click ();
    }

});


