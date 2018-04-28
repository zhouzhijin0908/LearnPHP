
{|include file="register_header.tpl"|}

<div class="Box">
	<div id="main">
			<div id="ti1">
				<h1>注册用户名：</h1>
			</div>
			<div class="text">
			  <form id="form1" name="form1" method="post" action="register_process.php">
				<input type="hidden" name="step" value="1" />
			    <table width="80%" border="0" align="center" cellpadding="6" cellspacing="0" class="formbox">
                  <tr>
                    <td width="20%" align="center" bgcolor="#f5f5f5" class="line1">用户名：</td>
                    <td class="line1"><input name="loginname" type="text" size="16" value="{|$loginname|}" /></td>
                    <td align="left" class="line1">4-20个字符(仅限小写字母,数字,下划线,减号)，注册后不可修改</td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#f5f5f5" class="line1">输入密码：</td>
                    <td class="line1"><input name="password" type="password" value="" size="16" /></td>
                    <td align="left" class="line1">不少于6个字符</td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#f5f5f5" class="line1">重复密码：</td>
                    <td class="line1"><input name="check_password" type="password" size="16" /></td>
                    <td align="left" class="line1">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#f5f5f5" class="line1">验证码：</td>
                    <td class="line1"><img src="verifyimg.php" alt="" />
                        <input name="verifynumber" type="text" size="8" /></td>
                    <td align="left" class="line1">请输入左侧字符</td>
                  </tr>
                  <tr>
                    <td colspan="3" class="line1"><input type="checkbox" name="agreement" value="1" checked>
                      我已经阅读并同意粉丝网的<a href="register_0.php">用户服务协议</a></td>
                  </tr>
                </table>
			    <table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
                  <tr>
                    <td align="center"><input type="submit" name="reg" value="提交注册" /> <input type="reset" name="Submit2" value="重新填写" /></td>
                  </tr>
                </table>
			  </form>
		    </div>
  </div>
	<div id="left">
	  <div id="step">
			<div class="stepOn">注册用户名</div>
			<div>选填详细信息</div>
			<div>完成注册</div>
	  </div>
	</div>
</div>

{|include file="register_footer.tpl"|}
