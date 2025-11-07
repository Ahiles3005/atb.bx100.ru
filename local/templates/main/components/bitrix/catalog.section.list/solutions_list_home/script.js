window.addEventListener("load", function () {

    /* ---------- ********** |||||||||| ДОМАШНЯЯ СТРАНИЦА |||||||||| ********** ---------- */

    if (document.querySelector("#home")) {


        const menuItems = Array.from(document.querySelectorAll(".hm-des--label__SUBMENU"));

        menuItems.forEach((v) => {
            v.addEventListener("click", (event) => {
                if (event.target.classList.contains('hm-des--label__SUBMENU') || event.target.classList.contains('hm-des--span__SUBMENU')) {
                    let sectionId = v.dataset.sectionid;
                    let url = 'local/templates/main/include/home/ajax/solutions.php?SECTION_ID=' + sectionId

                    fetch(url)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText);
                            }
                            return response.text();
                        })
                        .then(html => {
                            document.querySelector('#des-html').innerHTML = html
                            observeScrollElements();
                        })
                        .catch(error => {
                            console.error('Fetch error:', error);
                        });
                }
            });
        });


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



    }
});


