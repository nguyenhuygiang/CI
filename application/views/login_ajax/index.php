<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('css/styles.css'); ?>" type="text/css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?php  echo base_url('js/login_ajax.js');   ?>" type="text/javascript"></script>
    <body>
        <div class="container" id="login_form">
            <section id="content">
                <form action="<?php echo site_url('index.php/login_ajax/check_login') ?>" method="post">
                    <h1>Login Form</h1>
                    <div>
                        <input type="text" placeholder="Username" required="" id="user_name"  name="user_name"/>
                        <?php form_error('user_name'); ?>
                    </div>
                    <div>
                        <input type="password" placeholder="Password" required="" id="password"  name="password"/>
                        <?php form_error('password'); ?>
                    </div>
                    <div class="err" id="add_err"></div>
                    <div>
                        <input type="submit" value="Log in" id="login"  />
                        <a href="#">Lost your password?</a>
                        <a href="#">Register</a>
                    </div>
                </form><!-- form -->
                <div class="button">
                    <?php
//                    if (isset($error_login)) {
//                        echo $error_login;
//                    }
                    ?>
                </div><!-- button -->
            </section><!-- content -->
        </div>
    </body>
</head>
</html>