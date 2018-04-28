<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/27
 * Time: 14:58
 */

include ("Smarty_inc.php");


$title = "网站标题";
$content = "网站正文";
$smarty->assign("title", $title);
$smarty->assign("content", $content);
$smarty->assign("num", 1);
$smarty->display("index.html");