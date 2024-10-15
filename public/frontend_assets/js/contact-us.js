var el = document.getElementById('phone');
var input = document.querySelector("#phone");
if (el != null) {
    window.intlTelInput(input, {
        initialCountry: "in",
        separateDialCode: true,
        preferredCountries: ['in', 'us'],
        utilsScript: "assets/vendor/intl-tel-input/js/utils.js",
    });
}