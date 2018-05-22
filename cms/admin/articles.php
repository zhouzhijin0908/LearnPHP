<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/5/5
 * Time: 16:12
 */

include ('../init.inc.php');
$c = $_GET['c'] ? $_GET['c'] : $_POST['c'];
switch ($c)
{
    case 1:
        $cname = "文章分类1";
        break;
    case 2:
        $cname = "文章分类2";
        break;
    case 3:
        $cname = "文章分类3";
        break;
    case 4:
        $cname = "文章分类4";
        break;
    case 5:
        $cname = "文章分类5";
        break;
    case 6:
        $cname = "默认分类";
        break;
}
usdb("articles");
uslib("page");
$page = $_GET['page'] ? $_GET['page'] : 1;
$page_size = 12;

if ($_GET['del']){
    $artices->del($_GET['del']);
    header("location:articles.php?page=$page&c=$c");
}
$strWhere = "and category = $c order by ID desc";
$rows = $articles->getList($strWhere, $page_size, $page);
$pager = new listPage($articles->recordNum, $page_size, 8);
$pager->lastPage = '<font face="webdings">7</font>';
$pager->nextPage = '<font face="webdings">8</font>';
$pager->firstPage = '<font face="webdings">9</font>';
$pager->endPage = '<font face="webdings">:</font>';
$pager->cssClass = '';
$pager->createPage();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gbk" /></head>
<link href="admin.css" rel="stylesheet" type="text/css" />

<base target="mainFrame">
<div class="m"></div>
<div class="t">
    <table align=center cellspacing=0 cellpadding=0>
        <tr class=head>
            <td colspan="4"><?php echo $cname?></td>
        </tr>
        <tr class=line>
            <td><strong>日期</strong></td>
            <td><strong>标题</strong></td>
            <td><strong>修改</strong></td>
            <td><strong>删除</strong></td>
        </tr>
        <?php
        foreach($rows as $row){
            ?>
            <tr class=line>
                <td width="120"><?php echo $row['Date']?></td>
                <td><?php echo $row['Title']?></td>
                <td width="60">
                    <input name="Submit2" type="button" class="btn" value="修改" onclick="window.location='articles_save.php?ID=<?php echo $row['ID']?>&page=<?php echo $page?>&c=<?php echo $c?>'" /></td>
                <td width="60">
                    <input name="Submit2" type="button" class="btn" value="删除" onclick="if(confirm('确定删除？')){window.location='?del=<?php echo $row['ID']?>&page=<?php echo $page?>&c=<?php echo $c?>';}" /></td>
            </tr>
            <?php
        }
        ?>
        <tr class=line>
            <td colspan="4" align="center"><?php echo $pager->pageAll;?></td>
        </tr>
    </table>
</div>
<?php include("version.php")?>
