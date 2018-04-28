 {|include file="profile_header.tpl"|}
 
  <tr>
    <td valign="top" bgcolor="#f9f9f9" style="border-right:1px solid #ddd;"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="profile">
	<script language="javascript">
	function showsx()
	{
		var isx = parseInt("{|$sx|}");
		var arr = new Array("保密", "鼠", "牛", "虎", "兔", "龙", "蛇", "马", "羊", "猴", "鸡", "狗", "猪");
		document.write (arr[isx]);
	}
	function showxz()
	{
		var ixz = parseInt("{|$xz|}");
		var arr = new Array("保密", "白羊座", "金牛座", "双子座", "巨蟹座", "狮子座", "处女座", "天秤座", "天蝎座", "射手座", "魔羯座", "水瓶座", "双鱼座");
		document.write (arr[ixz]);
	}
	</script>
      
      <tr>
        <td width="25%" valign="top" class="PostText3" style="border-right:1px dotted #e0e0e0;">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="{|$photo|}"/>&nbsp;</td>
            </tr>
          </table>
              <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr>
                  <td align="left" class="text01"><span class="Boo">头衔</span>：{|$rank|}</td>
                </tr>
                <tr>
                  <td align="left" class="text01"><span class="Boo">昵称/笔名</span>：{|$nickname|}</td>
                </tr>
                <tr>
                  <td align="left" class="text01"><span class="Boo">性 别</span>： 
					{|$sex|}<br /></td>
                </tr>
              </table>
              <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr class="line01">
                  <td><p><span class="Boo">个人说明</span>：<br />
                      {|$desc|}
                      </td>
                </tr>
              </table>
              <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr class="line01">
                  <td><span class="Boo">个人签名</span>: <br />
                    {|$idiograph|}<p>　</td>
                </tr>
              </table>          </td>
        <td height="100%" width="45%" valign="top" class="PostText3">
        {|if  $isshow eq 1|}
            <table width="100%" border="0" cellpadding="2" cellspacing="0">
              <tr>
                <td align="left"><span class="Boo">性别</span>： {|$sex|}</td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">出生日期</span>： {|$birthday|}</td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">生肖</span>： <script language="javascript">showsx();</script></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">星座</span>： <script language="javascript">showxz();</script></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">血型</span>： {|$bloodtype|}</td>
              </tr>
            </table>
          	<table width="100%" border="0" cellpadding="3" cellspacing="0">
              
              <tr>
                <td align="left"><span class="Boo">最喜欢的电影类型</span>： {|$favmovie|}</td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">最喜欢的音乐类型</span>： {|$favmusic|}</td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">我的偶像</span>： {|$idol|}</td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">QQ</span>： {|$QQ|}</td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">MSN</span>：{|$MSN|}</td>
              </tr>
            </table>
            {|else|}
            <table width=100%><tr align=center><td align="center" style="padding-top:160px;"><span class="Boo">用户其他资料不公开！</span></td></tr></table>
            {|/if|}
        </td>
      </tr>
      
    </table>
    </td>
    
   {|include file="profile_right.tpl"|}
