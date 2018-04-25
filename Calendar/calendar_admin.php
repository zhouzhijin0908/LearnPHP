<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>AJAX PHP Calendar Admin Tool</title>
    <!--<link rel="stylesheet" type="text/css" href="calendar_admin.css" /> -->

    <style type="text/css">
        body {
            background: #CCC;
            text-align: center;
            color: #FFF;
            font-family: Arial,sans-serif;
        }

        #main {
            margin: 0 auto;
            background: #444;
            border: 2px solid #FFF;
            width: 760px;
        }

        #top, #bottom {
            text-align: left;
            width: 740px;
            padding: 10px;
        }

        #top {
            position: relative;
            height: 40px;
            line-height: 40px;
            background: transparent url('/Calendar/images/calIcon.gif') no-repeat 10px 9px;
            font-weight: bold;
            border-bottom: 1px solid #EEE;
        }

        #top h3 {
            padding: 0;
            margin: 0;
            margin-left: 55px;
        }

        #top .menu {
            position: absolute;
            top: 10px;
            right: 10px;
            height: 30px;
            line-height: 30px;
            font-size: 12px;
        }

        #top .menu a {
            font-size: 12px;
            font-weight: bold;
            text-decoration: none;
            color: #FFF;
            padding: 5px;
        }

        #top .menu a:hover {
            text-decoration: underline;
        }

        #bottom {
            background: #676767;
            overflow: auto;
        }

        #bottom h3 {
            margin-top: 0;
            padding-top: 0;
        }

        #bottom a {
            color: #FFF;
            font-size: 11px;
            font-weight: bold;
        }

        #fields {
            width: 100%;
            height: 100%;
            overflow: auto;
        }

        .field, #fields div {
            padding-top: 10px;
            clear: both;
        }

        .label {
            width: 125px;
        }

        .label, .box {
            float: left;
        }

        #calendar td {
            padding: 3px;
        }

        #calwin {
            width: 230px;
            position: absolute;
            top: 100px;
            left: 50%;
            margin-left: -150px;
            display: none;
            background: transparent;
        }

        .bar {
            text-align: right;
            background: url('/calendar/images/calBar.gif') no-repeat top left;
        }

        .bar img {
            border: none;
        }

        .bar a {
            margin-right: 5px;
        }

        #calback {
            width: 100%;
            background: #FFF url('/calendar/images/calWaiting.gif') no-repeat center center;
        }

        #calendar {
            width: 100%;
            height: 100%;
            opacity: 0;
            filter: alpha(opacity=0);
            -moz-opacity: 0;
        }

        .cal {
            background: #444;
            width: 100%;
        }

        .calhead {
            width: 100%;
            font-weight: bold;
            color: #FFF;
            font-size: 14px;
        }

        .calhead td {
            padding: 0px;
        }

        .calhead img {
            border: none;
        }

        .dayhead {
            height: 18px;
            background: #EEE;
        }

        .dayhead td {
            font-size: 11px;
            text-align: center;
            color: #000;
        }

        .dayrow {
            background: #FFF;
            height: 20px;
        }

        .dayrow td {
            width: 14%;
            color: #000;
            font-size: .7em;
            text-align: right;
        }

        .day {
            text-decoration: none;
            color: #000;
            display: block;
            width: 100%;
            height: 100%;
        }

        .dayover {
            background: #EEE;
        }

        .dayout {
            background: #FFF;
        }
    </style>

    <script src="calendar1.js" type="text/javascript"></script>
    <script type="text/javascript">
        var c = new Calendar("c");
        document.write(c);
    </script>
</head>
<body>
<div id="main">
    <div id="top">
        <h3>Ajax calendar admin</h3>
        <div class="menu">
            <a href="calendar_admin.php">New Event</a> | <a href="list.php">Edit / Delete Event</a>
        </div>
    </div>

    <div id="bottom">
        <h3>New Event</h3>
        <form id="form1" runat="server" action="calendar_admin.php" method="post">
            <div>
                <div class="field">
                    <span class="label">Date / Time:</span>
                    <span class="box">
                        <input type="text" name="date" id="TextBox1" onfocus="calendar()"/>
                        <p style="margin: 4px 0px 0px 0px">   </p>
                    </span>
                    <div class="field"><span class="label">Heading:</span><span class="box"><input type="text" size="50" name="heading" /></span></div>
                    <div class="field"><span class="label">Event:<br /><span style="font-size:9px">(HTML is OK)</span></span><span class="box"><textarea name="event" cols="50" rows="6"></textarea></span></div>
                </div>
                <br/>
                <div class="field">
                    <span class="label">&nbsp;</span>
                    <span class="box"><input type="submit" value="      Add Event      "/></span>
                </div>

            </div>
        </form>
    </div>
</div>
</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/25
 * Time: 19:41
 */

if (empty($_POST)){
    return;
}

if (!empty($_POST['date']) and !empty($_POST['heading']) and !empty($_POST['event'])){
    $db = mysql_connect("104.194.90.89:3306", 'root','root');
    mysql_select_db('calendar');
    $sql="INSERT INTO calendar.events (num ,heading ,date ,body )
			VALUES (NULL , '".$_POST['heading']."', '".$_POST['date']."', '".$_POST['event']."');";
    $result = mysql_query($sql);
    if ($result){
        echo "<script>alert('添加成功');</script>";
    }else{
        echo "<script>alert('失败');</script>";
    }
}else{
    echo '<script type="text/javascript">alert(\'请填写完整信息\')</script>';
}