<?php
	session_start();//获得设定的session全局变量
	//var_dump ($_SESSION['user']);
	//var_dump ($_SESSION['topic']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑发送信息页面</title>
</head>
	<body bgcolor="#0066FF">
		<form action="say.php" method=post>
			<table border=0 width=100%>
				<tr>
					<td  width="64">昵称：</td>
					<td width="92">
						<input type=text name=chatuser size=8 value="<?php echo $_SESSION['user'];?>">
					</td>
					<td align=center  width="32" >说：</td>
					<td width="364" >
						<input type=text name=chattext size=30 maxlength=500>
					</td>
				<!--发送语言或者动作信息-->
				  	<td>
				  		<input type=submit value="送出">
					</td>
				<tr>
					<td><br></td>
				<!--让网友选择发言类型是动作还是语言-->
				  <td width="92">
				  	<input type="Radio" name=behavior value="say" checked>
				   </td>
					<td width="32">表情</td>
				<!--让网友选择发言的表情-->
					<td>
					<select name=emote>
				<!--注意要保留一个表情选项为空，不是不带任何表情-->
							<option>
							<option>傻呆呆地
							<option>惊奇地
							<option>笑咪咪地
							<option>吞吞吐吐地
							<option>愤怒地
							<option>语重心长地
							<option>迷惑地
							<option>双手抱拳讨好地
						</select>
				<tr>
					<td><br></td>
				  <td width="92" >
				  	<input type="Radio" name=behavior value="act">
				  </td>
					<td width="32">动作</td>
					<td colspan="3" >
					<select name=action>
				<!--让网友选择聊天的动作-->
							<option>双手抱拳，作个揖道：各位朋友请了！
							<option>开始认真考虑
							<option>挺起胸膛，大声喊道：让我来说！
							<option>摇了摇头，叹道：还不明白 
							<option>板着脸，咬着牙说：不！我怎么这么笨！
							<option>凄婉地说道：看来，我还得再看看书！
							<option>大声叫嚷：你们都干吗呀？这么安静，怎么都没人和我聊天？真没劲！
							<option>快乐地唱道：我明白了！
							<option>叹了口气，说道：还得努力！
							<option>深深地叹了口气
					</select>
			</table>
		</form> 
	</body>
</html>
<?  
//保存发言信息或动作到信息数据库
//实现判断发言类型
	if($behavior=="say")
	{
		if(($chatuser!="") and ($chattext!=""))
		{	
		//建立与SQL数据库的连接
			$connection=@mysql_connect("104.194.90.89:3306", "root", "root") or die("无法连接数据库！");
			@mysql_query("set names 'utf-8'");
			@mysql_select_db("chatroom") or die("无法选择数据库！");
			//插入发言信息
			$query="INSERT INTO text(chatname,chattype,chattime, chatemote, chattext)"; 
			$query.=" VALUES ('$chatuser','$behavior',time(),'$emote','$chattext')";
			$result=@mysql_query($query,$connection) or die("存入数据库失败！");
			mysql_close($connection) or  die("关闭数据库失败！");
		}
	}
	if($behavior=="act")
	{
		if($chatuser!="") 
		{	
		//建立与SQL数据库的连接
			$connection=@mysql_connect("104.194.90.89:3306", "root", "root") or die("无法连接数据库！");
			@mysql_query("set names 'utf-8'");
			@mysql_select_db("chatroom") or die("无法选择数据库！");
		//插入发言信息
			$query="INSERT INTO text (chatname,chattype,chattime,chattext,chataction)";
			$query=$query." VALUES ('$chatuser','$behavior',time(),'$chattext','$action')";
			//echo $query;
			$result=@mysql_query($query,$connection) or die("存入数据库失败！");
			mysql_close($connection) or  die("关闭数据库失败！");
		}
	}
?>