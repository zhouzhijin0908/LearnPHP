<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/27
 * Time: 16:04
 */

function var_process($type, $name,$default_value="")
{
    global $_POST, $_GET, $_COOKIE, $_SESSION;
    if ($type == "post"){
        $temp = isset($_POST[$name])?$_POST[$name]:$default_value;
    }

    elseif($type=="get")
    {
        $temp=isset($_GET[$name])?$_GET[$name]:$default_value ;
    }
    elseif($type=="cookie")
    {
        $temp=isset($_COOKIE[$name])?$_COOKIE[$name]:$default_value ;
    }
    elseif($type=="session")
    {
        $temp=isset($_SESSION[$name])?$_SESSION[$name]:$default_value ;
    }
    else
    {
        $temp=$default_value;
    }

    $temp=str_replace("'","\'",$temp);

    return $temp;
}
