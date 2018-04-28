<?php /* Smarty version 2.6.10, created on 2010-06-16 13:25:51
         compiled from ./Channel.html */ ?>
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
-->
</style>

<table align="center">
<tr>
	<td align="center" valign="middle"><span class="STYLE1">订单号码:</span></td>
</tr>
</table>
<table width="300" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC" >
<tr bgcolor="#FFFFFF">
    <td width="40%">名称:</td>
	<td width="60%">数量</td>
	
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="40%">金粉笔:</td>
	<td width="60%"><span class="STYLE1"><?php echo $this->_tpl_vars['fb']; ?>
</span></td>
  </tr>
  
   <tr bgcolor="#FFFFFF">
    <td width="40%">应付人民币:</td>
	<td width="60%"><span class="STYLE1"><?php echo $this->_tpl_vars['RMB']; ?>
</span></td>
  </tr>
</table>
<br>
<br>
<br>
<br>
<table align="center" width="500">
<tr align="center">
<td width="165">请选择支付平台:</td>
<tr align="center">
<td align="center"><a href="http://mobile.ifensi.com/PortSample/SendOrder.php">云网</a></td>
<td width="103" align="center"><a href="http://mobile.ifensi.com/new_php_direct/index.php">支付宝</a></td>
<td width="155" align="center"><a href="http://mobile.ifensi.com/szx/send.php">神州行(快钱)</a></td>
<td width="57" align="center"><a href="#">其他</a></td>
</tr>
</table>
<!--
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="center"> 
	  <form name="payForm3" action="https://www.cncard.net/purchase/getorder.asp" method="POST">
        <input type="hidden" name="c_mid" value="<?php echo '<?='; ?>
$c_mid<?php echo '?>'; ?>
">
        <input type="hidden" name="c_order" value="<?php echo '<?='; ?>
$c_order<?php echo '?>'; ?>
">
        <input type="hidden" name="c_name" value="<?php echo '<?='; ?>
$c_name<?php echo '?>'; ?>
">
        <input type="hidden" name="c_address" value="<?php echo '<?='; ?>
$c_address<?php echo '?>'; ?>
">
        <input type="hidden" name="c_tel" value="<?php echo '<?='; ?>
$c_tel<?php echo '?>'; ?>
">
        <input type="hidden" name="c_post" value="<?php echo '<?='; ?>
$c_post<?php echo '?>'; ?>
">
        <input type="hidden" name="c_email" value="<?php echo '<?='; ?>
$c_email<?php echo '?>'; ?>
">
        <input type="hidden" name="c_orderamount" value="<?php echo '<?='; ?>
$c_orderamount<?php echo '?>'; ?>
">
        <input type="hidden" name="c_ymd" value="<?php echo '<?='; ?>
$c_ymd<?php echo '?>'; ?>
">
        <input type="hidden" name="c_moneytype" value="<?php echo '<?='; ?>
$c_moneytype<?php echo '?>'; ?>
">
        <input type="hidden" name="c_retflag" value="<?php echo '<?='; ?>
$c_retflag<?php echo '?>'; ?>
">
        <input type="radio" name="c_paygate" value="1" checked>
        使用招商银行支付卡支付<br> 
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="c_paygate" value="3">
        使用中国工商银行支付卡支付<br>
        <br>
        <input type="hidden" name="c_returl" value="<?php echo '<?='; ?>
$c_returl<?php echo '?>'; ?>
">
        <input type="hidden" name="c_memo1" value="<?php echo '<?='; ?>
$c_memo1<?php echo '?>'; ?>
">
        <input type="hidden" name="c_memo2" value="<?php echo '<?='; ?>
$c_memo2<?php echo '?>'; ?>
">
        <input type="hidden" name="c_language" value="<?php echo '<?='; ?>
$c_language<?php echo '?>'; ?>
">
        <input type="hidden" name="notifytype" value="<?php echo '<?='; ?>
$notifytype<?php echo '?>'; ?>
">
        <input type="hidden" name="c_signstr" value="<?php echo '<?='; ?>
$c_signstr<?php echo '?>'; ?>
">
        <input type="submit" name="submit" value="点击支付">
      </form>
	</td>
  </tr>
</table> -->