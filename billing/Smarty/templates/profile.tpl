 {|include file="profile_header.tpl"|}
 
  <tr>
    <td valign="top" bgcolor="#f9f9f9" style="border-right:1px solid #ddd;"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="profile">
	<script language="javascript">
	function showsx()
	{
		var isx = parseInt("{|$sx|}");
		var arr = new Array("����", "��", "ţ", "��", "��", "��", "��", "��", "��", "��", "��", "��", "��");
		document.write (arr[isx]);
	}
	function showxz()
	{
		var ixz = parseInt("{|$xz|}");
		var arr = new Array("����", "������", "��ţ��", "˫����", "��з��", "ʨ����", "��Ů��", "�����", "��Ы��", "������", "ħ����", "ˮƿ��", "˫����");
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
                  <td align="left" class="text01"><span class="Boo">ͷ��</span>��{|$rank|}</td>
                </tr>
                <tr>
                  <td align="left" class="text01"><span class="Boo">�ǳ�/����</span>��{|$nickname|}</td>
                </tr>
                <tr>
                  <td align="left" class="text01"><span class="Boo">�� ��</span>�� 
					{|$sex|}<br /></td>
                </tr>
              </table>
              <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr class="line01">
                  <td><p><span class="Boo">����˵��</span>��<br />
                      {|$desc|}
                      </td>
                </tr>
              </table>
              <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr class="line01">
                  <td><span class="Boo">����ǩ��</span>: <br />
                    {|$idiograph|}<p>��</td>
                </tr>
              </table>          </td>
        <td height="100%" width="45%" valign="top" class="PostText3">
        {|if  $isshow eq 1|}
            <table width="100%" border="0" cellpadding="2" cellspacing="0">
              <tr>
                <td align="left"><span class="Boo">�Ա�</span>�� {|$sex|}</td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">��������</span>�� {|$birthday|}</td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">��Ф</span>�� <script language="javascript">showsx();</script></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">����</span>�� <script language="javascript">showxz();</script></td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">Ѫ��</span>�� {|$bloodtype|}</td>
              </tr>
            </table>
          	<table width="100%" border="0" cellpadding="3" cellspacing="0">
              
              <tr>
                <td align="left"><span class="Boo">��ϲ���ĵ�Ӱ����</span>�� {|$favmovie|}</td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">��ϲ������������</span>�� {|$favmusic|}</td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">�ҵ�ż��</span>�� {|$idol|}</td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">QQ</span>�� {|$QQ|}</td>
              </tr>
              <tr>
                <td align="left"><span class="Boo">MSN</span>��{|$MSN|}</td>
              </tr>
            </table>
            {|else|}
            <table width=100%><tr align=center><td align="center" style="padding-top:160px;"><span class="Boo">�û��������ϲ�������</span></td></tr></table>
            {|/if|}
        </td>
      </tr>
      
    </table>
    </td>
    
   {|include file="profile_right.tpl"|}
