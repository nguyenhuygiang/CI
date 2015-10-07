$(document).ready(function () {
    $("form").submit(function (e) {
        e.preventDefault();
        var user_name = $("#user_name").val();
        var password = $("#password").val();
        var url = $("#login_form").attr('action');
        var type = $("#login_form").attr('method');
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                'user_name': user_name,
                'password': password
            }
//            success: function(data) {
//                if(data == true ){
//                    alert("thanh cong");
//                }else{
//                    alert("that bai");
//                }
//            }
        });
    });
});

