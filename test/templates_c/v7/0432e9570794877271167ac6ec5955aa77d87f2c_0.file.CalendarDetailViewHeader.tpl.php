<?php
/* Smarty version 4.5.5, created on 2025-11-12 16:57:09
  from '/var/www/html/layouts/v7/modules/Users/CalendarDetailViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69143dd5a9a532_11705271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0432e9570794877271167ac6ec5955aa77d87f2c' => 
    array (
      0 => '/var/www/html/layouts/v7/modules/Users/CalendarDetailViewHeader.tpl',
      1 => 1754376440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69143dd5a9a532_11705271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" /><div class="detailViewContainer"><div class="detailViewTitle" id="prefPageHeader"></div><div class="detailViewInfo userPreferences row-fluid"><div class="details col-xs-12"><?php }
}
