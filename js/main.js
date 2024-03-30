// Check if the user has agreed before
const hasAgreed = localStorage.getItem('hasAgreed');

// If not agreed yet and not reloading the page after agreeing, show the modal after 3 seconds
if (!hasAgreed && !sessionStorage.getItem('agreedAndReloaded')) {
    setTimeout(function () {
        $('#exampleModal').modal('show');
    }, 1000);
}

// When the agree button is clicked, store in localStorage and hide the modal
$('#agreeBtn').click(function () {
    localStorage.setItem('hasAgreed', true);
    $('#exampleModal').modal('hide');

    // Set a session storage flag to indicate that the user has agreed and reloaded the page
    sessionStorage.setItem('agreedAndReloaded', true);
});
