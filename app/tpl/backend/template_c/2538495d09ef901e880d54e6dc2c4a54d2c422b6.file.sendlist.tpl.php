<?php /* Smarty version Smarty3-b8, created on 2013-06-10 20:41:02
         compiled from "D:\workspace\hush-framework\hush-app\tpl\backend\template\request/sendlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2936751b5c95ee86832-30070993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2538495d09ef901e880d54e6dc2c4a54d2c422b6' => 
    array (
      0 => 'D:\\workspace\\hush-framework\\hush-app\\tpl\\backend\\template\\request/sendlist.tpl',
      1 => 1357552552,
    ),
  ),
  'nocache_hash' => '2936751b5c95ee86832-30070993',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("frame/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<div class="maintop">
<img src="<?php echo $_smarty_tpl->getVariable('_root')->value;?>
img/icon_arrow_right.png" class="icon" /> 我发送的申请
</div>

<div class="mainbox">

<table class="tlist" >
	<thead>
		<tr class="title">
			<th align="left">&nbsp;ID</th>
			<th align="left">所属流程</th>
			<th align="left">请求主题</th>
			<th align="left">所处流程</th>
			<th align="left">申请状态</th>
			<th align="right">操作&nbsp;</th>
		</tr>  
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['request'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('requestList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['request']->key => $_smarty_tpl->tpl_vars['request']->value){
?>
		<tr>
			<td align="left"><?php echo $_smarty_tpl->getVariable('request')->value['bpm_request_id'];?>
</td>
			<td align="left"><?php echo $_smarty_tpl->getVariable('request')->value['bpm_flow_name'];?>
</td>
			<td align="left"><a href='/request/view/reqId/<?php echo $_smarty_tpl->getVariable('request')->value['bpm_request_id'];?>
'><u><?php echo $_smarty_tpl->getVariable('request')->value['bpm_request_subject'];?>
</u></a></td>
			<td align="left"><?php echo $_smarty_tpl->getVariable('request')->value['bpm_node_name'];?>
</td>
			<td align="left">
			<?php if ($_smarty_tpl->getVariable('request')->value['bpm_request_status']==1){?><font color="red">未完成</font>
			<?php }elseif($_smarty_tpl->getVariable('request')->value['bpm_request_status']==2){?><font color="red">未完成</font>
			<?php }elseif($_smarty_tpl->getVariable('request')->value['bpm_request_status']==3){?><font color="green">已完成</font>
			<?php }else{ ?><font color="gray">未知状态</font>
			<?php }?>
			</td>
			<td align="right">
			<?php if ($_smarty_tpl->getVariable('request')->value['bpm_request_status']!=3){?><a href="/request/cancel/reqId/<?php echo $_smarty_tpl->getVariable('request')->value['bpm_request_id'];?>
">取消申请</a>
			<?php }else{ ?>取消申请
			<?php }?>
			</td>
		</tr>
		<?php }} ?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="6">
				<button type="button" class="btn1s" onclick="javascript:location.href='selectFlow';">创建申请</button>
			</td>
		</tr>
	</tfoot>
</table>

<?php $_template = new Smarty_Internal_Template("frame/page.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


</div>

<?php $_template = new Smarty_Internal_Template("frame/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
