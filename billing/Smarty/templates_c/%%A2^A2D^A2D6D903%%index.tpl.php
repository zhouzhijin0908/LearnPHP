<?php /* Smarty version 2.6.10, created on 2010-06-16 13:44:07
         compiled from ./index.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����-DIY</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href="style/header.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://www.ifensi.com/js.php"></script>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
//-->



</script>

<script>
if(window.name != "Bencalie"){
  //���ҳ��� name ���Բ���ָ�������ƾ�ˢ����
  location.reload();
  window.name = "Bencalie";
}
else{
  //���ҳ��� name ������ָ�������ƾ�ʲô�����������ⲻ�ϵ�ˢ��
  window.name = "";
}
</script>

<!--�������cut_image.css ������γ�Ч�����CSS-->
<link href="cut_image/cut_image.css" type=text/css rel=stylesheet>

<!--�������cut_image_view.js ������γ�Ч��Ԥ����JS  -->
<script language=javascript src="cut_image/cut_image_view.js" ></script>



<script type=text/Javascript>
<!--�����ֻ�������--Yachty-->
function checkMobileNum(num)
{
   	var pattern = /^13[0456789]\d{8}$/;
     var pattern1 =/^159\d{8}$/;
     if (pattern.test(num)||pattern1.test(num))
	 {
     showInfo ("eMag1", "������ȷ");
         //alert(num + " is OK");
		 return true;
     }
	 else
     {
	 	showInfo ("eMag1", "��������Ч���ƶ�����");
        // alert(num + " is Fault");
		//break;
		return false;
	 }	
}
function showInfo ( divName, err )
{
	if (err=="") err = "��";
	var space = document.getElementById(divName);
	space.innerHTML = "";
	space.innerHTML = err;
}	
	
	function check(form)
	{
		var phone = document.getElementById('phone');
	
			
			if(phone.value == '')
			{
				alert('����д�ֻ���');
				phone.focus();
				return false;
			}
			
			
			if (checkMobileNum(phone.value))
			{	
				
				//alert ('1');
				return true;
			}
			
			else {
			//alert ('2');
			
				return false;
			}
			//alert ('3');
		
	}
	
	function goto_save()
	{
		document.getElementById('operate').value="save";
		if(check("diy_form"))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function goto_diy()
	{
		document.getElementById('operate').value="diy";
		if(check("diy_form"))
    	{
			return true;
    	}
		else
		{
			return false;
		}
	}


</script>






</head>

<body >


<div id="header2" style="z-index:1000">
    <div id="headerBg2"> 
	     <div id="logo2"><a href="http://tuan.ifensi.com"><img src="style/logo_ifensi.jpg" alt="��˿����˿��" width="120" height="70" border=0 /></a></div>
	     <div id="siteNav2"><span></span><a href="http://www.ifensi.com">��˿����ҳ</a>|<a href="http://news.ifensi.com">��˿�ձ�</a>|<a href="http://photo.ifensi.com">ͼ��</a>|<a href="http://ftv.ifensi.com">FTV</a>|<a href="http://game.ifensi.com">��Ϸ</a>|<a href="http://groups.ifensi.com">���ֲ�</a>|<a href="http://blog.ifensi.com">����</a>|<a href="http://bbs.ifensi.com">��̳</a>|<a href="http://tuan.ifensi.com">��˿��</a>|<a href="http://fans.ifensi.com">��˿����</a>|<a onclick="window.external.addFavorite('http://www.ifensi.com','��˿������˿��')" href="javascript:;"><img src="style/shoucang.gif" alt="�ղر�ҳ" border=0 /> �ղ�</a></div>
		 
		 <DIV id=stat2>
<SCRIPT type=text/javascript>
			<!--
			var hh = null;
			function hide()
			{
			  hh = setTimeout("MM_showHideLayers('manageBox','','hide');", 500);
			}
			try {
			var code;
			if (userId > 0 && userName != '')
			{ code = '<span>'+userName+'</span>�� ���ã� ��ӭ����  <a href="http://pm.ifensi.com/?act=showbox&b=in"target="_blank"><img src="http://news.ifensi.com/images/'+photo_mail+'.gif" border=0 /></a>['+mail_num+']    <a href="javascript:void(0);" onmouseover="if(hh)clearTimeout(hh);MM_showHideLayers(\'manageBox\',\'\',\'show\')" onmouseout="hide();">��������</a><img src="http://news.ifensi.com/images/arrows.gif"/> |  <a href="http://blog.ifensi.com/myblog.php?ownerId='+userId+'" target="_blank">�����ҵĲ���</a> |  <a href="http://profile.ifensi.com/logout.php?backurl=http://mobile.ifensi.com/mms_diy/">�˳�</a><div id="manageBox" onmouseover="if(hh)clearTimeout(hh);" onmouseout="hide();"><div style="align:center"><a href="http://'+userId+'.blog.ifensi.com/admin.php?op=Dashboard" target="_blank">��־����</a></div><div><a href="http://'+userId+'.blog.ifensi.com/admin.php?op=photoResources" target="_blank">ͼƬ����</a></div><div><a href="http://'+userId+'.blog.ifensi.com/admin.php?op=audioResources" target="_blank">��Ƶ����</a></div><div><a href="http://'+userId+'.blog.ifensi.com/admin.php?op=videoResources" target="_blank">��Ƶ����</a></div><div><a href="http://profile.ifensi.com/profile.php?uid='+userId+'" target="_blank">�ط�˿��</a></div><div><a href="http://profile.ifensi.com/profile_modify.php?uid='+userId+'" target="_blank">�޸�����</a></div></div>'; }
			else
			{ code = '�οͣ����ã� ��ӭ���ٷ�˿��   <a href="javascript:void(0);" onclick="MM_showHideLayers(\'loginBox\',\'\',\'show\')">��¼</a> | <a href="http://www.ifensi.com/register_process.php?backurl=http://mobile.ifensi.com/mms_diy/">����ע��</a><div id="loginBox"><div></div><h3><a href="javascript:void(0);" onclick="MM_showHideLayers(\'loginBox\',\'\',\'hide\')"><img src="/style/end.jpg" alt="�ر�" / border="0"></a></h3><form id="formLogin" name="formLogin" method="post" action="http://www.ifensi.com/login.php"><div id="user">�û�����<input type="text" id="loginname" name="loginname" size="20" /></div><div id="psw">�ܡ��룺<input type="password" id="password" name="password" size="20" /></div><div id="ok"><input type="checkbox" id="splimit" name="splimit" value="2" checked="checked"> ��ס���� <input type="image" src="/style/button.jpg" border="0" /><input type="hidden" name="backurl" value="http://mobile.ifensi.com/mms_diy/" /></div></form></div>'; }
			document.write(code);
			}catch(e){}
			//-->
			</SCRIPT>
</DIV>
	</div>
</div>


<div id="header2">
    <div id="headerBg2"> 
	<div id="colorMessageMenu">
				<ul>
					<li><img src="style/colorMessageMenu01on.gif" alt="ѡ��DIYͼƬ" /></li>
					<li><img src="style/colorMessageMenu02.gif" alt="" /></li>
					<li><img src="style/colorMessageMenu03.gif" alt="DIY����" /></li>
					<li><img src="style/colorMessageMenu02.gif" alt="" /></li>
					<li><img src="style/colorMessageMenu05.gif" alt="���ؽ���" /></li>
					<li><img src="style/colorMessageMenu02.gif" alt="" /></li>
					<li><img src="style/colorMessageMenu04.gif" alt="���͸�����" /></li>
				</ul>
	</div>
	</div>
</div>
<form id=diy_form name=diy_form  action=cut_pic.php method=post encType=multipart/form-data ;>
<div id="amendImage">
	<div id="amendImageBg">
		<div id="amendImageL">
		  <div id="amendImageLBg1"></div>
			<div id="amendImageLBg">
				<div id="amendImageLBgImage">
					<div id=divCropMain>
						<div id=divCropBg><img id=imgCropBg style="FILTER: alpha(opacity:50)" src=""> </div>
						<div id=divCropOwner style="CLIP: rect(0px px 0px 0px)"><img id=imgCropOwner src="" ></div>
						<div id=divCrop>
							<div id=divCrop></div>
						</div>
					</div>
				</div>
			</div>
		<div id="amendImageLBg2"></div>
			
		</div>
		<div id="amendImageR">
			<div id="inputIfo">
				<h2></h2>
			
				<div class="handsetInformation">1����д�ֻ��ţ�<input name="phone" type="text" maxlength="11" onblur="javascript:checkMobileNum(this.value);"/>
				 ��				</div>
				<DIV class="handsetInformation" id=eMag1>��</DIV>
				<div class="handsetInformation">
					2����ѡ���ϴ�����ͼƬ��
					
				</div>
				<div class="handsetInformation">
					<input type="file" name="uploadimg" id="uploadimg" onchange="initimg(this.value);"  size=25 >
					<input type="hidden" name="uploadimgrect" id="uploadimgrect">
					<input type="hidden" name="photourl" id="uploadimgrect" value="<?php echo $this->_tpl_vars['photourl']; ?>
">
					<input type="hidden" name="operate" id="operate">
					<input type="hidden" name="allianceid" id="allianceid" value="<?php echo $this->_tpl_vars['allianceid']; ?>
">
				</div>
				<div class="handsetInformation">
					3������Ԥ����
					
				</div>
				<div class="handsetInformation isTextCenter"><div id=divResult><img id=imgResult src=""></div></div>
				<div class="handsetInformation">����˵�Ļ���<br>
				  <textarea name="content" rows="4"></textarea>
				</div>
				<div class="handsetInformation isTextCenter"><input type="image" src="style/but02.gif" alt="��ҪDIY" border="0" onclick=" return goto_diy()" width="88" height="34"/>��<input type="image" src="style/but03.gif" alt="���Ϸ���" border="0" onclick="return goto_save();"width="88" height="34"/></div>  

			</div>
		</div>
	</div>
</div>
</form>
<div id="footer">
  <div id="foot_cr1">
  <a href="http://www.ifensi.com/about/index.php" target="_blank">��˾���</a> | 
 <a href="http://www.ifensi.com/about/news.php" target="_blank">��˾��̬</a> | 
 <a href="http://www.ifensi.com/about/media.php" target="_blank">ý�屨��</a> |
 <a href="http://www.ifensi.com/about/tiaokuan.php" target="_blank">����Э��</a> |
 <a href="http://www.ifensi.com/about/mianze.php" target="_blank">��������</a> |
 <a href="http://www.ifensi.com/about/copyright.php" target="_blank">��Ȩ����</a> | 
 <a href="http://www.ifensi.com/" target="_blank">��汨��</a> | 
 <a href="http://www.ifensi.com/about/job.php" target="_blank">�˲���Ƹ</a><br />
Copyright &copy; 2005-2006  ��˿�� ��Ȩ����   ��ICP֤050820��
  </div>
</div>
<script language="javascript">

var yhb = "<?php echo $this->_tpl_vars['photourl']; ?>
";


</script>
			<!--�������cut_image.js ������γ��и�߿��JS ���ұ������Ч����ԭͼ���(div)����֮��-->
<script language="javascript" src="cut_image/cut_image.js"></script>

</body>
</html>

