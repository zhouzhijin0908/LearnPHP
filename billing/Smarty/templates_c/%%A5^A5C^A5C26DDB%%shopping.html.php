<?php /* Smarty version 2.6.10, created on 2008-01-04 02:38:32
         compiled from shopping.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�Ų�����ͼƬ������</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
<link href="font.css" rel="stylesheet" type="text/css" />
<script language ="JavaScript"> 
function del(ID,url,mes){ 
    var mymes;
    mymes=confirm(mes); 
    if(mymes==true){ 
        window.location=url+ID; 
    } 
}
</script>

</head>

<body>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="364"><img src="images/logo.gif" width="364" height="69" /></td>
    <td width="296">&nbsp;</td>
    <td width="320"><table width="100%" border="0" cellspacing="1" cellpadding="1">
        <tr> 
          <td width="59"><img src="images/icon_buying.gif" width="13" height="13" hspace="3" vspace="1" border="0" align="absmiddle"><span class="ti"><a href="#" target="_blank">���ﳵ</a></span></td>
          <td width="10"><img src="images/icon_line_2.gif" width="5" height="13"></td>
          <td width="70"><img src="images/icon_acount.gif" width="13" height="13" hspace="3" vspace="1" border="0" align="absmiddle"><span class="ti"><a href="#">�ҵ��ʻ�</a></span></td>
          <td width="10"><img src="images/icon_line_2.gif" width="5" height="13"></td>
          <td width="73"><img src="images/icon_service.gif" width="13" height="13" hspace="3" vspace="1" border="0" align="absmiddle"><span class="ti"><a href="#">�ͷ�����</a></span></td>
          <td width="10"><img src="images/icon_line_2.gif" width="5" height="13"></td>
          <td width="66" ><img src="images/icon_login.gif" width="13" height="13" hspace="3" vspace="1" border="0" align="absmiddle"><span class="ti"><a href="#">��¼</a></span></td>
        </tr>
    </table></td>
  </tr>
</table>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:4px">
  <tr>
    <td width="116" height="35" align="center" background="images/nav_up_1.gif" class="ti"><a href="#">��ҳ</a></td>
    <td width="130" align="center" background="images/nav_up.gif" class="ti"><a href="#">ȫ��ͼƬ</a></td>
    <td width="130" align="center" background="images/nav_up.gif" class="ti"><a href="#">�û���������</a></td>
    <td width="130" align="center" background="images/nav_up.gif" class="ti"><a href="#">����</a></td>
    <td width="130" align="center" background="images/nav_up.gif" class="ti"><a href="#">���������</a></td>
    <td background="images/nav_bg.gif">&nbsp;</td>
    <td width="150" background="images/search_frame.gif"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="20%">&nbsp;</td>
        <td width="80%"><input name="textfield" type="text" class="sr" value="search" size="18" /></td>
      </tr>
    </table></td>
    <td width="56"><img src="images/search.gif" width="56" height="35" /></td>
  </tr>
</table>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:4px;margin-bottom:4px">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="images/news_top.gif" width="980" height="23" /></td>
      </tr>
      <tr>
        <td height="30" background="images/news_bg2.gif">&nbsp; &nbsp;<span class="zt_top">���ﳵ</span></td>
      </tr>
      <tr>
        <td background="images/news_bg2.gif"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="50" class="zt_2">���Ĺ��ﳵ��������Ʒ</td>
          </tr>
          <tr>
            <td height="50" align="center" class="zt_top">��Ʒ����:<?php echo $this->_tpl_vars['amount']; ?>
��&nbsp;</td>
          </tr>
        </table>
          <table width="90%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#999999">
          <tr>
            <td width="6%" height="30" align="center" bgcolor="#CCCCCC" class="zt_2">���</td>
            <td width="10%" align="center" bgcolor="#CCCCCC" class="zt_2">ͼƬ���</td>
            <td width="37%" bgcolor="#CCCCCC" class="zt_2">��Ʒ����</td>
            <td width="10%" align="center" bgcolor="#CCCCCC" class="zt_2">����</td>
            <td width="11%" align="center" bgcolor="#CCCCCC" class="zt_2">�ߴ磨CM��</td>
            <td width="8%" align="center" bgcolor="#CCCCCC" class="zt_2">����</td>
          </tr>
		 <?php $_from = $this->_tpl_vars['records']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['okey'] => $this->_tpl_vars['oitem']):
?>
			
          <tr>
            <td height="30" align="center" bgcolor="#FFFFFF" class="zt">01</td>
            <td align="center" bgcolor="#FFFFFF" class="zt"><?php echo $this->_tpl_vars['oitem']['id']; ?>
</td>
            <td bgcolor="#FFFFFF" class="zt"><?php echo $this->_tpl_vars['oitem']['name']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="zt"><?php echo $this->_tpl_vars['oitem']['retail_price']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="zt"><?php echo $this->_tpl_vars['oitem']['price']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="zt"><a href=# onclick=del('<?php echo $this->_tpl_vars['oitem']['id']; ?>
',"Del.php?id=","ȷ��ɾ��!")>ɾ��</a></td>
          </tr>
		 
		  <?php endforeach; endif; unset($_from); ?>

        </table>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="40" align="right"><span class="ti">��[<?php echo $this->_tpl_vars['total']; ?>
]ҳ ��һҳ ��һҳ ת��
                  <input name="textfield2" type="text" size="3" />
ҳ
<input type="submit" name="Submit" value="ȷ��" />
              </span></td>
            </tr>
          </table>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="77%" height="35" align="right"><a href=# onclick=del("all","Del.php?id=","ȷ����չ����!")><img src="images/button_delete.jpg" width="85" height="27" border="0" /></a></td>
              <td width="13%" align="center"><img src="images/button_con.jpg" width="85" height="27" /></td>
              <td width="10%" align="center"><img src="images/button_pay.jpg" width="85" height="27" /></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td><img src="images/news_bot.gif" width="980" height="23" /></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="980" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td align="center" class="zt">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" class="zt">�������ǡ���ϵ���ǡ���˽���ߡ�ʹ�����������Ϣ����վ��ͼ��������վ</td>
  </tr>
  <tr>
    <td align="center" class="zt">����վ����ͼƬ�����Ų�����Ȩ��������Ȩ�ؾ���</td>
  </tr>
  <tr>
    <td align="center" class="zt">��ICP��06049229��</td>
  </tr>
</table>
<br />
<br />
</body>
</html>