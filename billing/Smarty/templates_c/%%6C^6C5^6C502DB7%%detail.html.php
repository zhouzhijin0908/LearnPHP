<?php /* Smarty version 2.6.10, created on 2010-06-17 13:47:24
         compiled from ./detail.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>粉丝网- 宝贝商城 我要充值－定单详细清单</title>
<meta name="keywords" content=" 我要充值－定单详细清单" />
<meta name="description" content="我要充值－定单详细清单" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="Housecenter">
	<div id="HouseGiveto">
		<div class="Waretop">
			<span><img src="img/wptopr.gif" /></span>
			<img src="img/wptopl.gif" />
		</div>
	<div class="Waretopd">
		<div class="Waretopdw">我要充值－定单详细清单</div> 
	  </div>
  			<div class="Warecnt HouseGiveIn">
				<div class="myLeftlist">订单号：<?php echo $this->_tpl_vars['List']['order_id']; ?>
 [<span><?php echo $this->_tpl_vars['List']['status']; ?>
</span>]　交易时间：<?php echo $this->_tpl_vars['List']['createtime']; ?>
　<br/>充值额：
					<span class="STYLE1"><?php echo $this->_tpl_vars['List']['score']; ?>
</span>
				</div>
			</div>
	</div>
</div>
</body>
</html>