<?php /* Smarty version 2.6.10, created on 2011-06-21 08:36:51
         compiled from ./value_record.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ҵĳ�ֵ��¼</title>
<meta name="keywords" content="�ҵĳ�ֵ��¼" />
<meta name="description" content="�ҵĳ�ֵ��¼��" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="Housecenter">
<div id="HouseGiveto">
<div class="Waretop">
	<span><img src="img/wptopr.gif" /></span>
		  <img src="img/wptopl.gif" />
</div>
<div class="Waretopd">
  <div class="Waretopdw">��Ҫ��ֵ-�ҵĳ�ֵ��¼</div> 
  </div>
  <div class="Warecnt HouseGiveIn">
<div class="shopLeftlistz Business">
	<ul>
		<li class="shopLeftcolor">
			<span>������</span>
			<span>��������</span>
			<span>���Ѷ�</span>
			<span>������ϸ</span>
			<span>����״̬</span>
		</li>
<?php unset($this->_sections['Inquiry']);
$this->_sections['Inquiry']['name'] = 'Inquiry';
$this->_sections['Inquiry']['loop'] = is_array($_loop=$this->_tpl_vars['Inquiry']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['Inquiry']['show'] = true;
$this->_sections['Inquiry']['max'] = $this->_sections['Inquiry']['loop'];
$this->_sections['Inquiry']['step'] = 1;
$this->_sections['Inquiry']['start'] = $this->_sections['Inquiry']['step'] > 0 ? 0 : $this->_sections['Inquiry']['loop']-1;
if ($this->_sections['Inquiry']['show']) {
    $this->_sections['Inquiry']['total'] = $this->_sections['Inquiry']['loop'];
    if ($this->_sections['Inquiry']['total'] == 0)
        $this->_sections['Inquiry']['show'] = false;
} else
    $this->_sections['Inquiry']['total'] = 0;
if ($this->_sections['Inquiry']['show']):

            for ($this->_sections['Inquiry']['index'] = $this->_sections['Inquiry']['start'], $this->_sections['Inquiry']['iteration'] = 1;
                 $this->_sections['Inquiry']['iteration'] <= $this->_sections['Inquiry']['total'];
                 $this->_sections['Inquiry']['index'] += $this->_sections['Inquiry']['step'], $this->_sections['Inquiry']['iteration']++):
$this->_sections['Inquiry']['rownum'] = $this->_sections['Inquiry']['iteration'];
$this->_sections['Inquiry']['index_prev'] = $this->_sections['Inquiry']['index'] - $this->_sections['Inquiry']['step'];
$this->_sections['Inquiry']['index_next'] = $this->_sections['Inquiry']['index'] + $this->_sections['Inquiry']['step'];
$this->_sections['Inquiry']['first']      = ($this->_sections['Inquiry']['iteration'] == 1);
$this->_sections['Inquiry']['last']       = ($this->_sections['Inquiry']['iteration'] == $this->_sections['Inquiry']['total']);
?>
	<li>
		<span><?php echo $this->_tpl_vars['Inquiry'][$this->_sections['Inquiry']['index']]['id']; ?>
</span>
		<span><?php echo $this->_tpl_vars['Inquiry'][$this->_sections['Inquiry']['index']]['createtime']; ?>
</span>
		<span><?php echo $this->_tpl_vars['Inquiry'][$this->_sections['Inquiry']['index']]['score']; ?>
 ��۱�</span>
<?php if ($this->_tpl_vars['Inquiry'][$this->_sections['Inquiry']['index']]['status'] == 'ʧ��'): ?>
		<span><a href="detail.php?cid=<?php echo $this->_tpl_vars['Inquiry'][$this->_sections['Inquiry']['index']]['id']; ?>
">��˲鿴</a></span>
	<?php else: ?>
		<span>֧���ɹ�</span>
<?php endif; ?>
		<span class="Leftlistz">[<?php echo $this->_tpl_vars['Inquiry'][$this->_sections['Inquiry']['index']]['status']; ?>
]</span>
	</li>
<?php endfor; endif; ?>
</ul>
</div>
<form action="value_record.php?uid=<?php echo $this->_tpl_vars['uid']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
" method="get">
<div id="footer">
����ҳ�� <INPUT onchange="" size=3 ame=pageno id ="page" name="page"> 
��<?php echo $this->_tpl_vars['divpage']['currpage']; ?>
ҳ, �� <?php echo $this->_tpl_vars['sum']; ?>
 ҳ 
| <A href="value_record.php?uid=<?php echo $this->_tpl_vars['uid']; ?>
&page=<?php echo $this->_tpl_vars['divpage']['firstpage']; ?>
" target=_self>��ҳ</A> 
| <a href="value_record.php?uid=<?php echo $this->_tpl_vars['uid']; ?>
&page=<?php echo $this->_tpl_vars['divpage']['prepage']; ?>
">��һҳ</a> 
| <A href="value_record.php?uid=<?php echo $this->_tpl_vars['uid']; ?>
&page=<?php echo $this->_tpl_vars['divpage']['nextpage']; ?>
" target=_self>��һҳ</A> 
| <A href="value_record.php?uid=<?php echo $this->_tpl_vars['uid']; ?>
&page=<?php echo $this->_tpl_vars['divpage']['max_page']; ?>
" target=_self>βҳ</A>
</div> 
</form>
<div class="RushvalueNote">
	<a href="pay.php">
		<img src="img/housecz.gif" border="0" />
	</a>
	<a href="Exchange.php" target="_blank"><img src="img/houseczb.gif" border="0" /></a>
</div>
<div class="LeftAsse">
<div class="LeftAssetop">
	<span><img src="img/glR.gif" /></span>
	<img src="img/glL.gif" width="34" height="24" />
</div>
<div class="LeftAssecnt">
<div class="HouseAsseText">
<div class="HouseAsseBack">
  <blockquote>
    <p><span class="HouseSmall">һԪ�����= <img src="img/wpfbj.gif" width="5" height="14" /> 1<a href="#">��</a>�۱�</span>��ܰ��ʾ��</p>
    <p><span class="HouseBig">1��<a href="#">��</a>�۱�= <img src="img/wpfb.gif" width="5" height="14" /> 100���׷۱�</span>����Ϊ���򲻿��档</p>
  </blockquote>
</div>
<div class="HouseAsseFall">
  <input type="submit" name="Submit" value="�������ǣ���" class="SuccesB" />
  ��
  <input type="submit" name="Submit2" value="�����׬ȡ����" class="SuccesB" />
</div>
<div class="HouseAsseFallz"></div>

</div>
</div>
<div class="LeftAssebottom">
	<span><img src="img/glbR.gif" /></span>
		  <img src="img/glbL.gif" width="56" height="11" />
</div>
</div>
  </div>
  </div>
</div>
</body>
</html>