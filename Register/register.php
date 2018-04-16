<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/14
 * Time: 15:00
 */
$username = trim($_POST['username']);
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$email = trim($_POST['email']);
date_default_timezone_set("PRC");
if (empty($username) || empty($email) || empty($password) || $cpassword != $password){
    echo '数据输入不正确';
    exit();
}else{
    if (strlen($password) < 6 || strlen($password) >30){
        echo '密码必须在6到30个字符之间';
        exit();
    }

    // 与客户端验证Email时相同的正则表达式
    $pattern = "/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/";
    if (!preg_match($pattern, $email)){
        echo 'email格式不合法';
        exit();
    }

    $db = mysql_connect('104.194.90.89:3306', 'root', 'root') or die('could not connect db!');
    mysql_select_db('register') or die('could not select database');
    $sql = "select * from user where username = '".$username."'";
    $result = mysql_query($sql);
    if ($result && mysql_num_rows($result) > 0){
        echo "<font color='red' size='10'>该用户名已经被注册，请换一个重试!</font>";
    }else{
        $time = date('Y-m-d H:i:s');
        $date = date("Y/m/d");
        $sql = "insert into user (username, pwd, email, lasttime, regtime) VALUES ";
        $sql .= "('$username','$password','$email','$time','$date')";
        echo $sql;
        $result = mysql_query($sql);
        if (!$result){
            mysql_free_result($result);
            mysql_close($db);
            echo '注册失败，请重试 ';
            exit();
        }else{
            echo "<font color='red' size='5'>恭喜你注册成功!</font><br>\n";
        }

    }
}