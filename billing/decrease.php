<?php
	//功能:扣减用户uid对应的帐户的金额
	//根据用户uid扣除当次消费的货币
 /**
	 * 根据用户uid查询用户余额
	 * @uid:用户身份id
	 *
	 * @返回:
	 * -1:增减财富的操作失败
	 * -2:输入信息不全
	 * -3:uid创建出错
	 * -4:输入非法字符,没有获得uid的值
	 * -0:空
	 * 0:成功
	 *
	 */
	//数据库配置文件
	require_once(dirname(__FILE__)."/inc/inc.read.dbconfig.php");
	//数据库配置文件
	require_once(dirname(__FILE__)."/include/include.functions.php");
	//创建数据库链接
	$mysql = mysql_connect($mysqlconf["host"], $mysqlconf["user"], $mysqlconf["pass"]);
	mysql_select_db($mysqlconf["db"], $mysql);
	//获得uid
	$uid=var_process('get','uid');
	//获得扣费金额
	$score=var_process('get','score');
	//扣费描述
	$desctext=var_process('get','desctext');
	if($uid&&$score&&$desctext){
		//生成当次交易记录的数组
		$record['uid']=$uid;
		//交易类型 0消费,1充值
		$record['transtype']='0';
		//金额
		$record['score']=$score;
		//交易描述
		$record['desctext']=$desctext;
		//如果记录交易数据成功会返回true失败返回false
		$Transaction_record=Transaction_record($record,$mysql);//对account_detail操作,记录当前交易记录
		if($Transaction_record=='true'){
			//增减财富的操作
			$decrease=decrease_num($uid,$score,$mysql);//对user_account表进行操作,扣减货币数量
			if($decrease=='true'){	
					//记录帐户操作的次数，便于核对
					$count=count_user_num($uid,$mysql);
					echo "0\n" .$score;
				}else{
				echo "-1\n";
			}
		}
	}else{
				echo "-2\n";
}
?>