
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gbk" />
</head>
<link href="admin.css" rel="stylesheet" type="text/css" />

<style type="text/css">
    .Layer1 {
        position:absolute;
        left:291px;
        top:52px;
        width:248px;
        height:93px;
        z-index:10;
    }
    .leftmenu td,.leftmenu2 td{
        height:30px;
        color:#333333;
        padding-left:30px;
        background-repeat:no-repeat;
        cursor:pointer;
    }
    .leftmenu td{
        background-image:url(images/bg_menu.png);
    }
    .leftmenu2 td{
        background-image:url(images/bg_menu2.png);
    }
    .leftH td {
        color:#333;
        padding:2px 0px 3px 20px;
        text-align: left;color:#000000;
        font-size:14px;
        height:30px;
        background-image:url(images/bg_head.gif);
        font-weight:bold;
    }
    a:link {
        color: #333333;
        text-decoration: none;
    }
    a:visited {
        text-decoration: none;
        color: #333333;
    }
    a:hover {
        text-decoration: none;
        color: #333333;
    }
    a:active {
        text-decoration: none;
        color: #333333;
    }
</style>
<div class="m"></div>
<div id="menus" style="margin:0 5px 0 5px; width:170px;">

    <div class="t" style="display:none" id="default">
        <table border="0" cellspacing="0" cellpadding="0" width=100%>
            <tr class="leftH">
                <td>常用操作</td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="left.php?m=artiles">文章管理</a></td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="left.php?m=user">会员专区</a></td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="left.php?m=report">研发报告</a></td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="login.php?ac=logout">退出登录</a></td>
            </tr>
        </table>
    </div>
    <div class="t" style="display:none" id="site">
        <table border="0" cellspacing="0" cellpadding="0" width=100%>
            <tr class="leftH">
                <td>网站相关</td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="site.php?t=关于我们" target="mainFrame">关于我们</a></td>
            </tr>
            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="service.php" target="mainFrame">联系方式</a></td>
            </tr>
            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="links.php" target="mainFrame">友情连接</a></td>
            </tr>
            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="links_save.php" target="mainFrame">新增连接</a></td>
            </tr>
            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="pwd.php" target="mainFrame">修改密码</a></td>
            </tr>
            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="login.php?ac=logout" target="_top">退出登录</a></td>
            </tr>
        </table>
    </div>
    <div class="t" style="display:none" id="user">
        <table border="0" cellspacing="0" cellpadding="0" width=100%>
            <tr class="leftH">
                <td>会员专区</td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="site.php?t=开户指南" target="mainFrame">开户指南</a></td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="site.php?t=操作建议" target="mainFrame">操作建议</a></td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="users.php" target="mainFrame">会员列表</a></td>
            </tr>
            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="site.php?t=会员注册协议" target="mainFrame">会员注册协议</a></td>
            </tr>
            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="site.php?t=会员业务介绍" target="mainFrame">会员业务介绍</a></td>
            </tr>
            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="soft.php" target="mainFrame">会员下载</a></td>
            </tr>
            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="soft_save.php" target="mainFrame">新增下载</a></td>
            </tr>
            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="articles.php?c=6" target="mainFrame">会员文章</a></td>
            </tr>
            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="articles_save.php?c=6" target="mainFrame">新增会员文章</a></td>
            </tr>
        </table>
    </div>
    <div class="t" style="display:none" id="artiles">
        <table border="0" cellspacing="0" cellpadding="0" width=100%>
            <tr class="leftH">
                <td>文章管理</td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="articles.php?c=1" target="mainFrame">黄金知识列表</a></td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="articles_save.php?c=1" target="mainFrame">新增黄金知识</a></td>
            </tr>
            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="articles.php?c=2" target="mainFrame">黄金评论列表</a></td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="articles_save.php?c=2" target="mainFrame">新增黄金评论</a></td>
            </tr>
            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="articles.php?c=3" target="mainFrame">财经时事列表</a></td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="articles_save.php?c=3" target="mainFrame">新增财经时事</a></td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="spiders.php" target="mainFrame">采集器管理</a></td>
            </tr>
            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="spiders_save.php" target="mainFrame">新增采集器</a></td>
            </tr>
        </table>
    </div>
    <div class="t" style="display:none" id="product">
        <table border="0" cellspacing="0" cellpadding="0" width=100%>
            <tr class="leftH">
                <td>产品介绍</td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="site.php?t=AuT_D" target="mainFrame">AuT+D</a></td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="site.php?t=黄金期权" target="mainFrame">黄金期权</a></td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="site.php?t=纸黄金" target="mainFrame">纸黄金</a></td>
            </tr>
        </table>
    </div>
    <div class="t" style="display:none" id="report">
        <table border="0" cellspacing="0" cellpadding="0" width=100%>
            <tr class="leftH">
                <td>研发报告</td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="articles.php?c=4" target="mainFrame">研发报告列表</a></td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="articles.php?c=4" target="mainFrame">新增研发报告</a></td>
            </tr>
        </table>
    </div>
    <div class="t" style="display:none" id="union">
        <table border="0" cellspacing="0" cellpadding="0" width=100%>
            <tr class="leftH">
                <td>业内协会</td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="articles.php?c=5" target="mainFrame">所有协会</a></td>
            </tr>

            <tr class="leftmenu" onmouseover="changeBg(this,1);" onmouseout="changeBg(this,0);">
                <td><a href="articles_save.php?c=5" target="mainFrame">新增协会</a></td>
            </tr>
        </table>
    </div>
</div>

<script language="javascript">
    function changeBg(obj,value){
        if(value==1)
            var c = 'leftmenu2';
        else
            var c = 'leftmenu';
        //alert(obj+value);
        obj.className=c;
    }
    <?php
    $m = 'default';
    if($_GET['m'])
        $m = $_GET['m'];
    ?>
    document.getElementById('<?php echo $m?>').style.display = 'block';
</script>
