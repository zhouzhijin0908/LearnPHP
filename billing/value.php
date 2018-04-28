<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/27
 * Time: 16:16
 */
require_once (dirname(__FILE__)."/inc/inc.read.dbconfig.php");
require_once (dirname(__FILE__)."/include/include.functions.php");

$mysql = mysql_connect($mysqlconf["host"], $mysqlconf["user"],$mysqlconf["pass"]);
mysql_select_db($mysqlconf["db"]);

$uid = var_process('get', 'uid');
$score = var_process('get', 'score');
$desctext = var_process('get', 'desctext');

$uid_r = check_uid($uid, $mysql);
if ($uid_r == 'true'){
    if ($uid&&$score){
        $record['uid'] = $uid;
        $record['transtype'] = '1';
        $record['score'] = $score;
        $record['desctext'] = $desctext;

        $Transaction_record = Transaction_record($record,$mysql);
        if ($Transaction_record == 'true'){
            $Charge_num = Charge_num($uid,$score,$mysql);
            if ($Charge_num){
                echo "充值成功,金额：".$score;
            }else{
                echo "充值失败";
            }
        }

    }
}else{
    echo "输入信息不全";
}

