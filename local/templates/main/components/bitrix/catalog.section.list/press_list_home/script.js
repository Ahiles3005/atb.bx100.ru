
function getArticlesPress(sectionId){
    let url = '/local/templates/main/include/home/ajax/press.php?SECTION_ID=' + sectionId

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.text();
        })
        .then(html => {
            document.querySelector('#press_html').innerHTML = html
            observeScrollElements();
        })
        .catch(error => {
            console.error('Fetch error:', error);
        });
}

window.addEventListener("load", function () {

    /* ---------- ********** |||||||||| ДОМАШНЯЯ СТРАНИЦА |||||||||| ********** ---------- */

    if (document.querySelector("#home")) {




        const menuItem = Array.from(document.querySelectorAll(".hm-pre--label__SUBMENU1"));

        menuItem.forEach((v) => {
            v.addEventListener("click", (event) => {
                if (event.target.classList.contains('hm-pre--label__SUBMENU1') || event.target.classList.contains('hm-pre--span__SUBMENU')) {
                    let sectionId = v.dataset.sectionid;
                    getArticlesPress(sectionId)
                }
            });
        });
        menuItem[0].click()

        const menuItems = Array.from(document.querySelectorAll(".hm-pre--label__SUBMENU"));
        menuItems.forEach((v) => {
            v.addEventListener("click", (event) => {
                if (event.target.classList.contains('hm-pre--label__SUBMENU') || event.target.classList.contains('hm-pre--span__SUBMENU')) {
                    let sectionId = v.dataset.sectionid;
                    getArticlesPress(sectionId)
                }
            });
        });





    }
});


