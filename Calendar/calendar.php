<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/25
 * Time: 16:30
 */

date_default_timezone_set("PRC");

$year = date('Y');
$month = date('n');
$day = date('j');
$firstDay = date('w', mktime(0,0,0,$month,1,$year));
$daysInMonth = date('t',mktime(0,0,0,$month,1,$year));
$tempDays = $firstDay + $daysInMonth;
$weeksInMonth = ceil($tempDays/7);
$counter = 0;

echo "firstDat=".$firstDay;
echo "daysInMonth=".$daysInMonth;
echo "tempDays=".$tempDays;
echo "weeksInMonth=".$weeksInMonth;

for ($j=0; $j < $weeksInMonth; $j++){
    for ($i = 0; $i < 7; $i ++){
        $counter ++;
        $week[$j][$i] = $counter;
        $week[$j][$i] -= $firstDay;
        if ($week[$j][$i] < 1 || $week[$j][$i] > $daysInMonth){
            $week[$j][$i] = "";
        }
    }
}

$db = mysql_connect("104.194.90.89:3306", 'root','root');
mysql_select_db('calendar');
$sql = "select num, date from events limit 0, 30";
$result = mysql_query($sql);
while ($rw = mysql_fetch_row($result)){
    $links[] = $rw[1];
}
?>
<script type="text/javascript" src="calendar.js"></script>
<table width="400" border="1" cellpadding="2" cellspacing="2">
    <tr>
        <th colspan="7">
            <?php echo date('m', mktime(0,0,0,$month))?>月
        </th>
    </tr>
    <tr>
        <th>Sun</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thur</th>
        <th>Fri</th>
        <th>Sat</th
    </tr>

    <?php
    foreach ($week as $key => $val){
        echo "<tr>";
        for ($i=0; $i<7;$i++) {
            if (in_array("2018-04-" . $val[$i], $links)){
                echo "<td align='center'><a href='javascript:navigate(\"\",\"\",\"2018-04-".$val[$i]."\")'>Event</a>".$val[$i]."</td>";
            }else{
                echo "<td align='center'>".$val[$i]."</td>";
            }
        }
        echo "</tr>";
    }

    ?>
    <tr id = "callback">
        <th id="calendar" colspan="7">
            calendar
        </th>
    </tr>

</table>
