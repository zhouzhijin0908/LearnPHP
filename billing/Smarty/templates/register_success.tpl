{|*<!--<meta http-equiv="refresh" content="3;url={|$back|}">-->*|}

{|include file="register_header.tpl"|}

<div class="Box">
	<div id="main">
			<div id="ti1">
				<h1>���ע��</h1>
			</div>
	  <div class="text">
<table width="80%" border="0" align="center" cellpadding="6" cellspacing="0" class="formbox">
  <tr>
    <td width="20%" align="center" bgcolor="#f5f5f5" class="line1"><img src="images/userreg_1.gif" width="52" height="52" /></td>
    <td class="line1"><p align="left" class="Boo">��ϲ����<span class="Cred">{|$loginname|}</span></p>
      <p align="left">���ѳɹ�ע��Ϊ��˿����</p>
      <p align="left">�� <a href="#" class="aVi">������ҳ</a><br/>3���Ӻ��Զ���ת......</p></td>
    </tr>
</table>
      </div>
  </div>
	<div id="left">
	  <div id="step">
			<div class="stepOut">ע���û���</div>
			<div class="stepOut">ѡ����ϸ��Ϣ</div>
			<div class="stepOn">���ע��</div>
	  </div>
	</div>
</div>

<script language="javascript">
setTimeout("gobackurl()", 3000, "");
function gobackurl()
{
	window.location = "{|$back|}";
}
</script>

{|include file="register_footer.tpl"|}
