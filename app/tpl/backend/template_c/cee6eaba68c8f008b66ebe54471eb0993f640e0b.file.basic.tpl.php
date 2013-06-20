<?php /* Smarty version Smarty3-b8, created on 2013-06-10 21:07:54
         compiled from "D:\workspace\hush-framework\hush-app\tpl\backend\template\bpm/admin/edit/basic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2118051b5cfaabc3d35-15362206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cee6eaba68c8f008b66ebe54471eb0993f640e0b' => 
    array (
      0 => 'D:\\workspace\\hush-framework\\hush-app\\tpl\\backend\\template\\bpm/admin/edit/basic.tpl',
      1 => 1357552554,
    ),
  ),
  'nocache_hash' => '2118051b5cfaabc3d35-15362206',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("frame/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<div class="maintop">
<img src="<?php echo $_smarty_tpl->getVariable('_root')->value;?>
img/icon_arrow_right.png" class="icon" /> 新增流程基本信息
</div>

<div class="mainbox">

<?php $_template = new Smarty_Internal_Template("frame/error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<form method="post">
<table class="titem" >
	<tr>
		<td class="field">流程名称 *</td>
		<td class="value"><input class="common" type="text" name="bpm_flow_name" value="<?php echo $_smarty_tpl->getVariable('flow')->value['bpm_flow_name'];?>
" /></td>
	</tr>
	<tr>
		<td class="field">流程说明</td>
		<td class="value"><textarea class="common" name="bpm_flow_desc"><?php echo $_smarty_tpl->getVariable('flow')->value['bpm_flow_desc'];?>
</textarea></td>
	</tr>
	<tr>
		<td class="field">模型绑定 *</td>
		<td class="value"><input type="button" value="详细信息" onclick="javascript:$.form.jumpto('/bpm/adminSaveModel/flowId/<?php echo $_smarty_tpl->getVariable('flow')->value['bpm_flow_id'];?>
');" /></td>
	</tr>
	<tr>
		<td class="field">节点配置 *</td>
		<td class="value"><input type="button" value="详细信息" onclick="javascript:$.form.jumpto('/bpm/adminSaveChart/flowId/<?php echo $_smarty_tpl->getVariable('flow')->value['bpm_flow_id'];?>
');" /></td>
	</tr>
	<tr>
		<td class="field">流程状态 *</td>
		<td class="value">
			<input type="radio" name="bpm_flow_status" value="0" <?php if ($_smarty_tpl->getVariable('flow')->value['bpm_flow_status']==0){?>checked<?php }?> />&nbsp;未确认&nbsp;
			<input type="radio" name="bpm_flow_status" value="1" <?php if ($_smarty_tpl->getVariable('flow')->value['bpm_flow_status']==1){?>checked<?php }?> />&nbsp;已确认&nbsp;
		</td>
	</tr>
	<tr>
		<td class="field">角色选择 *</td>
		<td class="value">
			<?php $_template = new Smarty_Internal_Template("acl/forms/roles_edit.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

		</td>
	</tr>
	<tr>
		<td class="submit" colspan="2">
			<input type="submit" value="保存" />
			<input type="button" value="返回" onclick="javascript:$.form.jumpto('/bpm/');" />
		</td>
	</tr>
</table>
</form>

</div>

<?php $_template = new Smarty_Internal_Template("frame/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
