<html>
<head>
<title>form demo</title>
<script language="javascript">
<!--
function check()
{
	if (document.form1.username.value=="")
	{
		alert("�Բ�����û��������������");
		document.form1.username.focus();
		return false;
	}
}
-->
</script>
</head>
<body>
<form name="form1" method="post" action="form_process.php" onsubmit="return check()">
�û��˺ţ�<input type="text" name="username" value="{|$username|}" size="30"/><br/>
���룺<input type="password" name="password" size="30"/><br/>
<input type="submit" name="submit" value="�ύ"/><br/>
</form>
</body>
</html>