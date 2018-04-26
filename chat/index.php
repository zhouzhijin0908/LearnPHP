<?php
session_start();
if(!empty($_POST['nickname'])and !empty($_POST['topic'])){
	//创建当前回话者全局变量
	$_SESSION['user']=$_POST['nickname']; 
	$_SESSION['topic']=$_POST['topic']; 
	//var_dump ($_SESSION['user']);
	//var_dump ($_SESSION['topic']);
		if(!empty($_SESSION['user'])){
			header("Location: http://".$_SERVER['HTTP_HOST']
                       . rtrim(dirname($_SERVER['PHP_SELF']), '/\\')
                      ."/"."main.php");
			}else{
			echo '<script type="text/javascript">alert(\'请正确输入昵称\')</script>';
			exit;
		}
	}else{
		// 这种方法是将原来注册的某个变量销毁
		unset($_SESSION['user']);
		// 这种方法是销毁整个 Session 文件
		session_destroy();
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>聊天室引导页面</title>
</head>
<body>
<form action="#" method="POST" name="f1">
	<center>
		<h1>
			<font color=blue>欢迎进入PHP聊天室</font>
		</h1>
			<div>请填写昵称：
	  <input type="text" name='nickname'></div>
			<div>请选择聊天主题：
			<select name="topic">
				<option value=""></option>
				<option value='金融聚焦'>金融聚焦</option>
				<option value='股市风云'>股市风云</option>
				<option value='保险基金'>保险基金</option>
				<option value='精英理财'>精英理财</option>	
				<option value='都市情感'>都市情感</option>			
			</select>
			<input type="submit" value="进入聊天室" /></div>
	</center>
	</form>
</body>
</html>
