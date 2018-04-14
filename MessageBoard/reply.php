<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/13
 * Time: 12:19
 */
require ('config.inc.php');

if (!$_SESSION['login']){
    echo "<script>alert('请先登录');location.href='login.php';</script>";
    exit();
}

if (isset($_POST['Submit'])){
    if (!get_magic_quotes_gpc()){
        foreach ($_POST as &$item) {
            $item = addslashes($item);
        }
    }


    if (strlen($_POST['reply']) > 400){
        echo "<script>alert('回复类容过长！');history.go(-1)</script>";
        exit();
    }

    $info_id = $_POST['info_id'];
    $reply = $_POST['reply'];
    $time = time();

    $insertRevertSql = "insert into reply (info_id, reply, reply_time) VALUE ('$info_id', '$reply','$time')";
    echo $insertRevertSql;

    if (mysql_query($insertRevertSql)){
        echo "<script>alert('回复成功');location.href='index.php'</script>";
        exit();
    }else{
        echo "<script>alert('回复失败');history.go(-1)</script>";
    }

}
?>

<html>
    <head>
        <title>回复</title>
    </head>
    <body>
    <table>
        <tr>
            <th>回复内容</th>
        </tr>
        <tr>
            <td>
                <form action="reply.php" method="post" name="reply">
                    <textarea name="reply" cols="30" rows="5" id="reply"></textarea>
                    <input type="hidden" name="info_id" value="<?php echo $_GET['id'] ?>" size="20">

            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" value="回 复" name="Submit">
                <input type="button" onclick="Javascript:history.go(-1)" value="放弃">
                </form>
            </td>
        </tr>

    </table>
    </body>
</html>





