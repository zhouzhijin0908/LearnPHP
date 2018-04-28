<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0" background="images/reg_13.gif" id="__01">
  <tr>
    <td><img src="images/reg_01.gif" width="200" height="127" alt="" /></td>
    <td><img src="images/reg_09.gif" width="100" height="127" alt="" /></td>
    <td><img src="images/reg_03.gif" width="99" height="127" alt="" /></td>
    <td><img src="images/reg_14.gif" width="100" height="126" alt="" /></td>
    <td><img src="images/reg_05.gif" width="100" height="127" alt="" /></td>
    <td><img src="images/reg_06.gif" width="160" height="127" alt="" /></td>
  </tr>
</table>
<table width="760" border="0" align="center" cellpadding="10" cellspacing="0" background="images/reg_17.gif">
  <tr>
    <td height="450" align="center"><table width="620" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="47"><img src="images/reg_15.gif" width="47" height="530" /></td>
        <td align="center" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="./register_step4.php">
          <table width="80%" border="0" align="center" cellpadding="6" cellspacing="0" style="border-top:3px solid #dadada; border-bottom:3px solid #dadada;">
            <tr>
              <td width="20%" align="center" bgcolor="#f5f5f5" class="line1">昵称/笔名：</td>
              <td class="line1"><input name="name" type="text" size="16" /></td>
              <td align="left" class="line1">昵称不多于12个字符(1个英文字母或数字算1个字符，1个汉字算2个字符)，可以修改 </td>
            </tr>
            <tr>
              <td align="center" bgcolor="#f5f5f5" class="line1">真实姓名：</td>
              <td class="line1"><input name="real_name" type="text" value="" size="16" /></td>
              <td align="left" class="line1">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" bgcolor="#f5f5f5" class="line1">性 &nbsp;&nbsp;&nbsp;别：</td>
              <td class="line1"><input name="sex" type="radio" value="1" checked="checked" />
                男 
                  <input type="radio" name="sex" value="0" />
                  女</td>
              <td align="left" class="line1">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" bgcolor="#f5f5f5" class="line1">出生日期：</td>
              <td colspan="2" align="left" class="line1"><input name="year" type="text" size="4" />
                年
                  <input name="month" type="text" size="4" />
                  月
                  <input name="day" type="text" size="4" />
                  日</td>
              </tr>
            <tr>
              <td align="center" bgcolor="#f5f5f5" class="line1">血&nbsp;&nbsp;&nbsp;&nbsp;型：</td>
              <td colspan="2" align="left" class="line1"><select name="blood">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="O">O</option>
                <option value="AB">AB</option>
              </select>
              </td>
              </tr>
          </table>
          <br />
          <table width="80%" border="0" align="center" cellpadding="6" cellspacing="0" style="border-top:3px solid #dadada; border-bottom:3px solid #dadada;">
            <tr>
              <td width="20%" align="center" bgcolor="#f5f5f5" class="line1">电子邮件：</td>
              <td align="left" class="line1"><input name="email" type="text" size="16" /></td>
              </tr>
            <tr>
              <td align="center" bgcolor="#f5f5f5" class="line1">固定电话：</td>
              <td align="left" class="line1"><input name="tel" type="text" size="5" />
                 -   <input name="textfield22" type="text" value="" size="16" /></td>
              </tr>
            <tr>
              <td align="center" bgcolor="#f5f5f5" class="line1">手机号码：</td>
              <td align="left" class="line1"><input type="text" name="mobile" /></td>
              </tr>
            <tr>
              <td align="center" bgcolor="#f5f5f5" class="line1">联系地址：</td>
              <td align="left" class="line1"><input name="address" type="text" /></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#f5f5f5" class="line1">邮政编码：</td>
              <td align="left" class="line1"><input name="post_code" type="text" size="10" /></td>
            </tr>
          </table>
          <p>
          	<input type="hidden" name="loginname" value="{|$loginname|}" />
            <input type="submit" name="next" value="下一步" />            
            &nbsp;&nbsp;
            <input type="reset" name="Submit2" value="重新填写" />
          </p>
          </form>
        </td>
        <td width="47"><img src="images/reg_16.gif" width="47" height="530" /></td>
      </tr>
    </table>      
    <p class="f_yellow">&nbsp;</p>    </td>
  </tr>
</table>
</body>
</html>
