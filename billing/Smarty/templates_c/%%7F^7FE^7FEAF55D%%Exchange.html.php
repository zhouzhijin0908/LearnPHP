<?php /* Smarty version 2.6.10, created on 2010-06-16 13:29:22
         compiled from ./Exchange.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��˿��- �����̳� С���� ��Ʒѡ�� ����</title>
<meta name="keywords" content=" �����̳� С���� ��Ʒѡ�� ����" />
<meta name="description" content="��˿��- �����̳� С���� ��Ʒѡ�� ���͡���������ǣ�" />
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
	   alert("�Բ����������֧�ָù��ܣ���ʹ��ie6.0���ϰ汾�������!");
	   C_req = null;
	}
  }
  return C_req;
}


//����url����������
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

//����ļ�����
//loadXml Ϊxml��ʽ
function loadXml(url){
var loXML = new ActiveXObject("MSXML.DOMDocument");
loXML.async = false;
loXML.load(url);
//var tt=loXML.xml;
//alert (tt);
  var ox=loXML.getElementsByTagName("ttl")[0].firstChild.data;
  //alert(ox);//����ʣ��Ľ�۱�����
  return ox;  
}
</script>

<script>

		  function Exchange(){
		  	var oo=document.getElementById("ttt").value;//ȡ���û�������ֵ(��۱���)
			//var fx_url='http://api.ifensi.com/balance.php?uid=121';
			var pattern=/^([0-9]{1,2}|1[0-7][0-9]|100)$/; //����ƥ���������ַ�Χ(0~100) 
			var ox = loadXml('http://profile.ifensi.com/bill/balance_xml.php'); //���ʣ��۱���	
			var shuru=document.getElementById("ttt").value;//����ֵ
			var decrease= ox-shuru;//���㱾�ν��׵����(����������ִ�б��ν���)
			var data ;
			//var score='111';
			var score=shuru;
			var url="http://profile.ifensi.com/bill/api.php?score="+score;//���ֶһ���ַ
			//alert (url);
			//alert (ox);
			//alert (shuru);
			//alert (decrease);
			

		  	 if (pattern.test(oo)){
		   			alert ('������ȷ');
				if (decrease>0){//��֤������
					var kk=PostRequest(url,data);
					//alert (kk);
					alert ('��ϲ!��ֵ�ɹ�');
					//ִ�г�ֵ��php����
					
					
					 				
				}else{
					alert ('����:(');
				}
			}else{
					alert ('��������ȷ������');
			}
		 
		  }

</script>


</head>
<body>
<div id="Housecenter">
<div id="HouseGiveto">
<div class="Waretop"><span><img src="img/wptopr.gif" /></span><img src="img/wptopl.gif" /></div>
<div class="Waretopd">
  <div class="Waretopdw">��۱ʻ��׷۱�</div> 
  </div>
  <div class="Warecnt Exchange">
  <div class="Extop">�����˻�����ǣ�<?php echo $this->_tpl_vars['getGlobalScore']; ?>
�׷۱ʡ���<?php echo $this->_tpl_vars['Surplus']; ?>
 ��۱�</div>
	<div class="Exbackground">
  ��Ҫ��
    <input type="text" name="ttt" onchange='document.getElementById("textfield2").value=100*parseFloat(this.value);'class="ExchangeI"/>    
    <a href="#">��</a>�۱� <img src="img/wpfbj.gif" width="5" height="14" /><span>������</span>
    <input type="text" name="textfield2" value="0" class="ExchangeI"/>
    �׷۱� <img src="img/wpfb.gif" width="5" height="14" /></div>
  <div class="Extop">
    <input type="submit" style=" font-weight:bold;" onclick="Exchange()" name="Submit" value="��Ҫ��" class="LeftTexttwo" />
    ����
    <input type="submit" style=" font-weight:bold;" name="Submit2"  onclick="ttt.select();document.execCommand('Delete');"    value="������" class="LeftTexttwo" />
  </div>
 
  <div class="ExPoint">
    <div class="ExPointR">
	<p><span style="font-weight:bold;">��ܰ��ʾ��</span>������ ����������һԪ�����=1<span>��</span>�۱�</p>
	<p><span>����Ϊ���򲻿��档</span> ����һ��<span>��</span>�۱�=100���׷۱�</p>
	</div>
	<div class="ExPointL">
	  <p><input type="submit" name="Submit3" value="�������ǣ���" / class="SuccesB" style=" color:#804F41;"></p>
	  <p><input type="submit" name="Submit4" value="�����׬ȡ����" / class="SuccesB" style=" color:#804F41;"></p>
	</div>
  </div>
  
  <div class="ExUlt"></div> 
  </div>
  </div>
<div id="footer"> Copyright  2006-2007 ��˿�� ��Ȩ���� ��ICP֤050820�� </div>
</div>
	
</body>
</html>