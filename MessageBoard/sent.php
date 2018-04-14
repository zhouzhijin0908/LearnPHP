<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/13
 * Time: 12:18
 */
header('content-type:text/html;charset=utf-8');
if (!get_magic_quotes_gpc()){
    foreach ($_POST as &$items){
        $items = addslashes($items);
    }
}

$name = $_POST['name'];
$content = $_POST['content'];

if ($name =="" || strlen($name) > 10){
    echo <<<tem
    <script language="javascript">
    alert('请输入正确的用户名');
    history.go(-1);
    </script>

tem;

}


if (strlen($content) > 400){
    echo <<<tem
    <script>
        alert('输入的留言内容太长');
        history.go(-1);
    </script>
tem;

}

require ('config.inc.php');
$content_time = time();
$insertSql = "insert into info (name, content, content_time) VALUE ('$name', $content, '$content_time')";
if (mysql_query($insertSql)){
    echo <<<tem
    <script>
    alert("留言成功");
    location.href = "index.php";
</script>
tem;
}else{
    echo <<<te
    <script>
    alert("留言失败")
    location.href = "index.php";
</script>
te;

}