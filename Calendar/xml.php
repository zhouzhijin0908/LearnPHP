<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/25
 * Time: 17:47
 */

header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="utf-8" ?>';
$date = $_GET["event"];
$db = mysql_connect("104.194.90.89:3306", 'root','root');
mysql_select_db('calendar');
$sql = "select body from events where date ='".$date."' limit 0, 30";
$result = mysql_query($sql);
$rs = mysql_fetch_row($result);

echo " <response>
<content>
$rs[0]
  </content>
  </response>";
