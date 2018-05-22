<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=gbk">
</head>
<link href="admin.css" rel="stylesheet" type="text/css">
<style>
    .frameTop{
        background: url('images/top_bg.png') top left no-repeat;
        background-color:#cfe2f6;
        height: 45px;
        min-width: 610px;
        width: 100%;
        margin: 0 auto;
    }
    .topLogo{
        float:left;
        height:45px;
        width:280px;
        background-image: url(images/logo.gif);
        background-repeat: no-repeat;
        background-position: left top;
    }
    .nav{
        padding-top: 10px;
        float: right;
    }
    .nav a:link,
    .nav a:visited,
    .nav a:active,
    .nav a:hover{
        float: left;
        display: block;
        padding: 6px 8px;
        margin: 0px 5px 0px 0px;
        color: #333;
        text-decoration: none;
    }
    .nav a:hover{
        color: white;
        background: #8cd6ff;
    }
    .navPanel{
        background: #8cd6ff url('images/menu.png') top left repeat-x;
        line-height: 200%;
        border-top:1px #8cd6ff solid;
    }
    .innerNavPanel {
        margin: 0 auto;
        width: 800px;
    }
    .topButtons{
        line-height: 200%;
        white-space: nowrap;
        width: 100%; /* ie6 fix */
        overflow: hidden;
        border-left: 1px solid #8cd6ff;
    }
    .topButtons a:link,
    .topButtons a:active,
    .topButtons a:visited,
    .topButtons a:hover
    {
        float: left;
        display: block;
        padding: 4px 20px;
        color: #333;
        font-size:12px;
        text-decoration: none;
        border-right: 1px solid #8cd6ff;
        border-left: 1px solid #fff;
        background: #F4FBE1 url('images/bg_btn.png');
    }
    .navActive{
        color: #395500;
        background: #8cd6ff url('images/bg_btn_hover.png') top left repeat-x;
    }
    .topButtons a:hover
    {
        color: #395500;
        background: #8cd6ff url('images/bg_btn_hover.png') top left repeat-x;
    }
    .topImage {
        float:right;
        padding:5px 8px 5px 0;
        cursor:pointer
    }
</style>
<div class="frameTop">
    <div class="topLogo"></div>
    <div class="nav">
        <a href="../" title="站点首页" target="_blank">站点首页</a>
        <a href="login.php?ac=logout" title="Login out" target="_parent" onclick="return loginOut();">退出登录</a>
    </div>

</div>
<div class="navPanel">
    <div class="innerNavPanel">
        <div class="topButtons">
            <a href="./" target="_top">管理首页</a>
            <a href="left.php?m=site" target="leftFrame">网站相关</a>
            <a href="left.php?m=artiles" target="leftFrame">文章管理</a>
            <a href="left.php?m=user" target="leftFrame">会员管理</a>
            <a href="left.php?m=1" target="leftFrame">待添加栏目一</a>
            <a href="left.php?m=2" target="leftFrame">待添加栏目二</a>
            <a href="left.php?m=3" target="leftFrame">待添加栏目三</a>
        </div>

    </div>

</div>

<script language="JavaScript">
    function loginOut() {
        var msg = confirm("确定要退出系统吗？")
        if (!msg){
            return false;
        }
    }
</script>
</html>