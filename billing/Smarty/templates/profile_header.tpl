<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http：//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http：//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>论坛个人资料页</title>
<link href="css/bbs.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function showdatetime()
{
	tmpDate = new Date();
	date = tmpDate.getDate();
	month= tmpDate.getMonth() + 1 ;
	year= tmpDate.getYear();
	week= tmpDate.getDay();
	if (week==0) week="<font color=#554638>星期日</font>";
	if (week==1) week="星期一";
	if (week==2) week="星期二";
	if (week==3) week="星期三";
	if (week==4) week="星期四";
	if (week==5) week="星期五";
	if (week==6) week="<font color=#554638>星期六</font>";
	week=week; 
	
	document.write(year+"年"+month+"月"+date+"日&nbsp;&nbsp;"+week+"&nbsp;&nbsp;");
}
</script>
</head>
<body>
   <table width="100%" border="0" cellpadding="10" cellspacing="0" class="Box2">
  <tr>
    <td width="50%" align="left"><h1>{|$loginname|}个人资料</h1></td>
    <td width="50%" align="right" valign="bottom"><br />
    <script language=javascript>showdatetime();</script>
    </td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="PostText">
  <tr>
    <td width="70%" class="PostText2 bbs_stat_ti Cred">
    <form id="form0" name="form1" method="post" action="profile_modify.php?uid={|$uid|}">
        个人资料:&nbsp&nbsp;&nbsp;<input alt="修改资料" type="{|$submit|}" src="images/pro_5.gif" width="80" height="19"/>
    </form>
    </td>
    <td width="30%" class="PostText3 bbs_stat_ti Cred">{|$loginname|}在论坛活动状况：</td>
  </tr>