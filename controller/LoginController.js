let type;
$('#loginBtn').on('click', function () {

    let mail = $('#mail').val();
    let password = $('#pass').val();
    let error_mail = '';
    let error_pass = '';

    if ($.trim(mail).length < 1) {
        console.log($.trim(mail).length);
        console.log("Your Mail Is Missing");
        error_mail = 'Your Mail Is Missing';
    } else {
        error_mail = '';
    }
    if ($.trim(password).length < 1) {
        console.log("Your Password Is Missing");
        error_pass = 'Your Password Is Missing';
    } else {
        error_pass = '';
    }

    if (error_mail === '' && error_pass === '') {
        console.log("skjdhfs")
        if (mail === "Admin") {
            type = "ad";
            document.cookie = "type=" + type + "";
            window.location.href = "view/dashboard.php";
        } else if (mail === "Super") {
            type = "su";
            document.cookie = "type=" + type + "";
            window.location.href = "view/dashboard.php";

        } else if (mail === "Security") {
            type = "sec";
            document.cookie = "type=" + type + "";
            window.location.href = "view/dashboard.php";
        } else if (mail === "Driver") {
            type = "d";
            document.cookie = "type=" + type + "";
            window.location.href = "view/dashboard.php";
        }

    }


});
