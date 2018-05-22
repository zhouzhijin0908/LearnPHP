<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/5/4
 * Time: 16:47
 */
if (!$_SESSION['admin'])
{
    header('location:login.php');
}
