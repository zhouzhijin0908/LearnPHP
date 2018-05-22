<?php
include('../init.inc.php');
$c = $_GET['c'] ? $_GET['c'] : $_POST['c'];

switch($c){
    case 1:
        $cname = "黄金知识";
        break;
    case 2:
        $cname = "资金评论";
        break;
    case 3:
        $cname = "财经时事";
        break;
    case 4:
        $cname = "研发报告";
        break;
    case 5:
        $cname = "业内协会";
        break;
    case 6:
        $cname = "会员文章";
        break;
}

usdb('articles');
//uslib('FCKeditor/fckeditor');
uslib('SinaEditor/sinaEditor.class');


if($_POST){
    if($thisID = $_POST['ID'])
        //更新指定文章的内容
        $articles->update($_POST);
    else
        //新增文章操作(插入数据)
        $thisID=$articles->add($_POST);

    header("location:articles.php?page=$_POST[page]&c=$c");
}
$row = $articles->getVar($_GET['ID']);
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gbk" />
</head>
<link href="admin.css" rel="stylesheet" type="text/css" />

<base target="mainFrame">
<div class="m"></div>
<div class="t">
    <table align=center cellspacing=0 cellpadding=0>
        <form method="post">
            <input type="hidden" name="ID" value="<?php echo $row['ID']?>" />
            <input type="hidden" name="Category" value="<?php echo $c?>" />
            <input type="hidden" name="page" value="<?php echo $_GET['page']?>" />
            <tr class=head>
                <td colspan="2"><?php echo $cname?></td>
            </tr>
            <tr class=line>
                <td width="9%">标题</td>
                <td width="91%"><input name="Title" type="text" class="input" id="Title" size="70" value="<?php echo $row['Title']?>" /></td>
            </tr>
            <tr class=line>
                <td valign="top">内容</td>
                <td>
                    <?php
                    $fck = new sinaEditor('Content');
                    $fck->BasePath	= '../libs/SinaEditor/' ;
                    $fck->Value		= $row['Content'] ;
                    $fck->Width = "100%";
                    $fck->Height = 300;
                    $fck->Create() ;
                    ?>
                </td>
            </tr>
            <tr class=line>
                <td colspan="2" align="center"><input name="Submit" type="submit" class="btn" value="提交" /> <input name="Submit" type="button" class="btn" value="返回" onclick="history.go(-1);" /></td>
            </tr>
        </form>
    </table>
</div>
<?php include("version.php")?>