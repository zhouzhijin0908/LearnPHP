<?php
	session_start();
	//var_dump ($_SESSION['topic']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>显示全部信息页面</title>
<!-- 每隔10秒就刷新一次本页面-->
	<META http-equiv="Refresh" content="10;url=show.php">
	<META content="text/HTML;charset=utf-8" http-equiv=Content-type>
	<BODY>
	<strong>
		<font color=blue>当前主题为：<?php echo $_SESSION['topic'];?></font>
	</strong><br>
<?php    
		//建立与SQL数据库的连接
		$connection=@mysql_connect("104.194.90.89:3306", "root", "root") or die("无法连接数据库！");
		@mysql_query("set names 'utf-8'");
		@mysql_select_db("chatroom") or die("无法选择数据库！");
		//向数据库发送查询请求
		$query="SELECT * FROM text "; 
		$result=@mysql_query($query,$connection) or die("浏览失败！");
		//读取记录数据,分类保存
		$count=0;
		while($row=mysql_fetch_array($result))
		{
			//保存共有信息
			$gb[$count][serial]=$row[serial]; 
			$gb[$count][name]=$row[chatname]; 
			$gb[$count][type]=$row[chattype]; 
			$gb[$count][time]=$row[chattime];
			//根据发言类型,保存不同的信息
			if( $gb[$count][type]=="say")
			{
				$gb[$count][emote]=$row[chatemote]; 
				$gb[$count][text]=$row[chattext];
			}
			if( $gb[$count][type]=="act")
			{
				$gb[$count][action]=$row[chataction]; 
			}
			$count++;
		}
		mysql_close($connection) or  die("关闭数据库失败！");
		//输出发言信息
		for($i=$count-1;$i>=0;$i--)    //MARK2
		{
		//根据发言类型输出相应的方法信息
			$chatstring=null;
			$chatstring.=$gb[$i][time];
			$chatstring.="<strong>   ".$gb[$i][name]."  </strong>";
		//把各字段信息连接字符串输出
			if ($gb[$i][type]=="say")
			{
				$chatstring.="  ";
				$tempemote=$gb[$i][emote];
				$chatstring.="<font color=Maroon>  ".$tempemote."</font>";
				$chatstring.="说：";
				$chatstring.=$gb[$i][text];
			}
			if ($gb[$i][type]=="act")
			{		
				$chatstring.="::";
				$chatstring=$chatstring.$gb[$i][action];
			}
			echo "$chatstring<br>";
		}
	?>
</BODY>
</HTML>
