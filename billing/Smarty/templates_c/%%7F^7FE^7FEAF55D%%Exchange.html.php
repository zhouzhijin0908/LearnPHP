<?php /* Smarty version 2.6.10, created on 2010-06-16 13:29:22
         compiled from ./Exchange.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>粉丝网- 宝贝商城 小屋用 物品选购 赠送</title>
<meta name="keywords" content=" 宝贝商城 小屋用 物品选购 赠送" />
<meta name="description" content="粉丝网- 宝贝商城 小屋用 物品选购 赠送·你就是明星！" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script language="JavaScript">
function InitRequest()
{
  var C_req = null;

  try
  {
	C_req = new ActiveXObject("Msxml2.XMLHTTP");
  }catch(e)
    {try
	  {
		C_req = new ActiveXObject("Microsoft.XMLHTTP");
	   }catch(oc)
	     {
			 C_req = null;
		 }
	   }

  if (!C_req && typeof XMLHttpRequest != "undefined")  
  {
	 try{C_req = new XMLHttpRequest();
  }catch(fa)
   {
	   alert("对不起，浏览器不支持该功能，请使用ie6.0以上版本的浏览器!");
	   C_req = null;
	}
  }
  return C_req;
}


//发送url，返回数据
function PostRequest(url,data)
{
	var AjaxRequestObj = InitRequest();
    if (AjaxRequestObj != null)
	{AjaxRequestObj.onreadystatechange = function ()
	  {
		 if (AjaxRequestObj.readyState == 4 && AjaxRequestObj.responseText)
	    {
	    	  //window.alert(AjaxRequestObj.responseText);
			  ProcessAjaxData(AjaxRequestObj.responseText);
			
		}
	  };
	  AjaxRequestObj.open("POST",url,true);
	  AjaxRequestObj.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	  AjaxRequestObj.send(data);
	}
}

//获得文件内容
//loadXml 为xml格式
function loadXml(url){
var loXML = new ActiveXObject("MSXML.DOMDocument");
loXML.async = false;
loXML.load(url);
//var tt=loXML.xml;
//alert (tt);
  var ox=loXML.getElementsByTagName("ttl")[0].firstChild.data;
  //alert(ox);//即是剩余的金粉笔数量
  return ox;  
}
</script>

<script>

		  function Exchange(){
		  	var oo=document.getElementById("ttt").value;//取得用户的输入值(金粉笔数)
			//var fx_url='http://api.ifensi.com/balance.php?uid=121';
			var pattern=/^([0-9]{1,2}|1[0-7][0-9]|100)$/; //正则匹配输入数字范围(0~100) 
			var ox = loadXml('http://profile.ifensi.com/bill/balance_xml.php'); //获得剩余粉笔数	
			var shuru=document.getElementById("ttt").value;//输入值
			var decrease= ox-shuru;//计算本次交易的余额(负数将不能执行本次交易)
			var data ;
			//var score='111';
			var score=shuru;
			var url="http://profile.ifensi.com/bill/api.php?score="+score;//积分兑换地址
			//alert (url);
			//alert (ox);
			//alert (shuru);
			//alert (decrease);
			

		  	 if (pattern.test(oo)){
		   			alert ('输入正确');
				if (decrease>0){//保证余额充足
					var kk=PostRequest(url,data);
					//alert (kk);
					alert ('恭喜!充值成功');
					//执行充值的php程序
					
					
					 				
				}else{
					alert ('余额不足:(');
				}
			}else{
					alert ('请输入正确的数字');
			}
		 
		  }

</script>


</head>
<body>
<div id="Housecenter">
<div id="HouseGiveto">
<div class="Waretop"><span><img src="img/wptopr.gif" /></span><img src="img/wptopl.gif" /></div>
<div class="Waretopd">
  <div class="Waretopdw">金粉笔换白粉笔</div> 
  </div>
  <div class="Warecnt Exchange">
  <div class="Extop">您的账户余额是：<?php echo $this->_tpl_vars['getGlobalScore']; ?>
白粉笔　　<?php echo $this->_tpl_vars['Surplus']; ?>
 金粉笔</div>
	<div class="Exbackground">
  我要用
    <input type="text" name="ttt" onchange='document.getElementById("textfield2").value=100*parseFloat(this.value);'class="ExchangeI"/>    
    <a href="#">金</a>粉笔 <img src="img/wpfbj.gif" width="5" height="14" /><span>　换　</span>
    <input type="text" name="textfield2" value="0" class="ExchangeI"/>
    白粉笔 <img src="img/wpfb.gif" width="5" height="14" /></div>
  <div class="Extop">
    <input type="submit" style=" font-weight:bold;" onclick="Exchange()" name="Submit" value="我要换" class="LeftTexttwo" />
    　　
    <input type="submit" style=" font-weight:bold;" name="Submit2"  onclick="ttt.select();document.execCommand('Delete');"    value="不换了" class="LeftTexttwo" />
  </div>
 
  <div class="ExPoint">
    <div class="ExPointR">
	<p><span style="font-weight:bold;">温馨提示：</span>　　　 　　　　　一元人民币=1<span>金</span>粉笔</p>
	<p><span>此行为单向不可逆。</span> 　　一个<span>金</span>粉笔=100个白粉笔</p>
	</div>
	<div class="ExPointL">
	  <p><input type="submit" name="Submit3" value="【区别是？】" / class="SuccesB" style=" color:#804F41;"></p>
	  <p><input type="submit" name="Submit4" value="【如何赚取？】" / class="SuccesB" style=" color:#804F41;"></p>
	</div>
  </div>
  
  <div class="ExUlt"></div> 
  </div>
  </div>
<div id="footer"> Copyright  2006-2007 粉丝网 版权所有 京ICP证050820号 </div>
</div>
	
</body>
</html>