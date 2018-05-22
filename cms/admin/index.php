<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/5/4
 * Time: 16:46
 */
//session_start();
//include ('check_user.php');
?>

<html>
<head>
    <title>后台管理</title>
    <meta http-equiv="Content-Type" content="text/html; charset=gbk">
</head>
<frameset rows="80,*" cols="*" frameborder="no" border="0" framespacing="0">
    <frame src="top.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
    <frameset cols="180,*" frameborder="no" border="0" framespacing="0">
        <frame src="left.php" name="leftFrame" scrolling="auto" noresize="noresize" id="leftFrame" title="leftFrame" />
        <frame src="main.php" name="mainFrame" scrolling="yes"  noresize="noresize" id="mainFrame" title="mainFrame" />
    </frameset>
</frameset>
<noframes>
    <body>
    <p>Please Use IE 5.0</p>
    </body>
</noframes>

</html>












