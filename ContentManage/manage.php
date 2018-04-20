<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/20
 * Time: 11:12
 */
$conn = mysql_connect("104.194.90.89:3306", "root", "root") or die('Could not connect: ' . mysql_error());
$db = mysql_select_db('get_content');
if (!$db) {
    die("can not use download:" . mysql_error());
} else {
    $sql = "select * from spiders limit 0, 30";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);

    if (isset($_POST['flag']) && $_POST['flag'] == 1){
        $sql1 = "UPDATE get_content.spiders SET Title = '".$_POST['Title']."',ListPreg = '".$_POST['ListPreg']."',ContentPreg = '".$_POST['ContentPreg']."',EnterUrl = '" . $_POST['EnterUrl'] ."' WHERE spiders.ID = 4 LIMIT 1 ;";

        $result = mysql_query($sql1);
        echo mysql_error();
        header("location:manage.php");
    }
}

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gbk" />
    <script>
        function loadS1() {
            window.open('');
        }
    </script>
</head>

<body>

    <table align="center" cellspacing="0" cellpadding="0">
        <form method="post" action="manage.php">
            <input type="hidden" name="flag" value="1">
            <tr class="head">
                <td colspan="2">采集管理器</td>
            </tr>
            <tr>
                <td with="11%">采集即描述</td>
                <td width="89%">
                    <input name="Title" type="text" class="input" id="Title" size="40" value="<?php echo $row['Title']?>">
                </td>
            </tr>

            <tr>
                <td width="11%">所属栏目</td>
                <td width="89%">
                    <select name="Category">
                        <option value="1">汽车频道</option>
                        <option value="1">财经频道</option>
                        <option value="1">热点频道</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td valign="top">列表页面地址</td>
                <td>
                    <input name="EnterUrl" type="text" class="input" value="<?php echo $row['EnterUrl']?>" size="60">;
                </td>
            </tr>

            <tr>
                <td valign="top">列表页匹配描述</td>
                <td>
                    <textarea name="ListPreg" cols="80" rows="4"><?php echo $row['ListPreg']?></textarea>
                </td>
            </tr>

            <tr>
                <td valign="top">内容匹配描述</td>
                <td>
                    <textarea name="ContentPreg" cols="80" rows="4"><?php echo $row['ContentPreg']?></textarea>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input name="Submit" type="submit" value="规则提交">
                    <input name="Submit" type="button" value="开始采集" onclick="loadS1()">
                </td>
            </tr>

        </form>

    </table>
</body>
</html>
