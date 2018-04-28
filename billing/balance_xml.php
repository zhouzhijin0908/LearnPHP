<?php
	/**
	 * 根据用户uid查询用户余额
	 * 并将结果生成XML格式以便调用
	 * @uid:用户身份id
	 *
	 * @返回:
	 * -1:uid不存在
	 * -2:数据库连接错误
	 * -3:uid创建出错
	 * -4:输入非法字符,没有获得uid的值
	 * -0:空
	 * 0:成功
	 *
	 */
	//数据库配置文件
	require_once(dirname(__FILE__)."/inc/inc.read.dbconfig.php");
	//函数库文件
	require_once(dirname(__FILE__)."/include/include.functions.php");
	//需要安全性的判断比如:ipcheck
	/*
		if (!ipcheck())
	{
		//echo "-8\n"; //ip认证错误
		exit;
	}
	*/
	//获得当前用户的uid
	$uids=var_process('get','uid');
	$mysql = mysql_connect($mysqlconf["host"], $mysqlconf["user"], $mysqlconf["pass"]);
	if (!empty($mysql)){
		mysql_select_db($mysqlconf["db"], $mysql);
		}else{
		mysql_close($mysql);
		die("-2\n");
	}
//判断uid是否存在
if($uids){
	//判断输入的uid是否为纯数字
	if(is_numeric($uids)){
		$Surplus=Surplus($uids,$mysql);//当前用户剩余的货币数量
		echo "0\n".$Surplus;
		//序列化数组,返回正确值.
		}else{
		echo "-1\n"; //uid不存在.
		exit;
	}
}
//生成XML文档
echo " <xml id=\"tt\">";   
echo "<?xml version=\"1.0\" encoding=\"gb2312\"?>";
echo "<ttl>".$Surplus."</ttl>";
echo "</xml>";
?>