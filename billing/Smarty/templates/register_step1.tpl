
{|include file="register_header.tpl"|}

<div class="Box">
	<div id="main">
			<div id="ti1">
				<h1>ע���û�����</h1>
			</div>
			<div class="text">
			  <form id="form1" name="form1" method="post" action="register_process.php">
				<input type="hidden" name="step" value="1" />
			    <table width="80%" border="0" align="center" cellpadding="6" cellspacing="0" class="formbox">
                  <tr>
                    <td width="20%" align="center" bgcolor="#f5f5f5" class="line1">�û�����</td>
                    <td class="line1"><input name="loginname" type="text" size="16" value="{|$loginname|}" /></td>
                    <td align="left" class="line1">4-20���ַ�(����Сд��ĸ,����,�»���,����)��ע��󲻿��޸�</td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#f5f5f5" class="line1">�������룺</td>
                    <td class="line1"><input name="password" type="password" value="" size="16" /></td>
                    <td align="left" class="line1">������6���ַ�</td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#f5f5f5" class="line1">�ظ����룺</td>
                    <td class="line1"><input name="check_password" type="password" size="16" /></td>
                    <td align="left" class="line1">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#f5f5f5" class="line1">��֤�룺</td>
                    <td class="line1"><img src="verifyimg.php" alt="" />
                        <input name="verifynumber" type="text" size="8" /></td>
                    <td align="left" class="line1">����������ַ�</td>
                  </tr>
                  <tr>
                    <td colspan="3" class="line1"><input type="checkbox" name="agreement" value="1" checked>
                      ���Ѿ��Ķ���ͬ���˿����<a href="register_0.php">�û�����Э��</a></td>
                  </tr>
                </table>
			    <table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
                  <tr>
                    <td align="center"><input type="submit" name="reg" value="�ύע��" /> <input type="reset" name="Submit2" value="������д" /></td>
                  </tr>
                </table>
			  </form>
		    </div>
  </div>
	<div id="left">
	  <div id="step">
			<div class="stepOn">ע���û���</div>
			<div>ѡ����ϸ��Ϣ</div>
			<div>���ע��</div>
	  </div>
	</div>
</div>

{|include file="register_footer.tpl"|}
