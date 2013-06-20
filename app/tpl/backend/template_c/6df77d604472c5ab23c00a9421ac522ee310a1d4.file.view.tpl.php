<?php /* Smarty version Smarty3-b8, created on 2013-06-10 20:41:28
         compiled from "D:\workspace\hush-framework\hush-app\tpl\backend\template\request/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1718751b5c978820236-28123322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6df77d604472c5ab23c00a9421ac522ee310a1d4' => 
    array (
      0 => 'D:\\workspace\\hush-framework\\hush-app\\tpl\\backend\\template\\request/view.tpl',
      1 => 1357552552,
    ),
  ),
  'nocache_hash' => '1718751b5c978820236-28123322',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("frame/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<div class="maintop">
<img src="<?php echo $_smarty_tpl->getVariable('_root')->value;?>
img/icon_arrow_right.png" class="icon" /> 浏览申请
</div>

<div class="mainbox">

<form method="post">
	<table class="titem">
	<tr><td class="field">申请主题</td><td class="value"><?php echo $_smarty_tpl->getVariable('request')->value['bpm_request_subject'];?>
</td></tr>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('request')->value['bpm_request_body_hash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><tr><td class="field"><?php echo $_smarty_tpl->getVariable('k')->value;?>
</td><td class="value"><?php echo $_smarty_tpl->getVariable('v')->value;?>
</td></tr>
	<?php }} ?>
	<tr><td class="field">所处流程</td><td class="value"><?php echo $_smarty_tpl->getVariable('request')->value['bpm_node_name'];?>
</td></tr>
	<tr><td class="field">附加说明</td><td class="value"><?php echo $_smarty_tpl->getVariable('request')->value['bpm_request_comment'];?>
</td></tr>
	<tr>
		<td class="submit" colspan="2">
			<input type="button" value="刷新" onclick="javascript:location.reload();" />
			<input type="button" value="返回" onclick="javascript:$.form.jumpto('/request/sendList');" />
		</td>
	</tr>
	</table>
</form>

<?php if ($_smarty_tpl->getVariable('requestOp')->value){?>
<hr class="common"/>
<table>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['op'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('requestOp')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['op']->key => $_smarty_tpl->tpl_vars['op']->value){
?>
		<tr>
			<td align="center"><?php echo date('Y-m-d H:i:s',$_smarty_tpl->getVariable('op')->value['bpm_request_op_time']);?>
</td>
			<td align="center">&nbsp;|&nbsp;</td>
			<td align="center"><?php echo $_smarty_tpl->getVariable('op')->value['user_name'];?>
</td>
			<td align="center">&nbsp;|&nbsp;</td>
			<td align="center"><?php echo $_smarty_tpl->getVariable('op')->value['bpm_request_op_action'];?>
</td>
		</tr>
		<?php }} ?>
	</tbody>
</table>
<hr class="common"/>
<?php }?>

<script type="text/javascript">

</script>

</div>

<?php $_template = new Smarty_Internal_Template("frame/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
