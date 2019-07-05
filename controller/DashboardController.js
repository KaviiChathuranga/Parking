$(document).ready(function () {


    let type = readCookie("type");
    console.log(type);
    if (type === 'ad') {
        $('#admin').show();
        $('#super').hide();
        $('#security').hide();
        $('#driver').hide();
    } else if (type === 'su') {
        $('#super').show();
        $('#admin').hide();

        $('#security').hide();
        $('#driver').hide();
    } else if (type === 'sec') {
        $('#security').show();
        $('#admin').hide();
        $('#super').hide();

        $('#driver').hide();
    } else if (type === 'd') {
        $('#driver').show();
        $('#admin').hide();
        $('#super').hide();
        $('#security').hide();

    }
});

//READ COOKIE FUNCTION
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1, c.length);
        }
        if (c.indexOf(nameEQ) === 0) {
            return c.substring(nameEQ.length, c.length);
        }
    }
    return null;
}