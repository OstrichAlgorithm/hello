<?php /* Smarty version Smarty3-b8, created on 2013-06-10 21:14:33
         compiled from "D:\workspace\hush-framework\hush-app\tpl\backend\template\bpm/admin/add/basic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2267851b5d1394cc426-96258982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '010a2aff16f09056cdb17d2ab3cc95f69d04576e' => 
    array (
      0 => 'D:\\workspace\\hush-framework\\hush-app\\tpl\\backend\\template\\bpm/admin/add/basic.tpl',
      1 => 1357552554,
    ),
  ),
  'nocache_hash' => '2267851b5d1394cc426-96258982',
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
		<td class="submit" colspan="2">
			<input type="submit" value="保存" />
			<input type="button" value="返回" onclick="javascript:history.go(-1);" />
		</td>
	</tr>
</table>
</form>

</div>

<?php $_template = new Smarty_Internal_Template("frame/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
