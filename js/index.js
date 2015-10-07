$(document).ready(function () {


    $("#login").click(function (e) {
        e.preventDefault();
        var username = $("#username").val();
        var password = $("#password").val();
       
        $.ajax({
            type: 'POST',
            url: "./php/test_login_user.php",
            data: {
                'username': username,
                'password': password
            },
            dataType: 'html',
            success: function (answer) { // if everything goes well
                $("#login-form").fadeOut(); // ẩn form đi
                $('div.result').fadeIn(); // hiển thị thẻ div success
                $('div.result').html(answer); // đặt kết quả trả về từ test.php vào thẻ div success
            }

        });
    });
});

