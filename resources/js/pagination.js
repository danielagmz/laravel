document.addEventListener('DOMContentLoaded', () => {
    const pageSelect = document.querySelector(".busqueda__input--page");

    if (pageSelect) {
        const params = new URLSearchParams(window.location.search);

        pageSelect.addEventListener('change', (event) => {
            let value = parseInt(event.target.value);

            if (isNaN(value) || !Number.isInteger(value) || value < 1) {
                value = 4;
            }

            params.set('limit', value);

            const newUrl = window.location.pathname + '?' + params.toString();
            window.location.href = newUrl;
        });
    }
});
