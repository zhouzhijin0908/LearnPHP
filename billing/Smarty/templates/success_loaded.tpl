{|include file="register_header.tpl"|}

<div class="Box">
	<div id="main">
			<div id="ti1">
				<h1>��ʾ��Ϣ</h1>
			</div>
	  <div class="text">
<table width="80%" border="0" align="center" cellpadding="6" cellspacing="0" class="formbox" style="margin:20px 0;">
  <tr>
    <td width="20%" align="center" bgcolor="#f5f5f5" class="line1"><img src="images/userreg_1.gif" width="52" height="52" /></td>
    <td class="line1"><p align="left">��¼�ɹ�����<br>
    ��ӭ������˿����&nbsp;<font color="ff0000">{|$loginname|}</font></p>
	  <p>3���Ӻ��Զ���ת......</p>
		<p>{|$backurl|}</p>
      </td>
    </tr>
</table>
      </div>
  </div>
	<div id="left">
	  <div id="step">
        <div class="stepOut">ע���û�</div>
	    <div class="stepOut">������Ŀ</div>
	    <div class="stepOut">��������</div>
	    <div class="stepOut">������ʾ</div>
      </div>
	</div>
</div>
<script language="javascript">
setTimeout("gobackurl()", 3000);
function gobackurl()
{
	window.location = "{|$backurl|}";
}
</script>

{|include file="register_footer.tpl"|}
