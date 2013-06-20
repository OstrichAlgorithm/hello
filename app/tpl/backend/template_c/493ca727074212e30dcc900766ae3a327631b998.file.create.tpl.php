<?php /* Smarty version Smarty3-b8, created on 2013-06-10 20:41:18
         compiled from "D:\workspace\hush-framework\hush-app\tpl\backend\template\request/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2643551b5c96e43ae02-50361954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '493ca727074212e30dcc900766ae3a327631b998' => 
    array (
      0 => 'D:\\workspace\\hush-framework\\hush-app\\tpl\\backend\\template\\request/create.tpl',
      1 => 1357552552,
    ),
  ),
  'nocache_hash' => '2643551b5c96e43ae02-50361954',
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


<?php if ($_smarty_tpl->getVariable('modelform')->value){?>
<form id="create_form" method="post">
	<table class="titem">
	<tr><td class="field">申请主题</td><td class="value"><input name="bpm_request_subject" class="text" type="text" value="<?php echo $_smarty_tpl->getVariable('request')->value['bpm_request_subject'];?>
" /></td></tr>
	<?php echo $_smarty_tpl->getVariable('modelform')->value;?>

	<tr>
		<td class="submit" colspan="2">
			<input type="button" value="保存" id="submit_btn" />
			<input type="button" value="返回" onclick="javascript:$.form.jumpto('/request/selectFlow');" />
		</td>
	</tr>
	</table>
</form>
<?php }else{ ?>
<input type="button" value="返回" onclick="javascript:$.form.jumpto('/request/selectFlow');" />
<?php }?>

<script type="text/javascript">
$('#submit_btn').click(function(){
	if (confirm('申请提交后内容不可修改，是否继续？')) {
		$('#create_form').submit();
	}
});
</script>

</div>

<?php $_template = new Smarty_Internal_Template("frame/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
