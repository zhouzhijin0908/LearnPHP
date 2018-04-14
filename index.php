<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/3/27
 * Time: 12:30
 */

$wage = array(
    "高3班" => array(
        array(1,"小A", "市场", 90),
        array(2,"小B", "财务", 80),
        array(3,"小C", "地理", 70),
    ),
    "高23班" => array(
        array(1,"小D", "产品", 60),
        array(2,"小E", "志愿", 50),
        array(3,"小F", "志愿", 40),
    ),
    "高453班" => array(
        array(1,"小G", "科长", 30),
        array(2,"小H", "职员", 20),
        array(3,"小I", "文员", 10),
    ),
);


//foreach ($wage as $sector => $table){
//    echo '<table border="1" width="600" align="center">';
//    echo '<caption><h2>'.$sector.'期末成绩</h2></caption>';
//
//    echo '<tr bgcolor="#dddddd">';
//    echo '<th>编号</th><th>姓名</th><th>职务</th><th>成绩</th>';
//    echo '</tr>';
//    foreach ($table as $row){
//        echo '<tr>';
//        foreach ($row as $col){
//            echo "<td>$col</td>";
//        }
//        echo '</tr>';
//    }
//
//    echo '</table></br>';
//
//}

//print_r($_GET);

class Student{
    const ZHOU = "zhou";
//    function test(){
//        echo 'test';
//    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo $name.":".$arguments[0];
//        print_r($arguments);
    }
}

//$stud = new Student();
//$stud->test('er32');
//$object_str = serialize($stud);
//
//file_put_contents("testFile.txt", $object_str);

date_default_timezone_set("PRC");

echo date("Y:m:d:H;i;s");
echo "<br>";


$conn = mysql_connect("localhost:3309", "root", "root");
if ($conn){
    echo "ok";
}else{
    echo "failed";
}
mysql_select_db("db_shop");
$query = "select * from tb_shangpin";
@mysql_query("SET NAMES 'utf8'", $conn);
$result = mysql_query($query, $conn);
if ($result){
    echo "查询成功";
    echo "<br>";
    $rows = mysql_num_rows($result);
    if ($rows != 0){
        while ($dataRow = mysql_fetch_array($result)){
            echo $dataRow["dengji"];
            echo "<br>";
        }
    }
}else{
    echo "查询失败";
}























