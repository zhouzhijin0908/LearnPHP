<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/28
 * Time: 11:10
 */
require_once(dirname(__FILE__)."/inc/inc.read.dbconfig.php");//数据库配置文件
require_once(dirname(__FILE__)."/include/include.functions.php");//函数库文件
require_once(dirname(__FILE__)."/inc/inc.smarty.php");//正式的smarty
$mysql = mysql_connect($mysqlconf["host"], $mysqlconf["user"], $mysqlconf["pass"]);
mysql_select_db($mysqlconf["db"], $mysql);

$uids = $_GET["uid"];
$check = check_uid($uids, $mysql);
if ($check == "true"){
    $smarty->assign("uid", $uids);
    $month = var_process('get', 'month');
    $page = var_process('get','page',1);
    $smarty->assign("page", $page);
    $sum_article = total_check($uids, $mysql);
    $offset = ($page -1)*5;
    $nums = '5';
    $sum = ceil($sum_article/$nums);
    $smarty->assign("sum",$sum);

    $month = '0';
    $Inquiry = Value_Inquiry($uids, $month, $offset, $nums, $mysql);
    $smarty->assign("Inquiry", $Inquiry);

    $divpage = divpage_toadmin($sum_article,$page,$nums);
    $smarty->assign("divpage", $divpage);
    $smarty->display(dirname(__FILE__)."/value_record.html");

    mysql_close($mysql);

}
