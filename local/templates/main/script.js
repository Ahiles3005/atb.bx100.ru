function sendFormAjax(formElement, onSuccess,onError) {

    const settings = {
        url: '/ajax/form_submit.php',
        onSuccess: null,
        onError: null,
    };


    const formData = new FormData(formElement);

    fetch(settings.url, {
        method: 'POST',
        body: formData
    })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Response:', data);

            if (data.status) {

                // Вызов коллбэка успеха
                if (onSuccess && typeof onSuccess === 'function') {
                    onSuccess();
                }

            } else {

            }
        })
        .catch(error => {
            console.log(error);
            // if (settings.onError && typeof settings.onError === 'function') {
            //     settings.onError({success: false, message: error.message});
            // }
        });
}


document.addEventListener('DOMContentLoaded', () => {
    const radios = document.querySelectorAll('.cd-mat--input__SUBMENU');
    const cards = document.querySelectorAll('.cd-mat--a__CARD');

    radios.forEach(radio => {
        radio.addEventListener('change', () => {
            const value = radio.value;

            cards.forEach(card => {
                if (!value || card.dataset.type === value) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });


    //фейковые ссылки
    document.addEventListener('click', function(e) {

        let image = e.target.closest('.hm-cat--div__CARD_IMAGE');

        if (!image) {
            return;
        }

        let article = image.closest('.hm-cat--article__CARD');

        if (!article) {
            return;
        }

        let link = article.getAttribute('href');

        if (link) {
            window.location.href = link;
        }

    });

});