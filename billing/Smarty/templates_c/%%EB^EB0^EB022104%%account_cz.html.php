<?php /* Smarty version 2.6.10, created on 2010-06-16 13:25:27
         compiled from ./account_cz.html */ ?>
<html>
	<head>
		<title>用户消费查询</title>
		<meta http-equiv="content-type" content="text/html; charset=gb2312" >
	    <style type="text/css">
<!--
.STYLE1 {color: #FF0000}
.STYLE2 {color: #0000FF}
-->
        </style>
</head>
	
<BODY>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	
	
		<td class="test">
		
			用户**你好: 欢迎来到粉丝网<br><br>
			<!--
			<span style="font-size:12px;color:#666;">3秒钟后自动跳转......</span><br><br>
			-->
			<a href="<?php echo $this->_tpl_vars['backurl']; ?>
"><?php echo $this->_tpl_vars['backurl']; ?>
</a>
		</td>
		<td><a href="http://mobile.ifensi.com/profile/template/chongzhi.html" class="STYLE1">点击充值</a></td>
	<tr height="150px"><td>
	<div align="center">
		<tr>
			<td><span class="STYLE2">用户交易明细</span></td>
			<br>
		</tr>
		<table width="800" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC" >
			<tr bgcolor="#FFFFFF">
				<td width="10%">订单号</td>
				<td width="30%">交易时间</td>
			  	<td width="10%">用户id</td>
				<td width="10%">交易类型</td>
				<td width="5%">金额</td>
				<td width="10%">描述</td>
				<td width="10%">状态</td>
				<td width="15%">状态</td>
			</tr>
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
			<tr bgcolor="#FFFFFF">
				<td width="10%"><?php echo $this->_tpl_vars['Inquiry'][$this->_sections['Inquiry']['index']]['id']; ?>
</td>
				<td width="30%"><?php echo $this->_tpl_vars['Inquiry'][$this->_sections['Inquiry']['index']]['createtime']; ?>
</td>
			  	<td width="10%"><?php echo $this->_tpl_vars['Inquiry'][$this->_sections['Inquiry']['index']]['uid']; ?>
</td>
				<td width="10%"><?php echo $this->_tpl_vars['Inquiry'][$this->_sections['Inquiry']['index']]['transtype']; ?>
</td>
				<td width="5%"><?php echo $this->_tpl_vars['Inquiry'][$this->_sections['Inquiry']['index']]['score']; ?>
</td>
				<td width="10%"><?php echo $this->_tpl_vars['Inquiry'][$this->_sections['Inquiry']['index']]['desctext']; ?>
</td>
				<td width="10%"><?php echo $this->_tpl_vars['Inquiry'][$this->_sections['Inquiry']['index']]['status']; ?>
</td>
				<td width="15%"><a href="">操作</a></td>
			</tr>
			<?php endfor; endif; ?>
			<tr bgcolor="#FFFFFF">
				<td width="10%"><a  href="uid_check.php?uid=<?php echo $this->_tpl_vars['uid']; ?>
&page=<?php echo $this->_tpl_vars['divpage']['currpage']; ?>
">当前<?php echo $this->_tpl_vars['divpage']['currpage']; ?>
页</a></td>
				<td width="30%"><a  href="uid_check.php?uid=<?php echo $this->_tpl_vars['uid']; ?>
&page=<?php echo $this->_tpl_vars['divpage']['firstpage']; ?>
">首页</a>&nbsp;</td>
			  	<td width="10%"><a  href="uid_check.php?uid=<?php echo $this->_tpl_vars['uid']; ?>
&page=<?php echo $this->_tpl_vars['divpage']['prepage']; ?>
">上页</a>&nbsp;</td>
				<td width="15%"><a  href="uid_check.php?uid=<?php echo $this->_tpl_vars['uid']; ?>
&page=<?php echo $this->_tpl_vars['divpage']['nextpage']; ?>
">下页</a>&nbsp;</td>
				<td width="15%"><a  href="uid_check.php?uid=<?php echo $this->_tpl_vars['uid']; ?>
&page=<?php echo $this->_tpl_vars['divpage']['max_page']; ?>
">末页</a>&nbsp;</td>
			</tr>
	  </table>
	</div>
	
	</td>
	</tr>
	
</table>
	


		

</BODY>
</HTML>