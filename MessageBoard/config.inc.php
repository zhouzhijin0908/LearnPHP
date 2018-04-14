<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/13
 * Time: 15:12
 */
session_start();
define('DB_HOST', 'localhost:3309');
define('DB_USER','root');
define('DB_PW','root');
define('DB_NAME','guestBook');
define('DB_CHARSET','utf8');
define('DB_PCONNECT','0');//0 是否使用持久性连接
define('DB_DATABASE','mysql');//数据库类型

$conn = mysql_connect(DB_HOST, DB_USER, DB_PW) or die('连接数据库失败');
mysql_query('set names utf8');//设置字符集编码
mysql_select_db(DB_NAME);

