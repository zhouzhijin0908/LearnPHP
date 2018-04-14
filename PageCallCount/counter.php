<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/13
 * Time: 11:25
 */
require ("function.php");
?>
<html>
    <head>
        <title>访客计数器</title>
    </head>
<body>
    <center>
        <H1>欢迎访问</H1>
        <br>
        <hr>
        <font size="7" color="red">
            你是第<?php echo counter()?>位访客
        </font>
    </center>
</body>
</html>
