<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http��//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http��//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��̳��������ҳ</title>
<link href="css/bbs.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function showdatetime()
{
	tmpDate = new Date();
	date = tmpDate.getDate();
	month= tmpDate.getMonth() + 1 ;
	year= tmpDate.getYear();
	week= tmpDate.getDay();
	if (week==0) week="<font color=#554638>������</font>";
	if (week==1) week="����һ";
	if (week==2) week="���ڶ�";
	if (week==3) week="������";
	if (week==4) week="������";
	if (week==5) week="������";
	if (week==6) week="<font color=#554638>������</font>";
	week=week; 
	
	document.write(year+"��"+month+"��"+date+"��&nbsp;&nbsp;"+week+"&nbsp;&nbsp;");
}
</script>
</head>
<body>
   <table width="100%" border="0" cellpadding="10" cellspacing="0" class="Box2">
  <tr>
    <td width="50%" align="left"><h1>{|$loginname|}��������</h1></td>
    <td width="50%" align="right" valign="bottom"><br />
    <script language=javascript>showdatetime();</script>
    </td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="PostText">
  <tr>
    <td width="70%" class="PostText2 bbs_stat_ti Cred">
    <form id="form0" name="form1" method="post" action="profile_modify.php?uid={|$uid|}">
        ��������:&nbsp&nbsp;&nbsp;<input alt="�޸�����" type="{|$submit|}" src="images/pro_5.gif" width="80" height="19"/>
    </form>
    </td>
    <td width="30%" class="PostText3 bbs_stat_ti Cred">{|$loginname|}����̳�״����</td>
  </tr>