
{|include file="register_header.tpl"|}

<div class="Box">
	<div id="main">
			<div id="ti1">
				<h1>ѡ����ϸ��Ϣ��</h1>
			</div>
			<div class="text">
			  <form id="form1" name="form1" method="post" action="register_process.php">
<input type="hidden" name="step" value="2">
<table width="80%" border="0" align="center" cellpadding="6" cellspacing="0" class="formbox">
  <tr>
    <td width="20%" align="center" bgcolor="#f5f5f5" class="line1">�ǳ�/������</td>
    <td class="line1"><input name="nickname" value="{|$nickname|}" type="text" size="16" /></td>
    <td align="left" class="line1">�ǳƲ�����12���ַ�(1��������2���ַ�)�������޸ġ� </td>
  </tr>
  <tr>
    <td align="center" bgcolor="#f5f5f5" class="line1">�� &nbsp;&nbsp;&nbsp;��</td>
    <td class="line1"><input name="sex" type="radio" value="1"/>
      ��
      <input type="radio" name="sex" value="2" />
      Ů</td>
    <td align="left" class="line1">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#f5f5f5" class="line1">�������ڣ�</td>
    <td colspan="2" align="left" class="line1"><input name="year"  value="{|$year|}" type="text" size="4" />
      ��
      <input name="month"  value="{|$month|}" type="text" size="4" />
      ��
      <input name="day"  value="{|$day|}" type="text" size="4" />
      ��</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#f5f5f5" class="line1">Ѫ&nbsp;&nbsp;&nbsp;&nbsp;�ͣ�</td>
    <td colspan="2" align="left" class="line1"><select name="blood">
      <option value=" "> </option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="O">O</option>
      <option value="AB">AB</option>
    </select>    </td>
  </tr>
  <tr>
    <td align="center" bgcolor="#f5f5f5" class="line1">�������䣺</td>
    <td colspan="2" align="left" class="line1"><input name="email"  value="{|$email|}" type="text" size="16" /></td>
  </tr>
  
  <tr>
    <td align="center" bgcolor="#f5f5f5" class="line1">�̶��绰��</td>
    <td colspan="2" align="left" class="line1"><input name="tel_0"  value="{|$tel_0|}" type="text" size="5" />
      -
      <input name="tel_1" type="text"  value="{|$tel_1|}"  size="16" /></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#f5f5f5" class="line1">�ֻ����룺</td>
    <td colspan="2" align="left" class="line1"><input type="text" name="mobile"  value="{|$mobile|}" /></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#f5f5f5" class="line1">��ϵ��ַ��</td>
    <td colspan="2" align="left" class="line1"><input name="address" type="text"  value="{|$address|}" /></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#f5f5f5" class="line1">�������룺</td>
    <td colspan="2" align="left" class="line1"><input name="zip" type="text"  value="{|$zip|}" size="10" /></td>
  </tr>
</table>
<table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
                  <tr>
                    <td colspan="2" align="center">
                    <input type="hidden" name="uid" value="{|$uid|}" />
					<input type="submit" name="next" value="ȷ�ϣ����ע��" /> 
                    <input type="reset" name="reset" value="������д" /></td>
                  </tr>
                </table>
			  </form>
		    </div>
  </div>
	<div id="left">
	  <div id="step">
			<div class="stepOut">ע���û���</div>
			<div class="stepOn">ѡ����ϸ��Ϣ</div>
			<div>���ע��</div>
	  </div>
	</div>
</div>

{|include file="register_footer.tpl"|}
