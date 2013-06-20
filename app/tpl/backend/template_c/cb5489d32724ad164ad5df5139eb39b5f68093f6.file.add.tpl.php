<?php /* Smarty version Smarty3-b8, created on 2013-06-10 21:07:35
         compiled from "D:\workspace\hush-framework\hush-app\tpl\backend\template\acl/resource/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1155451b5cf9777ded5-29709716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb5489d32724ad164ad5df5139eb39b5f68093f6' => 
    array (
      0 => 'D:\\workspace\\hush-framework\\hush-app\\tpl\\backend\\template\\acl/resource/add.tpl',
      1 => 1357552552,
    ),
  ),
  'nocache_hash' => '1155451b5cf9777ded5-29709716',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include 'D:\workspace\phplibs\Smarty_3\plugins\function.html_options.php';
?><?php $_template = new Smarty_Internal_Template("frame/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<div class="maintop">
<img src="<?php echo $_smarty_tpl->getVariable('_root')->value;?>
img/icon_arrow_right.png" class="icon" /> 新增 ACL 资源
</div>

<div class="mainbox">

<?php $_template = new Smarty_Internal_Template("frame/error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<form method="post">
<table class="titem" >
	<tr>
		<td class="field">资源名 *</td>
		<td class="value"><input class="common" type="text" name="name" value="<?php echo $_smarty_tpl->getVariable('resource')->value['name'];?>
" /></td>
	</tr>
	<tr>
		<td class="field">资源说明 *</td>
		<td class="value"><input class="common" type="text" name="description" value="<?php echo $_smarty_tpl->getVariable('resource')->value['description'];?>
" /></td>
	</tr>
	<tr>
		<td class="field">应用范围 *</td>
		<td class="value">
			<select name="app_id" class="common tree">
				<option value="0">默认全局范围（作用于整个系统）</option>
				<?php  $_smarty_tpl->tpl_vars['menus'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('appopts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['menus']->key => $_smarty_tpl->tpl_vars['menus']->value){
?>
				<optgroup label="<?php echo $_smarty_tpl->getVariable('menus')->value['name'];?>
" title="">
					<?php  $_smarty_tpl->tpl_vars['apps'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menus')->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['apps']->key => $_smarty_tpl->tpl_vars['apps']->value){
?>
					<optgroup label="└<?php echo $_smarty_tpl->getVariable('apps')->value['name'];?>
" title="">
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('apps')->value['list'],'selected'=>$_smarty_tpl->getVariable('resource')->value['app_id']),$_smarty_tpl->smarty,$_smarty_tpl);?>

					</optgroup>
					<?php }} ?>
				</optgroup>
				<?php }} ?>
			</select>
		</td>
	</tr>
	<tr>
		<td class="field">角色权限 *</td>
		<td class="value">
			<?php $_template = new Smarty_Internal_Template("acl/forms/roles_add.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

		</td>
	</tr>
	<tr>
		<td class="submit" colspan="2">
			<input type="submit" value="提交" />
			<input type="button" value="返回" onclick="javascript:history.go(-1);" />
		</td>
	</tr>
</table>
</form>

</div>

<?php $_template = new Smarty_Internal_Template("frame/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
