

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
	document.write("<select>年");
	document.write("<select name=\"month\">");
	for (i=1; i< 13; i++)
	{
		if( i == imonth )
			document.write("<option  selected value=" + i + ">" + i + "</option>");
		else
			document.write("<option value=" + i + ">" + i + "</option>");
	}
	document.write("<select>月");
	document.write("<select name=\"day\">");
	for (i=1; i< 32; i++)
	{
		if( i == iday )
			document.write("<option  selected value=" + i + ">" + i + "</option>");
		else
			document.write("<option value=" + i + ">" + i + "</option>");
	}
	document.write("<select>日");
}

function showsx()
{
	var isx = parseInt("{|$sx|}");
	var arr = new Array("保密", "鼠", "牛", "虎", "兔", "龙", "蛇", "马", "羊", "猴", "鸡", "狗", "猪");
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
	var arr = new Array("保密", "白羊座", "金牛座", "双子座", "巨蟹座", "狮子座", "处女座", "天秤座", "天蝎座", "射手座", "魔羯座", "水瓶座", "双鱼座");
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
	var arr = new Array("恐怖", "惊悚", "功夫", "浪漫", "喜剧", "剧情", "动画", "情色", "默片", "大片", "华语", "欧洲", "日韩", "记录片");
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
	document.write("<br/>其他<input name=\""+ objname + "_other\" type=\"text\" size=\"20\" value=\""+ other +"\" />");
}

function showfavmusic()
{
	var  ifavmusic = "{|$favmusic|}";
	var  iarr = ifavmusic.split(",");
	var arr = new Array("流行", "摇滚", "古典", "爵士", "拉丁", "哥特", "舞曲", "英伦", "民谣", "地下", "电子", "民乐", "重金属", "世界音乐");
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
	document.write("<br/>其他<input name=\""+ objname + "_other\" type=\"text\" size=\"20\" value=\""+ other +"\" />");
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
		alert('头像文件仅允许使用扩展名为 jpg jpeg gif png 的图形文件。');
		obj.uploadfile.focus();
		return false;
	}
	
	if (obj.perdesc.value.length>200)
	{
		alert('个人说明最长200字符。(你的说明'+obj.perdesc.value.length+'个字符)');
		obj.perdesc.focus();
		return false;
	}
	
	if (obj.idiograph.value.length>200)
	{
		alert('签名最长200字符。(你的签名'+obj.idiograph.value.length+'个字符)');
		obj.idiograph.focus();
		return false;
	}
	
	pattern = /[^\w\u4e00-\u9fa5]/i;
	if (pattern.test(obj.nickname.value))
	{
		alert('昵称只能使用下划线、半角英文字母、数字和中文。');
		obj.nickname.focus();
		return false;
	}
	if (pattern.test(obj.fullname.value))
	{
		alert('姓名只能使用下划线、半角英文字母、数字和中文。');
		obj.fullname.focus();
		return false;
	}
	pattern = /^_|_$/;
	if (pattern.test(obj.nickname.value))
	{
		alert('下划线不能出现在昵称的首尾。');
		obj.nickname.focus();
		return false;
	}
	if (pattern.test(obj.fullname.value))
	{
		alert('下划线不能出现在姓名的首尾');
		obj.fullname.focus();
		return false;
	}
	pattern = /^[ ]*$/;
	if (pattern.test(obj.nickname.value))
	{
		alert("昵称不能为空！");
		obj.nickname.focus();
		return false;
	}
	
	pattern = /\D/;
	if (obj.QQ.value != '' && pattern.test(obj.QQ.value))
	{
		alert('您的 QQ 号码不正确。');
		obj.QQ.focus();
		return false;
	}
	else if (obj.QQ.value != '' && obj.QQ.value < 10000)
	{
		alert('您的 QQ 号码不正确 。');
		obj.QQ.focus();
		return false;
	}
	if (obj.stature.value != '' && pattern.test(obj.stature.value))
	{
		alert('身高只能填写阿拉伯数字（1234567890）。');
		obj.stature.focus();
		return false;
	}
	if (obj.mobile.value != '' && pattern.test(obj.mobile.value))
	{
		alert('手机号码不正确。');
		obj.mobile.focus();
		return false;
	}
	pattern = /^(\d{1,8})$/;
	if ( (obj.tel_0.value+obj.tel_1.value) != '' && (!pattern.test(obj.tel_0.value) || !pattern.test(obj.tel_1.value) ) )
	{
		alert('电话号码不正确或没填写完整。');
		obj.tel_0.focus();
		return false;
	}
	
	pattern = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	if (obj.MSN.value != '' && !pattern.test(obj.MSN.value))
	{
		alert('您的 MSN Passport 不正确。');
		obj.MSN.focus();
		return false;
	}
	if (obj.email.value != '' && !pattern.test(obj.email.value))
	{
		alert('您的电子邮件地址不正确。');
		obj.email.focus();
		return false;
	}
	
	if (obj.idcardtype.value == 0 && obj.idcard.value != '')
	{
		pattern = /^(\d{15}|\d{18})$/;
		if (!pattern.test(obj.idcard.value))
		{
			alert('您的身份证号码格式不正确。');
			obj.idcard.focus();
			return false;
		}
	}
	if (obj.zip.value!="")
	{
		pattern = /^(\d{6})$/;
		if (!pattern.test(obj.zip.value))
		{
			alert('邮政编码格式不正确。');
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
              修改头像:<br/>
				<input type="file" name="uploadfile" size="20"> 
              </td>
            </tr>
          </table>
              <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr>
                  <td align="left" class="text01"><span class="Boo">头衔</span>：{|$rank|}</td>
                </tr>
                <tr>
                  <td align="left" class="text01"><span class="Boo">昵称/笔名：<br />
                    </span>
                      <input name="nickname" type="text" class="input1" id="nickname" value="{|$nickname|}" size="8" />                  </td>
                </tr>
                <tr>
                  <td align="left" class="text01"><span class="Boo">性 别</span>： <br />
                      <input name="sex" type="radio" value="1" {|if $sex eq 1|} checked {|/if|}/>
				      男
				      <input type="radio" name="sex" value="2" {|if $sex eq 2|} checked {|/if|}/>
				      女                    
				     <input type="radio" name="sex" value="0" {|if $sex eq 0|} checked {|/if|}/>
                    保密 </td>
                </tr>
              </table>
              <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr class="line01">
                  <td><span class="Boo">个人说明</span>：
                      (最长200字符)
                  <textarea name="perdesc" cols="18" rows="12" class="input1" id="perdesc">{|$perdesc|}</textarea>                  </td>
                </tr>
              </table>
              <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr class="line01">
                  <td><span class="Boo">个人签名</span>:(最长200字符)
                      <textarea name="idiograph" cols="18" rows="12" class="input1" id="idiograph">{|$idiograph|}</textarea>                  </td>
                </tr>
              </table>
             <!-- <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="50%" align="center"><input alt="提交" type="image" src="images/pro_3.gif" width="80" height="19" /></td>
                  <td width="50%" align="center"><input alt="重填" type="image" src="images/pro_4.gif" width="80" height="19" onclick="javascript:reset();return false;" /></td>
                </tr>
              </table>-->
              <input name="uid" type="hidden" value="{|$uid|}">
              <input name="backurl" type="hidden" value="{|$backurl|}">              
              </td>    
        <td width="45%" valign="top" class="PostText3" style="border-right:1px solid #ddd;">
            <table width="100%" border="0" cellpadding="2" cellspacing="0">
              <tr>
                <td colspan="2" align="left"><span class="Cred Boo">★ 以下资料是否公开？</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="ispub" type="radio" value="1" {|if $ispub eq 1|} checked {|/if|}/>
                  公开
                  <input name="ispub" type="radio" value="0" {|if $ispub eq 0|} checked {|/if|}/>
                  私密</td>
              </tr>
              <tr>
                <td width="31%" align="left"><span class="Boo">生肖</span>：</td>
                <td width="69%" align="left">
                	<script language="javascript">showsx();</script>                
                </td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">星座:</span></td>
                <td width="69%" align="left">
                	<script language="javascript">showxz();</script>
                </td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">血型</span>： </td>
                <td align="left">
                <select name="bloodtype">
			      <option value="">保密</option>
			      <option value="A" {|if $bloodtype eq "A"|} selected {|/if|}>A</option>
			      <option value="B" {|if $bloodtype eq "B"|} selected {|/if|}>B</option>
			      <option value="O" {|if $bloodtype eq "O"|} selected {|/if|}>O</option>
			      <option value="AB" {|if $bloodtype eq "AB"|} selected {|/if|}>AB</option>
			    </select>
    </td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">QQ</span>： </td>
                <td align="left"><input name="QQ" type="text" id="QQ" value="{|$QQ|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">MSN</span>： </td>
                <td align="left"><input name="MSN" type="text" id="MSN" value="{|$MSN|}" size="22" /></td>
              </tr>
              <tr>
                <td colspan="2" align="left">
                	<span class="Boo">最喜欢的电影类型</span>：<br /> 
                	<script language="javascript">showfavmovie();</script>
				</td>
              </tr>
              <tr>
                <td colspan="2" align="left">
                	<span class="Boo">最喜欢的音乐类型</span>： <br />
                	<script language="javascript">showfavmusic();</script>
                </td>
              </tr>
              <tr>
                <td colspan="2" align="left"><span class="Boo">我的偶像</span>：                </td>
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
                <td colspan="2" align="left" class="Cred Boo">★ 注意：以下填写选项为不公开内容</td>
              </tr>
              <tr>
                <td width="38%" height="38" align="left"><span class="Boo">姓名</span>： </td>
                <td width="62%" align="left"><input name="fullname" type="text" id="fullname" value="{|$fullname|}" size="14" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">身高</span>： </td>
                <td align="left"><input name="stature" type="text" id="stature" value="{|$stature|}" size="14" />
                  cm</td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">所在地</span>： </td>
                <td align="left"><input name="city" type="text" value="{|$city|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">证件类型</span>： </td>
                <td align="left">
                <select name="idcardtype">
			      <option value="0" {|if $idcardtype eq "0"|} selected {|/if|}>身份证</option>
			      <option value="1" {|if $idcardtype eq "1"|} selected {|/if|}>军官证</option>
			      <option value="2" {|if $idcardtype eq "2"|} selected {|/if|}>学生证</option>
			      <option value="3" {|if $idcardtype eq "3"|} selected {|/if|}>护照</option>
			    </select>
			    </td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">证件号码</span>： </td>
                <td align="left"><input name="idcard" type="text" value="{|$idcard|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">出生日期</span>： </td>
                <td align="left">
                	<script>showbirthday();</script>
                </td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">从事职业</span>： </td>
                <td align="left"><input name="career" type="text" id="career" value="{|$career|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">电子邮件</span>： </td>
                <td align="left"><input name="email" type="text" id="email" value="{|$email|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">固定电话</span>： </td>
                <td align="left">
                <input name="tel_0" type="text" value="{|$tel_0|}" size="4" />-<input name="tel_1" type="text" value="{|$tel_1|}" size="8" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">手机号码</span>： </td>
                <td align="left"><input name="mobile" type="text" id="mobile" value="{|$mobile|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">邮政编码</span>： </td>
                <td align="left"><input name="zip" type="text" id="zip" value="{|$zip|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">联系地址</span>： </td>
                <td align="left"><input name="address" type="text" id="address" value="{|$address|}" size="22" /></td>
              </tr>
              <tr>
                <td align="left"><input alt="提交" type="image" src="images/pro_3.gif" width="80" height="19" /></td>
                <td align="left"><input alt="重填" type="image" src="images/pro_4.gif" width="80" height="19" onclick="javascript:reset();return false;" /></td>
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
