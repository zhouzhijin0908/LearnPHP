<html>
<head>
<title>form demo</title>
<script language="javascript">
<!--
function check()
{
	if (document.form1.username.value=="")
	{
		alert("对不起，您没有输入您的姓名");
		document.form1.username.focus();
		return false;
	}
}
-->
</script>
</head>
<body>
<form name="form1" method="post" action="form_process.php" onsubmit="return check()">
用户账号：<input type="text" name="username" value="{|$username|}" size="30"/><br/>
密码：<input type="password" name="password" size="30"/><br/>
<input type="submit" name="submit" value="提交"/><br/>
</form>
</body>
</html>