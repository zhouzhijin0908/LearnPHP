{|include file="register_header.tpl"|}

<div class="Box">
	<div id="main">
			<div id="ti1">
				<h1>提示信息</h1>
			</div>
	  <div class="text">
<table width="80%" border="0" align="center" cellpadding="6" cellspacing="0" class="formbox" style="margin:20px 0;">
  <tr>
    <td width="20%" align="center" bgcolor="#f5f5f5" class="line1"><img src="images/userreg_1.gif" width="52" height="52" /></td>
    <td class="line1"><p align="left">登录成功！！<br>
    欢迎回来粉丝网：&nbsp;<font color="ff0000">{|$loginname|}</font></p>
	  <p>3秒钟后自动跳转......</p>
		<p>{|$backurl|}</p>
      </td>
    </tr>
</table>
      </div>
  </div>
	<div id="left">
	  <div id="step">
        <div class="stepOut">注册用户</div>
	    <div class="stepOut">服务项目</div>
	    <div class="stepOut">服务条款</div>
	    <div class="stepOut">友情提示</div>
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
