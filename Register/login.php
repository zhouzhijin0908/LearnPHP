<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/14
 * Time: 16:34
 */
require_once ('function.php');

$username = trim($_POST['username']);
$password = trim($_POST['pwd']);
$errmsg = '';
if (!empty($username)){
    $db = mysql_connect("104.194.90.89:3306", 'root','root') or die('could not connect db:'.mysql_error());
    mysql_select_db('register') or die('could not select db:'.mysql_error());
    if (mysqli_connect_errno()){
        $errmsg = "db connect failed\n";
    }else{
        $sql = "select * from user where username = '$username' and pwd = '$password'";
        echo $sql;
        $result = mysql_query($sql);
        if ($result && mysql_num_rows($result) > 0){
            echo "login success!";
        }else{
            echo "login failed";
            mysql_free_result($result);
            mysql_close($db);
        }

        echo "<font size='19' color='red'>用户： $username --$errmsg</font>";
    }
}