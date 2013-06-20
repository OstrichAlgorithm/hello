<?php /* Smarty version Smarty3-b8, created on 2013-06-10 20:41:16
         compiled from "D:\workspace\hush-framework\hush-app\tpl\backend\template\request/selectflow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250751b5c96cb3b2f3-63530898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5369aa57aad59757d8940cc76c242d5c1ee5d032' => 
    array (
      0 => 'D:\\workspace\\hush-framework\\hush-app\\tpl\\backend\\template\\request/selectflow.tpl',
      1 => 1357552552,
    ),
  ),
  'nocache_hash' => '250751b5c96cb3b2f3-63530898',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("frame/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<div class="maintop">
<img src="<?php echo $_smarty_tpl->getVariable('_root')->value;?>
img/icon_arrow_right.png" class="icon" /> 创建申请
</div>

<div class="mainbox">

<?php $_template = new Smarty_Internal_Template("frame/error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<form method="post">
<table class="titem" >
	<tr>
		<td class="field">申请流程 *</td>
		<td class="value">
			<select class="common" id="bpm_flow_id">
				<option value="">请选择申请流程</option>
				<?php  $_smarty_tpl->tpl_vars['flow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('flowList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['flow']->key => $_smarty_tpl->tpl_vars['flow']->value){
?><option value="<?php echo $_smarty_tpl->getVariable('flow')->value['bpm_flow_id'];?>
"><?php echo $_smarty_tpl->getVariable('flow')->value['bpm_flow_name'];?>
</option>
				<?php }} ?>
			</select>
		</td>
	</tr>
	<tr>
		<td class="submit" colspan="2">
			<input type="button" value="返回" onclick="javascript:$.form.jumpto('/request/sendList');" />
		</td>
	</tr>
</table>
</form>

<script type="text/javascript">
$('#bpm_flow_id').get(0).onchange=function(){
	var flow_id = $("#bpm_flow_id option:selected").val();
	$.form.jumpto('/request/create/flowId/' + flow_id);
};
</script>

</div>

<?php $_template = new Smarty_Internal_Template("frame/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
