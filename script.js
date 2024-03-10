document.addEventListener("DOMContentLoaded", function () {
    const createAccountLink = document.getElementById('createAccountLink');
    const createAccountOverlay = document.getElementById('createAccountOverlay');
    const closeButton = document.getElementById('closeButton');

    createAccountLink.addEventListener('click', function (event) {
        event.preventDefault();
        createAccountOverlay.style.display = 'flex';
    });

    closeButton.addEventListener('click', function () {
        createAccountOverlay.style.display = 'none';
    });
});