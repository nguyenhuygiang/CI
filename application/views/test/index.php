<!--<html>
    <head>
    <body>
        <h3> <?php echo $name ?></h3>
        <h1><?php echo $color ?></h1>
    </body>
    </head>
</html>-->
<?php
echo "<pre>";
//var_dump($ketqua);
//var_dump($ketqua[1]->name);
//die();


foreach ($ketqua as $result) {
    //var_dump($result) ;
    echo $result->name;
//    print $result->password;
    print "<br>";
}