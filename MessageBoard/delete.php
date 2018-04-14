<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/13
 * Time: 12:19
 */

require ('config.inc.php');

if (!$_SESSION['login']){
    echo <<<eee
    <script>
    alert('权限不足');
    location.href = 'index.php';
    </script>
eee;
    exit();
}

if (isset($_GET['id']) && $_GET['id'] != ""){
    $deleteRevertSql = "delete from reply WHERE info_id == ".$_GET['id'];
    mysql_query($deleteRevertSql);

    $deleteGuestSql = "delete from info WHERE id = ".$_GET['id'];
    mysql_query($deleteGuestSql);

    if (mysql_error() == ""){
        echo "<script>alert('删除成功');location.href='index.php'</script>";
    }
}