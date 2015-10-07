$(document).ready(function () {
    $("form").submit(function (e) {
        e.preventDefault();
        var username = $("#user_name").val();
        var password = $("#password").val();
        $.ajax({
            type: 'POST',
            url: $('form').attr('action'),
            data: {
                'username': username,
                'password': password
            },
            success: function (data) {
                if (data == "true") {
                    alert("thanh cong");
                }
                else {
                    alert("that bai");
                }
            }
        });
    });
});


