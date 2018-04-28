{|*<!--<meta http-equiv="refresh" content="3;url={|$back|}">-->*|}

{|include file="register_header.tpl"|}

<div class="Box">
	<div id="main">
			<div id="ti1">
				<h1>完成注册</h1>
			</div>
	  <div class="text">
<table width="80%" border="0" align="center" cellpadding="6" cellspacing="0" class="formbox">
  <tr>
    <td width="20%" align="center" bgcolor="#f5f5f5" class="line1"><img src="images/userreg_1.gif" width="52" height="52" /></td>
    <td class="line1"><p align="left" class="Boo">恭喜您，<span class="Cred">{|$loginname|}</span></p>
      <p align="left">您已成功注册为粉丝啦！</p>
      <p align="left">→ <a href="#" class="aVi">返回首页</a><br/>3秒钟后自动跳转......</p></td>
    </tr>
</table>
      </div>
  </div>
	<div id="left">
	  <div id="step">
			<div class="stepOut">注册用户名</div>
			<div class="stepOut">选填详细信息</div>
			<div class="stepOn">完成注册</div>
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
