<?php /* Smarty version Smarty3-b8, created on 2013-06-10 21:07:57
         compiled from "D:\workspace\hush-framework\hush-app\tpl\backend\template\bpm/admin/add/model.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2585351b5cfade11900-66554556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '099c7a23cf75a2c804894a31c5d2b58db77dfd96' => 
    array (
      0 => 'D:\\workspace\\hush-framework\\hush-app\\tpl\\backend\\template\\bpm/admin/add/model.tpl',
      1 => 1357552554,
    ),
  ),
  'nocache_hash' => '2585351b5cfade11900-66554556',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("frame/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<div class="maintop">
<img src="<?php echo $_smarty_tpl->getVariable('_root')->value;?>
img/icon_arrow_right.png" class="icon" /> 为流程 “<?php echo $_smarty_tpl->getVariable('flow')->value['bpm_flow_name'];?>
” 定义数据模型
</div>

<div class="mainbox">

<form id="save_model_form" method="post">
<input type="hidden" name="bpm_model_id" value="<?php echo $_smarty_tpl->getVariable('model')->value['bpm_model_id'];?>
" />
<input type="hidden" name="bpm_model_form" />
<div style="margin-bottom:10px;">
	<input id="add_model_field" type="button" value="添加字段" />&nbsp;
	<input id="save_model_as_form" type="button" value="保存模型" />
</div>
</form>

<div class="flow_model_add_box">
	<div class="flow_model_add_body">
		<table class="flow_model_field_table">
		<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('fieldList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
?>
		<tr>
			<td class="field"><?php echo $_smarty_tpl->getVariable('field')->value['name'];?>
</td>
			<td class="value"><?php echo $_smarty_tpl->getVariable('field')->value['form'];?>
</td>
			<td class="value"><input type="button" id="<?php echo $_smarty_tpl->getVariable('field')->value['id'];?>
" class="edit_model_field" value="修改" /></td>
		</tr>
		<?php }} ?>
		</table>
	</div>
</div>

<table id="flow_model_form" class="disn">
<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('fieldList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
?><tr><td class="field"><?php echo $_smarty_tpl->getVariable('field')->value['name'];?>
</td><td class="value"><?php echo $_smarty_tpl->getVariable('field')->value['form'];?>
</td></tr>
<?php }} ?>
</table>

<script type="text/javascript">
$('#add_model_field').click(function(){
	$.overlay.frame('/bpm/adminFieldAdd/modelId/<?php echo $_smarty_tpl->getVariable('model')->value['bpm_model_id'];?>
', function(){});
});
$('.edit_model_field').click(function(){
	$.overlay.frame('/bpm/adminFieldEdit/fieldId/' + $(this).attr('id'), function(){});
});
$('#save_model_as_form').click(function(){
	<?php if ($_smarty_tpl->getVariable('fieldList')->value){?>
		var formData = $('#flow_model_form').html().replace(/<\/?tbody>/g, '');
		$('input[name=bpm_model_form]').val(formData);
		$('#save_model_form').submit();
	<?php }else{ ?>
		alert('请先添加字段');
	<?php }?>
});
</script>

</div>

<?php $_template = new Smarty_Internal_Template("frame/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
