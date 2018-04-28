<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>粉丝网·电影频道</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/movie.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('images/nav/movie2.gif','images/nav/ftv2.gif','images/nav/music2.gif','images/nav/ent2.gif','images/nav/sport2.gif','images/nav/vogue2.gif')">
<div id="head">
  <div id="top"><a href="#">粉丝首页</a> <a href="#" class="aTopOn">资讯</a> <a href="#">排行榜</a> <a href="#">FTV</a> <a href="#">博客</a> <a href="#">论坛</a> <a href="#">俱乐部</a></div>
  <div class="box">
    <div id="banner"><a href="#"><img src="images/nav/movie1.gif" width="100" height="50" border="0" id="Image1" onmouseover="MM_swapImage('Image1','','images/nav/movie2.gif',1)" onmouseout="MM_swapImgRestore()" /></a><a href="#"><img src="images/nav/ftv1.gif" width="100" height="50" border="0" id="Image2" onmouseover="MM_swapImage('Image2','','images/nav/ftv2.gif',1)" onmouseout="MM_swapImgRestore()" /></a><a href="#"><img src="images/nav/music1.gif" width="100" height="50" border="0" id="Image3" onmouseover="MM_swapImage('Image3','','images/nav/music2.gif',1)" onmouseout="MM_swapImgRestore()" /></a><a href="#"><img src="images/nav/ent1.gif" width="100" height="50" border="0" id="Image4" onmouseover="MM_swapImage('Image4','','images/nav/ent2.gif',1)" onmouseout="MM_swapImgRestore()" /></a><a href="#"><img src="images/nav/sport1.gif" width="100" height="50" border="0" id="Image5" onmouseover="MM_swapImage('Image5','','images/nav/sport2.gif',1)" onmouseout="MM_swapImgRestore()" /></a><a href="#"><img src="images/nav/vogue1.gif" width="100" height="50" border="0" id="Image6" onmouseover="MM_swapImage('Image6','','images/nav/vogue2.gif',1)" onmouseout="MM_swapImgRestore()" /></a></div>
    <div id="logo"><img src="images/nav/logo.gif" width="96" height="50" /></div>
  </div>
  <div id="nav">
    <div><a href="#">资讯首页</a></div>
    <div id="navOn"><a href="#">电影</a></div>
    <div><a href="#">音乐</a></div>
    <div><a href="#">明星</a></div>
    <div><a href="#">时尚</a></div>
    <div><a href="#">体育</a></div>
  </div>
</div>
<div id="nel">
	<a href="#" class="aNelHome">电影首页</a><a href="#">新片</a><a href="#" class="aNelOn">现场</a> <a href="#">碟报</a> <a href="#">影星</a> <a href="#">影评</a> <a href="#">影库</a> <a href="#">专题</a> <a href="#">社区</a> <a href="#">周刊</a></div>
<div class="ad"><a href="#" target="_blank"><img src="images/ads/ad4.jpg" border="0" /></a></div>
<div id="path">
	<a href="#">粉丝首页</a> &raquo; <a href="#">资讯</a> &raquo; <a href="#">电影</a> &raquo; <a href="#">现场</a>
</div>
<div class="main">
	<div class="channel">
		<div class="ti5">现场快讯</div>
		
		<div class="text E14">
			{|section name=movie loop=$list|}
		  <div class="Qi">
				<div class="tia2">{|$list[movie].author|}</div>
				<div class="tia1 E14"><a href="#" target="_blank">{|$list[movie].title|}</a><span class="posttime">[11.12.]</span></div>
		  {|/section|}
		  </div>
		
	  </div>
		<div class="page">
			<form id="form1" name="form1" method="post" action="">
			共 66 篇文章  <a href="#">首页</a> <a href="#">上一页</a> <a href="#">下一页</a> <a href="#">尾页</a> 页次：1/3页  24篇文章/页 转到：第<select name="select">
			    <option value="1">1</option>
			    <option value="2">2</option>
			    <option value="3">3</option>
		      </select>页
		  	</form>
	  </div>
	</div>
	<div class="facex">
		<div class="ti3">栏目焦点</div>
		<div class="text">
			<div class="jd2">
				<a class="Boo" href="#" target="_blank">焦点标题</a><br />
				说明文字说明文字说明文字说明文字
		  </div>
			<div class="jd1">
		  		<a href="#"><img src="images/face/10.jpg" width="80" height="64" border="0" align="left" /></a>
		  </div>
		</div>
		<div class="text3 Qi">
			<div class="jd2">
				<a class="Boo" href="#" target="_blank">焦点标题</a><br />
				说明文字说明文字说明文字说明文字
		  </div>
			<div class="jd1">
		  		<a href="#"><img src="images/face/09.jpg" width="80" height="64" border="0" align="left" /></a>
			</div>
		</div>
	</div>
	<div class="facex">
		<div class="ti3">历史专题索引</div>
		<div class="text">
			<ul class="tt3">
				<li><a href="#" target="_blank">以往专题剽一百万</a></li>
				<li><a href="#" target="_blank">以往专题剽一百万</a></li>
				<li><a href="#" target="_blank">以往专题剽一百万</a></li>
				<li><a href="#" target="_blank">以往专题剽一百万</a></li>
		  </ul>
		</div>
	</div>
</div>
<div id="foot">
	<div id="copyright">
		版权所有 粉丝网 京ICP证03432745号<br />
		关于我们 | 联系我们 | 网站地图 | 版权声明 | 广告服务 | 注册粉丝 | 粉丝热线
	</div>
	<div id="minilogo">
		<img src="images/minilogo.gif" alt="粉丝网" width="88" height="31" />
	</div>
</div>
</body>
</html>
