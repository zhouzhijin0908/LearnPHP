<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/19
 * Time: 17:44
 */

$conn = mysql_connect("104.194.90.89:3306", "root", "root") or die('Could not connect: ' . mysql_error());
$db = mysql_select_db('download');
if (!$db) {
    die("can not use download:" . mysql_error());
} else {
    $sql = "select * from f_detail where id = '" . $_GET['id'] . "' limit 0, 30";

    $result = mysql_query($sql);
    if (!$result) {
        mysql_free_result($result);
        mysql_close($db);
        echo "para invalid";
        exit();
    }

    $row = mysql_fetch_array($result);

    $file_name = $row[1];
    $file_dir = "up/";
    $file_Size = filesize($file_dir . $file_name);
    if (!file_exists($file_dir . $file_name)) {
        echo "file not exist";
        exit();
    } else {
        $file = fopen($file_dir . $file_name, 'r');
        Header("Content-type: application/octet-stream");
        Header("Accept-Ranges: bytes");
        Header("Accept-Length: " . filesize($file_dir . $file_name));
        Header("Content-Disposition: attachment; filename=" . $file_name);
//        echo fread($file, filesize($file_dir.$file_name));

        $buffer = 1024;
        $buffer_count = 0;
        while (!feof($file) && $file_Size - $buffer_count > 0) {
            $data = fread($file, $buffer);
            $buffer_count += $buffer;
            echo $data;
        }

//        echo "OKKKKKKKKKKKKKKKKKKKK";
        fclose($file);

        exit();
    }
}