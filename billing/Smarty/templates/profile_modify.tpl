

 {|include file="profile_header.tpl"|}
 
  <tr>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="profile">
    
<script language="javascript">
function showbirthday()
{
	var cur = new Date();
	var curyear = cur.getFullYear();
	var  iyear = parseInt("{|$year|}");
	var imonth = parseInt("{|$month|}");
	var iday = parseInt("{|$day|}");
	if(iyear + imonth + iday <=0 )
	{
		iyear = curyear; imonth = 1; iday=1;
	}
	
	document.write("<select name=\"year\">");
	for (i=1900; i< curyear+1; i++)
	{
		if( i == iyear )
			document.write("<option  selected value=" + i + ">" + i + "</option>");
		else
			document.write("<option value=" + i + ">" + i + "</option>");
	}
	document.write("<select>��");
	document.write("<select name=\"month\">");
	for (i=1; i< 13; i++)
	{
		if( i == imonth )
			document.write("<option  selected value=" + i + ">" + i + "</option>");
		else
			document.write("<option value=" + i + ">" + i + "</option>");
	}
	document.write("<select>��");
	document.write("<select name=\"day\">");
	for (i=1; i< 32; i++)
	{
		if( i == iday )
			document.write("<option  selected value=" + i + ">" + i + "</option>");
		else
			document.write("<option value=" + i + ">" + i + "</option>");
	}
	document.write("<select>��");
}

function showsx()
{
	var isx = parseInt("{|$sx|}");
	var arr = new Array("����", "��", "ţ", "��", "��", "��", "��", "��", "��", "��", "��", "��", "��");
	document.write("<select name=\"sx\">");
	for (i=0; i< arr.length; i++)
	{
		if( i == isx )
			document.write("<option selected value=" + i + ">" + arr[i] + "</option>");
		else
			document.write("<option value=" + i + ">" + arr[i] + "</option>");
	}
	document.write("<select>");
}

function showxz()
{
	var ixz = parseInt("{|$xz|}");
	var arr = new Array("����", "������", "��ţ��", "˫����", "��з��", "ʨ����", "��Ů��", "�����", "��Ы��", "������", "ħ����", "ˮƿ��", "˫����");
	document.write("<select name=\"xz\">");
	for (i=0; i< arr.length; i++)
	{
		if( i == ixz )
			document.write("<option selected value=" + i + ">" + arr[i] + "</option>");
		else
			document.write("<option value=" + i + ">" + arr[i] + "</option>");
	}
	document.write("<select>");
}

function showfavmovie()
{
	var  ifavmovie = "{|$favmovie|}";
	var  iarr = ifavmovie.split(",");
	var arr = new Array("�ֲ�", "���", "����", "����", "ϲ��", "����", "����", "��ɫ", "ĬƬ", "��Ƭ", "����", "ŷ��", "�պ�", "��¼Ƭ");
	var  objname = "cbfavmovie";
	other = iarr[iarr.length-1];
	for (i=0; i< arr.length; i++)
	{
		var isCheck = "";
		for( j=0; j<iarr.length; j++)
		{
			if ( arr[i] == iarr[j] )
			{
				isCheck = " checked ";
				break;
			}
		}
		document.write("<input type=\"checkbox\" id=\""+ objname + i + "\"name=\""+ objname +"[]\" value=\""+ arr[i] +"\" "+ isCheck +" /><label style=\"cursor:hand\" for=\"" + objname + i +"\">"+ arr[i] +"</label>&nbsp&nbsp;");
		if( (i+1)%5==0 )
			document.write("<br/>");
		if(arr[i]==iarr[iarr.length-1])
			other = "";
	}
	document.write("<br/>����<input name=\""+ objname + "_other\" type=\"text\" size=\"20\" value=\""+ other +"\" />");
}

function showfavmusic()
{
	var  ifavmusic = "{|$favmusic|}";
	var  iarr = ifavmusic.split(",");
	var arr = new Array("����", "ҡ��", "�ŵ�", "��ʿ", "����", "����", "����", "Ӣ��", "��ҥ", "����", "����", "����", "�ؽ���", "��������");
	var  objname = "cbfavmusic";
	other = iarr[iarr.length-1];
	for (i=0; i< arr.length; i++)
	{
		var isCheck = "";
		for( j=0; j<iarr.length; j++)
		{
			if ( arr[i] == iarr[j] )
			{
				isCheck = " checked ";
				break;
			}
		}
		document.write("<input type=\"checkbox\" id=\""+ objname + i + "\"name=\""+ objname +"[]\" value=\""+ arr[i] +"\" "+ isCheck +" /><label style=\"cursor:hand\" for=\"" + objname + i +"\">"+ arr[i] +"</label>&nbsp&nbsp;");
		if( (i+1)%5==0 )
			document.write("<br/>");
		if(arr[i]==iarr[iarr.length-1])
			other = "";
	}
	document.write("<br/>����<input name=\""+ objname + "_other\" type=\"text\" size=\"20\" value=\""+ other +"\" />");
}
</script>
<script language="javascript">
/*
 * Function Checkinput
 * 
 * author: C.F.Nie <nie at ndp dot cn>
 * modify: (GTM+8)2005-11-30 11:39:02
 *
 * bool Checkinput(object obj)
 * @param obj object form handle
 *
 */
function Checkinput(obj)
{
	//var obj = document.getElementById('formProfile');
	var pattern = /\.(jpg|jpeg|gif|png)$/i;
	if (obj.uploadfile.value != '' && !pattern.test(obj.uploadfile.value))
	{
		alert('ͷ���ļ�������ʹ����չ��Ϊ jpg jpeg gif png ��ͼ���ļ���');
		obj.uploadfile.focus();
		return false;
	}
	
	if (obj.perdesc.value.length>200)
	{
		alert('����˵���200�ַ���(���˵��'+obj.perdesc.value.length+'���ַ�)');
		obj.perdesc.focus();
		return false;
	}
	
	if (obj.idiograph.value.length>200)
	{
		alert('ǩ���200�ַ���(���ǩ��'+obj.idiograph.value.length+'���ַ�)');
		obj.idiograph.focus();
		return false;
	}
	
	pattern = /[^\w\u4e00-\u9fa5]/i;
	if (pattern.test(obj.nickname.value))
	{
		alert('�ǳ�ֻ��ʹ���»��ߡ����Ӣ����ĸ�����ֺ����ġ�');
		obj.nickname.focus();
		return false;
	}
	if (pattern.test(obj.fullname.value))
	{
		alert('����ֻ��ʹ���»��ߡ����Ӣ����ĸ�����ֺ����ġ�');
		obj.fullname.focus();
		return false;
	}
	pattern = /^_|_$/;
	if (pattern.test(obj.nickname.value))
	{
		alert('�»��߲��ܳ������ǳƵ���β��');
		obj.nickname.focus();
		return false;
	}
	if (pattern.test(obj.fullname.value))
	{
		alert('�»��߲��ܳ�������������β');
		obj.fullname.focus();
		return false;
	}
	pattern = /^[ ]*$/;
	if (pattern.test(obj.nickname.value))
	{
		alert("�ǳƲ���Ϊ�գ�");
		obj.nickname.focus();
		return false;
	}
	
	pattern = /\D/;
	if (obj.QQ.value != '' && pattern.test(obj.QQ.value))
	{
		alert('���� QQ ���벻��ȷ��');
		obj.QQ.focus();
		return false;
	}
	else if (obj.QQ.value != '' && obj.QQ.value < 10000)
	{
		alert('���� QQ ���벻��ȷ ��');
		obj.QQ.focus();
		return false;
	}
	if (obj.stature.value != '' && pattern.test(obj.stature.value))
	{
		alert('���ֻ����д���������֣�1234567890����');
		obj.stature.focus();
		return false;
	}
	if (obj.mobile.value != '' && pattern.test(obj.mobile.value))
	{
		alert('�ֻ����벻��ȷ��');
		obj.mobile.focus();
		return false;
	}
	pattern = /^(\d{1,8})$/;
	if ( (obj.tel_0.value+obj.tel_1.value) != '' && (!pattern.test(obj.tel_0.value) || !pattern.test(obj.tel_1.value) ) )
	{
		alert('�绰���벻��ȷ��û��д������');
		obj.tel_0.focus();
		return false;
	}
	
	pattern = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	if (obj.MSN.value != '' && !pattern.test(obj.MSN.value))
	{
		alert('���� MSN Passport ����ȷ��');
		obj.MSN.focus();
		return false;
	}
	if (obj.email.value != '' && !pattern.test(obj.email.value))
	{
		alert('���ĵ����ʼ���ַ����ȷ��');
		obj.email.focus();
		return false;
	}
	
	if (obj.idcardtype.value == 0 && obj.idcard.value != '')
	{
		pattern = /^(\d{15}|\d{18})$/;
		if (!pattern.test(obj.idcard.value))
		{
			alert('�������֤�����ʽ����ȷ��');
			obj.idcard.focus();
			return false;
		}
	}
	if (obj.zip.value!="")
	{
		pattern = /^(\d{6})$/;
		if (!pattern.test(obj.zip.value))
		{
			alert('���������ʽ����ȷ��');
			obj.zip.focus();
			return false;
		}
	}
} // function Checkinput : eof
</script>

    <form id = "formProfile" name="formProfile" enctype="multipart/form-data" method="post" action="profile_modify_process.php" onsubmit="return Checkinput(this)">
      <tr>
        <td width="25%" valign="top" class="PostText3" style="border-right:1px dotted #e0e0e0;">
        
        
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <!--onload="javascript:if(this.width>{|$maxwidth|}) this.width={|$maxwidth|}; if(this.height>{|$maxwidth|}) this.height={|$maxwidth|};"-->
              <td><img id="pimg" src="{|$photo|}"/><br/>
              �޸�ͷ��:<br/>
				<input type="file" name="uploadfile" size="20"> 
              </td>
            </tr>
          </table>
              <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr>
                  <td align="left" class="text01"><span class="Boo">ͷ��</span>��{|$rank|}</td>
                </tr>
                <tr>
                  <td align="left" class="text01"><span class="Boo">�ǳ�/������<br />
                    </span>
                      <input name="nickname" type="text" class="input1" id="nickname" value="{|$nickname|}" size="8" />                  </td>
                </tr>
                <tr>
                  <td align="left" class="text01"><span class="Boo">�� ��</span>�� <br />
                      <input name="sex" type="radio" value="1" {|if $sex eq 1|} checked {|/if|}/>
				      ��
				      <input type="radio" name="sex" value="2" {|if $sex eq 2|} checked {|/if|}/>
				      Ů                    
				     <input type="radio" name="sex" value="0" {|if $sex eq 0|} checked {|/if|}/>
                    ���� </td>
                </tr>
              </table>
              <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr class="line01">
                  <td><span class="Boo">����˵��</span>��
                      (�200�ַ�)
                  <textarea name="perdesc" cols="18" rows="12" class="input1" id="perdesc">{|$perdesc|}</textarea>                  </td>
                </tr>
              </table>
              <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr class="line01">
                  <td><span class="Boo">����ǩ��</span>:(�200�ַ�)
                      <textarea name="idiograph" cols="18" rows="12" class="input1" id="idiograph">{|$idiograph|}</textarea>                  </td>
                </tr>
              </table>
             <!-- <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="50%" align="center"><input alt="�ύ" type="image" src="images/pro_3.gif" width="80" height="19" /></td>
                  <td width="50%" align="center"><input alt="����" type="image" src="images/pro_4.gif" width="80" height="19" onclick="javascript:reset();return false;" /></td>
                </tr>
              </table>-->
              <input name="uid" type="hidden" value="{|$uid|}">
              <input name="backurl" type="hidden" value="{|$backurl|}">              
              </td>    
        <td width="45%" valign="top" class="PostText3" style="border-right:1px solid #ddd;">
            <table width="100%" border="0" cellpadding="2" cellspacing="0">
              <tr>
                <td colspan="2" align="left"><span class="Cred Boo">�� ���������Ƿ񹫿���</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="ispub" type="radio" value="1" {|if $ispub eq 1|} checked {|/if|}/>
                  ����
                  <input name="ispub" type="radio" value="0" {|if $ispub eq 0|} checked {|/if|}/>
                  ˽��</td>
              </tr>
              <tr>
                <td width="31%" align="left"><span class="Boo">��Ф</span>��</td>
                <td width="69%" align="left">
                	<script language="javascript">showsx();</script>                
                </td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">����:</span></td>
                <td width="69%" align="left">
                	<script language="javascript">showxz();</script>
                </td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">Ѫ��</span>�� </td>
                <td align="left">
                <select name="bloodtype">
			      <option value="">����</option>
			      <option value="A" {|if $bloodtype eq "A"|} selected {|/if|}>A</option>
			      <option value="B" {|if $bloodtype eq "B"|} selected {|/if|}>B</option>
			      <option value="O" {|if $bloodtype eq "O"|} selected {|/if|}>O</option>
			      <option value="AB" {|if $bloodtype eq "AB"|} selected {|/if|}>AB</option>
			    </select>
    </td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">QQ</span>�� </td>
                <td align="left"><input name="QQ" type="text" id="QQ" value="{|$QQ|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">MSN</span>�� </td>
                <td align="left"><input name="MSN" type="text" id="MSN" value="{|$MSN|}" size="22" /></td>
              </tr>
              <tr>
                <td colspan="2" align="left">
                	<span class="Boo">��ϲ���ĵ�Ӱ����</span>��<br /> 
                	<script language="javascript">showfavmovie();</script>
				</td>
              </tr>
              <tr>
                <td colspan="2" align="left">
                	<span class="Boo">��ϲ������������</span>�� <br />
                	<script language="javascript">showfavmusic();</script>
                </td>
              </tr>
              <tr>
                <td colspan="2" align="left"><span class="Boo">�ҵ�ż��</span>��                </td>
              </tr>
              <tr>
                <td colspan="2" align="left"><input name="idol_1" type="text" id="idol_1" value="{|$idol_1|}" size="12" />
                  <input name="idol_2" type="text" id="idol_2" value="{|$idol_2|}" size="12" />
                  <input name="idol_3" type="text" id="idol_3" value="{|$idol_3|}" size="12" /></td>
              </tr>
              <tr>
                <td colspan="2" align="left"><input name="idol_4" type="text" id="idol_4" value="{|$idol_4|}" size="12" />
                  <input name="idol_5" type="text" id="idol_5" value="{|$idol_5|}" size="12" />                
                <input name="idol_6" type="text" id="idol_6" value="{|$idol_6|}" size="12" /></td>
              </tr>
            </table>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td colspan="2" align="left" class="Cred Boo">�� ע�⣺������дѡ��Ϊ����������</td>
              </tr>
              <tr>
                <td width="38%" height="38" align="left"><span class="Boo">����</span>�� </td>
                <td width="62%" align="left"><input name="fullname" type="text" id="fullname" value="{|$fullname|}" size="14" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">���</span>�� </td>
                <td align="left"><input name="stature" type="text" id="stature" value="{|$stature|}" size="14" />
                  cm</td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">���ڵ�</span>�� </td>
                <td align="left"><input name="city" type="text" value="{|$city|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">֤������</span>�� </td>
                <td align="left">
                <select name="idcardtype">
			      <option value="0" {|if $idcardtype eq "0"|} selected {|/if|}>���֤</option>
			      <option value="1" {|if $idcardtype eq "1"|} selected {|/if|}>����֤</option>
			      <option value="2" {|if $idcardtype eq "2"|} selected {|/if|}>ѧ��֤</option>
			      <option value="3" {|if $idcardtype eq "3"|} selected {|/if|}>����</option>
			    </select>
			    </td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">֤������</span>�� </td>
                <td align="left"><input name="idcard" type="text" value="{|$idcard|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">��������</span>�� </td>
                <td align="left">
                	<script>showbirthday();</script>
                </td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">����ְҵ</span>�� </td>
                <td align="left"><input name="career" type="text" id="career" value="{|$career|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">�����ʼ�</span>�� </td>
                <td align="left"><input name="email" type="text" id="email" value="{|$email|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">�̶��绰</span>�� </td>
                <td align="left">
                <input name="tel_0" type="text" value="{|$tel_0|}" size="4" />-<input name="tel_1" type="text" value="{|$tel_1|}" size="8" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">�ֻ�����</span>�� </td>
                <td align="left"><input name="mobile" type="text" id="mobile" value="{|$mobile|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">��������</span>�� </td>
                <td align="left"><input name="zip" type="text" id="zip" value="{|$zip|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">��ϵ��ַ</span>�� </td>
                <td align="left"><input name="address" type="text" id="address" value="{|$address|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><input alt="�ύ" type="image" src="images/pro_3.gif" width="80" height="19" /></td>
                <td align="left"><input alt="����" type="image" src="images/pro_4.gif" width="80" height="19" onclick="javascript:reset();return false;" /></td>
              </tr>
            </table>
            <input name="uid" type="hidden" value="{|$uid|}">
            <input name="backurl" type="hidden" value="{|$backurl|}">
          </form>
        </td>
      </tr> 
    </table>
   
    </td>
    {|include file="profile_right.tpl"|}
