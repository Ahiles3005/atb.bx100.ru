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