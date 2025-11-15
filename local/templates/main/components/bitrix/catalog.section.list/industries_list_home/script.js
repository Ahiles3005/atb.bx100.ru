window.addEventListener("load", function () {

    /* ---------- ********** |||||||||| ДОМАШНЯЯ СТРАНИЦА |||||||||| ********** ---------- */

    if (document.querySelector("#home")) {


        const menuItems = Array.from(document.querySelectorAll(".hm-ind--label__SUBMENU"));

        menuItems.forEach((v) => {
            v.addEventListener("click", (event) => {
                if (event.target.classList.contains('hm-ind--label__SUBMENU') || event.target.classList.contains('hm-ind--span__SUBMENU')) {
                    let sectionId = v.dataset.sectionid;
                    let url = '/local/templates/main/include/home/ajax/industries.php?SECTION_ID=' + sectionId

                    fetch(url)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText);
                            }
                            return response.text();
                        })
                        .then(html => {
                            document.querySelector('#ind-html').innerHTML = html
                            observeScrollElements();
                        })
                        .catch(error => {
                            console.error('Fetch error:', error);
                        });
                }
            });
        });


        /* ---------- ********** СЕКЦИЯ IND ********** ---------- */

        const hmIndDivHead = document.querySelector (".hm-ind--div__HEAD");
        const hmIndSvgSubmenu = document.querySelector (".hm-ind--svg__SUBMENU");
        const hmIndFormSubmenu = document.querySelector (".hm-ind--form__SUBMENU");
        const hmIndDivContent = document.querySelector (".hm-ind--div__CONTENT");
        const hmIndDivSubmenuBack = document.querySelector (".hm-ind--div__SUBMENU_BACK");

        hmIndFormSubmenu?.querySelector (".hm-ind--label__SUBMENU:first-of-type")?.click ();

        hmIndDivHead?.addEventListener ("click", () => {
            if (!hmIndFormSubmenu.classList.contains ("__hm-ind--form__SUBMENU")) {
                hmIndFormSubmenu.classList.add ("__hm-ind--form__SUBMENU");
                hmIndSvgSubmenu.classList.add ("__hm-ind--svg__SUBMENU");
            } else {
                hmIndFormSubmenu.classList.remove ("__hm-ind--form__SUBMENU");
                hmIndSvgSubmenu.classList.remove ("__hm-ind--svg__SUBMENU");
            }
        });

        function hmIndFormHeight () {
            if (window.innerWidth > 1439) {
                setTimeout (() => {
                    hmIndFormSubmenu.style.maxHeight = getComputedStyle (hmIndDivContent).height;
                    hmIndDivSubmenuBack.style.top = `${parseInt (getComputedStyle (hmIndDivContent).height) + 108}px`;
                }, 800);
            } else {
                setTimeout (() => {
                    hmIndFormSubmenu.style.maxHeight = null;
                }, 50);
            }
        }

        if (hmIndFormSubmenu && hmIndDivContent && hmIndDivSubmenuBack) {
            hmIndFormHeight ();
            function hmIndDebounce (cB, time) {
                let idTimer;
                return function () {
                    clearTimeout (idTimer);
                    idTimer = setTimeout (() => {
                        cB();
                    }, time);
                }
            }
            const hmIndFormDebounce = hmIndDebounce (hmIndFormHeight, 100);
            window.addEventListener ("resize", hmIndFormDebounce);
        }

        const hmIndLabelSubmenu = Array.from (document.querySelectorAll (".hm-ind--label__SUBMENU"));
        hmIndLabelSubmenu.forEach ((v, i, a) => {
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



    }
});


