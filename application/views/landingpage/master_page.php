<html>
    <head>
        <?php
        echo $head;
        ?>
        <link href="<?php echo base_url('landingpage_css/phuong-phap-hoc.css') ?>" rel="stylesheet" type="text/css"/>
    </head>
    <body class="">
        <nav id="header" class="container">
            <?php
            echo $header;
            ?>    
        </nav>

        <div id="slide" class="container-fluid">
            <?php
            echo $slide;
            $form = TRUE;
            
            ?> 
        </div>

        <div id="content" class="container-fluid">
            <?php echo $content; ?>
        </div>

        <div id="truyen-thong" class="container">
            <?php echo $truyenthong; ?>
        </div>

        <div id="bi-quyet" class="container">
            <?php echo $biquyet; ?>
        </div>

        <div class="container text-right" style="margin-top: 30px;">
            <a href="#" style="text-decoration: none; color: #000; font-size: 18px;" id="go-topica-la-gi">
                <img src="<?php echo base_url('img/icon-link.png')?>" alt=""/>
                Tìm hiểu về chúng tôi
            </a>
        </div>

        <div id="footer" class="container-fluid">
            <?php echo $footer; ?>
        </div>
    </body>
</html>>