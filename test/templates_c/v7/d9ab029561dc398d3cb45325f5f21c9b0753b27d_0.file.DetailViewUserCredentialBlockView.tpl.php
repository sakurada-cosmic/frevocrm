<?php
/* Smarty version 4.5.5, created on 2025-11-07 12:16:14
  from '/var/www/html/layouts/v7/modules/Users/DetailViewUserCredentialBlockView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_690d647eac6de7_75475664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9ab029561dc398d3cb45325f5f21c9b0753b27d' => 
    array (
      0 => '/var/www/html/layouts/v7/modules/Users/DetailViewUserCredentialBlockView.tpl',
      1 => 1754376440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690d647eac6de7_75475664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<input type="hidden" name="record_id" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
"><div class="block block_LBL_MULTI_FACTOR_AUTH" data-block="LBL_MULTI_FACTOR_AUTH"><div><h4><?php echo vtranslate("LBL_MULTI_FACTOR_AUTH","Users");?>
</h4></div><hr><div class="blockData multi_factor_credentialList"><table class="table detailview-table no-border"><thead><tr><th><?php echo vtranslate("LBL_USER_CREDENTIAL_TYPE","Users");?>
</th><th><?php echo vtranslate("LBL_USER_CREDENTIAL_DEVICE_NAME","Users");?>
</th><th><?php echo vtranslate("LBL_USER_CREDENTIAL_CREATE_AT","Users");?>
</th><th></th></tr></thead><tbody><?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['USER_MULTI_FACTOR_CREDENTIAL_LIST']->value) > 0 && $_smarty_tpl->tpl_vars['USER_MULTI_FACTOR_CREDENTIAL_LIST']->value !== false) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_MULTI_FACTOR_CREDENTIAL_LIST']->value, 'CREDENTIAL_item', false, 'CREDENTIAL_key');
$_smarty_tpl->tpl_vars['CREDENTIAL_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CREDENTIAL_key']->value => $_smarty_tpl->tpl_vars['CREDENTIAL_item']->value) {
$_smarty_tpl->tpl_vars['CREDENTIAL_item']->do_else = false;
?><tr><td class="fieldValue"><span class="value textOverflowEllipsis" data-field-type="<?php echo $_smarty_tpl->tpl_vars['CREDENTIAL_item']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['CREDENTIAL_item']->value['type'];?>
</span></td><td class="fieldValue"><span class="value textOverflowEllipsis" data-field-type="<?php echo $_smarty_tpl->tpl_vars['CREDENTIAL_item']->value['device_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['CREDENTIAL_item']->value['device_name'];?>
</span></td><td class="fieldValue"><span class="value textOverflowEllipsis" data-field-type="<?php echo $_smarty_tpl->tpl_vars['CREDENTIAL_item']->value['create_at'];?>
"><?php echo smarty_modifier_date_format(smarty_modifier_date_format($_smarty_tpl->tpl_vars['CREDENTIAL_item']->value['created_at'],$_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format')),$_smarty_tpl->tpl_vars['USER_MODEL']->value->get('time_format'));?>
</span></td><td class="fieldValue"><span class="value textOverflowEllipsis" data-field-type="<?php echo $_smarty_tpl->tpl_vars['CREDENTIAL_item']->value['delete'];?>
"><button class="btn btn-danger deleteCredential" data-id="<?php echo $_smarty_tpl->tpl_vars['CREDENTIAL_item']->value['id'];?>
"><?php echo vtranslate("LBL_DELETE","Users");?>
</button></span></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><tr><td class="fieldValue text-center" colspan="4"><?php echo vtranslate("LBL_USER_CREDENTIAL_DELETE_FAILED_NOT_FOUND","Users");?>
</td></tr><?php }?></tbody></table></div></div><?php }
}
